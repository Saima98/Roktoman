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

// Register Controllers //

Route::get('/register','RegisterController@register'); //register root

Route::POST('newregistration','RegisterController@insert'); //Register data to DB

// End of Register Controller //


//***************************************************//


// Login Controller //

Route::get('/login','LoginController@login'); //login root

Route::POST('getin', 'LoginController@get_logged_in'); // to user panel authenticate

Route::get('/logout','LoginController@logout'); // Logout

// End of Login Controller //


//***************************************************//


// Make Post Controller //

Route::get('/makepost','MakePostController@makepost');// return the view file

Route::POST('createpost','MakePostController@createpost'); // to create a post

// End of Make Post Controller //


//***************************************************//


// Search View Controller //

Route::get('/searching_result','SearchViewController@search_view');

Route::POST('showSearchList','SearchViewController@search_view');

// End of Search View Controller //


//***************************************************//


// Search Controller //

Route::get('/search','SearchController@search');

// End of Search Controller //


//***************************************************//


// Message Controller //

Route::POST('passmessage','MessageController@insert');

// End of Message Controller //


//***************************************************//


// User/Admin Panel Controller //

Route::get('/users_view','UsersViewController@users_view'); //user panel
Route::POST('/users_view/update','UsersViewController@update'); //user panel
Route::POST('/changepass','AdminsViewController@changepass'); //change pass

Route::get('/admins_view','AdminsViewController@admins_view'); //admin panel
Route::get('/admins/delete/{id}','AdminsViewController@delete'); //message delete
Route::get('/admins/removeUser/{id}','AdminsViewController@removeUser'); //remove user
Route::get('/admins/makeAdmin/{id}','AdminsViewController@makeAdmin'); //make admin
Route::get('/admins/removeAdmin/{id}','AdminsViewController@removeAdmin'); //remove admin

// End of User/Admin Panel Controller //


//***************************************************//

// Home //

Route::get('/','FrontController@index');

Route::get('/home','FrontController@index');

// End of Home //


//***************************************************//