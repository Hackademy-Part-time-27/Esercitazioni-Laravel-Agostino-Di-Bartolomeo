<?php
use App\Http\Controllers\pageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'homePage'])->name('welcome');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');

Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');

Route::get('/about-me', [pageController::class, 'aboutMe'])->name('about-me');


Route::get('/articles', [pageController::class, 'articles'])->name('articles');

Route::get('/article/{article}', [pageController::class, 'article'])->name('article');

Route::prefix('account')->middleware('auth')->group(function () {

    Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account.index');

    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}/destroy', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('/categories', CategoryController::class);
});