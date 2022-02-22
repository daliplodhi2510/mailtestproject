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

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from Dalip',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('daliplodhi2510@gmail.com')->send(new \App\Mail\MailSendDefault($details));
   
    dd("Email is Sent.");
});