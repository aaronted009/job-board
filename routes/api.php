<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ApplicationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources(['companies' => CompanyController::class, 'users' => UserController::class, 'offers' => OfferController::class, 'interviews' => InterviewController::class, 'employees' => EmployeeController::class, 'applications' => ApplicationController::class]);
