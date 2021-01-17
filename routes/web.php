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

