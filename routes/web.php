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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/rich_text",function (){
   return view("rich_text");
});

Route::post("/add_article","article_manager@add_article")->name("add_article");
Route::get("show_article","article_manager@show_article")->name("show_article");
Route::get('/show_article_detail', 'article_manager@show_article_detail')->name('show_article_detail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



