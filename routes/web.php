<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return "<h1>This is home page</h1>";
});

Route::get('/blog/{id}', function ($id) {
    return "<h1>This is home page : {$id}</h1>";
});

Route::get('/blog/{id}/edit', function ($id) {
    return "<h1>This is home page : {$id} for edit</h1>";
});

Route::get('/blog/{a}/{b}/{c}', function ($a, $b, $c) {
    return "<h1>This is home page : {$a},{$b},{$c} for edit</h1>";
});

Route::get('/myorder/create', function () {
    return "<h1>This is order form page : " . request("username") . " </h1>";
});

Route::get('/myorder/create', function () {
    return "<h1>This is order form page : " . request("id") . " page : " . request("username") . " </h1>";
});

Route::get("/hello", function () {
    return view("hello");
});

Route::get('/greeting', function () {

    $name = 'James';
    $last_name = 'Mars';

    return view('greeting', compact('name', 'last_name'));
});

Route::get("/gallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://amp.insider.com/images/5b7acee73cccd122008b45ac-750-563.jpg";
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

    return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
});

Route::get('/gallery/ant', function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get('/gallery/bird', function () {
    $bird = "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg";
    return view("test/bird", compact("bird"));
});

Route::get('/gallery/cat', function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});
Route::get("/myprofile/create", "MyProfileController@create");

Route::get("/myprofile/{id}/edit", "MyProfileController@edit");
Route::get("/myprofile/{id}", "MyProfileController@show");

Route::get( "/newgallery" , "MyProfileController@gallery" );
Route::get( "/newgallery/ant" , "MyProfileController@ant" );
Route::get( "/newgallery/bird" , "MyProfileController@bird" );
Route::get( "/coronavirus" , "MyProfileController@coronavirus" );

Route::get("/teacher" , function (){
	return view("teacher/index");
});

Route::get("/student" , function (){
	return view("student/index");
});

Route::get('/table', function () {
    return view('layout/table');
});

// Route::middleware(['auth', 'role:admin'])->group(function () {
// Route::get('/covid19', 'Covid19Controller@index');
// });
// Route::get("/covid19/create", "Covid19Controller@create");
// Route::post("/covid19", "Covid19Controller@store");
// Route::get('/covid19/{id}', 'Covid19Controller@show');
// Route::get("/covid19/{id}/edit", "Covid19Controller@edit");
// Route::patch("/covid19/{id}", "Covid19Controller@update");
// Route::delete('/covid19/{id}', 'Covid19Controller@destroy');

//READ
Route::middleware(['auth', 'role:admin,teacher'])->group(function () {
    Route::resource('covid19', 'Covid19Controller')->only(['index', 'show' ]);
    
    });
    //WRITE
    Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('covid19', 'Covid19Controller')->except(['index', 'show' ]);
    });
    

Route::get('/staff', 'StaffController@index');
Route::get("/staff/create", "StaffController@create");
Route::post("/staff", "StaffController@store");
Route::get('/staff/{id}', 'StaffController@show');
Route::get("/staff/{id}/edit", "StaffController@edit");
Route::patch("/staff/{id}", "StaffController@update");
Route::delete('/staff/{id}', 'StaffController@destroy');


Route::resource('post', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Google login
Route::get('login/google','Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback','Auth\LoginController@handleGoogleCallback');
// Facebook login
Route::get('login/facebook','Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback','Auth\LoginController@handleFacebookCallback');
// Line login
Route::get('login/line','Auth\LoginController@redirectToLine')->name('login.line');
Route::get('login/line/callback','Auth\LoginController@handleLineCallback');
Route::resource('post', 'PostController');
Route::resource('post', 'PostController');
Route::resource('post', 'PostController');
Route::resource('user', 'userController');
Route::resource('profile', 'profileController');
Route::resource('vehicle', 'vehicleController');