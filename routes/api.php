<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin'], function () {
    // Abilities
    Route::apiResource('abilities', 'AbilitiesController', ['only' => ['index']]);

    // Locales
    Route::get('locales/languages', 'LocalesController@languages')->name('locales.languages');
    Route::get('locales/messages', 'LocalesController@messages')->name('locales.messages');

    // Dashboard
    Route::get('dashboard', 'DashboardApiController@index')->name('dashboard');

    // Permissions
    Route::resource('permissions', 'PermissionsApiController');

    // Roles
    Route::resource('roles', 'RolesApiController');

    // Users
    Route::resource('users', 'UsersApiController');

    // Home
    Route::apiResource('homes', 'HomeApiController', ['only' => ['index']]);

    // Annoucement
    Route::post('annoucements/media', 'AnnoucementApiController@storeMedia')->name('annoucements.storeMedia');
    Route::resource('annoucements', 'AnnoucementApiController');

    // Policy Categories
    Route::resource('policy-categories', 'PolicyCategoriesApiController');

    // Policy
    Route::post('policies/media', 'PolicyApiController@storeMedia')->name('policies.storeMedia');
    Route::resource('policies', 'PolicyApiController');

    // Download Categories
    Route::resource('download-categories', 'DownloadCategoriesApiController');

    // Download
    Route::post('downloads/media', 'DownloadApiController@storeMedia')->name('downloads.storeMedia');
    Route::resource('downloads', 'DownloadApiController');

    // Examination Results
    Route::post('examination-results/media', 'ExaminationResultsApiController@storeMedia')->name('examination-results.storeMedia');
    Route::resource('examination-results', 'ExaminationResultsApiController');

    // Statistic Categories
    Route::resource('statistic-categories', 'StatisticCategoriesApiController');

    // Statistic
    Route::post('statistics/media', 'StatisticApiController@storeMedia')->name('statistics.storeMedia');
    Route::resource('statistics', 'StatisticApiController');

    
});
