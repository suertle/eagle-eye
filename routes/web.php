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

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/', function () { return view('action.index'); });
    Route::get('/dashboard', function () { return view('action.dashboard'); })->name('dashboard');
    Route::get('/checkin', function () { return view('action.checkin'); })->name('checkin');
    Route::get('/cashier', function () { return view('action.cashier'); })->name('cashier');
    Route::get('/rent', function () { return view('action.rent'); })->name('rent');

    Route::prefix('member')->group(function () {
        Route::get('/',       function () { return view('data.member.search'); })->name('member');
        Route::get('/create', function () { return view('data.member.id')->with('id', ''); });
        Route::get('/{id}',   function ($id) { return view('data.member.id')->with('id', $id); });
    });

    Route::prefix('member_plan')->group(function () {
        Route::get('/',       function () { return view('data.member_plan.search'); })->name('member_plan');
        Route::get('/create', function () { return view('data.member_plan.id')->with('id', ''); });
        Route::get('/{id}',   function ($id) { return view('data.member_plan.id')->with('id', $id); });
    });

    Route::prefix('product')->group(function () {
        Route::get('/',       function () { return view('data.product.search'); })->name('product');
        Route::get('/create', function () { return view('data.product.id')->with('id', ''); });
        Route::get('/{id}',   function ($id) { return view('data.product.id')->with('id', $id); });
    });

    Route::prefix('rent_thing')->group(function () {
        Route::get('/',       function () { return view('data.rent_thing.search'); })->name('rent_thing');
        Route::get('/create', function () { return view('data.rent_thing.id')->with('id', ''); });
        Route::get('/{id}',   function ($id) { return view('data.rent_thing.id')->with('id', $id); });
    });

});
