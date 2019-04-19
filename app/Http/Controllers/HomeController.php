<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // controleur creer grace à la commande make controller 
    


	function index(){

// création de la variable 'posts', ordonner by date, prendre les trois premiers. 

    $posts=\App\Post::orderBy('post_date','desc')->take(3)->get();
    return view('Home',['posts'=>$posts]);// retourner les élémént de la vue home sous fome d'un tableau. 
	
	}
    
   

}

/*class HomeController extends Controller
{
    // controleur creer grace à la commande make controller 
    

	function index(){
	return view('Home');
	}

}
Pour récupperer tous les 10 articles 
$posts = \App\Post::all(); //get all posts

		return view('Home',array('posts' => $posts));
$posts = \App\Post::all(); //get all posts



