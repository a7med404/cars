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


/*
| All Routes For CPanel
|****************************************************************************************************************************************
*/

Route::prefix('cpanel/')->group(function() {


  /*
  |--------------------------------------------------------------------------
  | Need Owner Roles
  |--------------------------------------------------------------------------
  */
  Route::middleware('role:superadministrator|administrator')->group(function () {

  });


  /*
  |--------------------------------------------------------------------------
  | Need ... Roles
  |--------------------------------------------------------------------------
  */
  Route::middleware('role:superadministrator|administrator')->group(function () {

  });



  /*
  |--------------------------------------------------------------------------
  | Need ... Roles
  |--------------------------------------------------------------------------
  */
  Route::middleware('role:superadministrator|administrator')->group(function () {

  });


  /*
  |--------------------------------------------------------------------------
  | Need ... Roles
  |--------------------------------------------------------------------------
  */
  Route::middleware('role:superadministrator|administrator')->group(function () {

  });




  Route::get('/', 'HomeController@index')->name('cpanel');

  Route::middleware('role:superadministrator|administrator')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | change sidesetting
    |--------------------------------------------------------------------------
    */
    Route::get('/sitesetting', 'SiteSettingController@index')->name('site-setting');
    Route::post('/sitesetting/update', 'SiteSettingController@store')->name('site-setting-update');




    /*
    |--------------------------------------------------------------------------
    | Resource For Roles
    |--------------------------------------------------------------------------
    */
    Route::Resource('roles', 'RoleController');
    Route::get('roles/delete/{id}', 'RoleController@destroy')->name('roles.delete');




    /*
    |--------------------------------------------------------------------------
    | Resource For Permissions
    |--------------------------------------------------------------------------
    */
    Route::Resource('permissions', 'PermissionController');
    Route::get('permissions/delete/{id}', 'PermissionController@destroy')->name('permissions.delete');

  });




  /*
  |--------------------------------------------------------------------------
  | Resource For Engines
  |--------------------------------------------------------------------------
  */
  Route::Resource('engines', 'EngineController');
  Route::get('engines/delete/{id}', 'EngineController@destroy')->name('engines.delete');


  /*
  |--------------------------------------------------------------------------
  | Resource For Brands
  |--------------------------------------------------------------------------
  */
  Route::Resource('brands', 'BrandController');
  Route::get('brands/delete/{id}', 'BrandController@destroy')->name('brands.delete');


  /*
  |--------------------------------------------------------------------------
  | Resource For features
  |--------------------------------------------------------------------------
  */ 
  Route::Resource('features', 'FeatureController');
  Route::get('features/delete/{id}', 'FeatureController@destroy')->name('features.delete');


  /*
  |--------------------------------------------------------------------------
  | Resource For Cars
  |--------------------------------------------------------------------------
  */
  Route::Resource('cars', 'CarController');
  Route::get('cars/delete/{id}', 'CarController@destroy')->name('cars.delete');
  Route::get('cars/repport', 'CarController@repport')->name('cars.repport');
  Route::get('car/sale', 'CarController@sale')->name('cars.sale');
  Route::get('car/rent', 'CarController@rent')->name('cars.rent');

  /*
  |--------------------------------------------------------------------------
  | Resource For Customers
  |--------------------------------------------------------------------------
  */ 
  Route::Resource('customers', 'CustomerController');
  Route::get('customers/delete/{id}', 'CustomerController@destroy')->name('customers.delete');






  /*
  |--------------------------------------------------------------------------
  | Resource For Users
  |--------------------------------------------------------------------------
  */
  // Route::group(['middleware' => ['web', 'auth']], function(){

      Route::resource('users','UserController');
      # change-password For User
      Route::get('users/{user}/change-password', 'UserController@changePassword')->name('change-password');
      Route::patch('users/{user}/update-password', 'UserController@updatePassword')->name('update-password');
      Route::get('users/delete/{id}', 'UserController@destroy')->name('users.delete');
      #change level For Users
      Route::get('users/{user}/editLevel', 'UserController@editLevel')->name('users.editLevel');

      Route::get('users/delete/{id}', 'UserController@destroy')->name('users.delete');
      #change- My -password For Auth User
      Route::get('users/{user}/change-my-password', 'UserController@changeMyPassword')->name('change-my-password');
      //Route::get('users/{user}/update-my-password', 'UserController@updateMyPassword')->name('update-my-password');
      Route::get('logout', 'UserController@logout')->name('admin.logout');

  // });

});





/*
| All Routes For Website
|****************************************************************************************************************************************
*/

Route::namespace ('Website\\')->group(function() {

  Route::get('/', 'HomeController@index')->name('website');
  Route::get('/filter', 'FiterController@filter')->name('filter');

  Route::Resource('customers', 'CustomerController');
  Route::get('customers/delete/{id}', 'CustomerController@destroy')->name('customers.delete');
  Route::get('/profile', 'CustomerController@profile')->name('profile');
  Route::get('/sing', 'CustomerController@sing')->name('sing');

  
  Route::resource('cars', 'CarController');
  // Route::get('/car-details', 'CarController@carDetails')->name('car-details');
  Route::get('/dealer-cars', 'CarController@search')->name('dealer-cars');
  Route::get('/privete-seller-cars', 'CarController@search')->name('privete-seller-cars');

  Route::group(['middleware' => 'customer:customer'], function () {

  });
});      

// Route::get('/', 'Website\HomeController')->name('website');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
