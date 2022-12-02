<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Categories
    Route::get('getCategories', [CategoryController::class, 'getCategories'])->name('getCategories');
    Route::post('saveCategory', [CategoryController::class, 'saveCategory'])->name('saveCategory');
    Route::patch('updateCategory/{category}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
    
    //Games
    Route::get('getGames', [GameController::class, 'getGames'])->name('getGames');
    Route::post('saveGame', [GameController::class, 'saveGame'])->name('saveGame');
    Route::patch('updateGame/{game}', [GameController::class, 'updateGame'])->name('updateGame');
});
