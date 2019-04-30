<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/*
Laravel propose différentes approches pour valider les données entrantes de votre application. Par défaut, la classe de contrôleur de base de Laravel utilise un ValidatesRequeststrait qui constitue une méthode pratique pour valider une requête HTTP entrante avec diverses règles de validation puissantes.
*/

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Remettre à true pour autoriser l'envoi du formulaire Comment. 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'comment_name' => 'required|max:20',
            'comment_email' => 'required|email',
            'comment_content'=> 'required|max:500',
        ];
    }
}
