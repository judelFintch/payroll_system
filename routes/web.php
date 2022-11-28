<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HolydaysController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\FonctionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrganisationsController;
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

Route::controller(HolydaysController::class)->group(function () {
    Route::get('/holydays/all', 'index')->name('pages.holydays.all');
    Route::get('/hoydays/detail/{id}','show')->name('pages.holydays.details');
    Route::post('/holydays/store','store')->name('pages.holydays.store');
});


Route::controller(AttendanceController::class)->group(function () {
    Route::get('/attendance/all', 'index')->name('pages.attendance.index');
    Route::get('/attendance/detail/{id}','show')->name('pages.attendance.details');
    Route::post('/attendance/store','store')->name('pages.attendance.store');
});


Route::controller(DepartementsController::class)->group(function () {
    Route::get('/departement/all', 'index')->name('pages.departement.index');
    Route::get('/departement/detail/{id}','show')->name('pages.departement.details');
    Route::post('/departement/store','store')->name('pages.departement.store');
});


Route::controller(FonctionsController::class)->group(function () {
    Route::get('/fonction/all', 'index')->name('pages.fonction.index');
    Route::get('/fonction/detail/{id}','show')->name('pages.fonction.details');
    Route::post('/fonction/store','store')->name('pages.fonction.store');
});


Route::controller(OrganisationsController::class)->group(function () {
    Route::get('/organisation/all', 'index')->name('pages.organisation.index');
    Route::get('/organisation/detail/{id}','show')->name('pages.organisation.details');
    Route::post('/organisation/store','store')->name('pages.organisation.store');
});


