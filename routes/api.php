<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Service
    Route::apiResource('services', 'ServiceApiController', ['except' => ['show']]);

    // Employee
    Route::post('employees/media', 'EmployeeApiController@storeMedia')->name('employees.storeMedia');
    Route::apiResource('employees', 'EmployeeApiController', ['except' => ['show']]);

    // Appointment
    Route::apiResource('appointments', 'AppointmentApiController', ['except' => ['show']]);
});
