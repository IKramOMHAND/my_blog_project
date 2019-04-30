<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Post; 

 /*
 Création de controller pour la gestion de commentaire de notre Blog. 
 */

class CommentController extends Controller
{
    //Fonction avec deux paramettres Request () et id
    function enregisterComment(CommentRequest $Request , $id){ 

 /*
 Créer un nouvel enregistrement dans la base de données pour le model Comment
 */
      $comment= new Comment ; // instantiation du model Comment. 
/*
Enregistrement des attribut correspondant dans la base de donnée.
*/
      $comment->comment_name = $Request->input('comment_name'); 
      $comment->comment_email= $Request->input('comment_email'); 
      $comment->comment_content= $Request->input('comment_content'); 
      $comment->save(); // sauvegarder dans la BD
  //die('here')

/*
Lafonction get() est utilisée pour la relation hasMany
La fonction frist() est  utilisée pour la relation la relation One to One 
*/  
      $coms = \App\Comment::where('post_id',$id)->get(); // un post peut avoir plusieurs commentaires 
      $post = \App\Post::where('id',$id)->first(); 
    	return view('singleAr/vueArticleunique',array('post'=>$post,'coms'=>$coms));
 
    }
}
