<?php
use App\admin;
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



//frontend
Route::get('/',[
    'uses'=>'home@index',
    'as'=>'home'
]);
Route::get('/ico-detail/{slug}',[
    'uses'=>'home@icodetail',
    'as'=>'icodetail'
]);

//=====backend
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
Route::get('/dashboard/xoa-ads/{id}',[
    'uses'=>'dashboard@xoaads',
    'as'=>'xoaads'
]);
Route::get('/dashboard/edit-ads/{id}',[
    'uses'=>'dashboard@editads',
    'as'=>'editads'
]);
Route::post('/dashboard/edit-ads/{id}',[
    'uses'=>'dashboard@posteditads'
]);
//account
Route::get('/dashboard/account',[
    'as'=>'acc',
    'uses'=>'dashboard@acc'
]);
Route::get('/dashboard/account/edit/{id}',[
    'as'=>'editacc',
    'uses'=>'dashboard@editacc'
]);
Route::post('/dashboard/account/edit/{id}',[

    'uses'=>'dashboard@posteditacc'
]);
Route::get('/dashboard/account/delete/{id}',function($id){
    if($id==1){
        return "Không có quyền xoá tài khoản admin. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
    }
    $admin=admin::find($id);
    $admin->delete();
    return redirect()->back();
})->name('xoaacc');

Route::get('/dashboard/account/add',[
    'as'=>'addacc',
    'uses'=>'dashboard@addacc'
]);
Route::post('/dashboard/account/add',[

    'uses'=>'dashboard@postaddacc'
]);
Route::get('/forgot',[
    'as'=>'forgot',
    'uses'=>'dashboard@forgot'
]);