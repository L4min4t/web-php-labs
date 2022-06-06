<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'main']);
Route::get('/menu', [SiteController::class, 'menu']);
Route::get('/find-us/{value}', [SiteController::class, 'getBranchInfo']);
Route::get('/find-us', [SiteController::class, 'find_us']);
Route::post('/find-us/{value?}', [SiteController::class, 'callMe']);
//Route::post('/find-us/{value}', [SiteController::class, 'callMe']);





