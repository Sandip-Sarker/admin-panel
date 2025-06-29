<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNotification extends Notification 
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Welcome to Our Application')
                    ->greeting('Hello ' . $notifiable->name . '!')
                    ->line('Thanks for registering to our site.')
                    ->action('Notification Action', url('/admin/dashboard'))
                    ->line('We are happy to here you!');
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Welcome to our application, ' . $notifiable->name . '!',
            'action_url' => url('/admin/dashboard'),
            'greeting' => 'Hello ' . $notifiable->name . '!',
            'subject' => 'Welcome to Our Application',
            'line' => 'Thanks for registering to our site. We are happy to have you!',
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
