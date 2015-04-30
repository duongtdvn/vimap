<?php
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 12:45 PM
 */

Route::api('v1', function()
{
    Route::group(['prefix' => 'map', 'namespace' => 'Sololab\Vimap\Controllers'], function()
    {
        Route::resource('provinces', 'ProvinceController', ['only' => ['index', 'show']]);
        Route::resource('districts', 'DistrictController', ['only' => ['index', 'show']]);
        Route::resource('wards', 'WardController', ['only' => ['index', 'show']]);
    });
});