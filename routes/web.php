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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $categories=categories::all();
        return view('accueil.accueil',[
            'categories'=>$categories
        ]);
})->middleware(['auth'])->name('dashboard');
Route::resource('/admin',App\Http\Controllers\AdminController::class);
Route::resource('/livres',App\Http\Controllers\LivreController::class);
Route::resource('/categorie',App\Http\Controllers\CategorieController::class);
Route::resource('/forum',App\Http\Controllers\ForumController::class);
Route::get('storage/{livre}',[App\Http\Controllers\fileController::class,'download'])->name('storage');
Route::get('lire/{id}',[App\Http\Controllers\fileController::class,'view'])->name('lire');
Route::resource('accueil', App\Http\Controllers\accueilController::class);

require __DIR__.'/auth.php';
