<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return "Hello New APP!";
}); */

Route::get('/', 'MainController@main');

Route::get('/about-us', "AboutUsController@aboutUs");

Route::get('/contact', "ContactController@contact");

Route::get('/contact/{name?}/{category?}/{address?}/{message?}/', 
    function(string $name = 'Alvaro', string $category = 'Eletronic',string $address = 'Niteroi',string $message = 'Make Money'){
        echo $name . ", you are in " . $address . " at " . $category . " recibe a message " . $message;
});
