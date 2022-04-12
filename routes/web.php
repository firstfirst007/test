<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
/*use App\Http\Controllers\PagesController;*/


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
    return view('home');
});
Route::get('/homeAdmin',[AdminController::class, 'Login']);
Route::get('/loginStudent',[StudentController::class, 'Login'])->name('loginS');
Route::get('/regisSTD',[StudentController::class, 'Regis'])->name('regisS');
Route::get('/loginTeacher',[TeacherController::class, 'Login'])->name('loginT');
Route::get('/regisTeach',[TeacherController::class, 'Regis'])->name('regisT');
Route::get('/createRoom',[TeacherController::class, 'createRoom'])->name('createRoom');
Route::get('/classroom',[TeacherController::class, 'classroom'])->name('classroom');
Route::get('/pointSTD',[TeacherController::class, 'pointSTD'])->name('point');
Route::get('/addSTD',[TeacherController::class, 'addSTD'])->name('add');

Route::post('/register-user', [TeacherController::class, 'registerUserTeacher'])->name('register-user');
Route::post('/login-user', [TeacherController::class, 'loginUserTeacher'])->name('login-user');
Route::post('/createRoom',[TeacherController::class, 'createRoom'])->name('createRoom');
/*Route::get('/dashboard', [TeacherController::class, 'dashboard']);*/

/*Route::get('/locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    /*return Redirect::back();
    return redirect()->back();
});

/*Route::get('/homeSTD', [HomeStudentController::class], '');*/


/*Route::get('/services', [PagesController::class, 'services']);*/

/*Route::get('/', function() {
    return view('');
});*/

