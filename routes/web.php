<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrphanController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonorController; 
use App\Http\Controllers\ExpenseController;
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
Route:: get ('/login',[HomeController::class,'fariha']);
Route:: get ('/',[HomeController::class,'home']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });
Route::get('/n1',[HomeController::class,'n2']);
Route::get('/admin/list',[AdminController::class,'list']);
Route::get( '/user/list',[UserController::class,'list']);
Route::get('/orphans/list',[OrphanController::class,'list']);
Route::get('/staffs/list',[StaffController::class,'list']); 
Route::get('/parents/list',[ParentController::class,'list']);
Route::get('/adoptions/list',[AdoptionController::class,'list']);
Route::get('/donations/list',[DonationController::class,'list']);
Route::get('/donor/list',[DonorController::class,'list']);
Route::get('/expense/list',[ExpenseController::class,'list']);
Route::get('/admin/form',[AdminController::class,'form']);
Route::get('/orphan/form',[OrphanController::class,'form']);