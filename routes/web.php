<?php
use App\Http\Controllers\pageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'homePage'])->name('welcome');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');

Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');

Route::get('/about-me', [pageController::class, 'aboutMe'])->name('about-me');


Route::get('/articles', [pageController::class, 'articles'])->name('articles');

Route::get('/articolo/{article?}', [pageController::class, 'article'])->name('article');

