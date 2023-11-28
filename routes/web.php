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
use App\Http\Controllers\backend\CentersetupController;
use App\Http\Controllers\backend\ExpensecategoryController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\UserController as frontendUserController;
use App\Models\Expense;
use App\Models\Expensecategory;

//Frontend
Route::get('/',[FrontendHomeController::class,'frontendhome'])->name('frontend');
 
Route::get('/registartion',[FrontendHomeController::class,'registration'])->name('user.registration');
Route::post('/registration/store',[frontendUserController::class,'store'])->name('User.store');


Route::get('/user/login', [frontendUserController::class, 'login'])->name('Login_User');
Route::post('/user/login', [frontendUserController::class, 'userlogin'])->name('User_Login');
Route::get('/logout', [frontendUserController::class, 'logout'])->name('User_Logout');


// donation route 
Route::get('/donations/form', [DonationController::class, 'form'])->name('donation.form');
















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
    Route::get('orphan/delete/{id}', [OrphanController::class,'delete'])->name('orphan.delete');
    Route::get('orphan/edit/{id}', [OrphanController::class,'edit'])->name('orphan.edit');
    Route::put('orphan/update/{id}', [OrphanController::class,'update'])->name('orphan.update');

    Route::get('/staffs/list', [StaffController::class, 'list'])->name('staff');
    Route::get('/staff/form', [StaffController::class, 'form'])->name('staff.form');
    Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
    Route::get('staff/delete/{id}', [StaffController::class, 'delete'])->name('staff.delete');
    Route::get('staff/edit/{id}', [StaffController::class,'edit'])->name('staff.edit');
    Route::put('staff/update/{id}', [StaffController::class,'update'])->name('staff.update');


    Route::get('/parents/list', [abcParentsController::class, 'list'])->name('parents');
    Route::get('/parents/form', [abcParentsController::class, 'form'])->name('parents.form');
    Route::post('/parents/store', [abcParentsController::class, 'store'])->name('parents.store');
   Route::get('parents/delete/{id}', [abcParentsController::class,'delete'])->name('parents.delete');
   Route::get('parents/edit/{id}', [abcParentsController::class,'edit'])->name('parents.edit');
    Route::put('parents/update/{id}', [abcParentsController::class,'update'])->name('parents.update');


    Route::get('/report/list', [ReportController::class, 'list'])->name('report');
    Route::get('/report/form', [ReportController::class, 'form'])->name('report.form');
    Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');
    Route::get('report/delete/{id}', [ReportController::class, 'delete'])->name('report.delete');
    Route::get('report/edit/{id}', [ReportController::class,'edit'])->name('report.edit');
    Route::put('report/update/{id}', [ReportController::class,'update'])->name('report.update');



    Route::get('/account/list', [AccountController::class, 'list'])->name('account');
    Route::get('/account/form', [AccountController::class, 'form'])->name('account.form');
    Route::post('/account/store', [AccountController::class, 'store'])->name('account.store');
    Route::get('/account/{id}', [AccountController::class,'delete'])->name('account.delete');
    Route::get('account/edit/{id}', [AccountController::class,'edit'])->name('account.edit');
    Route::put('account/update/{id}', [AccountController::class,'update'])->name('account.update');



    Route::get('/adoptions/list', [AdoptionController::class, 'list'])->name('adoption');
    Route::get('/adoptions/form', [AdoptionController::class, 'form'])->name('adoption.form');
    Route::post('/adoptions/store', [AdoptionController::class, 'store'])->name('adoption.store');
    Route::get('adoptions/delete/{id}', [AdoptionController::class, 'delete'])->name('adoption.delete');
    Route::get('adoptions/edit/{id}', [AdoptionController::class,'edit'])->name('adoption.edit');
    Route::put('adoptions/update/{id}', [AdoptionController::class,'update'])->name('adoption.update');


    Route::get('/donations/list', [DonationController::class, 'list'])->name('donation');
    Route::post('/donations/store', [DonationController::class, 'store'])->name('donation.store');
    Route::get('donations/delete/{id}', [DonationController::class, 'delete'])->name('donation.delete');
    Route::get('donations/edit/{id}', [DonationController::class,'edit'])->name('donation.edit');
    Route::put('donations/update/{id}', [DonationController::class,'update'])->name('donation.update');



    Route::get('/donor/list', [DonorController::class, 'list'])->name('donor');
    Route::get('/donor/form', [DonorController::class, 'form'])->name('donor.form');
    Route::post('/donor/store', [DonorController::class, 'store'])->name('donor.store');
    Route::get('donor/delete/{id}', [DonorController::class, 'delete'])->name('donor.delete');
    Route::get('donor/edit/{id}', [DonorController::class,'edit'])->name('donor.edit');
    Route::put('donor/update/{id}', [DonorController::class,'update'])->name('donor.update');



  Route::get('/expense/list', [ExpenseController::class, 'list'])->name('expense');
    Route::get('/expense/form', [ExpenseController::class, 'form'])->name('expense.form');
    Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
    Route::get('expense/delete/{id}', [ExpenseController::class, 'delete'])->name('expense.delete');
    Route::get('expense/edit/{id}', [ExpenseController::class,'edit'])->name('expense.edit');
    Route::put('expense/update/{id}', [ExpenseController::class,'update'])->name('expense.update');


    Route::get('/expensecategory/list', [ExpensecategoryController::class, 'list'])->name('expensecategory');
    Route::get('/expensecategory/form', [ExpensecategoryController::class, 'form'])->name('expensecategory.form');
    Route::post('/expensecategory/store', [ExpensecategoryController::class, 'store'])->name('expensecategory.store');
    Route::get('expensecategory/delete/{id}', [ExpensecategoryController::class, 'delete'])->name('expensecategory.delete');
    Route::get('expensecategory/edit/{id}', [ExpensecategoryController::class,'edit'])->name('expensecategory.edit');
    Route::put('expensecategory/update/{id}', [ExpensecategoryController::class,'update'])->name('expensecategory.update');


    Route::get('/centersetup/list', [CentersetupController::class, 'list'])->name('centersetup');
    Route::get('/centersetup/form', [CentersetupController::class, 'form'])->name('centersetup.form');
    Route::get('/centersetup/store', [CentersetupController::class, 'store'])->name('centersetup.store');
    Route::get('centersetup/delete/{id}', [CentersetupController::class, 'delete'])->name('centersetup.delete');
    Route::get('centersetup/edit/{id}', [CentersetupController::class,'edit'])->name('centersetup.edit');
    Route::put('centersetup/update/{id}', [CentersetupController::class,'update'])->name('centersetup.update');




    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});
});





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//  });
