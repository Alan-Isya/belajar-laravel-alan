<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\EloquentController;
use App\Http\Controllers\Acara19Controller;
use App\Http\Controllers\Acara20Controller;

// ACARA 17
Route::get('/query-builder', [QueryBuilderController::class, 'index']);

Route::get('/query-builder/data', [QueryBuilderController::class,'getData']);

Route::get('/query-builder/update', [QueryBuilderController::class,'updateData']);

Route::get('/query-builder/delete', [QueryBuilderController::class,'deleteData']);

Route::get('/query-builder/pluck', [QueryBuilderController::class,'pluckData']);

Route::get('/query-builder/aggregate', [QueryBuilderController::class,'aggregateData']);

Route::get('/query-builder/join', [QueryBuilderController::class,'joinData']);

Route::get('/query-builder/order', [QueryBuilderController::class,'orderData']);

Route::get('/query-builder/subquery', [QueryBuilderController::class, 'subqueryData']);

Route::get('/query-builder/raw', [QueryBuilderController::class, 'rawData']);

// ACARA 18
Route::get('/eloquent/create', [EloquentController::class, 'createData']);

Route::get('/eloquent/retrieve', [EloquentController::class, 'retrieveData']);

Route::get('/eloquent/update', [EloquentController::class, 'updateData']);

Route::get('/eloquent/delete', [EloquentController::class, 'deleteData']);

// ACARA 19
Route::get('/acara19/conditional', [Acara19Controller::class, 'conditional']);

Route::get('/acara19/relationships', [Acara19Controller::class, 'relationships']);

Route::get('/acara19/mutators-accessors', [Acara19Controller::class, 'mutatorsAccessors']);

Route::get('/acara19/soft-deletes', [Acara19Controller::class, 'softDeletes']);

Route::get('/acara19/mass-assignment', [Acara19Controller::class, 'massAssignment']);

Route::get('/acara19/query-scopes', [Acara19Controller::class, 'queryScopes']);

// Acara 20
Route::get('/acara20/form', [Acara20Controller::class, 'form']);

Route::post('/acara20/submit', [Acara20Controller::class, 'submitForm']);
