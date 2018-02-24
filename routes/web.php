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
Route::get('/test', function(){
	return App\User::find(1)->profile;
});

Route::get('/', [

	'uses' => 'FrontendController@index',
	'as' => 'index'
]);

//Search Route
Route::get('/results', function(){

	$posts = \App\Post::where('title', 'like', '%' . request('query') . '%')->get();

	return view('results')->with('posts', $posts)
						  ->with('title', 'Search results for: ' . request('query'))
    					  ->with('settings', \App\Setting::first())
    					  ->with('categories', \App\Category::take(5)->get())
    					  ->with('query', request('query'));
});

Route::get('/post/{slug}', [

	'uses' => 'FrontendController@singlePost',
	'as' => 'post.single'
]);

Route::get('/category/{id}', [

	'uses' => 'FrontendController@category',
	'as' => 'category.single'
]);

Route::get('/tag/{id}', [

	'uses' => 'FrontendController@tag',
	'as' => 'tag.single'
]);

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/dashboard', [

		'uses' => 'HomeController@index',
		'as' => 'home'

	]);

	//Create post page Route
	Route::get('/post/create', [

		'uses' => 'PostsController@create',
		'as' => 'post.create'
 
	]);

	//Save Post Route
	Route::post('/post/store', [

	 'uses' => 'PostsController@store',
	 'as' => 'post.store'
	]);

	//Display all posts page Route
	Route::get('posts', [
		'uses' => 'PostsController@index',
		'as' => 'posts'
	]);

	//Create category page Route
	Route::get('/category/create', [

		'uses' => 'CategoriesController@create',
		'as' => 'category.create'
	]);

	//View all categories page Route
	Route::get('categories', [

		'uses' => 'CategoriesController@index',
		'as' => 'categories'
	]);

	//Save category Route
	Route::post('/category/store', [

		'uses' => 'CategoriesController@store',
		'as' => 'category.store'
	]);

	//Edit category page Route
	Route::get('/category/edit/{id}', [

		'uses' => 'CategoriesController@edit',
		'as' => 'category.edit'
	]);
	//Update category Route
	Route::post('/category/update/{id}', [

		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
	]);

	//Delete category Route
	Route::get('/category/delete/{id}', [

		'uses' => 'CategoriesController@destroy',
		'as' => 'category.delete'
	]);

	//Delete Post btn Route
	Route::get('/post/delete/{id}', [

		'uses' => 'PostsController@destroy',
		'as' => 'post.delete'
	]);

	//See trashed posts Route
	Route::get('posts/trashed', [

		'uses' => 'PostsController@trashed',
		'as' => 'posts.trashed'
	]);

	//Permanently delete post btn Route
	Route::get('posts/kill/{id}', [

		'uses' => 'PostsController@kill',
		'as' => 'post.kill'
	]);

	//Restore button Route
	Route::get('posts/restore/{id}', [

		'uses' => 'PostsController@restore',
		'as' => 'post.restore' 
	]);

	//Edit post btn Route
	Route::get('/posts/edit/{id}', [

		'uses' => 'PostsController@edit',
		'as' => 'post.edit'
	]);

	//Update post btn route

	Route::post('/post/update/{id}', [

		'uses' => 'PostsController@update',
		'as' => 'post.update'
	]);

	// Tags routes

	Route::get('/tags', [

		'uses' => 'TagsController@index',
		'as' => 'tags'
	]);

	Route::get('/tag/create', [

		'uses' => 'TagsController@create',
		'as' => 'tag.create'
	]);

	Route::post('/tag/store', [

		'uses' => 'TagsController@store',
		'as' => 'tag.store'
	]);

	Route::get('tag/edit/{id}', [

		'uses' => 'TagsController@edit',
		'as' => 'tag.edit'

	]);

	Route::post('tag/update/{id}', [

		'uses' => 'TagsController@update',
		'as' => 'tag.update'

	]);

	Route::get('tag/delete/{id}', [

		'uses' => 'TagsController@destroy',
		'as' => 'tag.delete'

	]);

	//==================
	// Users Routes

	Route::get('/users', [

		'uses' => 'UsersController@index',
		'as' => 'users'
	]);

	Route::get('/user/create', [

		'uses' => 'UsersController@create',
		'as' => 'user.create'
	]);

	Route::post('/user/store', [

		'uses' => 'UsersController@store',
		'as' => 'user.store'
	]);

	Route::get('user/admin/{id}', [

		'uses' => 'UsersController@admin',
		'as' => 'user.admin'
	]);

	Route::get('user/not-admin/{id}', [

		'uses' => 'UsersController@not_admin',
		'as' => 'user.not.admin'
	]);

	Route::get('user/profile', [

		'uses' => 'ProfilesController@index',
		'as' => 'user.profile'
	]);

	Route::post('/user/profile/update', [

		'uses' => 'ProfilesController@update',
		'as' => 'user.profile.update'
	]);

	Route::get('user/delete/{id}', [

		'uses' => 'UsersController@destroy',
		'as' => 'user.delete'
	]);

	//Settings Routes

	Route::get('/settings', [

		'uses' => 'SettingsController@index',
		'as' => 'settings'
	]);

	Route::post('/settings/update', [

		'uses' => 'SettingsController@update',
		'as' => 'settings.update'
	]);

});


