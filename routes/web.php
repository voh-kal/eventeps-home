<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\RepliesController;
use Illuminate\Support\Facades\Route;

Route::get('/register', 'AdminController@register_view');
Route::get('/anoda', 'AdminController@anoda');
Route::match(['get', 'post'], '/', [HomeController::class, 'home']);
Route::match(['get', 'post'], '/about', [HomeController::class, 'about']);
Route::match(['get', 'post'], '/features', [HomeController::class, 'features']);
Route::match(['get', 'post'], '/use-cases', [HomeController::class, 'use_cases']);
Route::match(['get', 'post'], '/faqs', [HomeController::class, 'faqs']);
Route::match(['get', 'post'], '/resources', [HomeController::class, 'resources']);
Route::match(['get'], '/resources/{id}', [HomeController::class, 'single_blog']);
Route::match(['get', 'post'], '/get-started', [HomeController::class, 'welcome']);
Route::post('/api/event-registration', [HomeController::class, 'store']);
    Route::get('/widget', [HomeController::class, 'widget'])->name('widget');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::get('/like/{post}', [LikesController::class, 'likePost'])->name('like.store');

