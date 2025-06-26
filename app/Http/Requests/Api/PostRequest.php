<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'     => 'required|string|max:255',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8048',
            //'video'     => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'image.required' => 'image must be jpeg,png,jpg,gif,svg and max size 8MB',
            //'video.required' => 'video is required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));

    }
}
