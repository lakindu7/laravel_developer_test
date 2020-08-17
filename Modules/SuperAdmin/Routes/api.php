<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/superadmin', function (Request $request) {
    return $request->user();
});

Route::prefix('superadmin')->group(function () {
    /*
     * Super Admin Login Route
     */
    Route::get('login', function () {
        return "hello admin";
    });

    /*
     * Create Super Admin
     */
    Route::get('create', function () {
        return "hello admin create";
    });

    /*
     * Update Super Admin
     */
    Route::get('edit', function () {
        return "hello admin edit";
    });
});
