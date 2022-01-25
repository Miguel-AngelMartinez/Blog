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

/*
Route::get('/', function () {
    

    $h1='hola mundo';
    return view('saludo', ['h1'=>$h1]);
});
*/



Route::get('/', function(){

    $h1='Quien soy??';
    return view('historia', ['h1'=>$h1]);

});

Route::get('/extencion', function(){
    $h1='Que se??';
     
    return view('extencion',['h1'=>$h1]);
});

Route::get('/pagina', function(){
    $h1='Contactame';
     
    return view('saludo',['h1'=>$h1]);
});


