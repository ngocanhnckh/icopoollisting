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
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('uploadimg');
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

//ico
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


Route::get('/dashboard/add-ico/',[
    'uses'=>'dashboard@addico',
    'as'=>'addico'
]);
Route::post('/dashboard/add-ico/',[
    'uses'=>'dashboard@postaddico'
]);



//icopool


Route::get('/dashboard/IcoPool',[
    'uses'=>'dashboard@icopool',
    'as'=>'icopool'
]);
Route::get('/dashboard/xoaicopool/{id}',[
    'uses'=>'dashboard@xoaicopool',
    'as'=>'xoaicopool'
]);

Route::get('/dashboard/edit-IcoPool/{id}',[
    'uses'=>'dashboard@editicopool',
    'as'=>'editicopool'
]);
Route::post('/dashboard/edit-IcoPool/{id}',[
    'uses'=>'dashboard@postediticopool'
]);


Route::get('/dashboard/set-ico/{icopool}/{ico}',[
    'uses'=>'dashboard@setico',
    'as'=>'setico'
]);
Route::post('/dashboard/set-ico/{icopool}/{ico}',[
    'uses'=>'dashboard@postsetico',

]);

Route::get('/dashboard/add-IcoPool/',[
    'uses'=>'dashboard@addicopool',
    'as'=>'addicopool'
]);
Route::post('/dashboard/add-IcoPool/',[
    'uses'=>'dashboard@postaddicopool'
]);

//ads

Route::get('/dashboard/ads',[
    'uses'=>'dashboard@ads',
    'as'=>'ads'
]);
Route::get('/dashboard/add-ads/',[
    'uses'=>'dashboard@addads',
    'as'=>'addads'
]);
Route::post('/dashboard/add-ads/',[
    'uses'=>'dashboard@postaddads'

]);