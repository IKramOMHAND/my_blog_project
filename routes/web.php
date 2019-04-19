<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
// ajout demander pour aller sur le contreleur 
//Lorsqu’un visiteur du blog arrive sur l’URL “/”, appelle la fonction index du contrôleur qui s’appelle HomeController.

Route::get('/Home','HomeController@index'); // la fonction appelé ici s'appelle index 
Route::get('/Articles', 'ArticlesController@article');
Route::get('/Contacts', 'ContactsController@Contact');
Route::post('/Contacts', 'ContactsController@enregisterC');
Route::get('/','HomeController@index'); 
Route::get('/Articles/{id}','ArticlesController@articleUnique');
Route::post('/Articles/comment/{id}','CommentController@enregisterComment');



// 