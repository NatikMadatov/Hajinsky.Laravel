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





//StartPage
Route::get('/','ProjectController@getProject');

// ______________________________Project 
//Project
Route::get('/project','ProjectController@getProject')->name('getProject');
Route::get('/add-project','ProjectController@getNewProject')->name('getNewProject');


//postProject
Route::post('/add-project','ProjectController@postNewProject')->name('postNewProject');


//Delete
Route::get('/project-delete/{id}','ProjectController@deleteProject')->name('deleteProject');


//Edit
Route::get('/project-post/{id}','ProjectController@getNewProjectPost')->name('getNewProjectPost');
Route::post('/project-post/{id}','ProjectController@postNewProjectPost')->name('postNewProjectPost');

//OffersEdit

// ________________________________________________
// __________________________________Offers


//Offers
Route::get('/offers','OffersController@getOffers')->name('getOffers');
Route::get('/add-offers','OffersController@getNewOffers')->name('getNewOffers');

//PostOffers
Route::post('/add-offers/','OffersController@postNewOffers')->name('postNewOffers');

//Edit
Route::get('/offers-post/{id}','OffersController@getNewOffersPost')->name('getNewOffersPost');
Route::post('/offers-post/{id}','OffersController@postNewOffersPost')->name('postNewOffersPost');


//Delete
Route::get('/offers-delete/{id}','OffersController@deleteOffers')->name('deleteOffers');

// __________________________________________________________


// _______________________________Plans


//Plans
Route::get('/plans','PlansController@getPlans')->name('getPlans');
Route::get('/add-plans','PlansController@getNewPlans')->name('getNewPlans');

//PostPlans
Route::post('/add-plans/','PlansController@postNewPlans')->name('postNewPlans');


//Edit

Route::get('/plans-post/{id}','PlansController@getNewPlansPost')->name('getNewPlansPost');
Route::post('/plans-post/{id}','PlansController@postNewPlansPost')->name('postNewPlansPost');


//Delete

Route::get('/plans-delete/{id}','PlansController@deletePlans')->name('deletePlans');
//________________________________________________________________________________________________


// _________________________________Companies


//Companies


Route::get('/companies','CompaniesController@getCompanies')->name('getCompanies');
Route::get('/add-companies','CompaniesController@getNewCompanies')->name('getNewCompanies');


//PostCompanies
Route::post('/add-companies/','CompaniesController@postNewCompanies')->name('postNewCompanies');

//Edit
Route::get('/companies-post/{id}','CompaniesController@getNewCompaniesPost')->name('getNewCompaniesPost');
Route::post('/companies-post/{id}','CompaniesController@postNewCompaniesPost')->name('postNewCompaniesPost');


//Delete

Route::get('/companies-delete/{id}','CompaniesController@deleteCompanies')->name('deleteCompanies');



// ________________________________________________________________________________________________________End//