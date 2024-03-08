<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HolydaysController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\FonctionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrganisationsController;
use App\http\Livewire\Employees\Employee;

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

Route::get('/home', Employee::class)->name('home');

