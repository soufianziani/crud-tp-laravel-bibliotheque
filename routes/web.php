<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliothequeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{name}', function ($name) {
    return view('test' ,['name2'=>$name]);
});


// Route::get('/{test}', function ($test) {
//     return " hello world " . $test;
// });

// simple controller 
//la methode 1 ------------------------------------------------------------
// Route::get('/livres' , [BibliothequeController::class , 'affichage' ]);
// la methode 2 -----------------------------------------------------------
// Route::get('/livres' , ['BibliothequeController@affichage' ]);
// la methode  3 -----------------------------------------------------------
Route::controller(BibliothequeController::class)->group(function () {
    Route::get('/livres', 'affichage')->name('livres');
    Route::get('/auteurs', 'affichage_auteurs')->name('auteurs');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('str');
    Route::Delete('/delete/{id}', 'delete')->name('del');
    Route::get('/edit/{id}', 'modification')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    
});