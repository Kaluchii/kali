<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',                 'FrontController@getIndex');
Route::get('/about',         'FrontController@getAbout');
Route::get('/services',         'FrontController@getServices');
Route::get('/guarantee',         'FrontController@getGuarantee');
Route::get('/sale',         'FrontController@getSale');
Route::get('/windows-price',         'FrontController@getPrices');
Route::get('/balconies-price',         'FrontController@getPrices');
Route::get('/contacts',         'FrontController@getContacts');
Route::get('/production',         'FrontController@getProduction');
Route::get('/production/{slug}',      'FrontController@getProductionItem');
Route::get('/components',         'FrontController@getComponents');
Route::get('/components/{slug}',      'FrontController@getComponentsCategory');
Route::get('/components/{slug}/{id}',      'FrontController@getComponentsItem');


Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',         'AdminController@getIndex');



    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

