<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop_Controller;
use App\Http\Controllers\Search_Controller;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Producto_Controller;
use App\Http\Controllers\Cart_Controller;
use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\Checkout_Controller;
use App\Http\Controllers\Pedidos_Controller;

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


Route::get('/',Home_Controller::class);
Route::get('about',[Home_Controller::class,'About']);

Route::get('shop',Shop_Controller::class);
Route::get('product/{id}',Producto_Controller::class);
Route::get('product/remove',[Producto_Controller::class,'remove']);
Route::post('pedido/editar',[Producto_Controller::class,'editP']);
Route::get('tallas',[Producto_Controller::class,'tallas']);



Route::get('cart',Cart_Controller::class);
Route::get('cart/add/{id}',[Cart_Controller::class,'add']);
Route::get('cart/add/ajax/{id}',[Cart_Controller::class,'add_ajax']);
Route::get('cart/remove/',[Cart_Controller::class,'remove']);
Route::get('cart/remove/one/ajax/{id}',[Cart_Controller::class,'remove_one_ajax']);
Route::get('cart/remove/ajax/{id}',[Cart_Controller::class,'remove_ajax']);

Route::get('search',Search_Controller::class);


Route::get('checkout',Checkout_Controller::class);
Route::post('pagar',Pedidos_Controller::class);
Route::post('pedido/finalizar',[Pedidos_Controller::class,'Pagar']);


Route::get('signup',[User_Controller::class,'CreateUser']);
Route::post('signup',[User_Controller::class,'OnCreateUser']);
Route::get('signoff',[User_Controller::class,'Signoff']);
Route::get('signin',[User_Controller::class,'SignIn']);
Route::post('signin',[User_Controller::class,'SignIn']);
Route::get('profile',[User_Controller::class,'Profile']);
Route::post('profile/edit',[User_Controller::class,'editUser']);


Route::get('admin',Admin_Controller::class);

Route::get('admin/add/product',[Admin_Controller::class,'product']);
Route::post('admin/add/product',[Admin_Controller::class,'product']);

Route::get('admin/add/categoria',[Admin_Controller::class,'categoria']);
Route::post('admin/add/categoria',[Admin_Controller::class,'categoria']);
Route::get('admin/manage/pedidos',[Admin_Controller::class,'pedidos']);



Route::get('info/{id}',[Home_Controller::class,'pages']);