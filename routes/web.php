<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CropsImageController;
use App\Http\Controllers\CropsQuestionController;
use App\Http\Controllers\CropsSolutionController;

use App\Http\Controllers\SidebarController;
use App\Http\Controllers\EndUserController;
use App\Http\Controllers\QuestionController;

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
Route::get('/sub_category/{sub_category}/questions/{crops_question}',[QuestionController::class,'show'])->name('show-questions');
Route::get('/user/register', [EndUserController::class,'create'])->name('register-enduser');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/home', function () {
    return view('admin.layouts.layout');
})->name('home');

//  category crud
Route::prefix('/category')->group(function () {

Route::get('/',                 [CategoryController::class,'index'])    ->name('manage-category');
Route::get('/create',           [CategoryController::class,'create'])   ->name('create-category');
Route::post('/',                [CategoryController::class,'store'])    ->name('store-category');
Route::get('/edit/{category}',  [CategoryController::class,'edit'])     ->name('edit-category');
Route::PATCH('update/{category}',[CategoryController::class,'update'])   ->name('update-category');
Route::get('delete/{category}', [CategoryController::class,'destroy'])  ->name('delete-category');

});

//  sub_category
Route::prefix('/subCategory')->group(function () {

    //  sub_category crud
    Route::get('/',                     [SubCategoryController::class,'index'])    ->name('manage-sub_category');
    Route::get('/create',               [SubCategoryController::class,'create'])   ->name('create-sub_category');
    Route::post('/',                    [SubCategoryController::class,'store'])    ->name('store-sub_category');
    Route::get('/edit/{sub_category}',  [SubCategoryController::class,'edit'])     ->name('edit-sub_category');
    Route::PATCH('update/{sub_category}',[SubCategoryController::class,'update'])   ->name('update-sub_category');
    Route::get('delete/{sub_category}', [SubCategoryController::class,'destroy'])  ->name('delete-sub_category');

    // multiple image for a single sub_category
    Route::get('{sub_category}/images/show',[CropsImageController::class,'show'])  ->name('show-crops_image');
    Route::get('{sub_category}/images/add', [CropsImageController::class,'create'])->name('create-crops_image');
    Route::post('{sub_category}/images',    [CropsImageController::class,'store']) ->name('store-crops_image');
    Route::get('{sub_category}/images/delete/{crops_image}',[CropsImageController::class,'destroy'])  ->name('delete-crops_image');

    //show question a selected sub_category
    Route::get('{sub_category}/questions/show',[CropsQuestionController::class,'show'])  ->name('show-crops_question');

});

Route::prefix('/questions')->group(function () {

    // multiple question for a single sub_category
   Route::get('/',[CropsQuestionController::class,'index'])  ->name('manage-crops_question');
   Route::get('/add', [CropsQuestionController::class,'create'])->name('create-crops_question');
   Route::post('/',    [CropsQuestionController::class,'store']) ->name('store-crops_question');
   Route::get('/{crops_question}/edit',    [CropsQuestionController::class,'edit']) ->name('edit-crops_question');
   Route::post('/{crops_question}/update',  [CropsQuestionController::class,'update']) ->name('update-crops_question');
   Route::get('/{crops_question}/delete',   [CropsQuestionController::class,'destroy'])  ->name('delete-crops_question');


   //multiple solution for question
   Route::get('solutions',[CropsSolutionController::class,'index'])  ->name('manage-crops_solution');
   Route::get('{question}/solutions/add', [CropsSolutionController::class,'create'])->name('create-crops_solution');
   Route::post('{question}/solutions',    [CropsSolutionController::class,'store']) ->name('store-crops_solution');
   Route::get('{question}/solutions/show',[CropsSolutionController::class,'show'])  ->name('show-crops_solution');
   Route::get('{question}/solutions/{solution}/edit',    [CropsSolutionController::class,'edit']) ->name('edit-crops_solution');
   Route::post('{question}/solutions/{solution}/update',  [CropsSolutionController::class,'update']) ->name('update-crops_solution');
   Route::get('{question}/solutions/{solution}/delete',   [CropsSolutionController::class,'destroy'])  ->name('delete-crops_solution');

});


