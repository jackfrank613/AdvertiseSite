<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jamii</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/mainpage.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/other.css')}}">
</head>

<body>
    <header id="header" role="banner">
        <section class="headerContent">
            <div class="content-center">
                <a class="displayMenu button-white-mobile custom-large-hidden">
                    MENU
                </a>
                <a href="#" class="logo_button">
                    <span class="_cuslogo">Jamii</span>
                </a>
                <nav class="headerNav nav_hidden" role="navigation">
                    <ul class="headerNav_main">
                        <li>
                            <a href="#"><span>déposer une annonce</span></a>
                        </li>
                        <li>
                            <a href="#"><span>offres</span></a>
                        </li>
                        <li>
                            <a href="#"><span>demandes</span></a>
                        </li>
                        <li>
                            <a href="#"><span>mes favoris</span></a>
                        </li>
                        <li>
                            <a href="#"><span>mes favoris</span></a>
                        </li>
                        <li>
                            <a href="#"><span>Messages</span></a>
                        </li>
                    </ul>

                </nav>
                <div class="header_aside">
                    <button class="button-flat button_secondary custom-small-hidden">

                        <i class="fa fa-male"></i>
                        Se connecter

                    </button>
                </div>

            </div>


        </section>

    </header>
    <main id="main" role="main">
        <section class="content-center">
            <section id="new_form">
                <header class="newad_form_header clearfix">
                    <h1 class="grey">Déposer une annonce</h1>
                </header>
                <form method="post" action="/ai/verify/1" name="formular" enctype="multipart/form-data" id="formular">
                    <div id="news_forms">
                        <section>
                            <div id="form_part_ads" class="mtm">
                                <article class="box-grey-dark">
                                    <h2 class="title">Votre annonce </h2>
                                    <div class="container">
                                        <div class="grid-2">
                                            <div>
                                                <div class="line">
                                                    <span class="font_style">Catégorie *</span>
                                                    <div class="selectWrapper single" style="margin-top:5px">
                                                        <select name="category" id="category" class="select">
                                                            <option>«Choisissez une catégorie»</option>
                                                            @foreach ($data['categories'] as $cat)
                                                            <option value="{{$cat['id']}}" style="background-color:#E6E6E6" disabled="" id="cat{{$cat['id']}}">-- {{$cat['cname']}} --</option>
                                                               if(@isset($data['subcategories'][$cat['id']])
                                                                   @foreach ($data['subcategories'][$cat['id']] as $item1)
                                                                   <option value="{{$item1['s_id']}}" id="cat{{$item1['s_id']}}">{{$item1['sname']}}</option>
                                                                   @endforeach
                                                               @endisset) 
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="line">
                                                    <span class="font_style"> Vous êtes un *</span>
                                                    <div style="margin-left:20px;margin-top:5px">
                                                        <label class="radio fl prm enabler">
                                                            <input id="private_ad_id" name="company_ad" value="0"
                                                                type="radio" checked="checked">
                                                            Particulier
                                                        </label>
                                                        <label class="radio disabler">
                                                            <input id=company_ad_id name="company_ad" value="1"
                                                                type="radio">
                                                            Professionnel
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="information-alert">
                                                    La catégorie Hôtels est désormais réservée aux annonceurs
                                                    professionnels. Si vous souhaitez publier une annonce dans le but de
                                                    revendre des séjours comprenant des nuits d'hôtels, rendez-vous dans
                                                    la catégorie billetterie de notre site.
                                                </div>
                                                <div class="line">
                                                    <span class="font_style">Type d'annonce *</span>
                                                    <div style="margin-left:20px;margin-top:5px">
                                                        <label class="radio f1 enabler" style="float:left">
                                                            <input type="radio" name="type" value="seller"
                                                                checked="checked">
                                                            <span class="text type_s mrm">Offers</span>
                                                        </label>
                                                        <label class="radio disabler">
                                                            <input type="radio" name="type" value="buyer">
                                                            <span class="text type_s mrm">Demands</span>
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="line optionnal_params">
                                                    <div>
                                                        <div class="line toDisable">
                                                            <span class="font_style">Titre de l'annonce*</span>
                                                            <div>
                                                                <div >
                                                                    <input type="text" id="subject" name="subject"
                                                                        maxlength="50" value="" class="input readonly">
                                                                    <span class="unit"></span>
                                                                </div>
                                                                <span class="full label-error"
                                                                    data-for="subject"></span>
                                                                <span class="full label-info" data-for="subject">
                                                                    Votre annonce sera refusée si le titre ne décrit pas
                                                                    précisément le produit que vous proposez. Ne pas
                                                                    mentionner "Vente" ou "Achat" dans le titre.

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="line" style="margin-top:50px">
                                                    <span style="font_style">Texte de l'annonce *</span>
                                                    <textarea rows="10" name="body" id="body" class="textarea full"
                                                        maxlength="4000"></textarea>
                                                </div>
                                                <div class="line optionnal_params" style="margin-top:40px">
                                                    <span style="font_style">Prix*</span>
                                                    <div>
                                                        <input type="tel" id="price" name="price" maxlength="8" value=""
                                                        class="input readonly medium">

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="toDisable" style="margin-top:40px">
                                            <span class="font_style">Photos : <span class="font-common">Une annonce avec
                                                    photo est 7 fois plus consultée qu'une annonce sans
                                                    photo</span></span>
                                            <aside class="pictures-list">
                                                <div class="file_container mrm mts" id="uploadPhoto-0"
                                                    data-state="not_uploaded">
                                                    <input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image0" id="image0">
                                                    <p class="uppercase">Photo principale</p><i
                                                        class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container mrm mts" id="uploadPhoto-1"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image1" id="image1">
                                                    <p class="uppercase">Photo 2</p><i
                                                    class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container mrm mts" id="uploadPhoto-2"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image2" id="image2">
                                                    <p class="uppercase">Photo 3</p><i
                                                    class="fa fa-camera" style="font-size:40px"></i>
                                                </div><label class="file_container-orange mrs mts" for="cmd_photosup">
                                                    <p class="uppercase">7 photos supplémentaires</p><i
                                                    class="fa fa-camera" style="font-size:40px"></i>
                                                    <p class="photosup_package hidden"><span id="photosup_price"></span>
                                                        € <span id="photosup_type"></span></p>
                                                </label>
                                                <div class="file_container option mrm mts hidden" id="uploadPhoto-3"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image3" id="image3">
                                                    <p class="uppercase">Photo 4</p><i
                                                    class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container option mrm mts hidden" id="uploadPhoto-4"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image4" id="image4">
                                                    <p class="uppercase">Photo 5</p><i
                                                    class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container option mrm mts hidden" id="uploadPhoto-5"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image5" id="image5">
                                                    <p class="uppercase">Photo 6</p><i
                                                    class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container option mrm mts hidden" id="uploadPhoto-6"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image6" id="image6">
                                                    <p class="uppercase">Photo 7</p><i
                                                       class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container option mrm mts hidden" id="uploadPhoto-7"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image7" id="image7">
                                                    <p class="uppercase">Photo 8</p><i
                                                       class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container option mrm mts hidden" id="uploadPhoto-8"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image8" id="image8">
                                                    <p class="uppercase">Photo 9</p><i
                                                       class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                                <div class="file_container option mrm mts hidden" id="uploadPhoto-9"
                                                    data-state="not_uploaded"><input type="file" class="picture"
                                                        accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"
                                                        name="image9" id="image9">
                                                    <p class="uppercase">Photo 10</p><i
                                                       class="fa fa-camera" style="font-size:40px"></i>
                                                </div>
                                            </aside>
                                        </div>

                                    </div>
                                </article>

                            </div>

                        </section>
                       <section id="form_part_localisation" class="toDisable mtm">
                           <article class="box-grey-dark">
                                <h2 class="title">Localisation</h2>
                                <div style="padding:10px">
                                   <div class="inputWrapper">
                                        <input id="search" class="controls" type="text" placeholder="Search" style="background:white;width:500px">
                                        <div id="map" style="width:100%;height:200px"></div>

                                   </div>
                                   <ul id="geoData">
                                        <li>Full Address: <span id="location"></span></li>
                                        <li>Postal Code: <span id="postal_code"></span></li>
                                        <li>Country: <span id="country"></span></li>
                                        <li>Latitude: <span id="lat"></span></li>
                                        <li>Longitude: <span id="lon"></span></li>
                                    </ul>
                                </div>
                           </article>

                       </section>
                       <section id="form_part_information" class="toDisable mtm">
                           <div class="box-grey-dark">
                                <h2 class="title">Vos informations</h2>
                                <div>
                                        <div class="grid-2">
                                            <div style="padding: 10px">
                                                    <span style="font_style">Pseudo*</span>
                                                    <div>
                                                    <input type="text" class="input medium readonly" id="name" name="name" maxlength="50" value="">
                                                    </div>
                                                    <span style="font_style">Email*</span>
                                                    <div>
                                                    <input type="text" class="input medium readonly" id="email" name="email" maxlength="50" value="">
                                                    </div>
                                                    <span style="font_style">Téléphone *</span>
                                                    <div>
                                                    <input type="text" class="input medium readonly" id="phone" name="phone" maxlength="50" value="">
                                                    </div>
                                                   <div>
                                                       <div class="checkbox" style="margin-left:20px;margin-top:10px">
                                                            <input type="checkbox" id="phone_hidden" name="phone_hidden" value="1">
                                                            <span>le numéro de téléphone dans l'annonce.</span> 
                                                       </div>
                                                       <div class="checkbox" style="margin-left:20px;margin-top:10px">
                                                            <input type="checkbox" id="no_salesmen" name="no_salesmen" value="1">
                                                            <span>
                                                                    Je ne souhaite pas être sollicité par des sociétés étrangères au site leboncoin.fr
                                                                </span> 
                                                       </div>
                                                   </div>
                                            </div>
                                            <div></div>
                                               
                                        </div>
                                </div>
                               
                           </div>
                       </section>
                    </div>
                    <div class="grid-1-4 line toDisable pbs">
                            {{-- <input type="submit" value="Valider" id="newadSubmit" class="button-blue"> --}}
                            <button type="submit" id="newadSubmit" class="button-blue">Valider</button>
                            <div></div>
                        </div>
                </form>
            </section>


        </section>

    </main>
    <footer>


    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXAEJOmp7v7uXD-Vrmaw6xjBl_ZExIn7g&libraries=places"></script>

</body>
    <script>
 function initMap() {
var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 48.8566, lng: 2.3522},
      zoom: 13
    });
var input = document.getElementById('search');
// map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
 
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.bindTo('bounds', map);
 
varinfowindow = new google.maps.InfoWindow();
var marker = new google.maps.Marker({
        map: map,
anchorPoint: new google.maps.Point(0, -29)
    });
 
autocomplete.addListener('place_changed', function() {
// infowindow.close();
marker.setVisible(false);
var place = autocomplete.getPlace();
        if (!place.geometry) {
window.alert("Autocomplete's returned place contains no geometry");
            return;
        }
 
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
map.fitBounds(place.geometry.viewport);
        } else {
map.setCenter(place.geometry.location);
map.setZoom(17);
        }
marker.setIcon(({
            url: "../img/marker.png",
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
scaledSize: new google.maps.Size(35, 35)
        }));
marker.setPosition(place.geometry.location);
marker.setVisible(true);
console.log(place);
document.getElementById("location").innerHTML=place['formatted_address'];
document.getElementById("postal_code").innerHTML=place['address_components'][6]['long_name'];
document.getElementById("country").innerHTML=place['address_components'][5]['long_name'];
document.getElementById("lat").innerHTML=place['geometry']['location'].lat();
document.getElementById("lon").innerHTML=place['geometry']['location'].lng();
 
    });
}
$(document).ready(function(){
 initMap();
  
  $('input[name=image0]').on('change',function(){
    var formData=new FormData();
  
   // $('#uploadPhoto-0').append('<div class="layout loader"><span class="loaderGif"></span></div>');
   console.log("test");
 


});
    </script>
</html>