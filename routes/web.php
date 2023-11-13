<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrphanController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonorController; 
use App\Http\Controllers\abcParentsController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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
Route::get('/login/form',[LoginController::class,'login'])->name('login');
Route::post('/login/store',[LoginController::class,'store'])->name('login.store');

Route::group(['middleware' => 'auth'], function () {

 Route:: get ('/login',[HomeController::class,'fariha']);
 Route:: get ('/',[HomeController::class,'home'])->name("dashboard");

    
Route::get('/n1',[HomeController::class,'n2']);
Route::get('/admin/form',[AdminController::class,'form']);
Route::get('/admin/list',[AdminController::class,'list']);


Route::get('/orphans/list',[OrphanController::class,'list'])->name('xyz');
Route::get('/orphan/form',[OrphanController::class,'form']);
Route::post('/orphan/store',[OrphanController::class,'store']);

Route::get('/staffs/list',[StaffController::class,'list']); 
Route::get('/staff/form',[StaffController::class,'form']);
Route::post('/staff/store',[StaffController::class,'store']);


Route::get('/parents/list',[abcParentsController::class,'list'])->name('ppp');
Route::get('/parents/form',[abcParentsController::class,'form']);
Route::post('/parents/store',[abcParentsController::class,'store']);

Route::get('/report/list',[ReportController::class,'list']);
Route::get('/report/form',[ReportController::class,'form']);
Route::post('/report/store',[ReportController::class,'store']);


Route::get('/account/list',[AccountController::class,'list']);
Route::get('/account/form',[AccountController::class,'form']);
Route::post('/account/store',[AccountController::class,'store']);


Route::get('/adoptions/list',[AdoptionController::class,'list'])->name('hhh');
Route::get('/adoptions/form',[AdoptionController::class,'form']); 
Route::post('/adoptions/store',[AdoptionController::class,'store']);

Route::get('/donations/list',[DonationController::class,'list'])->name('ddd');
Route::get('/donations/form',[DonationController::class,'form']); 
Route::post('/donations/store',[DonationController::class,'store']);


Route::get('/donor/list',[DonorController::class,'list']);
Route::get('/donor/form',[DonorController::class,'form']);
Route::post('/donor/store',[DonorController::class,'store']);


Route::get('/expense/list',[ExpenseController::class,'list'])->name('expense');
Route::get('/expense/form',[ExpenseController::class,'form']);
Route::post('/expense/store',[ExpenseController::class,'store']);

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');


});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//  });


