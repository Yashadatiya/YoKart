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

Route::prefix('product-listing')->group(function() {
    Route::get('/', 'PorductListingController@index')->name('productListing');
    // Route::get('/sub-{category}', 'PorductListingController@SubCategory')->name('sub');
    Route::get('/sub-category/{subcat}', 'PorductListingController@SubCategory')->name('sub');
    Route::get('/product/{product}', 'PorductListingController@ProductDetail')->name('product');
    Route::post('/product/change-data', 'PorductListingController@ProductColorWiseDetail');
    Route::post('/brand/change-data', 'PorductListingController@ProductBrandWiseDetail');
});
