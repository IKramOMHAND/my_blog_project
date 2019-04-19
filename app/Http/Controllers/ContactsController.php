<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactsController extends Controller
{
    function Contact(){ 
    	$contact= \App\Contact::all();
    	return view('vueContacts',array('contacts' =>$contact ) ); 

    }

    function enregisterC(ContactRequest $Request ){ 

      $contact= new Contact ; 
  
      $contact->contact_name = $Request->input('contact_name'); 
      $contact->contact_email= $Request->input('contact_email'); 
      $contact->contact_message= $Request->input('contact_message'); 
   
      $contact->save(); 
 return view('vueConfirmation'); 

 /*$table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_message');*/
    }
}
