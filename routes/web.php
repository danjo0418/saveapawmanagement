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

//all view
Route::get('/', function () {
    return view('user.index');
});

Route::post('newlogin','UserController@newLogin');
Route::post('newregister', 'UserController@newRegister');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //users view
    Route::get('about-us', function () {
        return view('user.about');
    });

    Route::get('adopt', 'PetController@listOfAdopt');
    Route::get('lost-and-found', 'PetController@listOfLostAndFound');
    Route::get('pet/details/{id}', 'PetController@petDetails');
    Route::get('pets-form', 'PetController@userPetForm');
    Route::get('mypets', 'PetController@myPets');
    Route::get('mypet/details/{id}', 'PetController@myPetDetails');

    Route::post('adoptForm', 'PetController@adoptForm');
    Route::post('claimForm', 'PetController@claimForm');


    //admin view
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('admin/pets-management', 'PetController@petManagement');
    Route::get('admin/pets-form', 'PetController@petForm');
    Route::get('admin/pet-detail/{id}', 'PetController@petManagementDetails');
    Route::post('petCreate', 'PetController@petCreate');
    Route::post('petApprove', 'PetController@petApprove');
    Route::post('petUpdate', 'PetController@petUpdate');


    Route::get('admin/users-management', 'UserController@userManagement');
    Route::get('admin/users-detail/{id}', 'UserController@userManagementdetails');
    Route::get('admin/users-form', 'UserController@userFormpage');
    Route::post('userCreate', 'UserController@userCreate');
    Route::post('status', 'UserController@userStatus');
    Route::post('approved', 'UserController@userApproved');
    Route::post('decline', 'UserController@userDeclined');


   // Route::get('notifications', 'NotificationController@index');
    Route::get('admin/pets-verification', 'PetController@petVerification');
    Route::get('admin/users-verification', 'UserController@userVerify');
    Route::get('admin/claim-pets', 'NotificationController@claimPets');
    Route::get('admin/adopt-pets', 'NotificationController@adoptPets');
    

    //all view
    Route::get('profile', 'UserController@profile');
    Route::post('profile', 'UserController@updateProfile');

    Route::get('blogs', 'BlogController@blog');
});



