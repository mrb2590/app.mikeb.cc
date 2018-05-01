<?php

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

// Home
Route::get('/', 'HomeController@index')->name('index');

// Auth
Auth::routes();

// Dashboard
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

// Files
Route::get('/files', 'FilesController@index')->name('files-index');

// Games
Route::get('/games', 'GamesController@index')->name('games-index');
Route::get('/games/brick-breaker', 'GamesController@brickBreaker')->name('games-brick-breaker');
Route::get('/games/pong', 'GamesController@pong')->name('games-pong');

// Chat
Route::get('/chat', 'ChatController@index')->name('chat-index');
