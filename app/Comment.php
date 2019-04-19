<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	 protected $table = 'comments'; // création de model pour créer le lien 
	 public $timestamps = false;
	 

	public function postsc()
   {
      return $this->belongsTo('App\Post','id');// Relation inverse avec la table de commande. 
   }
    //
}
