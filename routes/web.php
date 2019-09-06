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
    'prefix'=>'backoffice',
    'namespace'=>'BackOffice',
 ],function(){
     //admin login route
    Route::get('/','AdminHomeController@getLoginPage')->name('adminlogin');
    Route::get('/home','AdminHomeController@getHomeview')->name('adminhome');
    Route::get('/particular','AdminHomeController@getParticularView')->name('particularview');
    Route::get('/professional','AdminHomeController@getProfessionalView')->name('professionalview');
    Route::get('/general','AdminHomeController@getGeneralView')->name('generalview');
    Route::get('/boost','AdminHomeController@getBoostView')->name('boostview');

 });
 
Route::group([
    'prefix'=>'frontoffice',
    'namespace'=>'FrontOffice',
  ],function(){
      //homepage  route
      Route::get('/','HomeController@getHomepage')->name('home');
      //signup login route
      Route::post('/homelogin','HomeController@getHomelogin')->name('homelogin');
      Route::get('/particular','HomeController@getParticular')->name('particular');
      Route::get('/professional','HomeController@getProfessional')->name('professional');
      Route::post('/signup','HomeController@createParticularUser')->name('signup');
      Route::post('/prosignup','HomeController@createUserprofessional')->name('prosignup');
      Route::get('/userlogout','HomeController@userLogout')->name('userout');
     
    
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
      Route::get('/cardpay','PaymentAdmobController@getCardpayment')->name('cardpay');
      Route::post('/woutpay','PaymentAdmobController@availAdbomb')->name('woutpay');
      Route::post('/boost','PaymentAdmobController@boostAdmob')->name('boost');
   
      Route::post('/stripeprocess','PaymentAdmobController@withStripePayment')->name('stripeprocess');
      Route::post('/paypalprocess','PaypalPaymentController@payWithpaypal')->name('paypalprocess');
      Route::post('/status','PaypalPaymentController@getPaymentStatus')->name('status');
      Route::get('/getstatus','PaymentAdmobController@getStatus')->name('status');
      Route::get('/aditems/filter','FilterController@filterFunction')->name('filter');
      Route::post('/aditems/filterads','FilterController@filter_ads')->name('filterads');
      Route::get('/aditems/filterSearch','FilterController@filterSearch')->name('filterSearch');
       //getting subject list route
      Route::post('/sublist','FilterController@getsubList')->name('subjectlist');




      
      

       //get the carmodel list
       Route::post('/advertise/getmodel','PostAdmobController@getCarmodel')->name('getmodel');
       //get the clothing cut list
       Route::post('/advertise/getcut','PostAdmobController@getCuts')->name('getCuts');



      //navigation route of header bar
      Route::get('/research','NavigationsController@getResearch')->name('research');
      Route::get('/favorite','NavigationsController@getFavorite')->name('favorite');
      Route::get('/message','NavigationsController@getMessage')->name('message');
      Route::post('/deletefavorite','NavigationsController@deleteFavorite')->name('deletefavorite');
      Route::post('/deleteresearch','NavigationsController@deleteResearch')->name('deleteresearch');

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

      //fixed posted admob controller
      Route::get('/aditems/','ViewAdmobController@index')->name('viewadmob');
      Route::get('/aditems/offer/{state}','ViewAdmobController@getAreaProduction');
      Route::get('/aditems/{id}','ViewAdmobController@show')->name('showadmob');
      Route::get('/aditems/sendmessage/{userid}/{name}','ViewAdmobController@sendMailbox')->name('sendmessage');
      Route::get('/getdata/{page}','DisplayAdmobController@getData');
      //looking for different advertises
      Route::post('/dadmob/getoffer','DisplayAdmobController@getOffer')->name('searchoffer');
      
      
       // not register user route call

       Route::get('/cusadmob','CusAdmobPostController@index')->name('cusadmob');
       Route::post('/cusadmob/uploadpic','CusAdmobPostController@upLoadpic')->name('uploadpic');
       Route::post('/adddata/','PostAdmobController@addData')->name('addData');
           

       //vote route

       Route::post('/vote','ViewAdmobController@upVote')->name('vote');
       Route::post('/downvote','ViewAdmobcontroller@downVote')->name('downvote');
      Route::post('/partsearch','ViewAdmobcontroller@addPartSearch')->name('partsearch');
       
       //get help page

       Route::get('/help','HelpController@index')->name('help');

      //chatting system
      // Route::get('/chat', 'ChatController@index');
      // Route::get('messages', 'ChatController@fetch');
      // Route::post('messages', 'ChatController@sentMessage');
      Route::get('/chat','ChatController@getChatview')->name('chat');
      Route::get('/message', 'ChatController@index')->name('message');
      Route::post('/message', 'ChatController@store')->name('message.store');
      Route::post('/firebase','FirebaseController@index');
      
  });
Auth::routes();
Broadcast::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});


