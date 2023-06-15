<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//DASHBOARD
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// USER
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

// EMPLOYEE
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::post('/employee-create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::get('/employee-detail/{id}', [App\Http\Controllers\EmployeeController::class, 'detail'])->name('employee.detail');
Route::get('/employee-edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee-update/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee-delete/{id}', [App\Http\Controllers\EmployeeController::class, 'delete'])->name('employee.delete');

// DIVISI
Route::get('/divisi', [App\Http\Controllers\DivisiController::class, 'index'])->name('divisi.index');
Route::post('/divisi-create', [App\Http\Controllers\DivisiController::class, 'create'])->name('divisi.create');
Route::get('/divisi-delete/{id}', [App\Http\Controllers\DivisiController::class, 'delete'])->name('divisi.delete');

// TUNJANGAN
Route::get('/tunjangan', [App\Http\Controllers\TunjanganController::class, 'index'])->name('tunjangan.index');
Route::post('/tunjangan-create', [App\Http\Controllers\TunjanganController::class, 'create'])->name('tunjangan.create');
Route::get('/tunjangan-edit/{id}', [App\Http\Controllers\TunjanganController::class, 'edit'])->name('tunjangan.edit');
Route::put('/tunjangan-update/{id}', [App\Http\Controllers\TunjanganController::class, 'update'])->name('tunjangan.update');
Route::get('/tunjangan-delete/{id}', [App\Http\Controllers\TunjanganController::class, 'delete'])->name('tunjangan.delete');