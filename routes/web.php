<?php

use App\Http\Controllers\AdminContoller;

use App\Http\Controllers\Home1Controller;

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



Route::get('/',[Home1Controller::class,'index']);

Route::get('/home1',[Home1Controller::class,'redirect']);


Route::middleware(['auth:sanctum',

    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {

        return view('dashboard');

    })->name('dashboard');
});
Route::get('/add_doctor_view',[AdminContoller::class,'addview']);


Route::post('/upload_doctor',[AdminContoller::class,'upload']);


Route::post('/appointment',[Home1Controller::class,'appointment']);


Route::post('/myappointment',[Home1Controller::class,'myappointment']);


Route::post('/showappointment',[AdminContoller::class,'showappointment']);






