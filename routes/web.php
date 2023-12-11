<?php

use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiensController;
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
$idregex = '[0-9]+';
$slugregex = '[a-z0-9\-]+';

Route::get('/', [HomeController::class,'accueil']);
//uncontroller just onlin for test
Route::get('/test',[HomeController::class,'index']);
Route::get('/biens',[BiensController::class,'index'])->name('biens.index');
Route::get('/biens/{slug}-{property}',[BiensController::class,'show'])->name('biens.show')->where(
   [ 'property'=>$idregex, 'slug'=>$slugregex ]
);
Route::post('/biens/{property}/contact',[BiensController::class,'contact'])->name('biens.contact')->where(['property'=>$idregex]);
//backend route
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    //by using resource controller
    Route::resource('/property',PropertyController::class)->except('show');
    Route::resource('/option',OptionController::class)->except('show');
    //upload image not use resource controller
    Route::get('/upload',[UploadController::class,'upload'])->name('upload');
    Route::post('/upload',[UploadController::class,'uploadFile']);
    Route::get('/{image}/edit',[UploadController::class,'edit'])->name('image.edit')->where(['image'=>'[0-9]+']);
    Route::get('/display',[UploadController::class,'display'])->name('image.display');
    Route::get('/delete/{image}',[UploadController::class,'delete'])->name('image.delete')->where(['image'=>'[0-9]+']);

});
//authentification
Route::get('/login',[AuthController::class,'login'])->middleware('guest')->name('biens.login');
Route::post('/login',[AuthController::class,'dologin'])->name('biens.dologin');
Route::delete('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');