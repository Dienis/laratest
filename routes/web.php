<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home');

Route::get('katalog-materialov/{slug}', 'CatalogController@show');
Route::get('katalog-materialov/pesok/{slug}', 'CatalogController@pesok');
Route::get('katalog-materialov/shheben/{slug}', 'CatalogController@shheben');
Route::get('katalog-materialov/peskogrunt/{slug}', 'CatalogController@peskogrunt');
Route::get('katalog-materialov/graviy/{slug}', 'CatalogController@graviy');

Route::get('informatsiya', 'InformationController@index');
Route::get('informatsiya/{slug}', 'InformationController@show');

Route::get('/dostavka', 'PagesController@dostavka');
Route::get('/katalog-materialov', 'PagesController@katalog_materialov');
Route::get('/otzyvy', 'PagesController@otzyvy');
Route::get('/sotrudnichestvo', 'PagesController@sotrudnichestvo');
Route::get('/kontaktyi', 'PagesController@kontaktyi');

Route::get('/galereya', 'GalleryController@galereya');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/contactform', 'MailSetting@contactform');

Route::post('/calculation_top', 'TopCalculation@calculation_top');

Route::post('/cooperation', 'MailCooperation@cooperation');

Route::post('/submit_application', 'MailSubmitApplication@submit_application');

Route::post('/talk_project', 'MailTalkProject@talk_project');