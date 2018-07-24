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
// HOME
Route::get('/', 'FrontendController@index');

// Box IQ
Route::get('/iq-test/{code}', 'Frontend\IQController@testIq');
Route::post('/iq-test/check-iq', 'Frontend\IQController@checkIq');
// Box EQ
Route::get('/eq-test/for-free', 'Frontend\EQController@index');
Route::post('/eq-test/check-eq', 'Frontend\EQController@checkEq');
// Box Member
Route::get('/member/high-iq', 'Frontend\IQController@highIqMember');
Route::get('/member/high-eq', 'Frontend\EQController@highEqMember');
// Box Aricle

// Box Post
Route::get('/{slug}', 'FrontendController@getPost');
// Box Login - Logout
Route::get('/backend/login', 'LoginController@getLogin');
Route::post('/backend/login', 'LoginController@postLogin');
Route::get('/backend/logout', 'LoginController@logout');

// BACKEND
Route::group(['middleware' => 'adminlogin'], function(){
	Route::group(['prefix' => 'backend'], function() {
	// Home
		Route::get('/home', 'BackendController@index');
	// Question
		Route::get('/question', 'QuestionController@index');
		Route::get('/question/add', 'QuestionController@getAdd');
		Route::post('/question/add', 'QuestionController@postAdd');
		Route::get('/question/edit/{id}', 'QuestionController@getEdit');
		Route::post('/question/edit/{id}', 'QuestionController@postEdit');
		Route::get('/question/delete/{id}', 'QuestionController@delete');
		Route::post('/question/delete', 'QuestionController@deleteMul');
    // Category
		Route::get('/category', 'CategoryController@index');
		Route::get('/category/add', 'CategoryController@getAdd');
		Route::post('/category/add', 'CategoryController@postAdd');
		Route::get('/category/edit/{id}', 'CategoryController@getEditCat');
		Route::post('/category/edit/{id}', 'CategoryController@postEditCat');
		Route::get('/category/delete/{id}', 'CategoryController@deleteCat');
		Route::post('/category/delete', 'CategoryController@deleteMul');
	// Add User
		Route::get('/user', 'UserController@index');
		Route::get('/user/add', 'UserController@addUser');
		Route::post('/user/add', 'UserController@postAddUser');
		Route::get('/user/profile/{id}', 'UserController@getProfile');
		Route::get('/user/delete/{id}', 'UserController@deleteUser');
		Route::post('/user/delete', 'UserController@deleteMul');
		Route::get('/user/edit/{id}', 'UserController@editUser');
		Route::post('/user/edit/{id}', 'UserController@postEditUser');
	// Post
		Route::get('/post', 'PostController@index');
		Route::get('/post/add', 'PostController@getAdd');
		Route::post('/post/add', 'PostController@postAdd');
		Route::get('/post/edit/{id}', 'PostController@getEdit');
		Route::post('/post/edit/{id}', 'PostController@postEdit');
		Route::get('/post/delete/{id}', 'PostController@delete');
		Route::post('/post/delete', 'PostController@deleteMul');

	// Social
		Route::get('/social', 'SocialController@index');
		Route::post('/social/edit/{id}', 'SocialController@postSocial');
	// Setting

		Route::get('/setting','SettingController@index'); 
		Route::post('/setting/edit/{id}','SettingController@postSetting');

	// Player
		Route::get('/player','PlayerController@index'); 
		Route::get('/player/delete/{id}','PlayerController@delete'); 
		Route::post('/player/delete','PlayerController@deleteMul');
		
		// Post Category
		Route::get('/article','ArticleController@index');  
		Route::get('/article/add','ArticleController@getAdd');  
		Route::post('/article/add','ArticleController@postAdd');  
		Route::get('/article/edit/{id}','ArticleController@getEdit');  
		Route::post('/article/edit/{id}','ArticleController@postEdit');  
		Route::get('/article/delete/{id}','ArticleController@delete');  
		Route::post('/article/delete','ArticleController@deleteMul');  

		// EQ
		Route::get('/eq','EQController@index');  
		Route::get('/eq/add','EQController@getAdd');  
		Route::post('/eq/add','EQController@postAdd');  
		Route::get('/eq/edit/{id}','EQController@getEdit');  
		Route::post('/eq/edit','EQController@postEdit');  
		Route::get('/eq/delete/{id}','EQController@delete');  
		Route::post('/eq/delete','EQController@deleteMul');  
	});




	Route::get('test', function(){
		echo bcrypt('vanyen96');
	});


});
