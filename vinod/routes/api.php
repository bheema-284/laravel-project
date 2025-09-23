<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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
Route::get('students',[StudentController::class,'list']);
//Route::post('add-student',[StudentController::class,'addStudent']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('update-student',[StudentController::class,'updateStudent']);
//Route::delete('delete-student',[StudentController::class,'deleteStudent']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
Route::get('/students/search', [StudentController::class, 'search']);

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);          
Route::get('/users/{id}', [UserController::class, 'show']);   
Route::post('/users', [UserController::class, 'store']);         
//Route::put('/users/{id}', [UserController::class, 'update']);
Route::put('/users/{id}', [UserController::class, 'update']);    
Route::delete('/users/{id}', [UserController::class, 'destroy']);