<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function () {
    /* Pantallas Generales */
    Route::get('/', [
        'uses' => 'FrontController@index',
        'as' => 'index',
    ]);

    Route::get('/acerca-de-nosotros', [
        'uses' => 'FrontController@aboutUs',
        'as' => 'about.us',
    ]);

    Route::get('/proyectos', [
        'uses' => 'FrontController@projects',
        'as' => 'projects',
    ]);

    Route::get('/proyectos/{slug}', [
        'uses' => 'FrontController@projectDetail',
        'as' => 'projects.detail'
    ])->where('slug', '[\w\d\-\_]+');

    /* Pantallas Generales */
    Route::get('/terminos-y-condiciones', [
        'uses' => 'FrontController@terms',
        'as' => 'terms',
    ]);

    Route::get('/aviso-de-privacidad', [
        'uses' => 'FrontController@privacy',
        'as' => 'privacy',
    ]);

    Route::get('/uso-de-cookies', [
        'uses' => 'FrontController@cookies',
        'as' => 'cookies',
    ]);
});