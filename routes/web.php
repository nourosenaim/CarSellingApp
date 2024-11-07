<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/about',function(){
//    return view('about');
//});

Route::view('/about','about')->name('about');


//group Route
Route::controller(CarController::class)->group(function(){
    Route::get('/car',[CarController::class,'index'])->name('car');
    Route::get('/car-collection','carCollection')->name('car-collection');
});
