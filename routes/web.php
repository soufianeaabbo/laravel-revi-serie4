<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\LegumeController;
use App\Models\Fruit;
use App\Models\Legume;
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
    $fruits = Fruit::all();
    $legumes= Legume::all();
    return view('welcome',compact('fruits','legumes'));
});

Route::get('/create',[FruitController::class,'create']);
Route::post('/store',[FruitController::class,'store']);

Route::get('/create2',[LegumeController::class,'create2']);
Route::post('/store',[LegumeController::class,'store']);

// Route::get('/show/{id}'[FruitController::class,'show']);
Route::get('/show/{id}', [FruitController::class, 'show']);






