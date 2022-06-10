<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'main']);
Route::get('/menu', [SiteController::class, 'menu']);
Route::get('/find-us', [SiteController::class, 'find_us']);
Route::post('/find-us', [SiteController::class, 'getBranchInfo']);





