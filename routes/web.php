<?php

use App\Http\Controllers\Auth\AuthStepController;
use App\Http\Controllers\Backend\Admin\CategoryController;
use App\Http\Controllers\Backend\Admin\ClothingController;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\Admin\TownController;
use App\Http\Controllers\Backend\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Backend\Customer\PreferenceController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Frontend\ClothingController as FrontendClothingController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[HomeController::class,'index'])->name('homepage');

Route::get('/contact',[ContactController::class,'index'])->name('contact');
// Step auth user
Route::post('step-one/personal-information',[AuthStepController::class,'stepOne'])->name('stepOne');
Route::get('step-one/personal-information',[AuthStepController::class,'stepOneView'])->name('stepOneView');
Route::post('step-two/user-preference',[AuthStepController::class,'stepTwo'])->name('stepTwo');
Route::get('step-two/user-preference',[AuthStepController::class,'stepTwoView'])->name('stepTwoView');
Route::post('step-final',[AuthStepController::class,"stepFinal"])->name("stepFinal");

//List and search clothing
Route::get('all/clothings',[FrontendClothingController::class,'allClothing'])->name('all.clothing');
Route::get('clothings',[FrontendClothingController::class,'getClothing'])->name('getClothing');
Route::get('search',[SearchController::class,'search'])->name('search');
//Detail clothing
Route::get('clothing/{slug}',[ClothingController::class,'show'])->name('clothing.show');


Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('clothings',ClothingController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('brands',BrandController::class);
    Route::resource('towns',TownController::class);
    });

    Route::middleware(['auth','customer'])->name('customer.')->prefix('customer')->group(function(){
        Route::get('dashboard',[CustomerDashboardController::class,'index'])->name('dashboard');
        Route::get('preferences',[PreferenceController::class,'index'])->name('preferences');
        Route::put('preferences',[PreferenceController::class,'update'])->name('preferences.update');
        Route::get('preferences/edit',[PreferenceController::class,'edit'])->name('preferences.edit');
        });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
