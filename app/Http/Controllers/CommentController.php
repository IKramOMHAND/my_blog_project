<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Post; 
class CommentController extends Controller
{
    //
    function enregisterComment(CommentRequest $Request , $id){ 

 
      $comment= new Comment ; 

      $comment->comment_name = $Request->input('comment_name'); 
      $comment->comment_email= $Request->input('comment_email'); 
      $comment->comment_content= $Request->input('comment_content'); 
      $comment->save(); // sauvgarder dans la bd
  //die('here')
      $coms = \App\Comment::where ('post_id',$id)->get(); // pour qu'il affiche  tous les commentaires
      $post = \App\Post::where ('id',$id)->first(); 
    	return view('singleAr/vueArticleunique',array('post'=>$post,'coms'=>$coms));
 
    }
}
// $coms $post = \App\Post::where ('id',$id)->first();