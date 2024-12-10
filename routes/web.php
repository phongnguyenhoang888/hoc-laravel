<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login_registerController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
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
// chuyen tu view sang controller de xu ly thong tin 
// LOGIN
Route::get('/login', [login_registerController::class, 'get_login']);
Route::post('/login', [login_registerController::class, 'post_login']);

//REGISTER
Route::get('/register', [login_registerController::class, 'get_register']);
Route::post('/register', [login_registerController::class, 'post_register']);



// Route::get('/register', function () {
//     return view('register');
// });


// Route::get('/login', function (){
//     return view(('login'));
// })

///

//list 
Route::get('/list', [AddController::class, 'index_list']);

//add
Route::get('/add', [AddController::class, 'add']);
Route::post('/add', [AddController::class, 'insert']);


// edit
Route::get('/Edit/{id}', [EditController::class, 'edit']);
Route::post('/Edit/{id}', [EditController::class, 'update']);

//delete
Route::get('/delete/{id}',[EditController::class, 'delete']);
///



?>