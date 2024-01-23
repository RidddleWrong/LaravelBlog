<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);//verify true sends the verify link to user that registered himself

Route::redirect('/','posts');

Route::namespace('App\Http\Controllers\Post')->prefix('posts')->group(function () {
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/{post}', 'ShowController')->name('post.show');

    Route::namespace('Comment')->prefix('{post}/comments')->group(function () {
        Route::post('/', 'StoreController')->name('post.comment.store');
    });

    Route::namespace('Like')->prefix('{post}/likes')->group(function () {
        Route::post('/', 'StoreController')->name('post.like.store');
    });
});

Route::namespace('App\Http\Controllers\Category')->prefix('categories')->group(function () {
    Route::get('/', 'IndexController')->name('category.index');

    Route::namespace('Post')->prefix('{category}/posts')->group(function () {
        Route::get('/', 'ShowController')->name('category.post.show');
    });
});

Route::middleware(['auth', 'verified'])->prefix('personal')->namespace('App\Http\Controllers\Personal')->group(function () {
    Route::namespace('Main')->prefix('main')->group(function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });

    Route::namespace('Liked')->prefix('liked')->group(function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
    });

    Route::namespace('Comment')->prefix('comments')->group(function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
        Route::delete('/{comment}', 'DeleteController')->name('personal.comment.delete');
    });
});

Route::middleware(['auth', 'admin', 'verified'])->prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::namespace('Post')->prefix('posts')->group(function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });

    Route::namespace('Category')->prefix('categories')->group(function () {
        // Коли ми даємо нейми в цьому неймспейсі, то ці рути шукають де до них звертаються в коді (в нашому разі sidebar.blade.php )
        // І якщо знаходять використання якогось нейму, то його відображення в якості url буде результатом складання всіх префіксів в группах яких знаходиться данний рут. У нашому випадку рут знаходиться всередині неймспейсів admin and category і мають префікси admin and categories. Між ними стоятимуть слєші у самій ссилці: admin/categories
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });

    Route::namespace('Tag')->prefix('tags')->group(function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
    });

    Route::namespace('User')->prefix('users')->group(function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
});










