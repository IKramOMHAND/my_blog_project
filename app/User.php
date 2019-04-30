<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*
Laravel fournit une implémentation simple pour interagir avec la basse de données
Chaque table de la base de données a un Modèle associé pour interagir avec la table concernée.
La class du model User a pour objectif d'intéragir avec la table de  la base donnée . 
*/

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
   /**
    * Get the user posts'
    */
   public function posts()
   {
       return $this->hasMany('App\Post','post_author'); ;//  hasMany précise la relation un à plusieurs entre la table  user peut etre mise en relation avec plusieurs  posts; 
   }

}
