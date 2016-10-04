<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if(Crawler::isCrawler()) {
    Route::get('/{any?}', [
        'uses' => 'SEO\IndexController@index',
        'as' => 'home'
    ]);
} else {
    Route::get('/{any?}', [
        'uses' => 'ExampleControllers\AngularRoutesController@index',
        'as' => 'home'
    ]);

    // API route
    Route::post('/api/upload-file', 'ExampleControllers\UploadController@uploadFile');
}

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
