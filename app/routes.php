<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//

// Route::get('/', function() {
//     return View::make('hello');
// //    echo "hello word";
// });

Route::get('/test', function(){
    return Hash::make('fdhdfh');
});

Route::get('/', 'AdminBaseController@loginView');
//Route::get('/register', 'UserPublicController@register');
//Route::post('/index/zuoq', 'AdminBaseController@loginView');
 Route::post('/index/{id}', 'AdminBaseController@login');
 
//用户(前端)
Route::group([],function() {
   Route::post('/save',['as'=>'save','uses'=>'MessageController@saveMes']);
   Route::get('/getall',['as'=>'get','uses'=>'MessageController@getAll']);
   Route::get('/hasshow',['as'=>'hasshow','uses'=>'MessageController@hasShow']);
   Route::get('/notshow',['as'=>'notshow','uses'=>'MessageController@notShow']);
   Route::post('/delete',['as'=>'delete','uses'=>'MessageController@delete']);
   Route::post('/setshow',['as'=>'setshow','uses'=>'MessageController@setShow']);
   Route::post('/setnotshow',['as'=>'setnotshow','uses'=>'MessageController@setNotShow']);
   Route::post('/byname',['as'=>'byname','uses'=>'MessageController@byName']);
   Route::post('/bybm',['as'=>'byname','uses'=>'MessageController@byBuMen']);
});

