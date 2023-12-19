<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\expenceController;
use App\Events\Message;
// use Illuminate\Support\Facades\Route;

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
// insert product data to database
Route::post('/insert_product',[expenceController::class,'insert_product']);
// view User data
Route::get('/view_data',[expenceController::class,'view_data']);
// edit product data
Route::post('/edit_data',[expenceController::class,'edit_data']);
// update data
Route::post('/update_product',[expenceController::class,'update_product']);
// delete data
Route::post('/delete_product',[expenceController::class,'delete_product']);

// chat insert
Route::post('/chat_insert',[expenceController::class,'chat_insert']);
// get chat data
Route::get('/view_chat',[expenceController::class,'view_chat']);

// chat
Route::post('/send_message',[expenceController::class,'send_message']);

Route::post('/broadcast-message', [expenceController::class,'broadcast_message'])->name('broadcast_message');

// post data
Route::post('/post_submit',[expenceController::class,'post_submit']);

// get post data 
Route::get('/get_post',[expenceController::class,'get_post']);
Route::get('/post_view',[expenceController::class,'post_view']);

