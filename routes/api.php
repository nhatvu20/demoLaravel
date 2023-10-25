<?php

use App\Http\Controllers\API\Usercontroller;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\TodosController;
use App\Models\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/user', function (Request $request) {
//     return "as";
// });

// Route::post('/user', [Usercontroller::class, 'create']);


// Route::apiResource('posts', \App\Http\Controllers\API\Usercontroller::class);

// Route::post('/person', [PersonController::class, 'create']);
// Route::get('/cars', function (Request $request) {
//     return 'as';
// // });
Route::post('/cars', [CarsController::class, 'create']);
Route::get('/cars', [CarsController::class, 'getAll']);
Route::get('/cars/{id}', [CarsController::class, 'getOne']);
Route::delete('/cars/{id}', [CarsController::class, 'destroy']);
Route::put('/cars/{id}', [CarsController::class, 'update']);


Route::post('/todos', [TodosController::class, 'create']);
Route::get('/todos', [TodosController::class, 'getAll']);
Route::get('/todos/{id}', [TodosController::class, 'getOne']);
Route::delete('/todos/{id}', [TodosController::class, 'destroy']);
Route::put('/todos/{id}', [TodosController::class, 'update']);

// Route::middleware(['auth'])->prefix("cars")->group(function () {
//     Route::get('/', [CarsController::class, 'getAll']);
//     Route::get('/{id}', [CarsController::class, 'getOne']);
//     Route::delete('/{id}', [CarsController::class, 'deleteCar']);
//     Route::post('/', [CarsController::class, 'create']);
//     Route::put('/{id}', [CarsController::class, 'update']);
// });

Route::fallback(function () {
    return response()->json([
        'message' => 'Không tồn tại Route này !!!'
    ], 404);
});
