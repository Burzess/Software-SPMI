<?php

use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\PenetapanController;
use App\Http\Controllers\AccountController;


Route::apiResource('/sheet', JsonController::class);
Route::apiResource('/penetapan',PenetapanController::class);
Route::apiResource('/testing',testcontroller::class);
Route::post('/login',[AccountController::class,'login']);
Route::post('/register',[AccountController::class,'register']);
Route::post('/penetapan/import',[PenetapanController::class,'import']);

Route::get('/input', [JsonController::class, 'aa']);
Route::get('/proses', [JsonController::class, 'ax']);
Route::get('/output', [JsonController::class, 'ay']);


//Route::get('/sheed', [PenetapanController::class, 'index']);
