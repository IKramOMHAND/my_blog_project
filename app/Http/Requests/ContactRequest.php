<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/*
Laravel propose différentes approches pour valider les données entrantes de votre application. Par défaut, la classe de contrôleur de base de Laravel utilise un ValidatesRequeststrait qui constitue une méthode pratique pour valider une requête HTTP entrante avec diverses règles de validation puissantes.
*/

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;// Remettre à true pour autoriser l'envoi du formulaire Contact. 
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'contact_name' => 'required|max:20',//contact_name ne doit pas dépasser 20 lettres
            'contact_email' => 'required|email',//contact_email, doit etre conforme au à la forme d'Email 
            'contact_message'=> 'required|max:700',//contact_message ne doit pas dépasser 700 lettres

        
        ];
    }
}
 