<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FindBloodController;
// use Illuminate\Contracts\Session\Session;
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


Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [FrontendController::class, 'login']);
Route::get('/register', [FrontendController::class, 'register']);
Route::get('/bbregister', [FrontendController::class, 'bbregister']);
Route::get('/donorquiz', [FrontendController::class, 'donorquiz']);
Route::get('/congratz', [FrontendController::class, 'showquiz']);
Route::get('/noteligible', [FrontendController::class, 'showquiz']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/faq1', [FrontendController::class, 'faq1']);
Route::get('/faq2', [FrontendController::class, 'faq2']);
Route::get('/faq3', [FrontendController::class, 'faq3']);
Route::get('/faq4', [FrontendController::class, 'faq4']);
Route::get('/faq5', [FrontendController::class, 'faq5']);
Route::get('/faq6', [FrontendController::class, 'faq6']);
Route::get('/faq7', [FrontendController::class, 'faq7']);
Route::get('/faq8', [FrontendController::class, 'faq8']);
Route::get('/faq9', [FrontendController::class, 'faq9']);
Route::get('/faq10', [FrontendController::class, 'faq10']);
Route::get('/faq11', [FrontendController::class, 'faq11']);
Route::get('/faq12', [FrontendController::class, 'faq12']);
Route::get('/quizsubmitted', [FrontendController::class, 'quizsubmitted']);
Route::get('/showquiz/{q}/{ans}', [FrontendController::class, 'showquiz']);
Route::get('/findblood', [FrontendController::class, 'findblood']);


Route::post('/doregister', [FrontendController::class,'doregister']);
Route::post('/dologin', [FrontendController::class,'dologin']);
Route::post('/dodonorquiz', [FrontendController::class,'dodonorquiz']);

// Route::get('findblood' , [FindBloodController::class , 'index'])->name('find-blood');
// Route::post('findblood' , [FindBloodController::class , 'findblood'])->name('search-blood');
// Route::get('findblood' , [FindBloodController::class , 'showUsers'])->name('showUsers');
