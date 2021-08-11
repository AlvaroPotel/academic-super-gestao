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

Route::get('/contact/{name?}/{category_id?}', function(
    string $name = 'Alvaro',
    int $category_id = 1){
        echo $name . ", you are in " . $category_id;
})->where('category_id','[0-9]+')->where('name','[A-Za-z]+');
