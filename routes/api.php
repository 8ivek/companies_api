<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'companies' => 'CompanyController'
]);

Route::fallback(function () {
    return response()->json(['error' => ['message' => 'you are in the wrong place, contact us if its an error.']], 400)
        ->header('Content-Type', 'text/json');
});
