<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <title>Jamii</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
  
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->

    <link type="text/css" rel="stylesheet" href="{{asset('css/mainpage.css')}}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('css/productionpage.css')}}" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('css/auth.css')}}" /> -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/header.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/Pagination.css')}}">

    <style>
            .ad_topic:hover{
                text-decoration: underline;
            }
            ._3f3p2 a{
                font-weight: bold;
            }
           </style>
          
</head>

<body>
    <!-- Header -->
    @include('frontoffice.partials.header')
    <!-- Header -->
    <!--Dialog-->
    <!--Login_modal-->
    <div class="modal _3vig1 globalContent contentAfterOpen" id="Login_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <!-- <div class="modal-header">
                    <h1 class="modal-title">LogIn</h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="_1lEHL">
                        <div class="_3oF3k">
                            <div class="PZs61">

                                <h1>

                                    Connectez-vous pour retrouver vos favoris

                                </h1>
                                <div class="_2xBxS">
                                    <div class="_3tqKI">
                                        <div class="_1sEbc"><img
                                                src="//static-rav.leboncoin.fr/0e3b77656afbf2453c54854f82591e3b.png"
                                                alt="Saved Ads"></div>
                                        <div class="_1w6py">
                                            <h2>

                                                Annonces sauvegardées

                                            </h2>
                                            <p>En naviguant connecté, vous pouvez sauvegarder les annonces qui vous
                                                intéressent le plus pour les surveiller. Vous pourrez les retrouver
                                                quand vous voulez sur tous vos appareils.</p>
                                        </div>
                                    </div>
                                    <div class="_2eODT">
                                        <div class="_1sEbc"><img
                                                src="//static-rav.leboncoin.fr/57932636817eb6df6d73c423b4183d55.png"
                                                alt="Saved Searches"></div>
                                        <div class="_1w6py">
                                            <h2>

                                                Recherches sauvegardées

                                            </h2>
                                            <p>Sauvegardez vos recherches pour consulter plus facilement les nouveaux
                                                résultats.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3oF3k">
                            <section>
                                <div>
                                    <div class="_3M53r">
                                        <div class="_3gfNn" data-qa-id="title">

                                            Connexion

                                        </div>
                                        <div>
                                            <div class="_1uVWE">
                                                <form class="_382l8" method="POST" action="{{route('homelogin')}}">
                                                    @csrf
                                                    <div><label class="TMFen" for="email">
                                                            <!-- react-text: 36 -->

                                                            Adresse email

                                                            <!-- /react-text -->
                                                        </label>
                                                        <div class="_2wuZK">
                                                            <input type="text" class="_2erBM _2yMsD"
                                                                data-qa-id="authmodal-email" value="" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="_1QRTe">
                                                        <div>
                                                            <div><label class="TMFen" for="password">
                                                                    <!-- react-text: 43 -->

                                                                    Mot de passe

                                                                    <!-- /react-text -->
                                                                </label>
                                                                <div class="_2wuZK">
                                                                    <input type="password" class="_2erBM _2yMsD"
                                                                        data-qa-id="authmodal-password" value=""
                                                                        name="password">

                                                                </div>
                                                            </div><a data-qa-id="link-forgotten-password" class="_-0qA4"
                                                                href="#">
                                                                Mot de passe oublié ?
                                                            </a>
                                                        </div>
                                                    </div><button type="submit" data-qa-id="authmodal-login"
                                                        style="background-color: #4183d7;
                                                                                                    color: white;
                                                                                                    width: 100%;
                                                                                                    height: 40px;
                                                                                                    border-width: inherit;
                                                                                                    margin-top:15px;
                                                                                                    border-radius: 5px;">
                                                        <!-- react-text: 48 -->
                                                        Se connecter
                                                    </button>
                                                    @if(Session::has('error_message'))
                                                    <h5 style="color:red">{{ Session::get('error_message') }}</h5>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_3m_rz">
                                        <div class="_24yU7">
                                            <div class="_1uVWE">
                                                <p class="hv-Tf">

                                                    Vous n’avez pas de compte ?account ?

                                                </p><button id="create_account"
                                                    class="_2sNbI _1xIyN GXQkc _2BP2c trackable"
                                                    data-qa-id="create-account" data-toggle="modal"
                                                    data-target="#Regsiter_modal">
                                                    <!-- react-text: 54 -->

                                                    Créer un compte

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!--Login_modal-->
    <!--Register_modal-->
    <div class="modal _3vig1 globalContent contentAfterOpen" id="Regsiter_modal">
        <div class="modal-dialog">
            <div class="_2y5yt JEb3x">
                <div class="_1lEHL">
                    <div class="_3oF3k">
                        <div class="PZs61">
                            <h1>

                                Login to find your favorites

                            </h1>
                            <div class="_2xBxS">
                                <div class="_3tqKI">
                                    <div class="_1sEbc"><img
                                            src="//static-rav.leboncoin.fr/0e3b77656afbf2453c54854f82591e3b.png"
                                            alt="Saved Ads"></div>
                                    <div class="_1w6py">
                                        <h2>

                                            Saved Ads

                                        </h2>
                                        <p>

                                            By browsing connected, you can
                                            save the ads that interest you most to monitor them.
                                            You can find them whenever you
                                            want on all your devices.

                                        </p>
                                    </div>
                                </div>
                                <div class="_2eODT">
                                    <div class="_1sEbc"><img
                                            src="//static-rav.leboncoin.fr/57932636817eb6df6d73c423b4183d55.png"
                                            alt="Saved Searches"></div>
                                    <div class="_1w6py">
                                        <h2>

                                            Saved Searches

                                        </h2>
                                        <p>

                                            Save your searches for easier
                                            viewing of new results.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_3oF3k">
                        <section>
                            <div>
                                <div class="_3M53r">
                                    <div class="_3gfNn" data-qa-id="title">Création de compte</div>
                                    <div>
                                        <div class="_1uVWE">
                                            <div class="pUskR"> Choisissez votre type de compte : </div>
                                            <div class="_24z04"><span class="_28rnK"><a
                                                        class="_2sNbI _1xIyN GXQkc _2BP2c trackable"
                                                        href="{{route('particular')}}"
                                                        data-qa-id="button-create-account-part">
                                                        <!-- react-text: 64 -->Particulier
                                                        <!-- /react-text --></a></span><span class="_28rnK"><a
                                                        class="_2sNbI _1xIyN GXQkc _2BP2c trackable"
                                                        href="{{route('professional')}}"
                                                        data-qa-id="button-create-account-pro">
                                                        <!-- react-text: 67 -->Professionnel
                                                        <!-- /react-text --></a></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3m_rz back_loginmodal">
                                    <div class="_24yU7"><a class="_3BMJ7 trackable"><span class="_1vK7W K5CQx"
                                                name="arrowleft"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                    focusable="false">
                                                    <path
                                                        d="M22.46 10.43H5.26l7.51-7.72a1.63 1.63 0 0 0 0-2.25 1.52 1.52 0 0 0-2.17 0L.45 10.88a1.61 1.61 0 0 0 0 2.23L10.6 23.54a1.52 1.52 0 0 0 2.17 0 1.61 1.61 0 0 0 0-2.23l-7.51-7.72h17.2a1.58 1.58 0 0 0 0-3.16z">
                                                    </path>
                                                </svg></span><!-- react-text: 72 -->Retour à la connexion
                                            <!-- /react-text --></a></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Register_modal-->
    <section>

        <div class="_3iQ0i" style="pointer-events: inherit;">
            <div class="_1ydbl">
                <form id="search_result" method="GET" action="{{route('viewadmob')}}">
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    <input type="hidden" name="state" id="state" value="{{$st_id}}">
                    <input type="hidden" name="sub" id="sub" value="{{$scategory}}">
                    <div class="_3mkBC" style="display:flex;"><label class="radio" for="offer"><input type="radio"
                                id="offer" name="ad_type" value="sell" checked><!-- react-text: 653 -->Offres
                            <!-- /react-text --></label><label class="radio" for="demand" style="margin-top:0px"><input
                                type="radio" id="demand" name="ad_type" value="buy"><!-- react-text: 656 -->Demandes
                            <!-- /react-text --></label></div>
                    <div class="MoDD- ypWAz">
                        <div class="KcIeW">
                            <div class="_1mlgr">
                                <section>
                                    <div class="_343br">
                                        <div class="_3giCl">
                                            <div class="_1O_Gw">
                                                <div class="pb209">
                                                    <div class="_3dX7I">
                                                        <div class="_2a11n"><span class="_1vK7W K5CQx" name="close"><svg
                                                                    viewBox="0 0 24 24" data-name="Calque 1"
                                                                    class="_3kNyr" focusable="false">
                                                                    <path
                                                                        d="M23.47 20.9l-8.9-8.9 8.9-8.9A1.81 1.81 0 0 0 20.9.55L12 9.43 3.1.53A1.82 1.82 0 0 0 .53 3.1l8.9 8.9-8.9 8.9a1.82 1.82 0 0 0 2.57 2.57l8.9-8.9 8.9 8.9a1.82 1.82 0 0 0 2.57-2.57z">
                                                                    </path>
                                                                </svg></span></div>
                                                        <p>Que recherchez-vous ?</p>
                                                        <div class="_3H9gK">Effacer</div>
                                                    </div>
                                                    <div class="_1mfIX"><button
                                                            class="_2sNbI _1xIyN GXQkc _2xk2l _1mgTv" type="button">
                                                            <!-- react-text: 673 -->Valider
                                                            <!-- /react-text --></button></div>
                                                </div>
                                                <div class="bVqYZ">
                                                    <input class="_2erBM _20_tk " data-qa-id="input-searchtext"
                                                        id="searchtext" value="" placeholder="Que recherchez-vous ?"
                                                        maxlength="500" name="search" autocomplete="off">
                                                    <ul class="_2W7Z8">
                                                        <li class="_2r36r trackable"><span><span
                                                                    class="_1vK7W _2jG3V _3ABYz"
                                                                    name="heartoutline"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                        </path>
                                                                    </svg></span><span class="_1MzEf _1842g">
                                                                    <!-- react-text: 2643 -->Toutes catégories
                                                                    <!-- /react-text --></span></span></li>
                                                    </ul>
                                                </div>
                                                <div class="_1okrU">
                                                    <div class="_2dGFl">
                                                        <div class="_3vHTu">
                                                            <div>
                                                                <label data-qa-id="checkbox-title_only-desktop"
                                                                    class="_2BJZq">
                                                                    <span class="_1SRTJ"
                                                                        data-qa-id="text-title_only-desktop">Recherche
                                                                        dans le titre uniquement</span>

                                                                    <span class="R3YOB"></span></label></div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="AGP6T">
                                            <div>
                                                <div class="SiZLq" id="list_click">
                                                    <div class="_1CJVw egIn7" data-qa-id="select-toggle_category">
                                                        <div class="_1etKl">
                                                            <div class="_26tGy"><span class="_1vK7W _2jG3V"
                                                                    name="chevrondown"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                        </path>
                                                                    </svg></span></div>
                                                            <div class="_2gTTZ">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_3X-Yv" data-qa-id="select-toggle_category">
                                                        <div class="_1etKl">
                                                            <div class="_26tGy"><span class="_1vK7W _2jG3V"
                                                                    name="chevrondown"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                        </path>
                                                                    </svg></span></div>
                                                            <div class="_2gTTZ">
                                                                <div class="_Cname">Informatique</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_3Vcbh" style="display:none" id="Lclist">
                                                    <div>
                                                        <ul>
                                                            <li class="_11G4C _1_1B4"><a id="Trselect">Toutes
                                                                    catégories</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_71" data-id="EMPLOI"
                                                                class="_1_1B4 _Ctitle">EMPLOI</li>
                                                            <li data-qa-id="categorylist_cat_33" class="tT3Ya">Offres
                                                                d'emploi</li>
                                                        </ul>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_1" data-id="VÉHICULES"
                                                                class="_1_1B4 _Ctitle">VÉHICULES</li>
                                                            <li data-qa-id="categorylist_cat_2" data-id="2"
                                                                value="Voitures" class="tT3Ya">Voitures</li>
                                                            <li data-qa-id="categorylist_cat_3" data-id="3"
                                                                value="Motos" class="tT3Ya">Motos</li>
                                                            <li data-qa-id="categorylist_cat_4" data-id="4"
                                                                value="Caravaning" class="tT3Ya">Caravaning</li>
                                                            <li data-qa-id="categorylist_cat_5" data-id="5"
                                                                value="Utilitaires" class="tT3Ya">Utilitaires</li>
                                                            <li data-qa-id="categorylist_cat_6" data-id="6"
                                                                value="Équipement auto" class="tT3Ya">Équipement auto
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_44" data-id="7"
                                                                value="Équipement moto" class="tT3Ya">Équipement moto
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_50" data-id="8"
                                                                value="Équipement caravaning" class="tT3Ya">Équipement
                                                                caravaning</li>
                                                            <li data-qa-id="categorylist_cat_7" data-id="9"
                                                                value="Nautisme" class="tT3Ya">Nautisme</li>
                                                            <li data-qa-id="categorylist_cat_51" data-id="10"
                                                                value="Équipement nautisme" class="tT3Ya">Équipement
                                                                nautisme</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_8" data-id="IMMOBILIER"
                                                                id="category_cat_immobiler" class="_1_1B4 _Ctitle">
                                                                IMMOBILIER</li>
                                                            <li data-qa-id="categorylist_cat_9" data-id="11"
                                                                value="Ventes immobilières" class="tT3Ya">Ventes
                                                                immobilières</li>
                                                            <li data-qa-id="categorylist_cat_10" data-id="12"
                                                                value="Locations" class="tT3Ya">Locations</li>
                                                            <li data-qa-id="categorylist_cat_11" data-id="13"
                                                                value="Colocations" class="tT3Ya">Colocations</li>
                                                            <li data-qa-id="categorylist_cat_13" data-id="14"
                                                                value="Bureaux &amp; Commerces" class="tT3Ya">Bureaux
                                                                &amp; Commerces
                                                            </li>
                                                        </ul>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_66" data-id="VACANCES"
                                                                id="category_cat_immobiler" class="_1_1B4 _Ctitle">
                                                                VACANCES</li>
                                                            <li data-qa-id="categorylist_cat_12" data-id="15"
                                                                value="Locations &amp; Gîtes" class="tT3Ya">Locations
                                                                &amp; Gîtes</li>
                                                            <li data-qa-id="categorylist_cat_67" data-id="16"
                                                                value="Chambres d'hôtes" class="tT3Ya">Chambres d'hôtes
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_68" data-id="17"
                                                                value="Campings" class="tT3Ya">Campings</li>
                                                            <li data-qa-id="categorylist_cat_69" data-id="18"
                                                                value="Hôtels" class="tT3Ya">Hôtels</li>
                                                            <li data-qa-id="categorylist_cat_70" data-id="19"
                                                                value="Hébergements insolites" class="tT3Ya">
                                                                Hébergements insolites
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_14" data-id="MULTIMÉDIA"
                                                                class="_1_1B4 _Ctitle">MULTIMÉDIA</li>
                                                            <li data-qa-id="categorylist_cat_15" data-id="20"
                                                                value="Informatique" class="tT3Ya">Informatique</li>
                                                            <li data-qa-id="categorylist_cat_43" data-id="21"
                                                                value="Consoles &amp; Jeux vidéo" class="tT3Ya">Consoles
                                                                &amp; Jeux vidéo
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_16" data-id="22"
                                                                value="Image &amp; Son" class="tT3Ya">Image &amp; Son
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_17" data-id="23"
                                                                value="Téléphonie" class="tT3Ya">Téléphonie</li>
                                                        </ul>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_24" data-id="LOISIRS"
                                                                class="_1_1B4 _Ctitle">LOISIRS</li>
                                                            <li data-qa-id="categorylist_cat_25" data-id="24"
                                                                value="DVD - Films" class="tT3Ya">DVD - Films</li>
                                                            <li data-qa-id="categorylist_cat_26" data-id="25"
                                                                value="CD - Musique" class="tT3Ya">CD - Musique</li>
                                                            <li data-qa-id="categorylist_cat_27" data-id="26"
                                                                value="Livres" class="tT3Ya">Livres</li>
                                                            <li data-qa-id="categorylist_cat_28" data-id="27"
                                                                value="Animaux" class="tT3Ya">Animaux</li>
                                                            <li data-qa-id="categorylist_cat_55" data-id="28"
                                                                value="Vélos" class="tT3Ya">Vélos</li>
                                                            <li data-qa-id="categorylist_cat_29" data-id="29"
                                                                value="Sports &amp; Hobbies" class="tT3Ya">Sports &amp;
                                                                Hobbies</li>
                                                            <li data-qa-id="categorylist_cat_30" data-id="30"
                                                                value="Instruments de musique" class="tT3Ya">Instruments
                                                                de musique
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_40" data-id="31"
                                                                value="Collection" class="tT3Ya">Collection</li>
                                                            <li data-qa-id="categorylist_cat_41" data-id="32"
                                                                value="Jeux &amp; Jouets" class="tT3Ya">Jeux &amp;
                                                                Jouets</li>
                                                            <li data-qa-id="categorylist_cat_48" data-id="33"
                                                                value="Vins &amp; Gastronomie" class="tT3Ya">Vins &amp;
                                                                Gastronomie
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_56"
                                                                data-id="MATÉRIEL PROFESSIONNEL" class="_1_1B4 _Ctitle">
                                                                MATÉRIEL PROFESSIONNEL
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_57" data-id="34"
                                                                value="Matériel agricole" class="tT3Ya">Matériel
                                                                agricole</li>
                                                            <li data-qa-id="categorylist_cat_58" data-id="35"
                                                                value="Transport - Manutention" class="tT3Ya">Transport
                                                                - Manutention
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_59" data-id="36"
                                                                value="BTP - Chantier gros-oeuvre" class="tT3Ya">BTP -
                                                                Chantier gros-oeuvre
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_60" data-id="37" value="Outillage - Matériaux
                                                            2nd-oeuvre" class="tT3Ya">Outillage - Matériaux
                                                                2nd-oeuvre</li>
                                                            <li data-qa-id="categorylist_cat_32" data-id="38"
                                                                value="Équipements industriels" class="tT3Ya">
                                                                Équipements industriels
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_61" data-id="39"
                                                                value="Restauration - Hôtellerie" class="tT3Ya">
                                                                Restauration - Hôtellerie
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_62" data-id="40"
                                                                value="Fournitures de bureau" class="tT3Ya">Fournitures
                                                                de bureau</li>
                                                            <li data-qa-id="categorylist_cat_63" data-id="41"
                                                                value="Matériel médical" class="tT3Ya">Commerces &amp;
                                                                Marchés
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_64" data-id="42" value=""
                                                                class="tT3Ya">Matériel médical</li>
                                                        </ul>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_31" data-id="SERVICES"
                                                                class="_1_1B4 _Ctitle">SERVICES</li>
                                                            <li data-qa-id="categorylist_cat_34" data-id="43"
                                                                value="Billetterie" class="tT3Ya">Prestations de
                                                                services
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_35" data-id="44" value=""
                                                                class="tT3Ya">Billetterie</li>
                                                            <li data-qa-id="categorylist_cat_49" data-id="45"
                                                                value="Évènements" class="tT3Ya">Évènements</li>
                                                            <li data-qa-id="categorylist_cat_36" data-id="46"
                                                                value="Cours particuliers" class="tT3Ya">Cours
                                                                particuliers</li>
                                                            <li data-qa-id="categorylist_cat_65" data-id="47"
                                                                value="Covoiturage" class="tT3Ya">Covoiturage</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_18" data-id="MAISON"
                                                                class="_1_1B4 _Ctitle">MAISON</li>
                                                            <li data-qa-id="categorylist_cat_19" data-id="48"
                                                                value="Ameublement" class="tT3Ya">Ameublement</li>
                                                            <li data-qa-id="categorylist_cat_20" data-id="49"
                                                                value="Électroménager" class="tT3Ya">Électroménager</li>
                                                            <li data-qa-id="categorylist_cat_45" data-id="50"
                                                                value="Arts de la table" class="tT3Ya">Arts de la table
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_39" data-id="51"
                                                                value="Décoration" class="tT3Ya">Décoration</li>
                                                            <li data-qa-id="categorylist_cat_46" data-id="52"
                                                                value="Linge de maison" class="tT3Ya">Linge de maison
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_21" data-id="53"
                                                                value="Bricolage" class="tT3Ya">Bricolage</li>
                                                            <li data-qa-id="categorylist_cat_52" data-id="54"
                                                                value="Jardinage" class="tT3Ya">Jardinage</li>
                                                        </ul>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_72" data-id="MODE"
                                                                class="_1_1B4 _Ctitle">MODE</li>
                                                            <li data-qa-id="categorylist_cat_22" data-id="55"
                                                                value="Vêtements" class="tT3Ya">Vêtements</li>
                                                            <li data-qa-id="categorylist_cat_53" data-id="56"
                                                                value="Chaussures" class="tT3Ya">Chaussures</li>
                                                            <li data-qa-id="categorylist_cat_47" data-id="57" value="Accessoires &amp;
                                                            Bagagerie" class="tT3Ya">Accessoires &amp;
                                                                Bagagerie</li>
                                                            <li data-qa-id="categorylist_cat_42" data-id="58"
                                                                value="Montres &amp; Bijoux" class="tT3Ya">Montres &amp;
                                                                Bijoux</li>
                                                            <li data-qa-id="categorylist_cat_23" data-id="59"
                                                                value="Équipement bébé" class="tT3Ya">Équipement bébé
                                                            </li>
                                                            <li data-qa-id="categorylist_cat_54" data-id="60"
                                                                value="Vêtements bébé" class="tT3Ya">Vêtements bébé</li>
                                                        </ul>
                                                        <ul>
                                                            <li data-qa-id="categorylist_cat_37" data-id="AUTRES"
                                                                class="_1_1B4 _Ctitle">AUTRES</li>
                                                            <li data-qa-id="categorylist_cat_38" data-id="61"
                                                                value="Autres" class="tT3Ya">Autres</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="TwSJ3">
                                        <div class="_3Hx4s">

                                            <label class="WzIvr" style="display:none"><input type="checkbox" id="ctitle"
                                                    name="it" data-qa-id="checkbox-title_only" value="1">
                                                <!-- react-text: 773 -->Recherche dans le titre uniquement
                                                <!-- /react-text --></label><label class="WzIvr"><input type="checkbox"
                                                    id="curgent" name="ur" data-qa-id="checkbox-urgent" value="2">
                                                <!-- react-text: 776 -->Annonces
                                                <!-- /react-text -->
                                                <!-- react-text: 777 -->
                                                <!-- /react-text --><span class="ZEqzC"><span class="_1vK7W K5CQx"
                                                        name="star"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                            focusable="false">
                                                            <path
                                                                d="M22.66 8l-6.75-.59L13.23.87a1.35 1.35 0 0 0-2.53 0L8 7.43 1.28 8a1.55 1.55 0 0 0-.84 2.62l5.2 4.66-1.55 6.87a1.44 1.44 0 0 0 2.11 1.61l5.8-3.65 5.76 3.65a1.41 1.41 0 0 0 2.11-1.61L18.3 15.3l5.2-4.66A1.51 1.51 0 0 0 22.66 8z">
                                                            </path>
                                                        </svg></span><!-- react-text: 780 -->Urgentes
                                                    <!-- /react-text --></span><!-- react-text: 781 -->
                                                <!-- /react-text -->
                                                <!-- react-text: 782 -->uniquement
                                                <!-- /react-text --></label></div><!-- react-empty: 783 -->
                                        <div class="_2hgSM n4U50" style="display:flex;">
                                            <div>
                                                <div class="_19T3o" data-for="select-location"
                                                    data-tip="Impossible de déterminer votre position. Veuillez réessayer ultérieurement."
                                                    data-place="bottom">
                                                    <div class="_1etKl _1eqgm">
                                                        <div class="_26tGy"><span class="_1vK7W _2jG3V"
                                                                name="chevrondown"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                    </path>
                                                                </svg></span></div>
                                                        <div class="_2gTTZ"><select id="searcharea" autocomplete="off"
                                                                data-qa-id="select-region_department">
                                                                <option value="around_me">Autour de moi</option>
                                                                <option value="current_region">Aquitaine</option>
                                                                <option value="near_region">Régions voisines</option>
                                                                <option value="all">Toute la France</option>
                                                                <option class="_3JrAR" disabled="">-- DEPARTEMENT --
                                                                </option>
                                                                <option value="24">Dordogne</option>
                                                                <option value="33">Gironde</option>
                                                                <option value="40">Landes</option>
                                                                <option value="47">Lot-et-Garonne</option>
                                                                <option value="64">Pyrénées-Atlantiques</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="_1Uqok">
                                                    <div class="Select _1Uqok Select--multi is-searchable">
                                                        <div class="Select-control"><span
                                                                class="Select-multi-value-wrapper"
                                                                id="react-select-2--value">
                                                                <div class="Select-placeholder"></div>
                                                                <div class="Select-input"
                                                                    style="display: inline-block;">
                                                                    <style>
                                                                        input#undefined::-ms-clear {
                                                                            display: none;
                                                                        }
                                                                    </style><input placeholder="Ville ou code postal"
                                                                        autocomplete="off" name="distance"
                                                                        data-qa-id="input-cityzipcode" role="combobox"
                                                                        aria-expanded="false" aria-owns=""
                                                                        aria-haspopup="false"
                                                                        aria-activedescendant="react-select-2--value"
                                                                        value=""
                                                                        style="width: 110px; box-sizing: content-box;">
                                                                    <div
                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 12px; font-family: OpenSans; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 12px; font-family: OpenSans; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                        Ville ou code postal</div>
                                                                </div>
                                                            </span><span class="Select-arrow-zone"><span
                                                                    class="Select-arrow"></span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="_3iU_B">
                                <div class="_2bh4L trackable" data-qa-id="input-search_button">

                                    <button class="_2sNbI _1xIyN GXQkc _2xk2l" type="submit">
                                        <!-- react-text: 818 -->Rechercher
                                        <!-- /react-text --></button>
                                </div>
                                <div class="_2id4H">
                                    <div class="_19y-B">
                                        <div class="_3jAsY">
                                            <div class="_3KcVT"><span class="_1vK7W" name="notifoutline"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M12 24a2.49 2.49 0 0 0 2.5-2.46h-5A2.48 2.48 0 0 0 12 24zM21.13 18.2l-1.62-1.58v-6.16c0-3.78-2.05-6.94-5.63-7.78v-.83a1.88 1.88 0 0 0-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 0 0 .88 2.11h16.49a1.23 1.23 0 0 0 .89-2.11zM17 17.85H7v-7.39c0-3.05 1.89-5.54 5-5.54s5 2.49 5 5.54z">
                                                        </path>
                                                    </svg></span></div>
                                            <div class="_1MBDf"><span class="_3sPbC">Sauvegarder la recherche</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="_38ax3 wcucb">
                            <div class="_3afM1">
                                <div>
                                    <div><span class="_2oGk4">Prix entre</span>
                                        <div class="_1uP35">
                                            <select data-qa-id="select-price_min" name="min_price" id="min_price">
                                                <option>Prix min</option>
                                                {{-- <option value="">0</option> --}}
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="100">100</option>
                                                <option value="200">200</option>
                                                <option value="300">300</option>
                                                <option value="400">400</option>
                                                <option value="500">500</option>
                                                <option value="1000">1 000</option>
                                            </select></div><span class="_2oGk4 XtGYX">et</span>
                                        <div class="_1uP35"><select data-qa-id="select-price_max" name="max_price"
                                                id="max_price">
                                                <option>Prix max</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="100">100</option>
                                                <option value="200">200</option>
                                                <option value="300">300</option>
                                                <option value="400">400</option>
                                                <option value="500">500</option>
                                                <option value="1000">1 000</option>
                                                <option value="2000">2000</option>
                                                <option value="4000">4000</option>
                                                <option value="6000">6000</option>
                                                <option value="8000">8000</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- react-empty: 827 -->
                    </div>


                </form>
            </div>

            <div class="apn-hbl apn-hb"><span id="hbl-s" class="teal-apn"></span></div>

            <div class="l17WS bgMain" data-reactid="327">
                <div data-reactid="328">
                    <div class="_36eyL" data-reactid="329">
                        <h1 data-reactid="330" style="font-size:18px">{{$sub_name}}&nbsp;: {{$st_name}}</h1>
                    </div>
                    <div class="apn-lt" data-reactid="331"><span id="lt-l" class="teal-apn"
                            data-reactid="332"></span><span id="lt-xl" class="teal-apn" data-reactid="333"></span></div>
                    <div class="apn-b" data-reactid="334"><span id="b1-s" class="teal-apn"
                            data-reactid="335"></span><span id="b1-m" class="teal-apn" data-reactid="336"></span><span
                            id="b2-m" class="teal-apn" data-reactid="337"></span><span id="b1-l" class="teal-apn"
                            data-reactid="338"></span><span id="b2-l" class="teal-apn" data-reactid="339"></span><span
                            id="b3-l" class="teal-apn" data-reactid="340"></span><span id="b1-xl" class="teal-apn"
                            data-reactid="341"></span><span id="b2-xl" class="teal-apn" data-reactid="342"></span><span
                            id="b3-xl" class="teal-apn" data-reactid="343"></span><span id="b4-xl" class="teal-apn"
                            data-reactid="344"></span>
                        <div style="clear:both;" data-reactid="345"></div>
                    </div>
                    <div class="apn-mb" data-reactid="346"><span id="mb-s" class="teal-apn"
                            data-reactid="347"></span><span id="mb-m" class="teal-apn" data-reactid="348"></span><span
                            id="mb-l" class="teal-apn" data-reactid="349"></span></div>
                    <div class="apn-lt" data-reactid="351"><span id="lt-s" class="teal-apn"
                            data-reactid="352"></span><span id="lt-m" class="teal-apn" data-reactid="353"></span></div>
                    <div class="_2Njaz _3GLp9" data-reactid="354">
                        <div class="_358dQ" data-reactid="355">
                            <div class="_2r1q3" data-reactid="356">
                                <div data-reactid="357" id="advertiseList">
                                    <h2 id="empty_result" style="display:none">Le résultat n'est pas vide!</h2>

                                </div>
                            </div>
                        </div>
                        <div class="_2qwGs" data-reactid="1623">
                            <div data-reactid="1624" id="side_list">

                            </div>
                            <div class="advertisingSkyscraper" data-reactid="1720">
                                <div class="initPosition" data-reactid="1721">
                                    <div class="_39t72" data-reactid="1722"
                                        style="width: 310px; height: 620px; position: relative;">
                                        <div class="apn-sk skyscraper _3beIN _3O6XM" data-reactid="1723"><span id="sk-l"
                                                class="teal-apn" data-reactid="1724"></span><span id="sk-xl"
                                                class="teal-apn" data-reactid="1725">
                                                <div id="div_utif_sk-xl" style="display: inline;"><iframe
                                                        id="utif_sk-xl_0a5bcc22-87ac-4bb1-b3be-0f521f665f00"
                                                        name="utif_sk-xl_0a5bcc22-87ac-4bb1-b3be-0f521f665f00"
                                                        height="600" width="300" tabindex="-1" marginwidth="0"
                                                        marginheight="0" scrolling="no" frameborder="0"
                                                        style="border: 0px;"></iframe></div>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_2joc2 apn-sk skyscraper" data-reactid="1726"><span id="sk-m" class="teal-apn"
                                data-reactid="1727"></span></div>
                    </div>
                </div>
            </div>


            <div class="_-o_FS">
                <div class="_1l3a3">
                    <section class="_33mha">
                        <div class="_1i0e0 _1YhkB">
                                <div class="_3UM0h" data-reactid="341">
                                        <ul data-reactid="342">
                                            <li class="_3f3p2" data-reactid="343"><a title="EMPLOI" class="trackable"
                                                    data-reactid="344">EMPLOI</a></li>
                                            <li class="ad_topic" data-reactid="345"><a title="Offres d'emploi" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=1"
                                                    data-reactid="346">Offres d'emploi</a></li>
                                            <li class="_3f3p2" data-reactid="349"><a title="VEHICULES" 
                                                    data-reactid="350">VEHICULES</a></li>
                                            <li class="ad_topic" data-reactid="351"><a title="Voitures" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=2"
                                                    href="#" data-reactid="352">Voitures</a></li>
                                            <li class="ad_topic" data-reactid="353"><a title="Motos" class="trackable"  href="{{URL::to('frontoffice/aditems/')}}?sub=3"
                                                    data-reactid="354">Motos</a></li>
                                            <li class="ad_topic" data-reactid="355"><a title="Caravaning" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=4"
                                                    data-reactid="356">Caravaning</a></li>
                                            <li class="ad_topic" data-reactid="357"><a title="Utilitaires" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=5"
                                                    data-reactid="358">Utilitaires</a></li>
                                            <li class="ad_topic" data-reactid="361"><a title="Nautisme" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=9"
                                                    data-reactid="362">Nautisme</a></li>
                                            <li class="ad_topic" data-reactid="363"><a title="Equipement Auto" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=6"
                                                    data-reactid="364">Equipement Auto</a></li>
                                            <li class="ad_topic" data-reactid="365"><a title="Equipement Moto" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=7"
                                                    data-reactid="366">Equipement Moto</a></li>
                                            <li class="ad_topic" data-reactid="367"><a title="Equipement Caravaning" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=8"
                                                    data-reactid="368">Equipement Caravaning</a></li>
                                            <li class="ad_topic" data-reactid="369"><a title="Equipement Nautisme" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=10"
                                                    data-reactid="370">Equipement Nautisme</a></li>
                                            <li class="_3f3p2" data-reactid="371"><a title="IMMOBILIER" class="trackable" 
                                                    data-reactid="372">IMMOBILIER</a></li>
                                            <li class="ad_topic" data-reactid="373"><a title="Ventes immobilières" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=11"
                                                    data-reactid="374">Ventes immobilières</a></li>
                                            <li class="ad_topic" data-reactid="375"><a href="{{URL::to('frontoffice/aditems/')}}?sub=3" target="_self" title="Immobilier Neuf"
                                                    class="trackable" data-reactid="376">Immobilier Neuf</a></li>
                                            <li class="ad_topic" data-reactid="377"><a title="Locations" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=12"
                                                    data-reactid="378">Locations</a></li>
                                            <li class="ad_topic" data-reactid="379"><a title="Colocations" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=13"
                                                    data-reactid="380">Colocations</a></li>
                                            <li class="ad_topic" data-reactid="381"><a title="Bureaux &amp; Commerces" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=14"
                                                    data-reactid="382">Bureaux &amp; Commerces</a></li>
                                        </ul>
                                    </div>
                                    <div class="_3UM0h" data-reactid="383">
                                        <ul data-reactid="384">
                                            <li class="_3f3p2" data-reactid="385"><a title="VACANCES" class="trackable" 
                                                    data-reactid="386">VACANCES</a></li>
                                            <li class="ad_topic" data-reactid="387"><a title="Locations &amp; Gîtes" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=15"
                                                    data-reactid="388">Locations &amp; Gîtes</a></li>
                                            <li class="ad_topic" data-reactid="389"><a title="Chambres d'hôtes" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=16"
                                                    data-reactid="390">Chambres d'hôtes</a></li>
                                            <li class="ad_topic" data-reactid="391"><a title="Campings" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=17"
                                                    data-reactid="392">Campings</a></li>
                                            <li class="ad_topic" data-reactid="395"><a title="Hébergements insolites" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=18"
                                                    data-reactid="396">Hébergements insolites</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="397"><a href="{{URL::to('frontoffice/aditems/')}}?sub=3" target="_self" title="Ventes privées vacances"
                                                    class="trackable" data-reactid="398">Ventes privées vacances</a></li>
                                            <li class="_3f3p2" data-reactid="399"><a title="MAISON" class="trackable"
                                                    data-reactid="400">MAISON</a></li>
                                            <li class="ad_topic" data-reactid="401"><a title="Ameublement" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=23"
                                                    data-reactid="402">Ameublement</a></li>
                                            <li class="ad_topic" data-reactid="403"><a title="Electroménager" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=24"
                                                    data-reactid="404">Electroménager</a></li>
                                            <li class="ad_topic" data-reactid="405"><a title="Arts de la table" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=25"
                                                    data-reactid="406">Arts de la table</a></li>
                                            <li class="ad_topic" data-reactid="407"><a title="Décoration" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=26"
                                                    data-reactid="408">Décoration</a></li>
                                            <li class="ad_topic" data-reactid="409"><a title="Linge de maison" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=27"
                                                    data-reactid="410">Linge de maison</a></li>
                                            <li class="ad_topic" data-reactid="411"><a title="Bricolage" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=28"
                                                    data-reactid="412">Bricolage</a></li>
                                            <li class="ad_topic" data-reactid="413"><a title="Jardinage" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=29"
                                                    data-reactid="414">Jardinage</a></li>
                                            <li class="_3f3p2" data-reactid="415"><a title="MODE" class="trackable" 
                                                    data-reactid="416">MODE</a></li>
                                            <li class="ad_topic" data-reactid="417"><a title="Vêtements" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=30"
                                                    data-reactid="418">Vêtements</a></li>
                                            <li class="ad_topic" data-reactid="419"><a title="Chaussures" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=31"
                                                    data-reactid="420">Chaussures</a></li>
                                            <li class="ad_topic" data-reactid="421"><a title="Accessoires &amp; Bagagerie" class="trackable"
                                                href="{{URL::to('frontoffice/aditems/')}}?sub=32" data-reactid="422">Accessoires &amp; Bagagerie</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="423"><a title="Montres &amp; Bijoux" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=33"
                                                    data-reactid="424">Montres &amp; Bijoux</a></li>
                                            <li class="ad_topic" data-reactid="425"><a title="Equipement bébé" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=34"
                                                    data-reactid="426">Equipement bébé</a></li>
                                            <li class="ad_topic" data-reactid="427"><a title="Vêtements bébé" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=35"
                                                    data-reactid="428">Vêtements bébé</a></li>
                                        
                                        </ul>
                                    </div>
                                    <div class="_3UM0h" data-reactid="431">
                                        <ul data-reactid="432">
                                            <li class="_3f3p2" data-reactid="433"><a title="MULTIMEDIA" class="trackable" 
                                                    data-reactid="434">MULTIMEDIA</a></li>
                                            <li class="ad_topic" data-reactid="435"><a title="Informatique" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=19"
                                                    data-reactid="436">Informatique</a></li>
                                            <li class="ad_topic" data-reactid="437"><a title="Consoles &amp; Jeux vidéo" class="trackable"
                                                href="{{URL::to('frontoffice/aditems/')}}?sub=20" data-reactid=" 438">Consoles &amp; Jeux vidéo</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="439"><a title="Image &amp; Son" class="trackable"
                                                href="{{URL::to('frontoffice/aditems/')}}?sub=21" data-reactid=" 440">Image &amp; Son</a></li>
                                            <li class="ad_topic" data-reactid="441"><a title="Téléphonie" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=22"
                                                    data-reactid="442">Téléphonie</a></li>
                                            <li class="_3f3p2" data-reactid="443"><a title="LOISIRS" class="trackable" 
                                                    data-reactid="444">LOISIRS</a></li>
                                            <li class="ad_topic" data-reactid="445"><a title="DVD / Films" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=36"
                                                    data-reactid="446">DVD / Films</a></li>
                                            <li class="ad_topic" data-reactid="447"><a title="CD / Musique" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=37"
                                                    data-reactid="448">CD / Musique</a></li>
                                            <li class="ad_topic" data-reactid="449"><a title="Livres" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=38"
                                                    data-reactid="450">Livres</a></li>
                                            <li class="ad_topic" data-reactid="451"><a title="Animaux" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=39"
                                                    data-reactid="452">Animaux</a></li>
                                            <li class="ad_topic" data-reactid="453"><a title="Vélos" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=40"
                                                    data-reactid="454">Vélos</a></li>
                                            <li class="ad_topic" data-reactid="455"><a title="Sports &amp; Hobbies" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=41"
                                                    data-reactid="456">Sports &amp; Hobbies</a></li>
                                            <li class="ad_topic" data-reactid="457"><a title="Instruments de musique" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=42"
                                                    data-reactid="458">Instruments de musique</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="459"><a title="Collection" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=43"
                                                    data-reactid="460">Collection</a></li>
                                            <li class="ad_topic" data-reactid="461"><a title="Jeux &amp; Jouets" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=44"
                                                    data-reactid="462">Jeux &amp; Jouets</a></li>
                                            <li class="ad_topic" data-reactid="463"><a title="Vins &amp; Gastronomie" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=45"
                                                    data-reactid="464">Vins &amp; Gastronomie</a></li>
                                        </ul>
                                    </div>
                                    <div class="_3UM0h" data-reactid="465">
                                        <ul data-reactid="466">
                                            <li class="_3f3p2" data-reactid="467"><a title="MATERIEL PROFESSIONNEL" class="trackable"
                                                     data-reactid="468">MATERIEL PROFESSIONNEL</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="469"><a title="Matériel Agricole" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=46"
                                                    data-reactid="470">Matériel Agricole</a></li>
                                            <li class="ad_topic" data-reactid="471"><a title="Transport - Manutention" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=47"
                                                    data-reactid="472">Transport - Manutention</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="473"><a title="BTP - Chantier Gros-oeuvre" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=48"
                                                    data-reactid="474">BTP - Chantier
                                                    Gros-oeuvre</a></li>
                                            <li class="ad_topic" data-reactid="475"><a title="Outillage - Matériaux 2nd-oeuvre" class="trackable"
                                                href="{{URL::to('frontoffice/aditems/')}}?sub=49" data-reactid="476">Outillage - Matériaux
                                                    2nd-oeuvre</a></li>
                                            <li class="ad_topic" data-reactid="477"><a title="Équipements Industriels" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=50"
                                                    data-reactid="478">Équipements Industriels</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="479"><a title="Restauration - Hôtellerie" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=51"
                                                    data-reactid="480">Restauration - Hôtellerie</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="481"><a title="Fournitures de Bureau" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=52"
                                                    data-reactid="482">Fournitures de Bureau</a></li>
                                            <li class="ad_topic" data-reactid="483"><a title="Commerces &amp; Marchés" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=53"
                                                    data-reactid="484">Commerces &amp; Marchés</a></li>
                                            <li class="ad_topic" data-reactid="485"><a title="Matériel Médical" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=54"
                                                    data-reactid="486">Matériel Médical</a></li>
                                            <li class="_3f3p2" data-reactid="487"><a title="SERVICES" class="trackable" 
                                                    data-reactid="488">SERVICES</a></li>
                                            <li class="ad_topic" data-reactid="489"><a title="Prestations de services" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=55"
                                                    data-reactid="490">Prestations de services</a>
                                            </li>
                                            <li class="ad_topic" data-reactid="491"><a title="Billetterie" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=56"
                                                    data-reactid="492">Billetterie</a></li>
                                            <li class="ad_topic" data-reactid="493"><a title="Evénements" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=57"
                                                    data-reactid="494">Evénements</a></li>
                                            <li class="ad_topic" data-reactid="495"><a title="Cours particuliers" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=58"
                                                    data-reactid="496">Cours particuliers</a></li>
                                            <li class="ad_topic" data-reactid="497"><a title="Covoiturage" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=59"
                                                    data-reactid="498">Covoiturage</a></li>
                                            <li class="_3f3p2" data-reactid="499"><a title="Autres" class="trackable" 
                                                    data-reactid="500">Autres</a></li>
                                            <li class="ad_topic" data-reactid="501"><a title="Autres" class="trackable" href="{{URL::to('frontoffice/aditems/')}}?sub=60"
                                                    data-reactid="502">Autres</a></li>
                                        </ul>
                                    </div>
                        </div>
                    </section>
                </div>
            </div>




    <!-- Footer Section -->
    @include('frontoffice.partials.footer')
    <!-- /Footer Section -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Pagination.js')}}"></script>
</body>
<script>
    $(document).ready(function () {
        $(window).keydown(function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

        $('.main-navbar li a').click(function () {
            console.log("rw");
            $('#Login_modal').modal('toggle');
        });
        $('#create_account').click(function () {

            $('#Login_modal').modal('hide');
        });
        $('.back_loginmodal').click(function () {
            $('#Regsiter_modal').modal('toggle');
            $('#Login_modal').modal('toggle');
        });

        var flag = true;
        var classname = document.getElementsByClassName("_Ctitle");
        var subnames = document.getElementsByClassName("tT3Ya");
        var mySubfunction = function () {

            var attribute_sub = this.getAttribute("value");
            $('#Lclist').css("display", "none");
            $('._Cname').html(attribute_sub);
        };
        for (var i = 0; i < subnames.length; i++) {
            subnames[i].addEventListener('click', mySubfunction, false);
        }
        $('#list_click').on('click', function () {
            console.log('test');
            if (flag) {
                $('#Lclist').css("display", "flex");
                flag = false;
            } else {
                $('#Lclist').css("display", "none");
                flag = true;
            }


        });

        //cursor event
        $('#searchtext').on('focus', function () {
            $('._1okrU').addClass("_2tSFG");

        });

        $('#checkbox-title_only-desktop').on('click', function () {
            $('._1okrU').css("display", "none");
        });
        $('._1okrU ').on('click', '._2EKK7', function () {

            //console.log();
            $('input[name=search]').val($(this).data('value'));
            $('._1okrU').removeClass("_2tSFG");
        });
        $('input[name=search]').bind('keyup', function () {
            var text = $('input[name=search]').val();
            console.log(text);
            $.ajax({
                type: "POST",
                url: "{{route('subjectlist')}}",
                data: {
                    text: text,
                    _token: $('input[name=_token]').val(),
                },
                //  dataType: "json",
                success: function (data) {


                    $('._1okrU').html(data);
                    console.log(data);

                },
                error: function (e) {
                    console.log(e);
                }
            });
        });

        $("#Trselect").on('click', function () {
            $('#Lclist').css("display", "none");
            $('._Cname').html("Toutes catégories");
        });

        var myFunction = function () {
            var attribute = this.getAttribute("data-id");
            // console.log(attribute);
            $('#Lclist').css("display", "none");
            $('._Cname').html(attribute);
        };
        for (var i = 0; i < classname.length; i++) {
            classname[i].addEventListener('click', myFunction, false);
        }

        var type = "{{$ad_type}}";
        var search = "{{$search}}";
        if(search !="search") $('input[name=search]').val(search);
        var location = "{{$location}}";
        var distance = "{{$distance}}";
        var total_count = "{{$count}}";
        var page_count = "{{$page_count}}";
        var currentPage = "{{$current_page}}";
        var urgent = "{{$urgent}}";
        var title = "{{$title}}";
        var min_price = "{{$min_price}}";
        if(min_price !="min_price") $('select[name=min_price]').val(min_price);
        var max_price = "{{$max_price}}";
        if(max_price !="max_price") $('select[name=max_price]').val(max_price);
        var st_id = "{{$st_id}}";
        var scategory="{{$scategory}}";
        // console.log(st_id);
        $.ajax({
            type: 'POST',
            url: "{{route('filterads')}}",
            data: {
                ad_type: type,
                title: title,
                urgent: urgent,
                search: search,
                location: location,
                distance: distance,
                min_price: min_price,
                max_price: max_price,
                total_count: total_count,
                page_count: page_count,
                currentPage: currentPage,
                st_id: st_id,
                scategory:scategory,
                _token: $('input[name=_token]').val(),
            },
            dataType: 'json',
            success: function (data) {
                console.log(data.result);
                if (data.result != "") {

                    $('#empty_result').css("display", "none");
                    $('#advertiseList').html();
                    $('#side_list').html();
                    $('#advertiseList').html(data.result);
                    $('#side_list').html(data.sresult);
                } else {
                    $('#empty_result').css("display", "block");
                }

            },
            error: function (e) {
                console.log(e);
            }
        });


    });
</script>
@yield('after-script')

</html>