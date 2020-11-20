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
Route::get('/about', function () {
  return view('about');
});
Auth::routes();

Route::get('/home', 'Home2Controller@index')->name('home');

//Route::get('/article/{page}', 'ArticleController@article');

//Route::get('/master', 'MasterController@master')->name('master');

//Route::get('/home1', 'Home1Controller@home1');

//Route::get('/post1', function(){
 //   return view('post1');
//});
//Route::get('/articles', 'Article1Controller@articles');

Route::get('/', function () {
    return view('home3');
});
Route::get('/','Home3Controller@home3');
Route::get('/profil3', 'Profil3Controller@profil3');
Route::get('/ekstrakulikuler3', 'Ekstrakulikuler3Controller@ekstrakulikuler3');

//Database Guru/Read databse
Route::get('/guru3', 'Guru3Controller@guru3');

//menambah data
Route::get('/guru3/add', 'Guru3Controller@add');
Route::post('/guru3', 'Guru3Controller@create');

//menghapus data
Route::get('/guru3/delete/{id}', 'Guru3Controller@delete');

//mengedit data
Route::get('/guru3/edit/{id}', 'Guru3Controller@edit');
Route::post('/guru3/update/{id}', 'Guru3Controller@update');

Route::get('/Siswa3', 'Siswa3Controller@Siswa3');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/','Home3Controller@home3');
//Route::get('/profil3', 'Profil3Controller@profil3');
//Route::get('/ekstrakulikuler3', 'Ekstrakulikuler3Controller@ekstrakulikuler3');

//Database Article/Read databse
Route::get('/manage', 'ArticleController@articles');

//menambah data
Route::get('/manage/addArticle', 'ArticleController@addArticle');
Route::post('/manage', 'ArticleController@createArticle');

//menghapus data
Route::get('/manage/deleteArticle/{id}', 'ArticleController@deleteArticle');

//mengedit data
Route::get('/manage/editArticle/{id}', 'Article1Controller@editArticle');
Route::post('/manage/updateArticle/{id}', 'Article1Controller@updateArticle');

//Praktikum 6
Route::get('/user', 'Article1Controller@user')->name('user');

//menambah data
Route::get('/user/addUser', 'Article1Controller@addUser');
Route::post('/user/createUser', 'Article1Controller@createUser');

//menghapus data
Route::get('/user/deleteUser/{id}', 'Article1Controller@deleteUser');

//mengedit data
Route::get('/user/editUser/{id}', 'Article1Controller@editUser');
Route::post('/user/updateUser/{id}', 'Article1Controller@updateUser');

//menjalankan cetak pdf
Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf'); 

//API
Route::get('/', 'NewsController@getData');
Route::get('/search','TestController@searchData');


