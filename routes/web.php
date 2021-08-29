<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AController;

// category
Route::get('all_categories' , [AController::class , 'all_categories'])->name('all_categories');
Route::post("hello",[AController::class,"'all_categories "])->name("inpname");
//  product
Route::get('all_products' , [AController::class , 'all_products'])->name('all_products');
Route::get('create_product' , [AController::class , 'create_product'])->name('create_product');
Route::post('storePro', [AController::class , 'storePro'])->name('category.storePro');
Route::put('editPro/{id}', [AController::class , 'editPro']);
Route::delete('destroyPro/{id}', [AController::class , 'destroyPro']);



//dashbord
Route::get('/', function () {
    return view('layout.dashbord');
})->name("dashbord");

