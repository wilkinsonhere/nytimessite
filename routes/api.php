<?php

use Illuminate\Support\Facades\Route;

$NAMESPACE_API = 'App\Http\Controllers\API';

Route::group(['namespace' => $NAMESPACE_API], function() {
	Route::get('/user/email', 'User\EmailController');
});



// Регистрация

Route::group(['namespace' => $NAMESPACE_API, 'prefix' => '/registration'], function() {
	Route::get('/question', 'Auth\QuestionController');

	Route::post('/', 'Auth\RegisterController');
});

Route::post('/login', $NAMESPACE_API . '\Auth\LoginController');