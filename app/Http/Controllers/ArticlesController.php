<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App; 

/*
 Création de controller pour la gestion des articles de notre Blog. 
 */

class ArticlesController extends Controller
{
	/*
 Création de la fonction artilce afin de retourner une vue avec tous les articles . 
 */
    function article(){ 
    	$posts = \App\Post::all(); //Création de la variable posts, contenant tous les articles grace à la méthode all(); 
    	return view('vueArticles',array('posts'=>$posts)); // Retourner la vue vueArticles, 

    }
     /*
 Création de la fonction artilceunique  afin de retourne un seul article selon son id . 
 */

     function articleUnique($id){ 

    	$post = \App\Post::where ('id',$id)->first(); //La fonction frist() est  utilisée pour la relation la relation One to One 
    	return view('singleAr/vueArticleunique',array('post'=>$post));// précision du chemin de vueArticleUnique. 

    	 }
}
