<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

             'contact_name' => 'required|max:200',
            'contact_email' => 'required|email',
             'contact_message'=> 'required|max:700',

        
        ];
    }
}
 /*$table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_message');