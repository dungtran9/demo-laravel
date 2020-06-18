<?php

use Illuminate\Support\Facades\Route;

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
    return view('master');
});

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'good morning!';

    }

});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});
Route::get('/product', function () {
    return view('product');
});
Route::post('/product', function (Illuminate\Http\Request $request) {
    $product = $request->product;
    $price = $request->price;
    $discount = $request->discount;
    $amount = $price * $discount * 0.01;
    $result = $price - $amount;
    return view('show_discount', compact(['product', 'price', 'discount', 'amount', 'result']));
});
Route::get('/users','UserController@index');
