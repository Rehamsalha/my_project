<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taskcontroller;
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
//Route::post('auth.login', [AuthController::class, 'login']);
Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');


Route::get('train', 'TrainController@querybuilder');
Route::get('orm', 'TrainController@orm');
Route::get('relationships', 'TrainController@relationships');
Route::get('poly_relationships', 'TrainController@poly_relationships');
Route::get('encrypt', 'TrainController@encrypt');

Route::namespace('Dashboard')->name('dashboard.')->prefix('admin')->group(function (){
    Route::get('/','DashboardController@index')->name('home');
    Route::resource('posts','PostController');
    Route::resource('users','userController');
    //Route::resource('product','ProductController');
    //Route::get('product/','ProductController');
 // Route::resource('categoties','categoryController');

});


Route::get('/','FrontSiteController@showHome')->name('frontsite.home');
Route::get('/products','FrontSiteController@showproducts')->name('frontsite.products');
Route::get('/about','FrontSiteController@showabout')->name('frontsite.about');
Route::get('/contact','FrontSiteController@showcontact')->name('frontsite.contact');



Route::get('listPosts','Dashboard\PostController@listPosts');
Route::get('showPost','Dashboard\PostController@listPosts');
Route::post('dashboard/posts/store','Dashboard\PostController@storePosts');
Route::get('deletPost','Dashboard\PostController@listPosts');
Route::get('editPost','Dashboard\PostController@listPosts');
Route::get('savePost','Dashboard\PostController@listPosts');
Route::get('saveEditPost','Dashboard\PostController@listPosts');

//Route::resource('user','Dashboard\userController');











/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/',function (){
   return view('frontsite.home');
})->name('frontsite.home');

Route::get('products',function (){
    return view('frontsite.products');
})->name('frontsite.products');

Route::get('about',function (){
    return view('frontsite.about');
})->name('frontsite.about');

Route::get('contact',function (){
    return view('frontsite.contact');
})->name('frontsite.contact');
*/
