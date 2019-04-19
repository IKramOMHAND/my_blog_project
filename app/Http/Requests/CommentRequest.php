<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Remettre à true pour autoriser l'envoi du formulaire. 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'comment_name' => 'required|max:200',
            'comment_email' => 'required|email',
            'comment_content'=> 'required|max:500',
        ];
    }
}
