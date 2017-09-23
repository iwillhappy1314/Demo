<?php

Route::group(['middleware' => 'web', 'prefix' => 'cms', 'namespace' => 'App\\Modules\Cms\Http\Controllers'], function()
{
    Route::get('/', 'CmsController@index');
});
