<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/*
Laravel fournit une implémentation simple pour interagir avec la basse de données
Chaque table de la base de données a un Modèle associé pour interagir avec la table concernée.
La class Post a pour objectif d'intéragir avec la table de  la base donnée posts. 
*/

class Post extends Model
{
    //
     protected $table = 'posts'; // 
     public $timestamps = false;

      /**
    * Get the user that authored the post.

    */
// Définir la relation   entre le model User et le model Post
   public function author()
   {
      return $this->belongsTo('App\User','post_author');// Grace à la mathode belongsto plusieurs  posts sont lier à un user (relation à l'inverse)
   }
//Définir la relation le model Post et le model Comment 
   public function comments()
    {
        return $this->hasMany('App\Comment','id'); // un artcile  du blog peut avoir plusieurs commentaires 
    }


}
 // return $this->belongsTo('App\User','post_author');
