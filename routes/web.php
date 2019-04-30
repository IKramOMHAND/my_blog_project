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

Route::get('/Home','HomeController@index'); // La fonction appelé ici s'a
Route::get('/Articles','ArticlesController@article');// 
Route::get('/Contacts','ContactsController@Contact');
Route::post('/Contacts','ContactsController@enregisterC');// POSTroute enregistrera la nouveau contact de blog dans la base de données.
Route::get('/','HomeController@index'); 
Route::get('/Articles/{id}','ArticlesController@articleUnique');
Route::post('/Articles/comment/{id}','CommentController@enregisterComment');
// POSTroute enregistrera le nouveau commentaire de blog dans la base de données.
Route::get('/Comment/{id}','CommentController@enregisterComment');
