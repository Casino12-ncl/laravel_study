<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@UpdateMessageSubmit'
           )->name('contact-update-submit');
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@UpdateMessage'
           )->name('update-message');
Route::get('/contact/all/{id}', 'App\Http\Controllers\ContactController@ShowOneMessage'
           )->name('contact-data-one');
Route::get('/contact/all/{id}/delete', 'App\Http\Controllers\ContactController@DeleteMessage'
            )->name('contact-delete');
Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
