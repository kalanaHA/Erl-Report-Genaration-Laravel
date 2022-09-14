<?php

use App\Http\Controllers\ReportOneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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

// login routes
Route::get('/login', [WebController::class, 'login']);
Route::post('/login', [UserController::class, "user_login"])->name('user.login');

Route::get('/dashboard', [WebController::class, 'dashboard_view']);

//Report one Routes
Route::get('/report_one', [WebController::class, 'report_one'])->name('report_one');
Route::post('/report_one_data', [ReportOneController::class, 'report_one_data'])->name('report_one_data');

//Report three Routes
Route::get('/report_three', [WebController::class, 'report_three'])->name('report_three');
Route::post('/report_three_data', [ReportOneController::class, 'report_three_data'])->name('report_three_data');

//Report three Routes
Route::get('/report_four', [WebController::class, 'report_four'])->name('report_four');
Route::post('/report_four_data', [ReportOneController::class, 'report_four_data'])->name('report_four_data');
