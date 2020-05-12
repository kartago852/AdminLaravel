<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController');
Route::resource('roles', 'RoleController');

//Rutas para nuetra seccion de Notas
Route::resource('/notas/todas', 'NotasController');
Route::get('/notas/favoritas', 'NotasController@favoritas');
Route::get('/notas/archivadas', 'NotasController@archivadas');


/* Route::get('/testConnection', function () {
    try {
        DB::connection()->getPdo();
        if(DB::connection()->getDatabaseName()){
            echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
            die;
        }else{
            die("Could not find the database. Please check your configuration.");
        }
    } catch (\Exception $e) {
        die($e->GetMessage());
    }
    });
 */
