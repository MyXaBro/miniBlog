<?php

use App\Http\Controllers\Admin\CreateController;
use App\Http\Controllers\Admin\DeleteController;
use App\Http\Controllers\Admin\EditController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SaveController;
use App\Http\Controllers\Admin\ShowController;
use App\Http\Controllers\Admin\UpdateController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::group(['prefix' => 'show', 'middleware' => 'auth'], function () {
    Route::get('/{post}', [\App\Http\Controllers\ShowController::class, 'index'])->name('show');
    Route::post('/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace'=> 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'post'], function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('/create', [CreateController::class, 'index'])->name('post.create');
        Route::post('/save', [SaveController::class, 'index'])->name('post.save');
        Route::get('/{post}', [ShowController::class, 'index'])->name('post.show');
        Route::get('/{post}/edit-post', [EditController::class, 'index'])->name('post.edit');
        Route::patch('/{post}', [UpdateController::class, 'index'])->name('post.update');
        Route::delete('/{post}', [DeleteController::class, 'index'])->name('post.delete');
    });

    Route::group(['namespace' => 'User', 'prefix'=>'users'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\User\IndexController::class, 'index'])->name('user.index');
        Route::get('/create', [\App\Http\Controllers\Admin\User\CreateController::class, 'index'])->name('user.create');
        Route::post('/', [\App\Http\Controllers\Admin\User\StoreController::class, 'index'])->name('user.store');
        Route::get('/{user}', [\App\Http\Controllers\Admin\User\ShowController::class, 'index'])->name('user.show');
        Route::get('/{user}/edit', [\App\Http\Controllers\Admin\User\EditController::class, 'index'])->name('user.edit');
        Route::patch('/{user}', [\App\Http\Controllers\Admin\User\UpdateController::class, 'index'])->name('user.update');
        Route::delete('/{user}', [\App\Http\Controllers\Admin\User\DeleteController::class, 'index'])->name('user.delete');
    });
});
