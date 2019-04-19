<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     protected $table = 'posts'; 
     public $timestamps = false;
     
     //$posts = \App\Posts::all();
   


      /**
    * Get the user that authored the post.

    */

   public function author()
   {
      return $this->belongsTo('App\User','post_author');// Grace à la mathode belongsto plusieurs  posts sont lier à un user (relation à l'inverse)
   }

}
 // return $this->belongsTo('App\User','post_author');
