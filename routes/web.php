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



// Office Start 


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


use App\Http\Controllers\DesignationController;

Route::get('/designation/index',[DesignationController::class,'index']);
Route::get('/designation/create',[DesignationController::class,'create']);
Route::get('/designation/edit',[DesignationController::class,'edit']);
Route::get('/designation/view',[DesignationController::class,'view']);


use App\Http\Controllers\DepartmentController;

Route::get('/department/index',[DepartmentController::class,'index']);
Route::get('/department/create',[DepartmentController::class,'create']);
Route::get('/department/edit',[DepartmentController::class,'edit']);
Route::get('/department/view',[DepartmentController::class,'view']);


use App\Http\Controllers\EmployeeController;

Route::get('/employee/index',[EmployeeController::class,'index']);
Route::get('/employee/create',[EmployeeController::class,'create']);
Route::get('/employee/edit',[EmployeeController::class,'edit']);
Route::get('/employee/view',[EmployeeController::class,'view']);



// Office End 


// Product Start 

use App\Http\Controllers\GroupController;

Route::get('/group/index',[GroupController::class,'index']);
Route::get('/group/create',[GroupController::class,'create']);
Route::get('/group/edit',[GroupController::class,'edit']);
Route::get('/group/view',[GroupController::class,'view']);


use App\Http\Controllers\CategoryController;

Route::get('/category/index',[CategoryController::class,'index']);
Route::get('/category/create',[CategoryController::class,'create']);
Route::get('/category/edit',[CategoryController::class,'edit']);
Route::get('/category/view',[CategoryController::class,'view']);


use App\Http\Controllers\BrandController;

Route::get('/brand/index',[BrandController::class,'index']);
Route::get('/brand/create',[BrandController::class,'create']);
Route::get('/brand/edit',[BrandController::class,'edit']);
Route::get('/brand/view',[BrandController::class,'view']);


use App\Http\Controllers\StyleController;

Route::get('/style/index',[StyleController::class,'index']);
Route::get('/style/create',[StyleController::class,'create']);
Route::get('/style/edit',[StyleController::class,'edit']);
Route::get('/style/view',[StyleController::class,'view']);


use App\Http\Controllers\SizeController;

Route::get('/size/index',[SizeController::class,'index']);
Route::get('/size/create',[SizeController::class,'create']);
Route::get('/size/edit',[SizeController::class,'edit']);
Route::get('/size/view',[SizeController::class,'view']);


use App\Http\Controllers\ColorController;

Route::get('/color/index',[ColorController::class,'index']);
Route::get('/color/create',[ColorController::class,'create']);
Route::get('/color/edit',[ColorController::class,'edit']);
Route::get('/color/view',[ColorController::class,'view']);


use App\Http\Controllers\UomController;

Route::get('/uom/index',[UomController::class,'index']);
Route::get('/uom/create',[UomController::class,'create']);
Route::get('/uom/edit',[UomController::class,'edit']);
Route::get('/uom/view',[UomController::class,'view']);

// Product End 

// Contact Start 

use App\Http\Controllers\SupplierController;

Route::get('/supplier/index',[SupplierController::class,'index']);
Route::get('/supplier/create',[SupplierController::class,'create']);
Route::get('/supplier/edit',[SupplierController::class,'edit']);
Route::get('/supplier/view',[SupplierController::class,'view']);


use App\Http\Controllers\CustomerController;

Route::get('/customer/index',[CustomerController::class,'index']);
Route::get('/customer/create',[CustomerController::class,'create']);
Route::get('/customer/edit',[CustomerController::class,'edit']);
Route::get('/customer/view',[CustomerController::class,'view']);


// Contact End 

use App\Http\Controllers\ProfileController;

Route::get('/profile',[ProfileController::class,'profile']);
Route::get('/profile/setting',[ProfileController::class,'profileSetting']);








use App\Http\Controllers\DashboardController;

Route::get('/dashboard',[DashboardController::class,'index']);