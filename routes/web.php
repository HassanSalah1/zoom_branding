<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/waiting-page', 'HomeController@zoomMeeting')->name('attendees.waiting');

// Route::get('/speaker', 'HomeController@speakersForm')->name('speaker');
// Route::get('waiting-page/speaker', 'HomeController@waitingPageSpeaker')->name('speaker.waiting');

Route::get('/', 'HomeController@msPharma')->name('pharma');
Route::post('/meeting', 'HomeController@zoomMeeting')->name('meeting');
