<?php

Route::group(['prefix' => '_testeros/utils'], function () {

    Route::get('/cookie/{cookieName}', [
        'middleware' => 'web',
        'uses' => 'Harveywd\TesterosUtility\Http\Controllers\TesterosUtilityController@getCookie',
    ]);
});