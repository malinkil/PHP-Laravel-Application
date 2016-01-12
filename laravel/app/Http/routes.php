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

Route::get('/', function () {
    return view('welcome');
});

Route::get('productindex',function(){
    if(Auth::guest()){
        return Redirect::to('auth/login');
    }else{
   echo 'Welcome home';
    }
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('productindex','ProductController@index');

Route::get('productform','ProductController@form');

Route::post('create','ProductController@create');

Route::post('update','ProductController@update');

Route::post('delete','ProductController@delete');

Route::get('DeleteProduct/{product_id}', 'ProductController@del');

Route::get('EditProduct/{product_id}', 'ProductController@edit');

Route::get('ShowProduct/{product_id}','ProductController@show');

Route::get('products', function(){
$products = App\Products::all();
    foreach($products as $product){
        echo $product->product_name."<br/>";
    }
});
Route::get('productabout','firstcontroller@index');

