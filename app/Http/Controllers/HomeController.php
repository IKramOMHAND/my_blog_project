<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/*
 Création de controller pour la gestion de des views de la page d'accuiel de notre Blog.
 Controleur est crée grace à la commande make controller  
 */

class HomeController extends Controller
{
  /*
 Création de la fonction index() afin de gerer les articles sur la page d'accueil. 
 */  
	function index(){
// création de la variable 'posts', ordonner by date, prendre les trois premiers. 
    $posts=\App\Post::orderBy('post_date','desc')->take(3)->get();
    return view('Home',['posts'=>$posts]);// retourner les élémént de la vue home sous fome d'un tableau. 
	
	}
}




