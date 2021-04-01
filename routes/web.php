<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CropsImageController;

use App\Http\Controllers\SidebarController;
use App\Http\Controllers\EndUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [SidebarController::class,'index'])->name('all-category');
Route::get('/sub_category/{sub_category:name}',[SidebarController::class,'show'])->name('show-category');
Route::get('/user/register', [EndUserController::class,'create'])->name('register-enduser');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/home', function () {
    return view('admin.layouts.layout');
})->name('home');


Route::prefix('/category')->group(function () {

Route::get('/',                 [CategoryController::class,'index'])    ->name('manage-category');
Route::get('/create',           [CategoryController::class,'create'])   ->name('create-category');
Route::post('/',                [CategoryController::class,'store'])    ->name('store-category');
Route::get('/edit/{category}',  [CategoryController::class,'edit'])     ->name('edit-category');
Route::PATCH('update/{category}',[CategoryController::class,'update'])   ->name('update-category');
Route::get('delete/{category}', [CategoryController::class,'destroy'])  ->name('delete-category');

});


Route::prefix('/subCategory')->group(function () {

    Route::get('/',                     [SubCategoryController::class,'index'])    ->name('manage-sub_category');
    Route::get('/create',               [SubCategoryController::class,'create'])   ->name('create-sub_category');
    Route::post('/',                    [SubCategoryController::class,'store'])    ->name('store-sub_category');
    Route::get('/edit/{sub_category}',  [SubCategoryController::class,'edit'])     ->name('edit-sub_category');
    Route::PATCH('update/{sub_category}',[SubCategoryController::class,'update'])   ->name('update-sub_category');
    Route::get('delete/{sub_category}', [SubCategoryController::class,'destroy'])  ->name('delete-sub_category');


    Route::get('{sub_category}/images/show',[CropsImageController::class,'show'])  ->name('show-crops_image');
    Route::get('{sub_category}/images/add', [CropsImageController::class,'create'])->name('create-crops_image');
    Route::post('{sub_category}/images',    [CropsImageController::class,'store']) ->name('store-crops_image');
    Route::get('{sub_category}/images/delete/{crops_image}',[CropsImageController::class,'destroy'])  ->name('delete-crops_image');


});


