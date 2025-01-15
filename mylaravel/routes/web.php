<?php

use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\MyController;  

Route::get('/mycontroller/{id?}', 
[ MyController :: class ,'myfunction']);

Route::post('/mycontroller/{id?}', 
[ MyController :: class ,'myfunction']);

Route::get('/', function () {
    return view('welcome');
});


Route::post('/mycontroller/{id?}',
[MyController :: class ,'myfunction']);


