<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\halamanUserController;
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

//\\-----------------------ROUTES ADMIN PANEL CRUD-----------------------//\\
Route::middleware('auth')->prefix('Admin')->group(function () {
    //INDEX
    Route::get('/dashboard', function () {return view('HalamanAdmin.pages.main');});

    //CREATE PRODUCT
    Route::get('/CreateProduct', 'ProductController@ProductAdd')->name('ProductAdd');
    Route::post('/SaveProduct', 'ProductController@ProductSave')->name('ProductSave');
    //CREATE CATEGORY
    Route::get('/CreateCategory', 'CategoryController@CategoryAdd')->name('CategoryAdd');
    Route::post('/SaveCategory', 'CategoryController@CategorySave')->name('CategorySave');
    //CREATE LINK
    Route::get('/CreateLink', 'LinkController@LinkAdd')->name('LinkAdd');
    Route::post('/SaveLink', 'LinkController@LinkSave')->name('LinkSave');
    //CREATE FOOTER
    Route::get('/CreateFooter', 'FooterController@FooterAdd')->name('FooterAdd');
    Route::post('/SaveFooter', 'FooterController@FooterSave')->name('FooterSave');

    //READ PRODUCT
    Route::get('/Product/Show', 'ProductController@ProductShow');
    //READ CATEGORY
    Route::get('/Category/Show', 'CategoryController@CategoryShow');
    //READ LINK
    Route::get('/Link/Show', 'LinkController@LinkShow');
    //READ Footer
    Route::get('/Footer/Show', 'FooterController@FooterShow');

    //UPDATE PRODUCT
    Route::get('/EditProduct/{id}', 'ProductController@ProductEdit');
    Route::post('/EditProduct/Update', 'ProductController@ProductUpdate')->name('ProductUpdate');
    //DELETE PRODUCT
    Route::get('/DeleteProduct/{id}', 'ProductController@ProductDelete');

    //UPDATE CATEGORY
    Route::get('/EditCategory/{id}', 'CategoryController@CategoryEdit');
    Route::post('/EditCategory/Update', 'CategoryController@CategoryUpdate')->name('CategoryUpdate');
    //DELETE CATEGORY
    Route::get('/DeleteCategory/{id}', 'CategoryController@CategoryDelete');

    //UPDATE LINK
    Route::get('/EditLink/{id}', 'LinkController@LinkEdit');
    Route::post('/EditLink/Update', 'LinkController@LinkUpdate');
    //DELETE LINK
    Route::get('/Delete/{id}', 'LinkController@LinkDelete');

    //UPDATE FOOTER
    Route::get('/EditFooter', 'FooterController@FooterEdit');
    Route::post('/EditFooter', 'FooterController@FooterUpdate');
    //DELETE FOOTER
    Route::get('/Delete', 'FooterController@FooterDelete');

});
//\\-----------------------END ROUTES ADMIN PANEL CRUD-----------------------//\\


//\\-----------------------ROUTES HALAMAN USER-----------------------//\\
//INDEX
Route::get('/', 'halamanUserController@tampilAllProduct');
Route::get('/ProductDetails/{id}', 'halamanUserController@tampilDetailProduct')->name('tampilDetailProduct');
//\\-----------------------END ROUTES HALAMAN USER-----------------------//\\

Auth::routes();
