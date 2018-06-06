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



//Auth::routes();

Route::get('/home', 'Front\IndexController@index')->name('home');
Route::get('/login', ['as'=>'getLogin','uses'=>'Front\IndexController@getLogin']);
Route::post('/register', ['as'=>'register','uses'=>'Auth\RegisterController@create']);
Route::get('/about-packfacture', ['as'=>'aboutUs','uses'=>'Front\IndexController@aboutUs']);
Route::get('/privacy-policy', ['as'=>'privacyPolicy','uses'=>'Front\IndexController@privacyPolicy']);
Route::post('/login', ['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::post('/logout', ['as'=>'logout','uses'=>'Auth\LoginController@logout']);
//front controllers
Route::get('/shop/{slug?}', ['as'=>'categoryShop','uses'=>'Front\IndexController@categoryProduct']);
Route::get('/shop/utility/{slug?}', ['as'=>'utilityShop','uses'=>'Front\IndexController@utilityProduct']);
Route::post('/shop/submitEnquiry', ['as'=>'submitEnquiry','uses'=>'Front\IndexController@submitEnquiry']);
Route::get('/shop/{slug?}/{product?}', ['as'=>'getProduct','uses'=>'Front\IndexController@getProduct']);
Route::get('/shop/utility/{slug?}/{product?}', ['as'=>'getUtilityProduct','uses'=>'Front\IndexController@getUtilityProduct']);
//vendor controllers
Route::get('/', 'Front\IndexController@index')->name('home');
Route::middleware(['auth'])->group(function () {
	//user route
	Route::get('/my-enquiries',['as'=>'userEnquiries','uses'=>'Front\IndexController@userEnquiries']);
	

	//vendor routes
	Route::get('/vendor/products',['as'=>'products','uses'=>'ProductController@index']);
	Route::get('/vendor/products/create',['as'=>'createProduct','uses'=>'ProductController@create']);
	Route::post('/vendor/products/save',['as'=>'saveProduct','uses'=>'ProductController@save']);
	Route::post('/vendor/products/update',['as'=>'updateProduct','uses'=>'ProductController@update']);
	Route::get('/vendor/products/edit/{id?}',['as'=>'editProduct','uses'=>'ProductController@edit']);
	Route::get('/vendor/products/delete/{id?}',['as'=>'deleteProduct','uses'=>'ProductController@delete']);
	Route::get('/vendor/products/show/{id?}',['as'=>'showProduct','uses'=>'ProductController@show']);



	//admin routes
	Route::get('/admin/vendor_products',['as'=>'productsAdminVendor','uses'=>'Admin\Vendor\ProductController@index']);
	Route::get('/admin/vendor_products/show/{id?}',['as'=>'showProductAdminVendor','uses'=>'Admin\Vendor\ProductController@show']);
	Route::post('/admin/map_vendor_products',['as'=>'mapProductAdminVendor','uses'=>'Admin\Vendor\ProductController@map']);
	Route::get('/admin/products',['as'=>'productsAdmin','uses'=>'Admin\ProductController@index']);
	Route::get('/admin/products/create',['as'=>'createProductAdmin','uses'=>'Admin\ProductController@create']);
	Route::post('/admin/products/save',['as'=>'saveProductAdmin','uses'=>'Admin\ProductController@save']);
	Route::post('/admin/products/update',['as'=>'updateProductAdmin','uses'=>'Admin\ProductController@update']);
	Route::get('/admin/products/edit/{id?}',['as'=>'editProductAdmin','uses'=>'Admin\ProductController@edit']);
	Route::get('/admin/products/delete/{id?}',['as'=>'deleteProductAdmin','uses'=>'Admin\ProductController@delete']);
	Route::get('/admin/products/show/{id?}',['as'=>'showProductAdmin','uses'=>'Admin\ProductController@show']);
	Route::get('/admin/categories',['as'=>'categoriesAdmin','uses'=>'Admin\CategoryController@index']);
	Route::get('/admin/categories/create',['as'=>'categoriesAdminCreate','uses'=>'Admin\CategoryController@create']);
	Route::post('/admin/categories/save',['as'=>'categoriesAdminSave','uses'=>'Admin\CategoryController@save']);
	Route::post('/admin/categories/update',['as'=>'categoriesAdminUpdate','uses'=>'Admin\CategoryController@update']);
	Route::get('/admin/categories/edit/{id?}',['as'=>'categoriesAdminEdit','uses'=>'Admin\CategoryController@edit']);
	Route::get('/admin/categories/delete/{id?}',['as'=>'categoriesAdminDelete','uses'=>'Admin\CategoryController@delete']);
	Route::get('/admin/product/utilities',['as'=>'utilitiesAdmin','uses'=>'Admin\ProductUtilityController@index']);
	Route::get('/admin/product/utilities/create',['as'=>'utilitiesAdminCreate','uses'=>'Admin\ProductUtilityController@create']);
	Route::post('/admin/product/utilities/save',['as'=>'utilitiesAdminSave','uses'=>'Admin\ProductUtilityController@save']);
	Route::post('/admin/product/utilities/update',['as'=>'utilitiesAdminUpdate','uses'=>'Admin\ProductUtilityController@update']);
	Route::get('/admin/product/utilities/edit/{id?}',['as'=>'utilitiesAdminEdit','uses'=>'Admin\ProductUtilityController@edit']);
	Route::get('/admin/product/utilities/delete/{id?}',['as'=>'utilitiesAdminDelete','uses'=>'Admin\ProductUtilityController@delete']);
	Route::get('/admin/vendors',['as'=>'vendorsAdmin','uses'=>'Admin\VendorController@index']);
	Route::get('/admin/enquiries',['as'=>'enquiryAdmin','uses'=>'Admin\EnquiryController@index']);
	Route::get('/admin/enquiries/show/{id?}',['as'=>'enquiryShowAdmin','uses'=>'Admin\EnquiryController@show']);
});
//include('global_constants.php');