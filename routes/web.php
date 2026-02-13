<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get("characters",function(){
return "CHARACTERS PAGE";
})->name("characters");

Route::get("comics",function(){
return view("home");
})->name("comics");

Route::get("characters",function(){
return "CHARACTERS PAGE";
})->name("characters");

Route::get("movies",function(){
return "MOVIES PAGE";
})->name("movies");

Route::get("tv",function(){
return "TV PAGE";
})->name("tv");

Route::get("games",function(){
return "GAMES PAGE";
})->name("games");

Route::get("collectibles",function(){
return "COLLECTIBLES PAGE";
})->name("collectibles");

Route::get("videos",function(){
return "VIDEOS PAGE";
})->name("videos");

Route::get("fans",function(){
return "FANS PAGE";
})->name("fans");

Route::get('/news', function () {
    $articles = config("news");
    return view('news', compact("articles"));
})->name("news");

Route::get("shop",function(){
return "SHOP PAGE";
})->name("shop");
