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

// language 
$router->get('lang/{lang}', 'LanguageController@setLanguage');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




$router->group(['prefix' => 'admin','middleware' => 'auth'], function($router)
{
	Route::get('/', 'Admin\PagesController@index');
	
	Route::controller('batchDestroy', 'Admin\HbBatchDestroyController');

	Route::get('/auction/{id}/editWithAsas','Admin\HbAuctionsController@editWithAsas');
	Route::resources([

		'new' => 'Admin\HbNewsController',
		'auction' => 'Admin\HbAuctionsController',

		'asa' => 'Admin\HbAsasController',
		'artwork' => 'Admin\HbArtworksController',
		'attachment' => 'Admin\HbAttachmentsController',

		'ad' => 'Admin\HbAdsController',
		'banner' => 'Admin\HbBannersController',
		'material'=>'Admin\HbMaterialController',
	]);


});
Route::resources([
	'new' => 'HbNewController',
	'artwork' => 'HbArtworkController'
]);

$router->get('/auction/preview/asa/{id}', 'HbAuctionController@previewAsa');
$router->controller('/auction', 'HbAuctionController');


Route::controller('/','PagesController');
