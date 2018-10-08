<?php

Route::group(['prefix' => '_testeros/utils', 'namespace' => 'Harveywd\TesterosUtility\Http\Controllers'], function () {
    Route::get('/cookie/{cookieName}', [
        'middleware' => 'web',
        'uses' => 'TesterosUtilityController@getCookie',
    ]);
});