<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $table = 'contacts'; // création de model pour créer le lien 
	 public $timestamps = false;//pour que les timestamps ne soient pas pris en compte.
	 

}
