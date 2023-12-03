<?php

use App\Http\Controllers\HomeController;
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


Route::get('/profile', [HomeController::class, 'checkUserType']);


Route::get('/admin/dashboard', function(){
    return view('admin.admin-dashboard') ;
})->name('admin.dashboard');

Route::get('/teacher/dashboard', function(){
    return view('teacher.teacher-dashboard') ;
})->name('teacher.dashboard');

Route::get('/student/dashboard', function(){
    return view('student.student-dashboard') ;
})->name('student.dashboard');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
