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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/countries', 'CountryController@index')->name('countries');
Route::get('/pensioners', 'PensionerController@index')->name('pensioner');
Route::get('/cities', 'CityController@index')->name('cities');
Route::get('/municipalities', 'MunicipalityController@index')->name('municipalies');
Route::get('/counties', 'CountyController@index')->name('Counties');
Route::get('/pension_types', 'PensionTypeController@index')->name('pension_types');
Route::get('/places', 'PlaceController@index')->name('places');
Route::get('pensioners/new', 'PensionerController@create');
Route::post('pensioners', 'PensionerController@store');
Route::get('cities/new', 'CityController@create');
Route::post('cities', 'CityController@store');
Route::get('municipalities/new', 'MunicipalityController@create');
Route::post('municipalities', 'MunicipalityController@store');
Route::get('counties/new', 'CountyController@create');
Route::post('counties', 'CountyController@store');
Route::get('pension_types/new', 'PensionTypeController@create');
Route::post('pension_types', 'PensionTypeController@store');
Route::get('places/new', 'PlaceController@create');
Route::post('places', 'PlaceController@store');;
Route::get('/continents', 'ContinentController@index');
