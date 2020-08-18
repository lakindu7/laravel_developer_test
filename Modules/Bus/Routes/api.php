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

Route::middleware('auth:api')->get('/bus', function (Request $request) {
    return $request->user();
});

Route::resources([
    'buses' => 'BusController',
    'busroutes' => 'BusRouteController',
    'busschedules' => 'BusScheduleController',
    'busschedulebookings' => 'BusScheduleBookingController',
    'busseats' => 'BusSeatController',
    'routes' => 'RouteController'
]);
