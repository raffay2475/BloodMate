<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
Route::get('/temp', [FrontendController::class, 'temp']);

Route::get('/', [FrontendController::class, 'index']);
Route::get('/register', [FrontendController::class, 'register']);
Route::get('/bbregister', [FrontendController::class, 'bbregister']);
Route::get('/donorquiz', [FrontendController::class, 'donorquiz']);
Route::get('/congratz', [FrontendController::class, 'showquiz']);
Route::get('/noteligible', [FrontendController::class, 'showquiz']);
Route::get('/quizsubmitted', [FrontendController::class, 'quizsubmitted']);

Route::post('/doregister', [FrontendController::class,'doregister']);
Route::post('/dologin', [FrontendController::class,'dologin']);
Route::post('/dodonorquiz', [FrontendController::class,'dodonorquiz']);
Route::get('/showquiz/{q}/{ans}', [FrontendController::class, 'showquiz']);

