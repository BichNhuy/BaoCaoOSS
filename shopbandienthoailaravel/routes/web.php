<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Category;
use App\Http\Controllers\Brand;
use App\Http\Controllers\Product;
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
//frontend
Route::get('/',[HomeController::class,'index'] );
Route::get('/trang-chu',[HomeController::class,'index']);

//backend
Route::get('/admin',[AdminController::class,'index'] );//hiên thị trang admin login
Route::post('/admin-dashboard',[AdminController::class,'dashboard'] );// kiểm tra tính hợp lệ của dữ liệu rồi mới hiển thị trang /dashboard
Route::get('/dashboard',[AdminController::class,'show_dashboard'] );//hiển thị trang dashboard
Route::get('/logout',[AdminController::class,'logout'] );

Route::get('/add-category-product',[Category::class,'add_category_product'] );
Route::get('/all-category-product',[Category::class,'all_category_product'] );
Route::get('/edit-category-product/{category_product_id}',[Category::class,'edit_category_product'] );

Route::get('/add-brand-product',[Brand::class,'add_brand_product'] );
Route::get('/all-brand-product',[Brand::class,'all_brand_product'] );
Route::get('/edit-brand-product/{brand_product_id}',[Brand::class,'edit_brand_product'] );

Route::get('/add-product',[Product::class,'add_product'] );
Route::get('/all-product',[Product::class,'all_product'] );
Route::get('/edit-product/{product_id}',[Product::class,'edit_product'] );




