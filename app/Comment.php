<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
Laravel fournit une implémentation simple pour interagir avec la basse de données
Chaque table de la base de données a un Modèle associé pour interagir avec la table concernée.
La class Comment a pour objectif d'intéragir avec la base donnée comments
*/

class Comment extends Model
{
	 protected $table = 'comments'; // Assigniation d'un model à la table comments
	 public $timestamps = false;// Désactivation de l'auto-timestamps: Afin de désactiver les champs de  updated_at/ created_at de la table comments
	
/* 
Défnir la relation inverse entre 'posts ' et comments
*/
	public function postsc()
   {
      return $this->belongsTo('App\Post','id');// Relation inverse avec la table de comments. 
   }
    //
}
