<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::group(['domain' => 'salevia.com'], function () {

//     Route::group(['prefix'=>'{country}'],function(){
        Route::get('/test', 'HomeController@test');
        Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
        Route::get('/category/{category}', ['as'=>'home-category', 'uses'=>'HomeController@category'] );
        Route::get('/product-detail/{product_id}', 'HomeController@productDetail');
        Route::get('/search', 'HomeController@searchProduct');
    // });

    // Route::get('/test', 'HomeController@test');
    // Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
    // Route::get('/category/{category}', ['as'=>'home-category', 'uses'=>'HomeController@category'] );
    // Route::get('/product-detail/{product_id}', 'HomeController@productDetail');
    // Route::get('/search', 'HomeController@searchProduct');


// });

// Route::group(['domain' => '{subdomain}.salevia.com'], function () {

//     Route::group(['prefix'=>'{country}'],function(){
//         Route::get('/test', 'HomeController@test');
//         Route::get('/', 'HomeController@index');
//         Route::get('/category/{category}', 'HomeController@category');
//         Route::get('/product-detail/{product_id}', 'HomeController@productDetail');
//         Route::get('/filter-price', 'HomeController@filter_price');
//         Route::get('/search', 'HomeController@searchProduct');
//     });
    
//     Route::get('/test', 'HomeController@test');
//     Route::get('/', 'HomeController@index');
//     Route::get('/category/{category}', 'HomeController@category');
//     Route::get('/product-detail/{product_id}', 'HomeController@productDetail');
//     Route::get('/filter-price', 'HomeController@filter_price');
//     Route::get('/search', 'HomeController@searchProduct');
// });

   // Route::get('/test', 'HomeController@test');
   // Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
   // Route::get('/category/{category}', ['as'=>'home-category', 'uses'=>'HomeController@category2'] );
   // Route::get('/product-detail/{product_id}', 'HomeController@productDetail');


// Route::group(['domain' => '{shop}.localhost'], function () {
//    Route::get('/', 'HomeController@index');
//    Route::get('/test', 'HomeController@test');
//    Route::get('/category/{category}', 'HomeController@category');
//    Route::get('/product-detail/{product_id}', 'HomeController@productDetail');
//    Route::get('/filter-price', 'HomeController@filter_price');
// });