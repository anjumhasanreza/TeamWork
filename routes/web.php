<?php

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


use App\Http\Controllers\SiteController;

Route::get('/ramk',[SiteController::class,'index']);
Route::get('/signin',[SiteController::class,'signIn']);
Route::get('/password/reset',[SiteController::class,'passwordReset']);
Route::get('/password/change',[SiteController::class,'passwordChange']);
Route::get('/signup',[SiteController::class,'signUp']);
Route::get('/lockscreen',[SiteController::class,'lockScreen']);
Route::get('/logout',[SiteController::class,'logout']);
Route::get('/login/successfull',[SiteController::class,'successfull']);
Route::get('/twosetpverification',[SiteController::class,'twostep_verification']);




use App\Http\Controllers\ProjectController;

Route::get('/project/index',[ProjectController::class,'index']);
Route::get('/project/create',[ProjectController::class,'create']);
Route::get('/project/edit',[ProjectController::class,'edit']);
Route::get('/project/view',[ProjectController::class,'view']);



use App\Http\Controllers\BranchController;

Route::get('/branch/index',[BranchController::class,'index']);
Route::get('/branch/create',[BranchController::class,'create']);
Route::get('/branch/edit',[BranchController::class,'edit']);
Route::get('/branch/view',[BranchController::class,'view']);



use App\Http\Controllers\ProfileController;

Route::get('/profile',[ProfileController::class,'profile']);
Route::get('/profile/setting',[ProfileController::class,'profileSetting']);








use App\Http\Controllers\DashboardController;

Route::get('/dashboard',[DashboardController::class,'index']);