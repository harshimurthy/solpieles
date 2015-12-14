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

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/', ['as'=>'site.route', function () {
    return view('website.home');
}]);
Route::get('/home', ['as'=>'site.route', function () {
    return view('website.home');
}]);

// Route::post('leave_message', ['as'=>'messages.send', 'uses'=>'MailsController@sendEmail']);
	
Route::group(['prefix'=>'admin'], function(){
	
	/**
	 * Messages Routes
	 */
	Route::get('messages/search', ['as'=>'admin.messages.search', 'uses'=>'MessagesController@search']);

	Route::bind('messages', function($id){
		return App\Message::findOrFail($id);
	});

	Route::resource('messages', 'MessagesController', ['except'=>['create', 'destroy']]);
	/**
	 * This routes will require the user to be authenticated in order
	 * to be able to access them. Otherwise will be redirected to 
	 * the login page
	 */
	Route::group(['middleware' => 'auth'], function(){
		/**
		 * Admin Home Page
		 */
		Route::get('/', ['as'=>'admin.home', 'uses'=>'HomeController@dashboard']);

		/**
		 * ===========================================================
		 * Contacts
		 */
		Route::get('contacts/search', ['as'=>'admin.contacts.search', 'uses'=>'ContactsController@search']);		
		Route::post('contacts/image/{id}', ['as'=>'admin.contacts.image', 'uses'=>'ContactsController@postImage']);
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
		Route::delete('todos/remove_done_tasks', ['as'=>'admin.todos.remove_done_tasks', 'uses'=>'TodosController@removeDoneTasks']);
		
		Route::bind("todos", function($id){
			return \App\Todo::whereUserId(Auth::user()->id)->findOrFail($id);
		});
		
		Route::resource('todos', 'TodosController', []);

		/**
		 * Users Management
		 */
		Route::get('users/search', ['as'=>'admin.users.search', 'uses'=>'UsersController@search']);
		Route::bind('users', function($id){
			return App\User::with('role')->findOrFail($id);
		});

		Route::resource('users', 'UsersController');

		/**
		 * Roles
		 */
		Route::get('roles/detatch_user/{user}/role/{role}', ['as'=>'admin.roles.detatch_user', 'uses'=>'RolesController@detatchUser']);
		Route::bind('roles', function($id){
			return App\Role::with('users')->findOrFail($id);
		});

		Route::resource('roles', 'RolesController');

	});
});

		
