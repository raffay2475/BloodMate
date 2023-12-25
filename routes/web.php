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
Route::get('/logout', [FrontendController   ::class, 'logout']);
Route::get('/register', [FrontendController::class, 'register']);
Route::get('/bbregister', [FrontendController::class, 'bbregister']);
Route::get('/donorquiz', [FrontendController::class, 'donorquiz']);
Route::get('/congratz', [FrontendController::class, 'showquiz']);
Route::get('/noteligible', [FrontendController::class, 'showquiz']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/faqbasic', [FrontendController::class, 'faqbasic']);
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
Route::get('/stepone', [FrontendController::class, 'stepone']);
Route::get('/steptwo', [FrontendController::class, 'steptwo']);
Route::get('/stepthree', [FrontendController::class, 'stepthree']);
Route::get('/userprofiledisplay/{id}', [FrontendController::class, 'userprofiledisplay']);
Route::get('/contactcopy', [FrontendController::class, 'contactcopy']);
Route::get('/bbdashboard', [FrontendController::class, 'bbdashboard']);
Route::get('/donorDashboard', [FrontendController::class, 'donorDashboard']);
Route::get('/donorProfile', [FrontendController::class, 'donorprofile']);
Route::get('/bbDashboard', [FrontendController::class, 'bbDashboard']);
Route::get('/bbprofile', [FrontendController::class, 'bbprofile']);
Route::get('/certifyuser', [FrontendController::class, 'certifyuser']);
Route::get('/adminDashboard', [FrontendController::class, 'adminDashboard']);
Route::get('/makeCertify', [FrontendController::class, 'makeCertify']);
Route::get('/doapproved/{id}', [FrontendController::class, 'doapprove']);
Route::get('/dodisapproved/{id}', [FrontendController::class, 'dodisapprove']);
Route::get('/profilepicture', [FrontendController::class, 'profilepicture']);


Route::post('/doregister', [FrontendController::class,'doregister']);
Route::post('/dologin', [FrontendController::class,'dologin']);
Route::post('/dodonorquiz', [FrontendController::class,'dodonorquiz']);
Route::post('/dobbregister', [FrontendController::class, 'dobbregister']);
Route::post('/findblood', [FrontendController::class, 'dosearchdb']);
Route::post('/doeditprofile', [FrontendController::class, 'doeditprofile']);
Route::post('/docertify', [FrontendController::class, 'docertify']);
Route::post('/doprofilepicture', [FrontendController::class, 'doprofilepicture']);
