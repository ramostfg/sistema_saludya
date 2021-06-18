<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\HomeController;

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

/* 
Route::get('/persona', function () {
    return view('persona.listapersona');
});

Route::get('persona/crearpersona',[PersonaController::class,'create']);
*/

Route::resource('persona',PersonaController::class);

Route::resource('medicamento',MedicamentoController::class);

Auth::routes();

Route::get('/home', [PersonaController::class, 'index']);

//->name('home');

//Route::middleware(['auth', 'second'])->group(function () {  });

Route::group(['middleware'=>'persona'], function(){
    Route::get('/persona', [PersonaController::class, 'index']);
    
    //->name('home');
});











/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/