<?php

use App\Http\Controllers\Guest\trainController;
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


Route::get('/trains', [trainController::class,'index'])->name('guests.trains.index');;
Route::get('/trains/{train}', [trainController::class,'show'])->name('guests.trains.show');