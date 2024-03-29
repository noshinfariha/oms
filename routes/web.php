<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController as ControllersDashboardController;
use App\Http\Controllers\frontend\donorController as FrontendDonorController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\orphanController as FrontendOrphanController;
use App\Http\Controllers\frontend\UserController as frontendUserController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Expense;
use App\Models\Expensecategory;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Frontend

Route::get('/frontend-donor-list', [FrontendDonorController::class, 'frontend_donor_list'])->name('frontend.donor');


Route::get('/registartion', [FrontendHomeController::class, 'registration'])->name('user.registration');
Route::post('/registration/store', [frontendUserController::class, 'store'])->name('User.store');

Route::get('/user/login', [frontendUserController::class, 'login'])->name('Login_User');
Route::post('/user/login', [frontendUserController::class, 'userlogin'])->name('User_Login');


  Route::post('/adoptions/store', [AdoptionController::class, 'store'])->name('adoption.store');
Route::get('/forntend/update/{id}', [AdoptionController::class, 'adoptupdate'])->name('update');
Route::post('/forntend/update-date/{id}', [AdoptionController::class, 'adoptupdatedate'])->name('update.data');


Route::group(['middleware' => 'auth'], function () {

  Route::get('/forntend/adopt/{id}', [AdoptionController::class, 'view'])->name('forntend.adopt');

});
Route::get('/', [FrontendHomeController::class, 'frontendhome'])->name('frontend');
Route::get('/user/profile', [frontendUserController::class, 'userprofile'])->name('user.profile');

Route::get('/contact',[ ContactController::class,'index'])->name('contact.index');
Route::post('/contact-store',[ ContactController::class,'store'])->name('contact.store');

Route::get('/logout', [frontendUserController::class, 'logout'])->name('User_Logout');

// donation route 
Route::get('/donations/form', [DonationController::class, 'form'])->name('donation.form');
Route::post('/donations/store', [DonationController::class, 'store'])->name('donation.store');


//orphan list list
Route::get('/forntend/orphan/list', [FrontendOrphanController::class, 'form'])->name('forntend.orphon.list');
Route::get('/forntend/orphan/list/{id}', [FrontendOrphanController::class, 'view'])->name('forntend.orphan.view');

//Adoption Update

Route::get('/adoption/edit/{id}', [AdoptionController::class, 'adoptionEdit'])->name('front.adoption.edit');
//search

Route::get('/search', [frontendOrphanController::class, 'search'])->name('orphan.search');

//Cancel Adoption
Route::get('/adoptions/cancel/{id}', [AdoptionController::class, 'cancel'])->name('adoption.cancel');


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


//BACKEND
Route::group(['prefix' => 'backend'], function () {

  Route::get('/login/form', [LoginController::class, 'login'])->name('login');
  Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

  Route::group(['middleware' => 'auth'], function () { 


    Route::group(['middleware' => 'adminLogin'], function () {
      Route::get('/', [HomeController::class, 'home'])->name("dashboard");



      Route::get('/login', [HomeController::class, 'fariha']);
      // Route::get('/dashboard',[ControllersDashboardController::class, 'board'])->name('dashboard');


      Route::get('/admin/form', [AdminController::class, 'form'])->name('admin');
      Route::get('/admin/list', [AdminController::class, 'list'])->name('admin.list');


      Route::get('/admin/profile', [AdminController::class, 'adminprofile'])->name('admin.profile');


      Route::get('/orphans/print', [OrphanController::class, 'print'])->name('orphan.print');
      Route::get('/orphans/list', [OrphanController::class, 'list'])->name('orphan');
      Route::get('/orphan/form', [OrphanController::class, 'form'])->name('orphan.form');
      Route::post('/orphan/store', [OrphanController::class, 'store'])->name('orphan.store');
      Route::get('orphan/delete/{id}', [OrphanController::class, 'delete'])->name('orphan.delete');
      Route::get('orphan/edit/{id}', [OrphanController::class, 'edit'])->name('orphan.edit');
      Route::put('orphan/update/{id}', [OrphanController::class, 'update'])->name('orphan.update');
      Route::get('orphan/view/{id}', [OrphanController::class, 'view'])->name('orphan.view');


      Route::get('/staffs/print', [StaffController::class, 'print'])->name('staff.print');
      Route::get('/staffs/list', [StaffController::class, 'list'])->name('staff');
      Route::get('/staff/form', [StaffController::class, 'form'])->name('staff.form');
      Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
      Route::get('staff/delete/{id}', [StaffController::class, 'delete'])->name('staff.delete');
      Route::get('staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit');
      Route::put('staff/update/{id}', [StaffController::class, 'update'])->name('staff.update');
      Route::get('staff/view/{id}', [StaffController::class, 'view'])->name('staff.view');




      Route::get('/account/print', [AccountController::class, 'print'])->name('account.print');
      Route::get('/account/list', [AccountController::class, 'list'])->name('account');
     



      Route::get('/adoptions/print', [AdoptionController::class, 'print'])->name('adoption.print');
      Route::get('/adoptions/list', [AdoptionController::class, 'list'])->name('adoption');
      Route::get('/adoptions/form', [AdoptionController::class, 'form'])->name('adoption.form');
      Route::get('/adoptions/edit/{id}', [AdoptionController::class, 'edit'])->name('adoption.edit');
      Route::put('adoptions/update/{id}', [AdoptionController::class, 'update'])->name('adoption.update');
     Route::get('adoptions/view/{id}', [AdoptionController::class, 'view'])->name('adoption.view');
      Route::get('adoptions/accept/{id}', [AdoptionController::class, 'accept'])->name('adoption.accept');
      Route::get('adoptions/reject/{id}', [AdoptionController::class, 'reject'])->name('adoption.reject');





      Route::get('/donations/print', [DonationController::class, 'print'])->name('donation.print');
      Route::get('/donations/list', [DonationController::class, 'list'])->name('donation');
      Route::get('donations/delete/{id}', [DonationController::class, 'delete'])->name('donation.delete');
      Route::get('donations/edit/{id}', [DonationController::class, 'edit'])->name('donation.edit');
      Route::put('donations/update/{id}', [DonationController::class, 'update'])->name('donation.update');



      Route::get('/donor/print', [DonorController::class, 'print'])->name('donor.print');
      Route::get('/donor/list', [DonorController::class, 'list'])->name('donor');
      Route::get('/donor/form', [DonorController::class, 'form'])->name('donor.form');
      Route::post('/donor/store', [DonorController::class, 'store'])->name('donor.store');
      Route::get('donor/delete/{id}', [DonorController::class, 'delete'])->name('donor.delete');
      Route::get('donor/edit/{id}', [DonorController::class, 'edit'])->name('donor.edit');
      Route::put('donor/update/{id}', [DonorController::class, 'update'])->name('donor.update');



      Route::get('/expense/print', [ExpenseController::class, 'print'])->name('expense.print');
      Route::get('/expense/list', [ExpenseController::class, 'list'])->name('expense');
      Route::get('/expense/form', [ExpenseController::class, 'form'])->name('expense.form');
      Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
      Route::get('expense/delete/{id}', [ExpenseController::class, 'delete'])->name('expense.delete');
      Route::get('expense/edit/{id}', [ExpenseController::class, 'edit'])->name('expense.edit');
      Route::put('expense/update/{id}', [ExpenseController::class, 'update'])->name('expense.update');


      Route::get('/expensecategory/print', [ExpensecategoryController::class, 'print'])->name('expensecategory.print');
      Route::get('/expensecategory/list', [ExpensecategoryController::class, 'list'])->name('expensecategory');
      Route::get('/expensecategory/form', [ExpensecategoryController::class, 'form'])->name('expensecategory.form');
      Route::post('/expensecategory/store', [ExpensecategoryController::class, 'store'])->name('expensecategory.store');
      Route::get('expensecategory/delete/{id}', [ExpensecategoryController::class, 'delete'])->name('expensecategory.delete');
      Route::get('expensecategory/edit/{id}', [ExpensecategoryController::class, 'edit'])->name('expensecategory.edit');
      Route::put('expensecategory/update/{id}', [ExpensecategoryController::class, 'update'])->name('expensecategory.update');


      Route::get('/centersetup/print', [CentersetupController::class, 'print'])->name('centersetup.print');
      Route::get('/centersetup/list', [CentersetupController::class, 'list'])->name('centersetup');
      Route::get('/centersetup/form', [CentersetupController::class, 'form'])->name('centersetup.form');
      Route::post('/centersetup/store', [CentersetupController::class, 'store'])->name('centersetup.store');
      Route::get('/centersetup/delete/{id}', [CentersetupController::class, 'delete'])->name('centersetup.delete');
      Route::get('/centersetup/edit/{id}', [CentersetupController::class, 'edit'])->name('centersetup.edit');
      Route::put('/centersetup/update/{id}', [CentersetupController::class, 'update'])->name('centersetup.update');

    //Report
    Route::get('/report',[ReportController::class,'report'])->name('report');
    Route::get('/report/search',[ReportController::class,'reportSearch'])->name('adoption.report.search');

    Route::get('/report/donation',[ReportController::class,'donationreport'])->name('donation.report');
    Route::get('/report/donation/search',[ReportController::class,'reportdonationSearch'])->name('donation.report.search');

    Route::get('/report/orphan',[ReportController::class,'orphanreport'])->name('orphan.report');
    Route::get('/report/orphan/search',[ReportController::class,'reportorphanSearch'])->name('orphan.report.search');



      Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    });
  });
});





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//  });


