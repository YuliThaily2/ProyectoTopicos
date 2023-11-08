<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoriesController;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Subcategories;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login',[PassportAuthController::class,'login']);
Route::post('/register',[PassportAuthController::class,'register']);
Route::post('/brand_store',[BrandController::class,'store'])->middleware('auth:api');
Route::post('/brand_show',[BrandController::class, 'show']);
Route::post('/brand_update',[BrandController::class, 'update']);
Route::post('/brand_destroy',[BrandController::class,'destroy']);
Route::post('/Category_store',[CategoryController::class,'store']);
Route::post('/Category_show',[CategoryController::class, 'show']);
Route::post('/Category_update',[CategoryController::class, 'update']);
Route::post('/Category_destroy', [CategoryController::class, 'destroy']);
Route::post('/Customer_store', [CustomerController::class, 'store']);
Route::post('/Customer_show', [CustomerController::class, 'show']);
Route::post('/Customer_update', [CustomerController::class, 'update']);
Route::post('/Customer_destroy', [CustomerController::class, 'destroy']);
Route::post('/order_store', [OrderController::class, 'store']);
Route::post('/order_show', [OrderController::class, 'show']);
Route::post('/order_update', [OrderController::class, 'update']);
Route::post('/order_destroy', [OrderController::class, 'destroy']);
Route::post('/Category_destroy', [CategoryController::class, 'destroy']);
Route::get('/Product_index', [ProductController::class, 'index']);
Route::post('/Product_store', [ProductController::class, 'store']);
Route::post('/Product_show', [ProductController::class, 'show']);
Route::post('/Product_update', [ProductController::class, 'update']);
Route::post('/Product_destroy', [ProductController::class, 'destroy']);
Route::post('/Subcategories_store', [SubcategoriesController::class, 'store']);
Route::post('/Subcategories_show', [SubcategoriesController::class, 'show']);
Route::post('/Subcategories_update', [SubcategoriesController::class, 'update']);
Route::post('/Subcategories_destroy', [SubcategoriesController::class, 'destroy']);
Route::post('/Supplier_store', [SupplierController::class, 'store']);
Route::post('/Supplier_show', [SupplierController::class, 'show']);
Route::post('/Supplier_update', [SupplierController::class, 'update']);
Route::post('/Supplier_destroy', [SupplierController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
