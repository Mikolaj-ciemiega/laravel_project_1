<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


//Route::get('peoples', [PeopleController::class, 'index']);
//Route::get('peoples/{id}', [PeopleController::class, 'show']);
//Route::post('peoples', [PeopleController::class, 'create']);
//Route::get('peoples/{id}', [PeopleController::class, 'update']);
//Route::get('peoples/{id}', [PeopleController::class, 'destroy']);

Route::apiResource('peoples', PeopleController::class);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();

//});
