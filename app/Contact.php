<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
Laravel fournit une implémentation simple pour interagir avec la basse de données
Chaque table de la base de données a un Modèle associé pour interagir avec la table concernée.
La class Contact a pour objectif d'intéragir avec la base donnée contacts. 
*/

class Contact extends Model
{
     protected $table = 'contacts'; // création de model de la BD contacts
	 public $timestamps = false;//afin de désactiver les champs de  updated_at/ created_at de la table contact
	 

}
