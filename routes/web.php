<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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
Route::get('/home', function () {
    return view('Home.home');
});
// Route::get('/login', function () {
//     return view('Home.Logins.login');
// });
Route::get('/login',[ PagesController::class,'login'])->name('login');
Route::get('/register',[ PagesController::class,'register'])->name('register');
Route::get('/student/list',[ StudentController::class,'list'])->name('list');
Route::get('/student/get',[ StudentController::class,'get'])->name('get');
Route::get('/student/create',[ StudentController::class,'create'])->name('create');
Route::post('/register',[PagesController::class,'registersubmit'])->name('register.submit');
Route::get('/student/details/{id}/{name}/{email}',[StudentController::class,'details'])->name('students.details');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
Route::post('/student/editsubmit',[StudentController::class,'editSubmit'])->name('students.editSubmit');
