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
Route::get('/home', function () {
    return view('welcome');
})->name('home');
Auth::routes();



Route::resource('donation','App\Http\Controllers\DonationsController');
Route::resource('order','App\Http\Controllers\OrdersController')->except('show',);

Route::middleware(['auth'])->group(function(){
    Route::get('order/{donation_id}','App\Http\Controllers\OrdersController@show')->name('order.show');


});  


Route::get('/about', function () {
    return view('About');
});
Route::get('/services', function () {
    return view('Services');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/vission_mission', function () {
    return view('Vission_Mission');
});
Route::get('/mob', function () {
    return view('MOB');
});
Route::get('/faq', function () {
    return view('FAQ');
});
Route::get('/cts', function () {
    return view('CTS');
});

Route::get('/places', function () {
    return view('Places');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
