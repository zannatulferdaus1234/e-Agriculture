<?php

use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\SubCategoryController as AdminSubCategoryController;
use App\Http\Controllers\Admin\ContentController as AdminContentController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Admin\CounterCategoryController;
use App\Http\Controllers\Admin\ReplyController as AdminReplyController;
use App\Http\Controllers\Admin\QuestionController as AdminQuestionController;
use App\Http\Controllers\Admin\SolutionController as AdminSolutionController;
use App\Http\Controllers\Admin\ProjectControler;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CropsImageController;

use App\Http\Controllers\SidebarController;
use App\Http\Controllers\Website\AboutUs;
use App\Http\Controllers\Website\CategoryController as WebsiteCategoryController;
use App\Http\Controllers\Website\CommentController as WebsiteCommentController;
use App\Http\Controllers\Website\EndUserController;
use App\Http\Controllers\Website\ProjectControler as WebsiteProjectControler;
use App\Http\Controllers\Website\QuestionController;
use App\Http\Controllers\Website\ReviewController;
use App\Http\Livewire\Questions;

//FOR WEBSITE
// Route::get('/', [SidebarController::class,'index'])->name('all-category');
Route::get('/sub_category/{sub_category:name}', [SidebarController::class, 'show'])->name('show-category');

Route::get('/sub_category/{sub_category}/questions/{crops_question}', [QuestionController::class, 'show'])->name('show-questions');

//Solution
Route::get('{question}/solutions/show', [SolutionController::class, 'show'])->name('show-crops_solutions');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




// FOR ADMIN

//auth for admin
Route::get('/register',     [AdminRegistrationController::class, 'create'])->name('register');
Route::get('/login',        [AdminRegistrationController::class, 'login'])->name('login');
Route::get('/forgotPassword', [AdminRegistrationController::class, 'forgot'])->name('forgotPassword');


Route::middleware(['auth'])->group(function () {

    //home page
    Route::get('/home', function () {
        return view('admin.index');
    })->name('home');

    Route::prefix('/category')->group(function () {
        //  category crud
        Route::get('/',                 [AdminCategoryController::class, 'index'])->name('manage-category');
        Route::get('/add',              [AdminCategoryController::class, 'create'])->name('create-category');
        Route::post('/',                [AdminCategoryController::class, 'store'])->name('store-category');
        Route::get('/edit/{category}',  [AdminCategoryController::class, 'edit'])->name('edit-category');
        Route::PATCH('update/{category}', [AdminCategoryController::class, 'update'])->name('update-category');
        Route::get('delete/{category}', [AdminCategoryController::class, 'destroy'])->name('delete-category');
    });
    Route::get('category/categoryStatus/{id}/{status}', [CategoryController::class, 'status'])->name('category-status');

    //  sub_category
    Route::prefix('/subCategory')->group(function () {
        //  sub_category crud
        Route::get('/',                     [AdminSubCategoryController::class, 'index'])->name('manage-sub_category');
        Route::get('/add',                  [AdminSubCategoryController::class, 'create'])->name('create-sub_category');
        Route::post('/',                    [AdminSubCategoryController::class, 'store'])->name('store-sub_category');
        Route::get('/edit/{sub_category}',  [AdminSubCategoryController::class, 'edit'])->name('edit-sub_category');
        Route::PATCH('update/{sub_category}', [AdminSubCategoryController::class, 'update'])->name('update-sub_category');
        Route::get('delete/{sub_category}', [AdminSubCategoryController::class, 'destroy'])->name('delete-sub_category');

        // multiple image for a single sub_category
        Route::get('{sub_category}/images/show', [CropsImageController::class, 'show'])->name('show-crops_image');
        Route::get('{sub_category}/images/add', [CropsImageController::class, 'create'])->name('create-crops_image');
        Route::post('{sub_category}/images',    [CropsImageController::class, 'store'])->name('store-crops_image');
        Route::get('{sub_category}/images/delete/{crops_image}', [CropsImageController::class, 'destroy'])->name('delete-crops_image');

        //show question for a selected sub_category
        Route::get('{sub_category}/questions/show', [AdminQuestionController::class, 'show'])->name('show-crops_question');
        //show content for a selected sub_category
        Route::get('{sub_category}/contents/show',  [AdminContentController::class, 'show'])->name('show-content');
    });

    Route::prefix('/contents')->group(function () {
        //add multiple content for a single sub_category
        Route::get('/',      [AdminContentController::class, 'index'])->name('manage-content');
        Route::get('/add',   [AdminContentController::class, 'create'])->name('create-content');
        Route::post('/',     [AdminContentController::class, 'store'])->name('store-content');
        Route::get('/{content}/edit',    [AdminContentController::class, 'edit'])->name('edit-content');
        Route::PATCH('/{content}/update', [AdminContentController::class, 'update'])->name('update-content');
        Route::get('/{content}/delete',  [AdminContentController::class, 'destroy'])->name('delete-content');
    });

    Route::prefix('/comments')->group(function () {
        Route::get('/',      [AdminCommentController::class, 'index'])->name('manage-comments');
        Route::get('/{content}/comment/add',    [AdminCommentController::class, 'create'])->name('create-comments');
        Route::post('/{content}/comment',       [AdminCommentController::class, 'store'])->name('store-comments');
        Route::get('/{content}/comment/show',   [AdminCommentController::class, 'show'])->name('show-comments');
        Route::get('/{content}/comment/{comment}/edit',     [AdminCommentController::class, 'edit'])->name('edit-comments');
        Route::PATCH('/{content}/comment/{comment}/update', [AdminCommentController::class, 'update'])->name('update-comments');
        Route::get('/{content}/comment/{comment}/delete',   [AdminCommentController::class, 'destroy'])->name('delete-comments');
    });

    Route::prefix('/replies')->group(function () {
        Route::get('/',      [AdminReplyController::class, 'index'])->name('manage-reply');
        Route::get('/comment/{comment}/reply/add', [AdminReplyController::class, 'create'])->name('create-reply');
        Route::post('/comment/{comment}/reply',    [AdminReplyController::class, 'store'])->name('store-reply');
        Route::get('/comment/{comment}/reply/show', [AdminReplyController::class, 'show'])->name('show-reply');
        Route::get('/comment/{comment}/reply/{reply}/edit',     [AdminReplyController::class, 'edit'])->name('edit-reply');
        Route::PATCH('/comment/{comment}/reply/{reply}/update', [AdminReplyController::class, 'update'])->name('update-reply');
        Route::get('/comment/{comment}/reply/{reply}/delete',   [AdminReplyController::class, 'destroy'])->name('delete-reply');
    });

    Route::prefix('/questions')->group(function () {
        //add multiple question for a single sub_category
        Route::get('/',      [AdminQuestionController::class, 'index'])->name('manage-crops_question');
        Route::get('/add',   [AdminQuestionController::class, 'create'])->name('create-crops_question');
        Route::post('/',     [AdminQuestionController::class, 'store'])->name('store-crops_question');
        Route::get('/{crops_question}/edit',    [AdminQuestionController::class, 'edit'])->name('edit-crops_question');
        Route::PATCH('/{crops_question}/update', [AdminQuestionController::class, 'update'])->name('update-crops_question');
        Route::get('/{crops_question}/delete',  [AdminQuestionController::class, 'destroy'])->name('delete-crops_question');
    });

    Route::prefix('/solutions')->group(function () {
        //multiple solution for a question
        Route::get('/',                [AdminSolutionController::class, 'index'])->name('manage-crops_solution');
        Route::get('{question}/solutions/add', [AdminSolutionController::class, 'create'])->name('create-crops_solution');
        Route::post('{question}/solutions',    [AdminSolutionController::class, 'store'])->name('store-crops_solution');
        Route::get('{question}/solutions/show', [AdminSolutionController::class, 'show'])->name('show-crops_solution');
        Route::get('{solution}/edit',    [AdminSolutionController::class, 'edit'])->name('edit-crops_solution');
        Route::PATCH('{solution}/update', [AdminSolutionController::class, 'update'])->name('update-crops_solution');
        Route::get('{solution}/delete',  [AdminSolutionController::class, 'destroy'])->name('delete-crops_solution');
    });

    Route::prefix('/project')->group(function () {
        //  project crud
        Route::get('/',                 [ProjectControler::class, 'index'])->name('manage-project');
        Route::get('/add',              [ProjectControler::class, 'create'])->name('create-project');
        Route::post('/',                [ProjectControler::class, 'store'])->name('store-project');
        Route::get('/edit/{project}',  [ProjectControler::class, 'edit'])->name('edit-project');
        Route::PATCH('update/{project}', [ProjectControler::class, 'update'])->name('update-project');
        Route::get('delete/{project}', [ProjectControler::class, 'destroy'])->name('delete-project');
    });

    Route::prefix('/counter_category')->group(function () {
        //  counterCategory crud
        Route::get('/',                 [CounterCategoryController::class, 'index'])->name('manage-counterCategory');
        Route::get('/create',              [CounterCategoryController::class, 'create'])->name('create-counterCategory');
        Route::post('/',                [CounterCategoryController::class, 'store'])->name('store-counterCategory');
        Route::get('/edit/{counterCategory}',  [CounterCategoryController::class, 'edit'])->name('edit-counterCategory');
        Route::get('/add/{counterCategory}',  [CounterCategoryController::class, 'addCounter'])->name('add-counterCategory');
        Route::PATCH('/add/{counterCategory}',  [CounterCategoryController::class, 'updateCounter'])->name('add-counterCategoryPost');
        Route::PATCH('update/{counterCategory}', [CounterCategoryController::class, 'update'])->name('update-counterCategory');
        Route::get('delete/{counterCategory}', [CounterCategoryController::class, 'destroy'])->name('delete-counterCategory');
    });

    //end of middleware auth
});


Route::get('/test', [WebsiteCategoryController::class, 'index2'])->name('test');

//user's home page
Route::get('/', [WebsiteCategoryController::class, 'index'])->name('webapp');

//user auth
Route::get('/userRegistration', [EndUserController::class, 'register'])->name('userRegistration')->middleware('AlreadyLoggedIn');
Route::post('/userRegistration', [EndUserController::class, 'createUser'])->name('create_userRegistration');
Route::get('/userLogin',        [EndUserController::class, 'login'])->name('userLogin')->middleware('AlreadyLoggedIn');
Route::post('/userLogin',       [EndUserController::class, 'loginCheck'])->name('userLoginCheck');
Route::get('/userForgotPassword', [EndUserController::class, 'showForgotPasswordForm'])->name('user_forgotPasswordForm')->middleware('guest');
Route::post('/userForgotPassword', [EndUserController::class, 'forgotPassword'])->name('user_forgotPassword');
Route::get('/user/reset-password/{token}', [EndUserController::class, 'showResetPasswordForm'])->name('user_resetPasswordForm');
Route::post('/user/reset-password', [EndUserController::class, 'resetPassword'])->name('user_resetPassword');


Route::middleware(['end_user'])->group(function () {
    Route::get('/userLogout',       [EndUserController::class, 'logout'])->name('userLogout');
    Route::get('/userProfile', [EndUserController::class, 'profile'])->name('user_profile');
    Route::PATCH('/userProfile/{end_user}', [EndUserController::class, 'updateProfile'])->name('user_profileUpdate');
});


//End user Authentication
Route::middleware(['end_user'])->group(function () {

    //Make a comment for user
    Route::get('/{sub_category:name}/{content}/comment', [WebsiteCommentController::class, 'createComment'])->name('add-comment');
    Route::post('/{content}/comment', [WebsiteCommentController::class, 'storeComment'])->name('storeComment');

    //Make a question for user
    Route::get('/ask-question',     [QuestionController::class, 'create'])->name('ask-question');
    Route::get('/ask-question/{id}', [QuestionController::class, 'subcat'])->name('ask-questionS');
    Route::post('/ask-question',    [QuestionController::class, 'store'])->name('store-question');
});

//Show all category
Route::get('/all-category',                      [WebsiteCategoryController::class, 'all_category'])->name('all_category');

//Show all sub_category
Route::get('/{categories:name}/all-SubCategory', [WebsiteCategoryController::class, 'all_sub_category'])->name('all-sub_category');

//Show all contents
Route::get('/{sub_category:name}/all-content',  [WebsiteCategoryController::class, 'all_content'])->name('all-content');

//Show a single content
Route::get('/{sub_category:name}/{content}',    [WebsiteCategoryController::class, 'single_content'])->name('single_content');

//Show a question
Route::get('/all-question',                     [QuestionController::class, 'index'])->name('all-question');
Route::get('/single/questions/{question}',      [QuestionController::class, 'single_question'])->name('single_question');

Route::get('/about-us',                         [AboutUs::class, 'index'])->name('about_us');

Route::get('project/details/{project}',         [WebsiteProjectControler::class, 'details'])->name('project_details');
Route::get('/all-project',                      [WebsiteProjectControler::class, 'index'])->name('all-project');

Route::get('/reviews',                          [ReviewController::class, 'index'])->name('review');
Route::get('/review',                     [ReviewController::class, 'create'])->name('creat-review');
Route::post('/give/reviews',                    [ReviewController::class, 'store'])->name('store-review');
