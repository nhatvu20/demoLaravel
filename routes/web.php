<?php

use App\Http\Controllers\API\Postcontroller;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::post('unicode', function () {
//     return 'Phương thức post của /unicode';
// });
// Route::get('unicode', function () {
//     return view('form');
//     // return 'Phương thức post của /unicode';
// });

// Route::put('unicode', function () {
//     return 'phuong thuc put của unicode';
// });
// Route::delete('unicode', function () {
//     return 'phuong thuc delete của unicode';
// });
// Route::patch('unicode', function () {
//     return 'phuong thuc patch của unicode';
// });

// Route::match(['get', 'post'], 'unicode', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::any(['get', 'post'], 'unicode', function (Request $request) {
//     return $request->method();
// });
// Route::get('show-form', function () {
//     return view('form');
//     // return 'Phương thức post của /unicode';
// });
// Route::get('category/{category}', [CategoryController::class, 'update'])->name('category.update');
// Route::get('user/{user}', [Usercontroller::class, 'update'])->name('user.update');
// Route::get('car/{car}', [CarsController::class, 'update'])->name('car.update');
// Route::get('/cars', function () {
//     return view('welcome');
// });

// Route::get('/cars', function (Request $request) {
//     return view('form');
// });

// Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/{id}', [ProductsController::class, 'detail'])->where('id', '[a-zA-Z0-9]');
