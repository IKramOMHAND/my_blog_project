<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 

class ArticlesController extends Controller
{
    function article(){ 
    	$posts = \App\Post::all(); //get all posts
    	return view('vueArticles',array('posts'=>$posts)); 

    }

     function articleUnique($id){ 
     	

    	$post = \App\Post::where ('id',$id)->first(); //get all posts
    	return view('singleAr/vueArticleunique',array('post'=>$post));

    	 }
}
