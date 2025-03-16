<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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
Route::get('/v1/book',[TransactionController::class,'getBookings']);
Route::get('/v2/book',[TransactionController::class,'getBookingData']);
Route::get('/v3/book',[TransactionController::class,'getBookingsChallenge']);
Route::get('/v4/book',[TransactionController::class,'getBookingsDifficult']);

