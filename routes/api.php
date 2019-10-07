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
Route::get('categories','CategoriesController@index');
Route::get('vendors','VendorController@index');
Route::post('vendors','VendorController@store');
Route::post('categories','CategoriesController@store');
Route::post('categories/{id}/sub-categories', 'SubCategoriesController@store');
Route::post('sub-categories/{id}/product-attributes', 'ProductAttributesController@store');
Route::post('upload', 'ImageUploadController@uploadImages');

// Get all products
Route::get('products','ProductsController@index');

// Create a new product in the system.
Route::post('vendors/{vendorId}/categories/{categoryId}/product','ProductsController@store');
