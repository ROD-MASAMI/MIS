<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Usercontroller;

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
Route::controller(Usercontroller::class)->middleware('guest')->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('/login', 'authenticate');    
    
   
});
Route::controller(Usercontroller::class)->group(function () {
     Route::post('/register', 'store');
     Route::post('/logout', 'logout');
     Route::get('/register', 'create');
     Route::get('/user/edit/{id}', 'edit');
     Route::put('/user/edit/{id}', 'update');
     Route::delete('/user/delete/{id}', 'destroy');
});

Route::controller(Homecontroller::class)->middleware('auth')->group(function () {
   Route::get('/home', 'index');
});
// Route::get('/', function () {
//     return view('welcome');
// });
