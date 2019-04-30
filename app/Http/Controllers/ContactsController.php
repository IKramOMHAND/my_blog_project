<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

/*
 Création de controller pour la gestion de des views de la page de contact de notre Blog. 
 */

class ContactsController extends Controller
{
	/*
 Fonction contact  afin de gérer les contacts dans la base de donnée et la view contact. . 
 */
    function Contact(){ 
    	$contact= \App\Contact::all();// fonction all() permet de ... 
    	return view('vueContacts',array('contacts' =>$contact)); // rrevoit vers la vue Vue contact. 

    }

/*
 Fonction  enregisterC pour enregister request contact dans la Base de donnée  
 */
    function enregisterC(ContactRequest $Request ){ 

      $contact= new Contact ; 
  
      $contact->contact_name = $Request->input('contact_name'); 
      $contact->contact_email= $Request->input('contact_email'); 
      $contact->contact_message= $Request->input('contact_message'); 
      $contact->save(); // save dans la BD

 		return view('vueConfirmation'); 
    }
}
