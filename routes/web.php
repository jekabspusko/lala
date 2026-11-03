<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route :: get('/kkk', function () {
    echo("<p>tavs vārds:</p>". $_GET["name"]);
    echo "<br>";
     echo("<p>tavs epasts:</p>". $_GET["email"]);
    echo "<br>";
     echo("<p>tava atsauksme:</p>". $_GET["text"]); 
    
}); 