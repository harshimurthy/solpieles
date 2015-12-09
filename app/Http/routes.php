<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



Route::get('/', ['as'=>'site.route', function () {
    return view('home');
}]);

// Route::post('leave_message', ['as'=>'messages.send', 'uses'=>'MailsController@sendEmail']);


	
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', ['as'=>'admin.home', 'uses'=>'HomeController@dashboard']);	
	
	Route::get('messages/search', ['as'=>'admin.messages.search', 'uses'=>'MessagesController@search']);

	Route::bind('messages', function($id){
		return App\Message::findOrFail($id);
	});

	Route::resource('messages', 'MessagesController');
});

/**
 * This routes will require the user to be authenticated in order
 * to be able to access them. Otherwise will be redirected to 
 * the login page
 */
Route::group(['middleware' => 'auth', 'prefix'=>'admin'], function(){

	


	/**
	 * ===========================================================
	 * Contacts
	 */
	
	Route::post('contacts/image/{id}', ['as'=>'admin.contacts.image', 'uses'=>'DriversController@postImage']);
	Route::bind('contacts', function($id){
		return App\Contact::
			whereUserId(auth()->user()->id)
			->findOrFail($id);
	});

	Route::resource('contacts', 'ContactsController', []);

	/**
	 * Todos
	 */

	Route::get('todos/completar/{id}', ['as'=>'admin.todos.completar', 'uses'=>'TodosController@completar']);
	Route::get('todos/incompletar/{id}', ['as'=>'admin.todos.incompletar', 'uses'=>'TodosController@incompletar']);
	
	Route::bind("todos", function($id){
		return \App\Todo::whereUserId(Auth::user()->id)->findOrFail($id);
	});
	
	Route::resource('todos', 'TodosController', []);

});
