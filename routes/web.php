<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/addschool', [SchoolController::class,'loadschool']);
Route::post('/addschool', [SchoolController::class,'regschool'])->name('regschool');

Route::get('/showschools', [SchoolController::class,'loadshowschool']);
