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
      Route::post('/advertise/addcardetail','PostAdmobController@addCardetail')->name('addCardetail');
      Route::post('/advertise/addcanva','PostAdmobController@addCanva')->name('addCanva');
      Route::post('/advertise/addmoto','PostAdmobController@addMoto')->name('addMoto');
      Route::post('/advertise/addutil','PostAdmobController@addUtil')->name('addUtil');
      Route::post('/advertise/addrental','PostAdmobController@addRental')->name('addRental');
      Route::post('/advertise/addrealestate','PostAdmobController@addRealestate')->name('addRealestate');
      Route::post('/advertise/addshoes','PostAdmobController@addShoes')->name('addShoes');
      Route::post('/advertise/addhousemate','PostAdmobController@addHousemate')->name('addHousemate');
      Route::post('/advertise/addshop','PostAdmobController@addShop')->name('addShop');
      Route::post('/advertise/addclothing','PostAdmobController@addClothing')->name('addClothing');



      //admob payment route
      Route::get('/admobpayment','PaymentAdmobController@getPaymentpage')->name('admobpayment');




      
      

       //get the carmodel list
       Route::post('/advertise/getmodel','PostAdmobController@getCarmodel')->name('getmodel');
       //get the clothing cut list
       Route::post('/advertise/getcut','PostAdmobController@getCuts')->name('getCuts');



      //navigation route of header bar
      Route::get('/research','NavigationsController@getResearch')->name('research');
      Route::get('/favorite','NavigationsController@getFavorite')->name('favorite');
      Route::get('/message','NavigationsController@getMessage')->name('message');
      //profile route of user
      Route::get('/admob','ProfileController@getAdmob')->name('admob');
      Route::get('/transaction','ProfileController@getTransaction')->name('transaction');
      Route::get('/purchase','ProfileController@getPurchase')->name('purchase');
      Route::get('/account','ProfileController@getAccount')->name('account');
      Route::get('/mycv','ProfileController@getMycv')->name('mycv');
      Route::get('/booking','ProfileController@getBooking')->name('booking');
      //post my advertise route
      Route::get('/postadmob','PostAdmobController@getPostadmob')->name('postadmob');
      Route::get('/production','PostAdmobController@getProduction')->name('production');

      //looking for posted admob.
      Route::get('/dadmob','DisplayAdmobController@getDisplaypage')->name('dadmob');
      Route::get('/getdata/{page}','DisplayAdmobController@getData');
      
      
     
      
        Route::post('/adddata/','PostAdmobController@addData')->name('addData');






  });