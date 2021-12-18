<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\Brand;
use App\Http\Controllers\Product;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// categorry product
Route::get('/active-category-product/{category_product_id}',[Category::class,'active_category_product'] );
Route::get('/unactive-category-product/{category_product_id}',[Category::class,'unactive_category_product'] );

Route::get('/delete-category-product/{category_product_id}',[Category::class,'delete_category_product'] );

Route::post('/update-category-product',[Category::class,'update_category_product'] );

Route::post('/save-category-product',[Category::class,'save_category_product'] );
// end categorry product

//brand product
Route::get('/active-brand-product/{brand_product_id}',[Brand::class,'active_brand_product'] );
Route::get('/unactive-brand-product/{brand_product_id}',[Brand::class,'unactive_brand_product'] );

Route::get('/delete-brand-product/{brand_product_id}',[Brand::class,'delete_brand_product'] );

Route::post('/update-brand-product',[Brand::class,'update_brand_product'] );

Route::post('/save-brand-product',[Brand::class,'save_brand_product'] );

Route::get('/get-brand-by-category/{category_product_id}',[Brand::class,'get_brand_by_category'] );// sự kiện thay đổi lựa chọn selector

//end brand product

//product
Route::get('/active-product/{product_id}',[Product::class,'active_product'] );
Route::get('/unactive-product/{product_id}',[Product::class,'unactive_product'] );
Route::get('/delete-product/{product_id}',[Product::class,'delete_product'] );

Route::post('/save-product',[Product::class,'save_product'] );
Route::post('/update-product',[Product::class,'update_product'] );

//end product