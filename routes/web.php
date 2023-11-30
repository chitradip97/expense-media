<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\expenceController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/myexpense_view',[expenceController::class,'myexpense_view']);
Route::get('/newsfeed_view',[expenceController::class,'newsfeed_view']);
Route::get('/other_expense_view',[expenceController::class,'other_expense_view']);
Route::get('/login_view',[expenceController::class,'login_view']);
Route::get('/regster_view',[expenceController::class,'regster_view']);
