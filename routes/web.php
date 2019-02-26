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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

  Route::group([ 'middleware'=>'auth'], function () {   

//route for Postes
Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/trashed', 'PostController@trashed')->name('post.trashed');
Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
Route::get('/post/hdelete/{id}', 'PostController@hdelete')->name('post.hdelete');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::get('/post/store', 'PostController@store')->name('post.store');
Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::get('/post/delete/{id}', 'PostController@destroy')->name('post.delete');
Route::get('/post/update/{id}', 'PostController@update')->name('post.update');

//route for Categories
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
Route::get('/category/create', 'CategoriesController@create')->name('category.create');
Route::get('/category/store', 'CategoriesController@store')->name('category.store');
Route::get('/category/update/{id}', 'CategoriesController@update')->name('category.update');


//route for Tag
Route::get('/tags', 'TagController@index')->name('tags'); 
Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete'); 
Route::get('/tag/create', 'TagController@create')->name('tag.create');   
Route::get('/tag/store', 'TagController@store')->name('tag.store'); 
Route::get('/tag/update/{id}', 'TagController@update')->name('tag.update'); 

//route for users
Route::get('/users', 'UsersController@index')->name('users'); 
Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin'); 
Route::get('/users/notadmin/{id}','UsersController@notAdmin')->name('users.not.admin'); 
Route::get('/users/create', 'UsersController@create')->name('users.create'); 
Route::get('/users/store', 'UsersController@store')->name('users.store'); 
Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.delete'); 
//route for Settings
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('/settings/update', 'SettingsController@update')->name('settings.update');
//route for site
Route::get('/', 'siteUIcontroller@index')->name('index');
// route for show poste
Route::get('/{slug}','siteUIcontroller@showPost')->name('post.show');
});

Route::get('/eya',function(){
//return App\Profile::find(1)->profile ;
return App\Post::find(7)->category ;
})->name('eya');