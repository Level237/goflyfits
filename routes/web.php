<?php

use App\Http\Controllers\Auth\AuthStepController;
use App\Http\Controllers\Backend\Admin\CategoryController;
use App\Http\Controllers\Backend\Admin\ClothingController;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\Admin\TownController;
use App\Http\Controllers\Backend\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Backend\Customer\PaymentController;
use App\Http\Controllers\Backend\Customer\PreferenceController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Customer\ReservationController;
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
Route::post('step-init',[AuthStepController::class,'stepInit'])->name('stepInit');
Route::post('step-one/personal-information',[AuthStepController::class,'stepOne'])->name('stepOne');
Route::get('step-one/personal-information',[AuthStepController::class,'stepOneView'])->name('stepOneView');
Route::post('step-two/personal-information',[AuthStepController::class,'stepTwo'])->name('stepTwo');
Route::get('step-two/personal-information',[AuthStepController::class,'stepTwoView'])->name('stepTwoView');
Route::get('step-three/country-information',[AuthStepController::class,'stepThreeView'])->name('stepThreeView');
Route::post('step-three/country-information',[AuthStepController::class,'stepThree'])->name('stepThree');
Route::get('step-four/measure-information',[AuthStepController::class,'stepFourView'])->name('stepFourView');
Route::post('step-four/measure-information',[AuthStepController::class,"stepFour"])->name('stepFour');
Route::get('step-five/measure-information',[AuthStepController::class,'stepFiveView'])->name('stepFiveView');
Route::post('step-five/measure-information',[AuthStepController::class,'stepFive'])->name('stepFive');
Route::get('step-final/preference-user',[AuthStepController::class,'stepFinalView'])->name('stepFinalView');
Route::post('step-final',[AuthStepController::class,"stepFinal"])->name("stepFinal");

//List and search clothing
;


Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('clothings',ClothingController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('brands',BrandController::class);
    Route::resource('towns',TownController::class);
    Route::get('select-gender',[ClothingController::class,"selectGenderView"])->name('selectGenderView');
    Route::post('select-gender',[ClothingController::class,"selectGender"])->name('selectGender');

    });


    Route::middleware(['auth','customer'])->name('customer.')->prefix('customer')->group(function(){
        Route::get('dashboard',[CustomerDashboardController::class,'index'])->name('dashboard');
        Route::get('payment',[PaymentController::class,'payment'])->name('payment');
        Route::get('preferences',[PreferenceController::class,'index'])->name('preferences');
        Route::put('preferences',[PreferenceController::class,'update'])->name('preferences.update');
        Route::get('preferences/edit',[PreferenceController::class,'edit'])->name('preferences.edit');
        Route::get('reservations',[ReservationController::class,'index'])->name('reservations');
        });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
