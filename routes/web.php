<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/price', function () {
    return view('price');
});
Route::get('/Register', function () {
    return view('auth.register');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/report', function () {
    return view('report');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/404', function () {
    return view('errors/404');
});
// Route::got('/home', function () {
//     return view('home');
// });
// Route::post('booking', App\Http\Controllers\BookingController::class)->name('booking.create');
Route::resource('booking', BookingController::class);
Route::resource('message', MessageController::class);
Route::resource('problem', ReportController::class);
Route::resource('comment', CommentController::class);
Route::get('/', [CommentController::class , 'index']);
Route::get('/bookingreport', [BookingController::class , 'index'])->name('bookingreport');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});