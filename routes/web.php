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
Route::get('/register_view',[expenceController::class,'register_view']);

// login credential register page to controller
Route::post('/register_submit',[expenceController::class,'register_submit']);
// login verify
Route::post('/login_verify',[expenceController::class,'login_verify']);
// logout system
Route::get('/logout_user',[expenceController::class,'logout_user']);
