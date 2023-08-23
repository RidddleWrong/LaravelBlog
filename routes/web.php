<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class);
});
Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
    Route::group(['namespace' => 'Main', 'prefix'=>'main'], function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::group(['namespace' => 'Liked', 'prefix'=>'liked'], function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
    });
    Route::group(['namespace' => 'Comment','prefix'=>'comments'], function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
        Route::delete('/{comment}', 'DeleteController')->name('personal.comment.delete');
    });
});
//middleware: the order you are writing middlewares in array in is important. If users is not authorized then he will get kicked out before reaching 'admin' part
//middleware: makes the checkout.
// Auth checks if u are logined, if not gives u login register form.
//Admin checks if u are admin or not. if admin it let you to the namespace admin in our case.
//verified checks out if you are verified by email. If not doesnt let u in namespace
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        // так как тут используется неймспейс то и система тут другая. Когда мы прописываем тут нейм для рута, то эти неймы тут ищут совпадения с другими файлами ( в нашем случае с sidebar.blade.php )
        // и когда находит его, то в этом файле с одним из рутов тут, то автоматечески вместо этого рута, в ссылку, где он стоит, подставляется определенное имя состоящее из префиксов неймспейсов, в котором состоит данный рут. В нашем случае рут находится внутри неймспейсов admin and category и у них префиксы admin and categories. Между ними будут стоять слешы в саммой ссылке
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });
    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
});

Auth::routes(['verify' => true]);//verify true sends the verify link to user that registered himself









