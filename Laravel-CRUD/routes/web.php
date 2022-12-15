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
    return view('welcome');
});
Route::get('add','App\Http\Controllers\employeecontroller@addemployee');
Route::post('addemployeeprocess','App\Http\Controllers\employeecontroller@addemployeeprocess');
Route::get('showemployee','App\Http\Controllers\employeecontroller@showdata');
Route::get('deleteemployee/{id}','App\Http\Controllers\employeecontroller@deletedata');
Route::get('editemployee/{id}','App\Http\Controllers\employeecontroller@editdata');
Route::patch('employeeprocess','App\Http\Controllers\employeecontroller@updatedata');

Route::get('addcategory','App\Http\Controllers\categorycontroller@addcategory');
Route::post('addcategoryprocess','App\Http\Controllers\categorycontroller@addcategoryprocess');
Route::get('showcategory','App\Http\Controllers\categorycontroller@showdata');
Route::get('deletecategory/{id}','App\Http\Controllers\categorycontroller@deletedata');
Route::get('editcategory/{id}','App\Http\Controllers\categorycontroller@editdata');
Route::patch('categoryprocess','App\Http\Controllers\categorycontroller@updatedata');

Route::get('addproduct','App\Http\Controllers\productcontroller@addproduct');
Route::post('addproductprocess','App\Http\Controllers\productcontroller@addproductprocess');
Route::get('showproduct','App\Http\Controllers\productcontroller@showdata');
Route::get('deleteproduct/{id}','App\Http\Controllers\productcontroller@deletedata');
Route::get('editproduct/{id}','App\Http\Controllers\productcontroller@editdata');
Route::patch('productprocess','App\Http\Controllers\productcontroller@updatedata');
