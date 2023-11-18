<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\OrphanController;
use App\Http\Controllers\backend\StaffController;
use App\Http\Controllers\backend\AdoptionController;
use App\Http\Controllers\backend\DonationController;
use App\Http\Controllers\backend\DonorController;
use App\Http\Controllers\backend\abcParentsController;
use App\Http\Controllers\backend\ExpenseController;
use App\Http\Controllers\backend\AccountController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\LogoutController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;

//Frontend
Route::get('/',[FrontendHomeController::class,'frontendhome'])->name('frontend');

     














//BACKEND
Route::group(['prefix' =>'backend'], function () {


Route::get('/login/form', [LoginController::class, 'login'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/login', [HomeController::class, 'fariha']);
    Route::get('/', [HomeController::class, 'home'])->name("dashboard");


    
    Route::get('/admin/form', [AdminController::class, 'form'])->name('admin');
    Route::get('/admin/list', [AdminController::class, 'list'])->name('admin.list');


    Route::get('/orphans/list', [OrphanController::class, 'list'])->name('orphan');
    Route::get('/orphan/form', [OrphanController::class, 'form'])->name('orphan.form');
    Route::post('/orphan/store', [OrphanController::class, 'store'])->name('orphan.store');

    Route::get('/staffs/list', [StaffController::class, 'list'])->name('staff');
    Route::get('/staff/form', [StaffController::class, 'form'])->name('staff.form');
    Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');


    Route::get('/parents/list', [abcParentsController::class, 'list'])->name('parents');
    Route::get('/parents/form', [abcParentsController::class, 'form'])->name('parents.form');
    Route::post('/parents/store', [abcParentsController::class, 'store'])->name('parents.store');

    Route::get('/report/list', [ReportController::class, 'list'])->name('report');
    Route::get('/report/form', [ReportController::class, 'form'])->name('report.form');
    Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');


    Route::get('/account/list', [AccountController::class, 'list'])->name('account');
    Route::get('/account/form', [AccountController::class, 'form'])->name('account.form');
    Route::post('/account/store', [AccountController::class, 'store'])->name('account.store');


    Route::get('/adoptions/list', [AdoptionController::class, 'list'])->name('adoption');
    Route::get('/adoptions/form', [AdoptionController::class, 'form'])->name('adoption.form');
    Route::post('/adoptions/store', [AdoptionController::class, 'store'])->name('adoption.store');

    Route::get('/donations/list', [DonationController::class, 'list'])->name('donation');
    Route::get('/donations/form', [DonationController::class, 'form'])->name('donation.form');
    Route::post('/donations/store', [DonationController::class, 'store'])->name('donation.store');


    Route::get('/donor/list', [DonorController::class, 'list'])->name('donor');
    Route::get('/donor/form', [DonorController::class, 'form'])->name('donor.form');
    Route::post('/donor/store', [DonorController::class, 'store'])->name('donor.store');


    Route::get('/expense/list', [ExpenseController::class, 'list'])->name('expense');
    Route::get('/expense/form', [ExpenseController::class, 'form'])->name('expense.form');
    Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});
});





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//  });
