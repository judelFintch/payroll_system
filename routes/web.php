<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, 'index'])->name('main.login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::controller(EmployeesController::class)->group(function () {
    Route::get('/employees/all_employees', 'index')->name('pages.employees.all');
    Route::get('/employees/profile/{id}','show')->name('pages.employees.profil');
    Route::post('/employees/store','store')->name('pages.employees.store');
});
