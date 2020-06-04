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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::resource('Portafolio', 'ProjectController')->names('Projects')->parameters(['Portafolio' => 'Project']);//Esta ruta reemplaza las 7 rest comentadas debajo

Route::get('/', function(){
    return view('home');
})->name('home');
Route::get('/contacto', 'ContactoController@index')->name('contacto');

// Route::get('/Portafolio', 'ProjectController@index')->name('Projects.index');
// Route::get('/Portafolio/crear', 'ProjectController@create')->name('Projects.create');
// Route::get('/Portafolio/{Project}/editar', 'ProjectController@edit')->name('Projects.edit');
// Route::patch('/Portafolio/{Project}', 'ProjectController@update')->name('Projects.update');
// Route::post('/Portafolio', 'ProjectController@store')->name('Projects.store');
// Route::get('/Portafolio/{Project}', 'ProjectController@show')->name('Projects.show');
// Route::delete('/Portafolio/{Project}', 'ProjectController@destroy')->name('Projects.destroy');

Route::post('/contacto', 'formContactoController@store')->name('formContacto.store');
