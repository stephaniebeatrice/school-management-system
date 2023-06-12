<?php

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
//{BASE_URL}/api/students
Route::apiResource("/students", "App\Http\Controllers\StudentAdmissionController");

//{BASE_URL}/api/students
Route::apiResource("/teachers", "App\Http\Controllers\TeacherRegistrationController");

//{BASE_URL}/api/accomodations
Route::apiResource("/accomodations", "App\Http\Controllers\AccomodationController");
