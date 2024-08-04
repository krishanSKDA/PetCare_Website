<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Page.Home');
});
Route::get('/About', function () {
    return view('Page.About');
});
Route::get('/Service', function () {
    return view('Page.Service');
});
Route::get('/Blog', function () {
    return view('Page.Blog');
});
Route::get('/ContactUs', function () {
    return view('Page.Contact');
});
Route::get('/BlogDetails', function () {
    return view('Page.BlogDetails');
});
Route::get('/Product', function () {
    return view('Page.Product');
});
Route::get('/checkout', function () {
    return view('Page.checkout');
});
