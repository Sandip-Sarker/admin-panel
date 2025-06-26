<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'comment',
        'image',
        'video',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
      'title' =>  'string',
      'comment' =>  'string',
      'image' =>  'string',
      'video' =>  'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
