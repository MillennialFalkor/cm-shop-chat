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
	$products = App\Product::all();
    return view('pages.home',['products'=>$products]);
});

// Resource Controller Routes

Route::resources([
    'products' => 'ProductController',
    'messages' => 'MessageController',
    'users' => 'UserController',
    'userattributes' => 'UserAttributeController',
]);

// Ajax Routes

Route::post('messages/post','MessageController@postMessageToList')->name('message.posttolist');
