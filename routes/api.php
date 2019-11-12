<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/test', function (Request $request) {
    return $request->user_image->store('images');
});
Route::post('/test2', function (Request $request) {
    $img = $request->image;
    $img = str_replace('data:image/jpeg;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    Storage::put('public/picture.jpg', $data);
    return $data;
});

Route::middleware('auth')->prefix('upload')->group(function () {
    Route::post('/baseimage', 'UploadController@uploadBaseImage');
});

Route::middleware('auth')->namespace('Gym')->group(function () {

    Route::prefix('checkin')->group(function () {
        Route::get    ('/',     'CheckinController@get');
        Route::get    ('/{id}', 'CheckinController@get');
        Route::post   ('/',     'CheckinController@create');
        Route::patch  ('/{id}', 'CheckinController@update');
        Route::delete ('/{id}', 'CheckinController@delete');
    });

    Route::prefix('invoice')->group(function () {
        Route::get    ('/',     'InvoiceController@get');
        Route::get    ('/{id}', 'InvoiceController@get');
        Route::post   ('/',     'InvoiceController@create');
        Route::patch  ('/{id}', 'InvoiceController@update');
        Route::delete ('/{id}', 'InvoiceController@delete');
    });

    Route::prefix('invoice_item')->group(function () {
        Route::get    ('/',     'InvoiceItemController@get');
        Route::get    ('/{id}', 'InvoiceItemController@get');
        Route::post   ('/',     'InvoiceItemController@create');
        Route::patch  ('/{id}', 'InvoiceItemController@update');
        Route::delete ('/{id}', 'InvoiceItemController@delete');
    });

    Route::prefix('member')->group(function () {
        Route::get    ('/',     'MemberController@get');
        Route::get    ('/{id}', 'MemberController@get');
        Route::post   ('/',     'MemberController@create');
        Route::patch  ('/{id}', 'MemberController@update');
        Route::delete ('/{id}', 'MemberController@delete');
    });

    Route::prefix('member_plan')->group(function () {
        Route::get    ('/',     'MemberPlanController@get');
        Route::get    ('/{id}', 'MemberPlanController@get');
        Route::post   ('/',     'MemberPlanController@create');
        Route::patch  ('/{id}', 'MemberPlanController@update');
        Route::delete ('/{id}', 'MemberPlanController@delete');
    });

    Route::prefix('product')->group(function () {
        Route::get    ('/',     'ProductController@get');
        Route::get    ('/{id}', 'ProductController@get');
        Route::post   ('/',     'ProductController@create');
        Route::patch  ('/{id}', 'ProductController@update');
        Route::delete ('/{id}', 'ProductController@delete');
    });

    Route::prefix('rent_thing')->group(function () {
        Route::get    ('/',     'RentThingController@get');
        Route::get    ('/{id}', 'RentThingController@get');
        Route::post   ('/',     'RentThingController@create');
        Route::patch  ('/{id}', 'RentThingController@update');
        Route::delete ('/{id}', 'RentThingController@delete');
    });

    Route::prefix('rent_list')->group(function () {
        Route::get    ('/',     'RentListController@get');
        Route::get    ('/{id}', 'RentListController@get');
        Route::post   ('/',     'RentListController@create');
        Route::patch  ('/{id}', 'RentListController@update');
        Route::delete ('/{id}', 'RentListController@delete');
    });

    Route::prefix('rent_list_item')->group(function () {
        Route::get    ('/',     'RentListItemController@get');
        Route::get    ('/{id}', 'RentListItemController@get');
        Route::post   ('/',     'RentListItemController@create');
        Route::patch  ('/{id}', 'RentListItemController@update');
        Route::delete ('/{id}', 'RentListItemController@delete');
    });
});
