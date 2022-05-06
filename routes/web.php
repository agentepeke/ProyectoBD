<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\Home;
use App\Http\Controllers\CategoriesController; 
use App\Http\Controllers\ProductsController; 
use App\Http\Controllers\admin; 
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
Route::get('/login', function () {
    return view('login');
}); 
Route::post('/Log', [Home::class, 'login']);
Route::get('/logout', function(){
    session()->forget('admin');
    return redirect('/');
});

Route::get('/admin', [admin::class, 'index']); 
Route::get('/categories/admin/{id}', [admin::class, 'categories']);
Route::get('/', [Home::class, 'index']);


Route::get('/nueva-marca', function () {
    if(!session()->has('admin')){
        return view('empty');
    }
    return view('brandForm');
});

Route::post('/insert-brand', [BrandsController::class, 'create']);

Route::get('/brand/edit/{id}', [BrandsController::class, 'edit']); 

Route::get('/brand/delete/{id}', [BrandsController::class, 'destroy']);

Route::post('/update-brand/{id}', [BrandsController::class, 'update']);

 
Route::get('/categories/{id}', [CategoriesController::class, 'categories']);  

Route::get('/nueva-categoria/{id}', [CategoriesController::class, 'new_categorie']); 

Route::post('/insert-categorie', [CategoriesController::class, 'create']); 

Route::get('/edit/categorie/{id}', [CategoriesController::class, 'edit']); 

Route::post('/update-categorie/{id}', [CategoriesController::class, 'update']); 

Route::get('/delete/categorie/{id}', [CategoriesController::class, 'destroy']);



Route::get('/nuevo-producto/{id}', [ProductsController::class, 'new_product']);  

Route::post('/insert-product', [ProductsController::class, 'create']);

Route::get('/edit/product/{id}', [ProductsController::class, 'edit']);  

Route::post('/update-product/{id}', [ProductsController::class, 'update']); 

Route::get('/delete/product/{id}', [ProductsController::class, 'destroy']);