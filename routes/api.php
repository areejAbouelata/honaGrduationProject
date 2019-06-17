<?php

use Illuminate\Http\Request;

//auth:unwell-users

Route::group(['namespace' => 'API', 'prefix' => 'v1'], function () {
    Route::get('/welcome', 'SettingController@welcome')->name('welcome');
    Route::post('/contact', 'SettingController@contact')->name('/contact');
    Route::post('/register', 'UserController@register')->name('/register');
    Route::post('/login', 'UserController@login')->name('/login');
    Route::post('password/create', 'PasswordResetController@create')->name('password/create');
    Route::get('password/find/{token}', 'PasswordResetController@find')->name('password/find/');
    Route::post('password/reset/', 'PasswordResetController@reset')->name('password/reset');

    Route::group(['middleware' => 'auth:unwell-users'], function () {
        Route::get('profile' , 'UserController@showProfile')->name('profile');
        Route::post('profile/edit' , 'UserController@editProfile')->name('profile/edit');
        Route::get('list/friends/' , 'UserController@listFriends')->name('list/friends/');
        Route::post('send/message' , 'MessageController@send')->name('send/message');
        Route::post('inbox/messages' , 'MessageController@inbox') ->name('inbox/messages') ;
        Route::post('/seen/message', 'MessageController@seen')->name('/seen/message');
        Route::get('/my/messages' , 'MessageController@userMessages')->name('/my/messages');
        Route::post('/doctor/add/' , 'VisitDocController@makeVisit')->name('/doctor/add/');
        Route::get('/doctors/mine' , 'VisitDocController@getMyDoctors')->name('/doctors/mine');

    });
    Route::post('/recommended/doctors' , 'RecommendationController@doctors')->name('/recommended/doctors');
    Route::post('/recommended/hospitals' , 'RecommendationController@hospitals')->name('/recommended/hospitals');
    Route::get('/doctors' , 'RecommendationController@getDoctors')->name('/doctors');
    Route::post('/doctor/get/' , 'RecommendationController@showDoctor')->name('/doctor/get/');
    Route::get('/hospitals' , 'RecommendationController@allHospitals')->name('/hospitals/');
    Route::post('/hospital/get/' , 'RecommendationController@showHospital')->name('/hospital/get/');
});