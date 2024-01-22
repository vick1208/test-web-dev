<?php

use App\Http\Controllers\CheckShipFeeController;
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

Route::get('/provinces',[CheckShipFeeController::class,'province'])->name('provinces');
Route::get('/cities',[CheckShipFeeController::class,'city'])->name('cities');
Route::post('/check-ongkir', [CheckShipFeeController::class,'checkOngkir'])->name('check-ongkir');
