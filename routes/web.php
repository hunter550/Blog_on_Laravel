<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['namespace' => '\App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController@index')->name('main.index');
    Route::get('/about', 'IndexController@about')->name('main.about');
    Route::get('/soon', 'IndexController@soon')->name('main.soon');
    Route::get('/post', 'IndexController@show')->name('main.show');
});



//Route::group(['namespace' => '\App\Http\Controllers\Post'], function () {
//    Route::get('/post', 'IndexController@index')->name('post.index');
//});

//Route::group(['middleware' => ['guest']], function () {
//    Route::group(['namespace' => '\App\Http\Controllers\Guest', 'prefix' => 'guest'], function () {
//        Route::get('/login', 'IndexController@loginForm')->name('login.create');
//        Route::post('/login', 'IndexController@login')->name('login');
//    });
//    Route::group(['namespace' => '\App\Http\Controllers\Personal\Main', 'prefix' => 'main'], function () {
//        Route::get('/', 'IndexController')->name('liked.index');
//    });
//
//});
Route::group(['namespace' => '\App\Http\Controllers\Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
    Route::group(['namespace' => '\App\Http\Controllers\Personal\Main', 'prefix' => ''], function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::group(['namespace' => '\App\Http\Controllers\Personal\Liked', 'prefix' => 'liked'], function () {
        Route::get('/', 'IndexController')->name('liked.index');
    });
    Route::group(['namespace' => '\App\Http\Controllers\Personal\Comment', 'prefix' => 'comment'], function () {
        Route::get('/', 'IndexController')->name('comment.index');
    });
});
//, 'middleware' => ['auth','admin', 'verified']
Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => '\App\Http\Controllers\Admin\Main', 'prefix' => ''], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => '\App\Http\Controllers\Admin\User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('user.index');
        Route::get('/create', 'CreateController')->name('user.create');
        Route::post('/', 'StoreController')->name('user.store');
        Route::get('/{user}', 'ShowController')->name('user.show');
        Route::get('/{user}/edit', 'EditController')->name('user.edit');
        Route::patch('/{user}', 'UpdateController')->name('user.update');
        Route::delete('/{user}', 'DeleteController')->name('user.delete');
//        Route::get('/{user}/edit', function () {
//            return "Привет, роут работает.";
//        })->name('user.edit');
    });

    Route::group(['namespace' => '\App\Http\Controllers\Admin\Category', 'prefix' => 'category'], function () {
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('category.store');
        Route::get('/{category}', 'ShowController')->name('category.show');
        Route::get('/{category}/edit', 'EditController')->name('category.edit');
        Route::patch('/{category}', 'UpdateController')->name('category.update');
        Route::delete('/{category}', 'DeleteController')->name('category.delete');
//        Route::get('/{category}/edit', function () {
//            return "Привет, роут работает.";
//        })->name('category.edit');
    });
    Route::group(['namespace' => '\App\Http\Controllers\Admin\Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('post.index');
        Route::get('/create', 'CreateController')->name('post.create');
        Route::post('/', 'StoreController')->name('post.store');
        Route::get('/{post}', 'ShowController')->name('post.show');
        Route::get('/{post}/edit', 'EditController')->name('post.edit');
        Route::patch('/{post}', 'UpdateController')->name('post.update');
        Route::delete('/{post}', 'DeleteController')->name('post.delete');
//        Route::get('/{post}/edit', function () {
//            return "Привет, роут работает.";
//        })->name('category.edit');
    });
    Route::group(['namespace' => '\App\Http\Controllers\Admin\Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('tag.index');
        Route::get('/create', 'CreateController')->name('tag.create');
        Route::post('/', 'StoreController')->name('tag.store');
        Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('tag.delete');
//        Route::get('/{tag}/edit', function () {
//            return "Привет, роут работает.";
//        })->name('category.edit');
    });

});

Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
