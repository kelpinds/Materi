<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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


Route::get('login',function(){
    return View('project.login');
});
Route::get('register',function(){
    return View('project.register');
});
Route::get('dasbord',function(){
    return View('project.dasbord');
});

Route::get('laporan',[Controller::class,'laporan']);
Route::post('laporan',[Controller::class,'laporan']);





















