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


Route::group([
    'prefix'=>'frontoffice',
    'namespace'=>'FrontOffice',
  ],function(){
      //homepage  route
      Route::get('/','HomeController@getHomepage')->name('home');
      Route::get('/homelogin','HomeController@getHomelogin')->name('homelogin');
      Route::get('/particular','HomeController@getParticular')->name('particular');
      Route::get('/professional','HomeController@getProfessional')->name('professional');

      //post admob
      Route::get('/advertise','PostAdmobController@initCategory')->name('advertise');
      Route::post('/advertise/postcategory','PostAdmobController@addSelectCategory')->name('postcategory');
      Route::post('/advertise/postdescription','PostAdmobController@addDescriptionCategory')->name('postdescription');
      Route::post('/advertise/postprice','PostAdmobController@addPriceCategory')->name('postprice');
      Route::post('/advertise/uploadpicture','PostAdmobController@loadPictureCategory')->name('uploadpicture');
      Route::post('/advertise/postimage','PostAdmobController@addPictureCategory')->name('postimage');
      Route::post('/advertise/postinformation','PostAdmobController@addInformation')->name('information');
      Route::post('/advertise/mapcoordinates','PostAdmobController@getCoordinates')->name('coordinates');
      
      //navigation route of header bar
      Route::get('research','NavigationsController@getResearch')->name('research');
      Route::get('favorite','NavigationsController@getFavorite')->name('favorite');
      Route::get('message','NavigationsController@getMessage')->name('message');
      //profile route of user
      Route::get('admob','ProfileController@getAdmob')->name('admob');
      Route::get('transaction','ProfileController@getTransaction')->name('transaction');
      Route::get('purchase','ProfileController@getPurchase')->name('purchase');
      Route::get('account','ProfileController@getAccount')->name('account');
      Route::get('mycv','ProfileController@getMycv')->name('mycv');
      Route::get('booking','ProfileController@getBooking')->name('booking');
      //post my advertise route
      Route::get('postadmob','PostAdmobController@getPostadmob')->name('postadmob');
      Route::get('production','PostAdmobController@getProduction')->name('production');



  });