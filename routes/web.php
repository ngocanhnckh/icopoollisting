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

Route::get('/admin-login', ['uses'=>'dashboard@login'])->name('admin-login');
Route::post('/admin-login',[
    'uses'=>'dashboard@postlogin'
]);
Route::get('/dashboard',[
    'uses'=>'dashboard@index',
    'as'=>'dashboard'
]);
Route::get('/logout',[
    'uses'=>'dashboard@logout',
    'as'=>'logout'
]);
Route::get('/dashboard/profile',[
    'uses'=>'dashboard@profile',
    'as'=>'profile'
]);
Route::post('/dashboard/profile',[
    'uses'=>'dashboard@postProfile'
]);
Route::get('/dashboard/ico',[
    'uses'=>'dashboard@ico',
    'as'=>'ico'
]);
Route::get('/dashboard/xoaico/{id}',[
    'uses'=>'dashboard@xoaico',
    'as'=>'xoaico'
]);
Route::get('/dashboard/edit-ico/{id}',[
    'uses'=>'dashboard@editico',
    'as'=>'editico'
]);
Route::post('/dashboard/edit-ico/{id}',[
    'uses'=>'dashboard@posteditico'
]);
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('uploadimg');