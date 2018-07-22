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
Route::get('/ru/185-uslugi.html',         'FrontController@getServices');
Route::get('/guarantee',         'FrontController@getGuarantee');
Route::get('/sale',         'FrontController@getSale');
Route::get('/windows-price',         'FrontController@getWindowsPrices');
Route::get('/balconies-price',         'FrontController@getBalconiesPrices');
Route::get('/contacts',         'FrontController@getContacts');
Route::get('/products',         'FrontController@getProducts');
Route::get('/products/{slug}',      'FrontController@getProductsItem');
Route::get('/components',         'FrontController@getComponents');
Route::get('/components/{slug}',      'FrontController@getComponentsCategory');
Route::get('/components/{other}/{slug}',      'FrontController@getComponentsItem');


Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',         'AdminController@getIndex');


    Route::get('/all',                      'AdminController@getAll');
    Route::get('/home-slider',                     'AdminController@getSlider');
    Route::get('/home-facts',                   'AdminController@getFacts');
    Route::get('/home-examples',                    'AdminController@getExamples');
    Route::get('/home-windows',              'AdminController@getHomeWindows');
    Route::get('/home-windows/{id}',              'AdminController@getHomeWindowsItem');
    Route::get('/home-balconies',         'AdminController@getHomeBalconies');
    Route::get('/home-balconies/{id}',         'AdminController@getHomeBalconiesCategory');
    Route::get('/home-balconies/{other}/{id}',         'AdminController@getHomeBalconiesItem');
    Route::get('/home-advantages',                 'AdminController@getAdvantages');
    Route::get('/home-info',            'AdminController@getHomeInfo');
    Route::get('/home-seo',   'AdminController@getHomeMeta');
    Route::get('/production_cat_1',             'AdminController@getProduction1');
    Route::get('/production_cat_1/{id}',             'AdminController@getProduction1Item');
    Route::get('/production_cat_2',             'AdminController@getProduction2');
    Route::get('/production_cat_2/{id}',             'AdminController@getProduction2Item');
    Route::get('/production_cat_3',             'AdminController@getProduction3');
    Route::get('/production_cat_3/{id}',             'AdminController@getProduction3Item');
    Route::get('/guarantee',        'AdminController@getGuarantee');
    Route::get('/windows-price',                  'AdminController@getWindows');
    Route::get('/windows-price/{id}',                  'AdminController@getWindowsCategory');
    Route::get('/balconies-price',             'AdminController@getBalconies');
    Route::get('/balconies-price/{id}',             'AdminController@getBalconiesCategory');
    Route::get('/sale',                 'AdminController@getSale');
    Route::get('/components',                'AdminController@getComponents');
    Route::get('/components/{id}',                'AdminController@getComponentsCategory');
    Route::get('/components/{other}/{id}',                'AdminController@getComponentsItem');
    Route::get('/services',           'AdminController@getServices');
    Route::get('/about',                   'AdminController@getAbout');
    Route::get('/contacts',              'AdminController@getContacts');
    Route::get('/post',                     'AdminController@getPost');
    Route::get('/scripts',                     'AdminController@getScripts');



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

