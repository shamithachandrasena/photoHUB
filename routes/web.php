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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider')->where('social','github');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('social','github');;
Route::get('/index', array('as' => 'index','uses' => 'AlbumsController@getList'));


Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@getAlbum'));
Route::post('/moveimage', array('as' => 'move_image','uses' => 'ImagesController@postMove'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin', function(){return view('admin');});
    Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImagesController@getDelete'));
    Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'));

});


Route::group(['middleware'=>['auth']],function(){
    Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImagesController@getForm'));
    Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImagesController@postAdd'));
    Route::get('/createalbum', array('as' => 'create_album_form','uses' => 'AlbumsController@getForm'));
    Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumsController@postCreate'));
});
