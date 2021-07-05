<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PatologiaController;
use App\Http\Controllers\HomeController;
use App\Models\Persona;
use App\Models\Medicamento;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//Route::get('persona/historia/{id}', 'PersonaController@historia')->name('persona.historia'); 

Route::get('home', [PersonaController::class, 'index']);

//Route::get('/persona/historia', [PersonaController::class, 'index']);

Route::get('/editarpersona/{id}','[PersonaController@edit')->name('persona.editarpersona');

Route::put('/editarpersona/{id}','[PersonaController@update')->name('persona.editarpersona');

Route::resource('persona', PersonaController::class);



//Route::resource('medicamento',MedicamentoController::class);


