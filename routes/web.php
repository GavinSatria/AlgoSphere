<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/social', 'HomeController@social')->name('social');
Route::get('/terms', 'HomeController@terms')->name('terms');

Auth::routes();

Route::get('/auth/check', 'HomeController@checkAuth');

// course
Route::get('/insert', 'CourseController@insert')->name('insert');
Route::get('/algo_intro', 'CourseController@algo_intro')->name('algo_intro');
Route::get('/array', 'CourseController@array')->name('array');
Route::get('/variable', 'CourseController@variable')->name('variable');
Route::get('/conditional', 'CourseController@conditional')->name('conditional');
Route::get('/loop', 'CourseController@loop')->name('loop');
Route::get('/function', 'CourseController@function')->name('function');
Route::get('/operator', 'CourseController@operator')->name('operator');
Route::get('/algo_example', 'CourseController@algo_example')->name('algo_example');

Route::get('/insert_ui', 'CourseController@insert_ui')->name('insert_ui');
Route::get('/ui_intro', 'CourseController@ui_intro')->name('ui_intro');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('category/{category}/courses', 'HomeController@courses_by_category')->name('courses_by_category');
Route::get('courses/{course}', 'HomeController@course_detail')->name('course_detail');

// cart
Route::get('my-carts', 'CartController@carts')->name('carts.all');
Route::post('cart/add', 'CartController@add')->name('cart.add');
Route::post('cart/remove/{id}', 'CartController@remove')->name('cart.remove');

// enroll
Route::get('enroll', 'EnrollController@enroll')->name('enroll');

// users
Route::group(['middleware' => 'auth'], function () {
    Route::get('my_courses', 'UserController@courses')->name('user.courses');
    Route::get('my_courses/{course}/lesson/{id}', 'UserController@lesson')->name('user.courses.lessons');

    // profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('', 'UserController@user_profile')->name('user.profile');
        Route::post('', 'UserController@user_profile_update')->name('user.profile.update');

        Route::view('credentials', 'users.user-credentials')->name('user.credentials');
        Route::post('credentials', 'UserController@user_credentials_update')->name('user.credentials.update');

        Route::view('photo', 'users.user-photo')->name('user.photo');
        Route::post('photo', 'UserController@user_photo_update')->name('user.photo.update');
    });

    // review
    Route::post('review', 'ReviewController@review')->name('add.review');
});