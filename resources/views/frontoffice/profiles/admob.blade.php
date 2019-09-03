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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    @include('frontoffice.partials.header')
    <section>
        <div>
            <div>
                <div class="xkw6H">
                    <ul class="_1i0e0 AVKQ-">
                        <li class="_3Y9_a rljXf _3cD2j">
                            <a class="_2KBuw" href="{{route('admob')}}">
                                <div class="_2PyiJ"><span class="_1oSml _3_8LY"><svg data-name="Calque 1"
                                            viewBox="0 0 24 24" width="1em" height="1em">
                                            <path
                                                d="M2 10.1a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 1 0 0-3.8zm0-7.6a1.92 1.92 0 0 0-2 1.9 1.92 1.92 0 0 0 2 1.9 1.9 1.9 0 1 0 0-3.8zm0 15.2a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 1 0 0-3.8zm5.19 3.17H22.7a1.27 1.27 0 1 0 0-2.54H7.14a1.27 1.27 0 1 0 0 2.54zm0-7.6H22.7a1.27 1.27 0 1 0 0-2.54H7.14a1.27 1.27 0 1 0 0 2.54zM5.84 4.4a1.28 1.28 0 0 0 1.3 1.27H22.7a1.27 1.27 0 1 0 0-2.54H7.14a1.28 1.28 0 0 0-1.3 1.27z">
                                            </path>
                                        </svg></span></div>
                                <div class="trackable">
                                    <div class="_2Q3N2">
                                        <!-- react-text: 927 -->Mes annonces
                                        <!-- /react-text -->
                                    </div>
                                    <div class="oPgaL">Annonces</div>
                                </div>
                            </a></li>
                        <li class="_3Y9_a rljXf">
                            <a class="_2KBuw" href="{{route('transaction')}}">
                                <div class="_2PyiJ"><span class="_1oSml _3_8LY"><svg data-name="Calque 1"
                                            viewBox="0 0 24 24" width="1em" height="1em">
                                            <path
                                                d="M20.23 3.59L12.84.17a2.13 2.13 0 0 0-1.68 0L3.77 3.59a2.18 2.18 0 0 0-1.27 2v5.19c0 6.07 4 11.81 9.5 13.24 5.49-1.43 9.5-7.17 9.5-13.24V5.57a2.18 2.18 0 0 0-1.27-1.98zM13 9.54a.52.52 0 0 1 .53.56.51.51 0 0 1-.53.55H9.89v1.1H13a.51.51 0 0 1 .53.55.52.52 0 0 1-.53.56h-2.69A3.69 3.69 0 0 0 13.58 15a3.51 3.51 0 0 0 1.9-.55.63.63 0 0 1 .85.11.76.76 0 0 1-.11 1.1 4.35 4.35 0 0 1-2.64.78 5 5 0 0 1-4.75-3.53H7.36a.52.52 0 0 1-.53-.56.47.47 0 0 1 .53-.44h1.16v-1.1H7.36a.55.55 0 0 1 0-1.1h1.47a5.19 5.19 0 0 1 4.75-3.54 5.33 5.33 0 0 1 2.64.78.69.69 0 0 1 .11 1.05.81.81 0 0 1-.85.11 3 3 0 0 0-1.9-.66 3.81 3.81 0 0 0-3.27 2.09z">
                                            </path>
                                        </svg></span></div>
                                <div class="trackable">
                                    <div class="_2Q3N2">Mes transactions</div>
                                    <div class="oPgaL">Transactions</div>
                                </div>
                            </a></li>
                        <li class="_3Y9_a rljXf"><a class="_2KBuw" href="{{route('purchase')}}">
                                <div class="_2PyiJ"><span class="_1oSml _3_8LY"><svg data-name="Calque 1"
                                            viewBox="0 0 24 24" width="1em" height="1em">
                                            <path
                                                d="M7.2 19.2a2.4 2.4 0 1 0 2.4 2.4 2.4 2.4 0 0 0-2.4-2.4zM19.19 19.2a2.4 2.4 0 1 0 2.4 2.4 2.39 2.39 0 0 0-2.4-2.4zM17.45 13.2a2.38 2.38 0 0 0 2.1-1.2l4.3-7.78A1.2 1.2 0 0 0 22.8 2.4H5.05L4.25.68A1.2 1.2 0 0 0 3.17 0h-2a1.2 1.2 0 0 0 0 2.4H2.4l4.32 9.11-1.62 2.93A2.4 2.4 0 0 0 7.2 18h13.19a1.2 1.2 0 0 0 0-2.4H7.2l1.32-2.4z">
                                            </path>
                                        </svg></span></div>
                                <div class="trackable">
                                    <div class="_2Q3N2">Mes achats</div>
                                    <div class="oPgaL">Achats</div>
                                </div>
                            </a></li>
                        <li class="_3Y9_a rljXf"><a class="_2KBuw" href="{{route('account')}}">
                                <div class="_2PyiJ"><span class="_1oSml _3_8LY"><svg data-name="Calque 1"
                                            viewBox="0 0 24 24" width="1em" height="1em">
                                            <path
                                                d="M20.8 6.5L15.08.71A2.38 2.38 0 0 0 13.39 0H4.88A2.4 2.4 0 0 0 2.5 2.4v19.2A2.39 2.39 0 0 0 4.86 24h14.26a2.4 2.4 0 0 0 2.38-2.4V8.2a2.4 2.4 0 0 0-.7-1.7zm-5.24 12.7H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm0-4.8H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm-1.18-6a1.19 1.19 0 0 1-1.19-1.2V1.8l6.53 6.6z">
                                            </path>
                                        </svg></span></div>
                                <div class="trackable">
                                    <div class="_2Q3N2">Mon compte</div>
                                    <div class="oPgaL">Compte</div>
                                </div>
                            </a></li>
                        <li class="_3Y9_a rljXf"><a class="_2KBuw" href="{{route('mycv')}}">
                                <div class="_2PyiJ"><span class="_1oSml _3_8LY"><svg data-name="Calque 1"
                                            viewBox="0 0 24 24" width="1em" height="1em">
                                            <path
                                                d="M20.8 6.5L15.08.71A2.38 2.38 0 0 0 13.39 0H4.88A2.4 2.4 0 0 0 2.5 2.4v19.2A2.39 2.39 0 0 0 4.86 24h14.26a2.4 2.4 0 0 0 2.38-2.4V8.2a2.4 2.4 0 0 0-.7-1.7zm-5.24 12.7H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm0-4.8H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm-1.18-6a1.19 1.19 0 0 1-1.19-1.2V1.8l6.53 6.6z">
                                            </path>
                                        </svg></span></div>
                                <div class="trackable">Mon CV</div>
                            </a></li>
                        <li class="_3Y9_a rljXf"><a class="_2KBuw" href="{{route('booking')}}">
                                <div class="_2PyiJ"><span class="_1oSml _3_8LY"><svg data-name="Calque 1"
                                            viewBox="0 0 24 24" width="1em" height="1em">
                                            <path
                                                d="M4 4.07A13.79 13.79 0 0 0 2 21a2.69 2.69 0 0 0 4.2.43L8 19.68A15.26 15.26 0 0 1 4 4.07zM19.68 8l1.74-1.74A2.7 2.7 0 0 0 21 2 13.77 13.77 0 0 0 4.07 4a15.23 15.23 0 0 1 15.61 4zM23.6 21.65l-7.82-7.82-1.95 1.95 7.82 7.82a1.38 1.38 0 0 0 2-2z">
                                            </path>
                                            <path
                                                d="M4.06 4H4c-.52 4.11 1.6 9.4 5.87 13.68l7.82-7.82C13.46 5.64 8.16 3.52 4.06 4z">
                                            </path>
                                        </svg></span></div>
                                <div class="trackable">Mes réservations</div>
                            </a></li>
                        <div class="_1A0X5">
                            <div class="_1l3a3">
                                <div class="_36XVT">
                                    <a href="{{route('purchase')}}"
                                        data-qa-id="credit-link-desktop">
                                        <div class="trackable">
                                            Acheter des crédits
                                        </div>
                                        <!-- react-text: 1306 -->
                                        <!-- /react-text --><span class="_1vK7W _3cqxs" name="more"><svg
                                                viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                <path
                                                    d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm4.8 13.2h-3.6v3.6a1.2 1.2 0 0 1-2.4 0v-3.6H7.2a1.2 1.2 0 1 1 0-2.4h3.6V7.2a1.2 1.2 0 1 1 2.4 0v3.6h3.6a1.2 1.2 0 0 1 0 2.4z">
                                                </path>
                                            </svg></span>
                                    </a></div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div>
                <div class="_1aK5n">
                    <div class="_2Q3N2">
                        <div class="_1Z8YE">
                            <section class="_1i0e0">
                                <div class="_2KVr5">
                                    <div>
                                        <h3 class="trackable">Facilitez votre achat d’option avec les crédits</h3>
                                        <p>Pré-chargez votre compte du montant de crédits de votre choix et ne saisissez
                                            plus vos coordonnées bancaires à chaque dépôt d’annonce et achat d’option.
                                        </p><span class="_28rnK"><a class="_2sNbI _1xIyN _2BP2c trackable" href="{{route('purchase')}}"
                                                title="Acheter des crédits" type="button">
                                                <!-- react-text: 1457 -->Acheter des crédits
                                                <!-- /react-text --></a></span>
                                    </div><img class="_1K6u-" height="140" src="../img/glass.PNG" width="181">
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="_1WcPO">
                        <section class="_1i0e0">
                            <div class="_2iwtV">
                                <div class="MoDD-">
                                    <form>
                                        <div class="KcIeW">
                                            <div class="_1mlgr">
                                                <section>
                                                    <div class="_343br">
                                                        <div class="_3giCl">
                                                            <div class="_1O_Gw">
                                                                <div class="pb209">
                                                                    <div class="_3dX7I">
                                                                        <div class="_2a11n"><span class="_1vK7W K5CQx"
                                                                                name="close"><svg viewBox="0 0 24 24"
                                                                                    data-name="Calque 1" class="_3kNyr"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M23.47 20.9l-8.9-8.9 8.9-8.9A1.81 1.81 0 0 0 20.9.55L12 9.43 3.1.53A1.82 1.82 0 0 0 .53 3.1l8.9 8.9-8.9 8.9a1.82 1.82 0 0 0 2.57 2.57l8.9-8.9 8.9 8.9a1.82 1.82 0 0 0 2.57-2.57z">
                                                                                    </path>
                                                                                </svg></span></div>
                                                                        <p>Que recherchez-vous ?</p>
                                                                        <div class="_3H9gK">Effacer</div>
                                                                    </div>
                                                                    <div class="_1mfIX"><button
                                                                            class="_2sNbI _1xIyN GXQkc _2xk2l _1mgTv"
                                                                            type="button">
                                                                            <!-- react-text: 1294 -->Valider
                                                                            <!-- /react-text --></button></div>
                                                                </div>
                                                                <div class="bVqYZ"><input class="_2erBM _20_tk "
                                                                        data-qa-id="input-searchtext" value=""
                                                                        placeholder="Que recherchez-vous ?"
                                                                        maxlength="500" autocomplete="off"></div>
                                                            </div>
                                                        </div>
                                                        <div class="AGP6T">
                                                            <div>
                                                                <div class="SiZLq" id="Tcslection">
                                                                    <div class="_1CJVw egIn7"
                                                                        data-qa-id="select-toggle_category">
                                                                        <div class="_1etKl">
                                                                            <div class="_26tGy"><span
                                                                                    class="_1vK7W _2jG3V"
                                                                                    name="chevrondown"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                            <div class="_2gTTZ"><select
                                                                                    autocomplete="off">
                                                                                    <option value="">Toutes catégories
                                                                                    </option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_71"
                                                                                        value="71" class="_1_1B4">--
                                                                                        EMPLOI --</option>
                                                                                    <option value="33"
                                                                                        data-qa-id="categorylist_cat_33">
                                                                                        Offres d'emploi</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_1"
                                                                                        value="1" class="_1_1B4">--
                                                                                        VÉHICULES --</option>
                                                                                    <option value="2"
                                                                                        data-qa-id="categorylist_cat_2">
                                                                                        Voitures</option>
                                                                                    <option value="3"
                                                                                        data-qa-id="categorylist_cat_3">
                                                                                        Motos</option>
                                                                                    <option value="4"
                                                                                        data-qa-id="categorylist_cat_4">
                                                                                        Caravaning</option>
                                                                                    <option value="5"
                                                                                        data-qa-id="categorylist_cat_5">
                                                                                        Utilitaires</option>
                                                                                    <option value="6"
                                                                                        data-qa-id="categorylist_cat_6">
                                                                                        Équipement auto</option>
                                                                                    <option value="44"
                                                                                        data-qa-id="categorylist_cat_44">
                                                                                        Équipement moto</option>
                                                                                    <option value="50"
                                                                                        data-qa-id="categorylist_cat_50">
                                                                                        Équipement caravaning</option>
                                                                                    <option value="7"
                                                                                        data-qa-id="categorylist_cat_7">
                                                                                        Nautisme</option>
                                                                                    <option value="51"
                                                                                        data-qa-id="categorylist_cat_51">
                                                                                        Équipement nautisme</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_8"
                                                                                        value="8" class="_1_1B4">--
                                                                                        IMMOBILIER --</option>
                                                                                    <option value="9"
                                                                                        data-qa-id="categorylist_cat_9">
                                                                                        Ventes immobilières</option>
                                                                                    <option value="10"
                                                                                        data-qa-id="categorylist_cat_10">
                                                                                        Locations</option>
                                                                                    <option value="11"
                                                                                        data-qa-id="categorylist_cat_11">
                                                                                        Colocations</option>
                                                                                    <option value="13"
                                                                                        data-qa-id="categorylist_cat_13">
                                                                                        Bureaux &amp; Commerces</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_66"
                                                                                        value="66" class="_1_1B4">--
                                                                                        VACANCES --</option>
                                                                                    <option value="12"
                                                                                        data-qa-id="categorylist_cat_12">
                                                                                        Locations &amp; Gîtes</option>
                                                                                    <option value="67"
                                                                                        data-qa-id="categorylist_cat_67">
                                                                                        Chambres d'hôtes</option>
                                                                                    <option value="68"
                                                                                        data-qa-id="categorylist_cat_68">
                                                                                        Campings</option>
                                                                                    <option value="69"
                                                                                        data-qa-id="categorylist_cat_69">
                                                                                        Hôtels</option>
                                                                                    <option value="70"
                                                                                        data-qa-id="categorylist_cat_70">
                                                                                        Hébergements insolites</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_14"
                                                                                        value="14" class="_1_1B4">--
                                                                                        MULTIMÉDIA --</option>
                                                                                    <option value="15"
                                                                                        data-qa-id="categorylist_cat_15">
                                                                                        Informatique</option>
                                                                                    <option value="43"
                                                                                        data-qa-id="categorylist_cat_43">
                                                                                        Consoles &amp; Jeux vidéo
                                                                                    </option>
                                                                                    <option value="16"
                                                                                        data-qa-id="categorylist_cat_16">
                                                                                        Image &amp; Son</option>
                                                                                    <option value="17"
                                                                                        data-qa-id="categorylist_cat_17">
                                                                                        Téléphonie</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_18"
                                                                                        value="18" class="_1_1B4">--
                                                                                        MAISON --</option>
                                                                                    <option value="19"
                                                                                        data-qa-id="categorylist_cat_19">
                                                                                        Ameublement</option>
                                                                                    <option value="20"
                                                                                        data-qa-id="categorylist_cat_20">
                                                                                        Électroménager</option>
                                                                                    <option value="45"
                                                                                        data-qa-id="categorylist_cat_45">
                                                                                        Arts de la table</option>
                                                                                    <option value="39"
                                                                                        data-qa-id="categorylist_cat_39">
                                                                                        Décoration</option>
                                                                                    <option value="46"
                                                                                        data-qa-id="categorylist_cat_46">
                                                                                        Linge de maison</option>
                                                                                    <option value="21"
                                                                                        data-qa-id="categorylist_cat_21">
                                                                                        Bricolage</option>
                                                                                    <option value="52"
                                                                                        data-qa-id="categorylist_cat_52">
                                                                                        Jardinage</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_72"
                                                                                        value="72" class="_1_1B4">--
                                                                                        MODE --</option>
                                                                                    <option value="22"
                                                                                        data-qa-id="categorylist_cat_22">
                                                                                        Vêtements</option>
                                                                                    <option value="53"
                                                                                        data-qa-id="categorylist_cat_53">
                                                                                        Chaussures</option>
                                                                                    <option value="47"
                                                                                        data-qa-id="categorylist_cat_47">
                                                                                        Accessoires &amp; Bagagerie
                                                                                    </option>
                                                                                    <option value="42"
                                                                                        data-qa-id="categorylist_cat_42">
                                                                                        Montres &amp; Bijoux</option>
                                                                                    <option value="23"
                                                                                        data-qa-id="categorylist_cat_23">
                                                                                        Équipement bébé</option>
                                                                                    <option value="54"
                                                                                        data-qa-id="categorylist_cat_54">
                                                                                        Vêtements bébé</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_24"
                                                                                        value="24" class="_1_1B4">--
                                                                                        LOISIRS --</option>
                                                                                    <option value="25"
                                                                                        data-qa-id="categorylist_cat_25">
                                                                                        DVD - Films</option>
                                                                                    <option value="26"
                                                                                        data-qa-id="categorylist_cat_26">
                                                                                        CD - Musique</option>
                                                                                    <option value="27"
                                                                                        data-qa-id="categorylist_cat_27">
                                                                                        Livres</option>
                                                                                    <option value="28"
                                                                                        data-qa-id="categorylist_cat_28">
                                                                                        Animaux</option>
                                                                                    <option value="55"
                                                                                        data-qa-id="categorylist_cat_55">
                                                                                        Vélos</option>
                                                                                    <option value="29"
                                                                                        data-qa-id="categorylist_cat_29">
                                                                                        Sports &amp; Hobbies</option>
                                                                                    <option value="30"
                                                                                        data-qa-id="categorylist_cat_30">
                                                                                        Instruments de musique</option>
                                                                                    <option value="40"
                                                                                        data-qa-id="categorylist_cat_40">
                                                                                        Collection</option>
                                                                                    <option value="41"
                                                                                        data-qa-id="categorylist_cat_41">
                                                                                        Jeux &amp; Jouets</option>
                                                                                    <option value="48"
                                                                                        data-qa-id="categorylist_cat_48">
                                                                                        Vins &amp; Gastronomie</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_56"
                                                                                        value="56" class="_1_1B4">--
                                                                                        MATÉRIEL PROFESSIONNEL --
                                                                                    </option>
                                                                                    <option value="57"
                                                                                        data-qa-id="categorylist_cat_57">
                                                                                        Matériel agricole</option>
                                                                                    <option value="58"
                                                                                        data-qa-id="categorylist_cat_58">
                                                                                        Transport - Manutention</option>
                                                                                    <option value="59"
                                                                                        data-qa-id="categorylist_cat_59">
                                                                                        BTP - Chantier gros-oeuvre
                                                                                    </option>
                                                                                    <option value="60"
                                                                                        data-qa-id="categorylist_cat_60">
                                                                                        Outillage - Matériaux 2nd-oeuvre
                                                                                    </option>
                                                                                    <option value="32"
                                                                                        data-qa-id="categorylist_cat_32">
                                                                                        Équipements industriels</option>
                                                                                    <option value="61"
                                                                                        data-qa-id="categorylist_cat_61">
                                                                                        Restauration - Hôtellerie
                                                                                    </option>
                                                                                    <option value="62"
                                                                                        data-qa-id="categorylist_cat_62">
                                                                                        Fournitures de bureau</option>
                                                                                    <option value="63"
                                                                                        data-qa-id="categorylist_cat_63">
                                                                                        Commerces &amp; Marchés</option>
                                                                                    <option value="64"
                                                                                        data-qa-id="categorylist_cat_64">
                                                                                        Matériel médical</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_31"
                                                                                        value="31" class="_1_1B4">--
                                                                                        SERVICES --</option>
                                                                                    <option value="34"
                                                                                        data-qa-id="categorylist_cat_34">
                                                                                        Prestations de services</option>
                                                                                    <option value="35"
                                                                                        data-qa-id="categorylist_cat_35">
                                                                                        Billetterie</option>
                                                                                    <option value="49"
                                                                                        data-qa-id="categorylist_cat_49">
                                                                                        Évènements</option>
                                                                                    <option value="36"
                                                                                        data-qa-id="categorylist_cat_36">
                                                                                        Cours particuliers</option>
                                                                                    <option value="65"
                                                                                        data-qa-id="categorylist_cat_65">
                                                                                        Covoiturage</option>
                                                                                    <option
                                                                                        data-qa-id="categorylist_cat_37"
                                                                                        value="37" class="_1_1B4">--
                                                                                        AUTRES --</option>
                                                                                    <option value="38"
                                                                                        data-qa-id="categorylist_cat_38">
                                                                                        Autres</option>
                                                                                </select></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_3X-Yv"
                                                                        data-qa-id="select-toggle_category">
                                                                        <div class="_1etKl">
                                                                            <div class="_26tGy"><span
                                                                                    class="_1vK7W _2jG3V"
                                                                                    name="chevrondown"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                            <div class="_2gTTZ">
                                                                                <div class="_Cname">Toutes catégories</div>
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
                                                                            <li data-qa-id="categorylist_cat_33"
                                                                                class="tT3Ya">Offres d'emploi</li>
                                                                        </ul>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_1" data-id="VÉHICULES"
                                                                                class="_1_1B4 _Ctitle">VÉHICULES</li>
                                                                            <li data-qa-id="categorylist_cat_2"
                                                                                class="tT3Ya">Voitures</li>
                                                                            <li data-qa-id="categorylist_cat_3"
                                                                                class="tT3Ya">Motos</li>
                                                                            <li data-qa-id="categorylist_cat_4"
                                                                                class="tT3Ya">Caravaning</li>
                                                                            <li data-qa-id="categorylist_cat_5"
                                                                                class="tT3Ya">Utilitaires</li>
                                                                            <li data-qa-id="categorylist_cat_6"
                                                                                class="tT3Ya">Équipement auto</li>
                                                                            <li data-qa-id="categorylist_cat_44"
                                                                                class="tT3Ya">Équipement moto</li>
                                                                            <li data-qa-id="categorylist_cat_50"
                                                                                class="tT3Ya">Équipement caravaning</li>
                                                                            <li data-qa-id="categorylist_cat_7"
                                                                                class="tT3Ya">Nautisme</li>
                                                                            <li data-qa-id="categorylist_cat_51"
                                                                                class="tT3Ya">Équipement nautisme</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_8" data-id="IMMOBILIER" id="category_cat_immobiler"
                                                                                class="_1_1B4 _Ctitle">IMMOBILIER</li>
                                                                            <li data-qa-id="categorylist_cat_9"
                                                                                class="tT3Ya">Ventes immobilières</li>
                                                                            <li data-qa-id="categorylist_cat_10"
                                                                                class="tT3Ya">Locations</li>
                                                                            <li data-qa-id="categorylist_cat_11"
                                                                                class="tT3Ya">Colocations</li>
                                                                            <li data-qa-id="categorylist_cat_13"
                                                                                class="tT3Ya">Bureaux &amp; Commerces
                                                                            </li>
                                                                        </ul>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_66" data-id="VACANCES" id="category_cat_immobiler"
                                                                                class="_1_1B4 _Ctitle">VACANCES</li>
                                                                            <li data-qa-id="categorylist_cat_12"
                                                                                class="tT3Ya">Locations &amp; Gîtes</li>
                                                                            <li data-qa-id="categorylist_cat_67"
                                                                                class="tT3Ya">Chambres d'hôtes</li>
                                                                            <li data-qa-id="categorylist_cat_68"
                                                                                class="tT3Ya">Campings</li>
                                                                            <li data-qa-id="categorylist_cat_69"
                                                                                class="tT3Ya">Hôtels</li>
                                                                            <li data-qa-id="categorylist_cat_70"
                                                                                class="tT3Ya">Hébergements insolites
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_14" data-id="MULTIMÉDIA"
                                                                                class="_1_1B4 _Ctitle" >MULTIMÉDIA</li>
                                                                            <li data-qa-id="categorylist_cat_15"
                                                                                class="tT3Ya">Informatique</li>
                                                                            <li data-qa-id="categorylist_cat_43"
                                                                                class="tT3Ya">Consoles &amp; Jeux vidéo
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_16"
                                                                                class="tT3Ya">Image &amp; Son</li>
                                                                            <li data-qa-id="categorylist_cat_17"
                                                                                class="tT3Ya">Téléphonie</li>
                                                                        </ul>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_24" data-id="LOISIRS"
                                                                                class="_1_1B4 _Ctitle">LOISIRS</li>
                                                                            <li data-qa-id="categorylist_cat_25"
                                                                                class="tT3Ya">DVD - Films</li>
                                                                            <li data-qa-id="categorylist_cat_26"
                                                                                class="tT3Ya">CD - Musique</li>
                                                                            <li data-qa-id="categorylist_cat_27"
                                                                                class="tT3Ya">Livres</li>
                                                                            <li data-qa-id="categorylist_cat_28"
                                                                                class="tT3Ya">Animaux</li>
                                                                            <li data-qa-id="categorylist_cat_55"
                                                                                class="tT3Ya">Vélos</li>
                                                                            <li data-qa-id="categorylist_cat_29"
                                                                                class="tT3Ya">Sports &amp; Hobbies</li>
                                                                            <li data-qa-id="categorylist_cat_30"
                                                                                class="tT3Ya">Instruments de musique
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_40"
                                                                                class="tT3Ya">Collection</li>
                                                                            <li data-qa-id="categorylist_cat_41"
                                                                                class="tT3Ya">Jeux &amp; Jouets</li>
                                                                            <li data-qa-id="categorylist_cat_48"
                                                                                class="tT3Ya">Vins &amp; Gastronomie
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_56" data-id="MATÉRIEL PROFESSIONNEL"
                                                                                class="_1_1B4 _Ctitle">MATÉRIEL PROFESSIONNEL
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_57"
                                                                                class="tT3Ya">Matériel agricole</li>
                                                                            <li data-qa-id="categorylist_cat_58"
                                                                                class="tT3Ya">Transport - Manutention
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_59"
                                                                                class="tT3Ya">BTP - Chantier gros-oeuvre
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_60"
                                                                                class="tT3Ya">Outillage - Matériaux
                                                                                2nd-oeuvre</li>
                                                                            <li data-qa-id="categorylist_cat_32"
                                                                                class="tT3Ya">Équipements industriels
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_61"
                                                                                class="tT3Ya">Restauration - Hôtellerie
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_62"
                                                                                class="tT3Ya">Fournitures de bureau</li>
                                                                            <li data-qa-id="categorylist_cat_63"
                                                                                class="tT3Ya">Commerces &amp; Marchés
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_64"
                                                                                class="tT3Ya">Matériel médical</li>
                                                                        </ul>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_31" data-id="SERVICES"
                                                                                class="_1_1B4 _Ctitle">SERVICES</li>
                                                                            <li data-qa-id="categorylist_cat_34"
                                                                                class="tT3Ya">Prestations de services
                                                                            </li>
                                                                            <li data-qa-id="categorylist_cat_35"
                                                                                class="tT3Ya">Billetterie</li>
                                                                            <li data-qa-id="categorylist_cat_49"
                                                                                class="tT3Ya">Évènements</li>
                                                                            <li data-qa-id="categorylist_cat_36"
                                                                                class="tT3Ya">Cours particuliers</li>
                                                                            <li data-qa-id="categorylist_cat_65"
                                                                                class="tT3Ya">Covoiturage</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_18" data-id="MAISON"
                                                                                class="_1_1B4 _Ctitle">MAISON</li>
                                                                            <li data-qa-id="categorylist_cat_19"
                                                                                class="tT3Ya">Ameublement</li>
                                                                            <li data-qa-id="categorylist_cat_20"
                                                                                class="tT3Ya">Électroménager</li>
                                                                            <li data-qa-id="categorylist_cat_45"
                                                                                class="tT3Ya">Arts de la table</li>
                                                                            <li data-qa-id="categorylist_cat_39"
                                                                                class="tT3Ya">Décoration</li>
                                                                            <li data-qa-id="categorylist_cat_46"
                                                                                class="tT3Ya">Linge de maison</li>
                                                                            <li data-qa-id="categorylist_cat_21"
                                                                                class="tT3Ya">Bricolage</li>
                                                                            <li data-qa-id="categorylist_cat_52"
                                                                                class="tT3Ya">Jardinage</li>
                                                                        </ul>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_72" data-id="MODE"
                                                                                class="_1_1B4 _Ctitle">MODE</li>
                                                                            <li data-qa-id="categorylist_cat_22"
                                                                                class="tT3Ya">Vêtements</li>
                                                                            <li data-qa-id="categorylist_cat_53"
                                                                                class="tT3Ya">Chaussures</li>
                                                                            <li data-qa-id="categorylist_cat_47"
                                                                                class="tT3Ya">Accessoires &amp;
                                                                                Bagagerie</li>
                                                                            <li data-qa-id="categorylist_cat_42"
                                                                                class="tT3Ya">Montres &amp; Bijoux</li>
                                                                            <li data-qa-id="categorylist_cat_23"
                                                                                class="tT3Ya">Équipement bébé</li>
                                                                            <li data-qa-id="categorylist_cat_54"
                                                                                class="tT3Ya">Vêtements bébé</li>
                                                                        </ul>
                                                                        <ul>
                                                                            <li data-qa-id="categorylist_cat_37" data-id="AUTRES"
                                                                                class="_1_1B4 _Ctitle">AUTRES</li>
                                                                            <li data-qa-id="categorylist_cat_38"
                                                                                class="tT3Ya">Autres</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- react-empty: 1831 -->
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="_3iU_B">
                                                <div class="_2bh4L trackable" data-qa-id="input-search_button"><button
                                                        class="_2sNbI _1xIyN GXQkc _2xk2l trackable">
                                                        <!-- react-text: 1835 -->Rechercher
                                                        <!-- /react-text --></button></div>
                                            </div>
                                        </div>
                                        <section class="_38ax3"></section><!-- react-empty: 1836 -->
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <section class="_1i0e0 _1Gxco">
                    <div class="_3iU1y">
                        <div>
                            <div>
                                <div class="_3837W">
                                    <div class="_1m13d">
                                        <div class="_1f2Yt"><span>
                                                <!-- react-text: 1124 -->0
                                                <!-- /react-text -->
                                                <!-- react-text: 1125 --> annonce
                                                <!-- /react-text -->
                                                <!-- react-text: 1126 -->
                                                <!-- /react-text -->
                                                <!-- react-text: 1127 --> en ligne :
                                                <!-- /react-text --></span><span class="_3ER5S">
                                                <!-- react-text: 1129 -->0
                                                <!-- /react-text -->
                                                <!-- react-text: 1130 --> trouvée
                                                <!-- /react-text -->
                                                <!-- react-text: 1131 -->
                                                <!-- /react-text --></span>
                                            <div class="_2Q3N2">
                                                <!-- react-text: 1133 -->/
                                                <!-- /react-text --><span class="_2PtAg WXITh">
                                                    <!-- react-text: 1135 -->0
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1136 --> annonce
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1137 -->
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1138 --> sélectionnée
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1139 -->
                                                    <!-- /react-text --></span></div>
                                        </div>
                                        <div class="_1VNqy">
                                            <div class="selectWrapper blue"><select class="select _3zDBX">
                                                    <option value="date-desc">Trier par : Date</option>
                                                    <option value="price-asc">Trier par : Prix croissants</option>
                                                    <option value="price-desc">Trier par : Prix décroissants</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="oPgaL"><span class="_2PtAg WXITh">
                                            <!-- react-text: 1148 -->0
                                            <!-- /react-text -->
                                            <!-- react-text: 1149 --> annonce
                                            <!-- /react-text -->
                                            <!-- react-text: 1150 -->
                                            <!-- /react-text -->
                                            <!-- react-text: 1151 --> sélectionnée
                                            <!-- /react-text -->
                                            <!-- react-text: 1152 -->
                                            <!-- /react-text --></span></div>
                                </div>
                                <div class="_5v8TM">
                                    <div class="_1IqvG">
                                        <div class="_1R1eo"><input type="checkbox" class="TAYdd" value="on"></div>
                                    </div>
                                    <div class="_1jdTN">
                                        <div class="_2eNPA"><button class="_2sNbI e943h _2DNTi"
                                                data-form="[object Object]" disabled=""><span
                                                    class="_1vK7W _1eOK1 QKFCn _1WM72" name="moveup"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M8.76 15.78h8.93c.54 0 .87-.46.87-1.14s-.33-1.14-.87-1.14H8.76c-.55 0-.87.46-.87 1.14a1 1 0 0 0 .87 1.14zM9 10.55h2.17a1.14 1.14 0 0 0 0-2.27H9a1.14 1.14 0 0 0 0 2.27zM23.13 18.73H8.76c-.55 0-.87.57-.87 1.13S8.32 21 8.76 21H23a1 1 0 0 0 1-1.14c0-.56-.44-1.13-.87-1.13zM4 3.17a.5.5 0 0 0-.76 0l-3 3.07c-.33.34-.11 1 .32 1h2v12.6A1.12 1.12 0 0 0 3.53 21a1.12 1.12 0 0 0 1.09-1.14V7.26h2a.63.63 0 0 0 .44-1z">
                                                        </path>
                                                    </svg></span><!-- react-text: 1842 -->Remonter en tête de liste
                                                <!-- /react-text -->
                                                <form method="post"
                                                    action="https://compteperso.leboncoin.fr/store/main?cmd=top_list"
                                                    style="display: none;"><input type="hidden" name="cmd"
                                                        value="top_list"></form>
                                            </button><button class="_2sNbI e943h _2DNTi" data-form="[object Object]"
                                                disabled=""><span class="_1vK7W _1eOK1 QKFCn _1WM72"
                                                    name="clockarrow"><svg height="24" width="24" viewBox="0 0 24 24"
                                                        focusable="false">
                                                        <path
                                                            d="M13.66 1.004c5.546.152 10.182 4.724 10.336 10.195C24.16 17.136 19.325 22 13.352 22c-2.471 0-4.73-.828-6.527-2.228-.556-.42-.592-1.248-.095-1.738a1.189 1.189 0 0 1 1.562-.093 8.225 8.225 0 0 0 5.06 1.726c4.613 0 8.337-3.72 8.279-8.282-.06-4.339-3.761-7.989-8.16-8.048-4.635-.058-8.396 3.616-8.396 8.165H7.19c.532 0 .793.63.426.992l-3.3 3.266a.592.592 0 0 1-.84 0L.18 12.494c-.38-.362-.12-.992.413-.992H2.71c0-5.89 4.93-10.66 10.95-10.498zm-.603 5.833c.484 0 .887.396.887.863v3.966l3.405 1.995a.877.877 0 0 1 .308 1.2.903.903 0 0 1-1.218.304l-3.69-2.158a1.176 1.176 0 0 1-.58-1.003V7.712c0-.48.403-.875.888-.875z"
                                                            fill="#1A1A1A"></path>
                                                    </svg></span><!-- react-text: 1849 -->Abonnement tête de liste
                                                <!-- /react-text -->
                                                <form method="post"
                                                    action="https://compteperso.leboncoin.fr/store/main?cmd=sub_toplist"
                                                    style="display: none;"><input type="hidden" name="cmd"
                                                        value="sub_toplist"></form>
                                            </button><button class="_2sNbI e943h _2DNTi" data-form="[object Object]"
                                                disabled=""><span class="_1vK7W _1eOK1 QKFCn _1WM72"
                                                    name="spotlight"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                        focusable="false">
                                                        <path
                                                            d="M18.43 0H5.57A2.63 2.63 0 0 0 3 2.67V24l9-4 9 4V2.67A2.63 2.63 0 0 0 18.43 0z">
                                                        </path>
                                                    </svg></span><!-- react-text: 1856 -->À la une
                                                <!-- /react-text -->
                                                <form method="post"
                                                    action="https://compteperso.leboncoin.fr/store/main?cmd=gallery"
                                                    style="display: none;"><input type="hidden" name="cmd"
                                                        value="gallery"></form>
                                            </button><button class="_2sNbI e943h _2DNTi" data-form="[object Object]"
                                                disabled=""><span class="_1vK7W _1eOK1 QKFCn _1WM72" name="star"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M22.66 8l-6.75-.59L13.23.87a1.35 1.35 0 0 0-2.53 0L8 7.43 1.28 8a1.55 1.55 0 0 0-.84 2.62l5.2 4.66-1.55 6.87a1.44 1.44 0 0 0 2.11 1.61l5.8-3.65 5.76 3.65a1.41 1.41 0 0 0 2.11-1.61L18.3 15.3l5.2-4.66A1.51 1.51 0 0 0 22.66 8z">
                                                        </path>
                                                    </svg></span><!-- react-text: 1863 -->Logo Urgent
                                                <!-- /react-text -->
                                                <form method="post"
                                                    action="https://compteperso.leboncoin.fr/store/main?cmd=urgent"
                                                    style="display: none;"><input type="hidden" name="cmd"
                                                        value="urgent"></form>
                                            </button><button class="_2sNbI e943h _2DNTi trackable"
                                                data-form="[object Object]" disabled=""><span
                                                    class="_1vK7W _1eOK1 QKFCn _1WM72" name="trash"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M17.14 5.33H6.86A2.62 2.62 0 0 0 4.29 8v13.33A2.62 2.62 0 0 0 6.86 24h10.28a2.62 2.62 0 0 0 2.57-2.67V8a2.62 2.62 0 0 0-2.57-2.67zM19.71 1.33H16.5l-.91-.94a1.28 1.28 0 0 0-.9-.39H9.31a1.28 1.28 0 0 0-.9.39l-.91.94H4.29A1.32 1.32 0 0 0 3 2.67 1.31 1.31 0 0 0 4.29 4h15.42A1.31 1.31 0 0 0 21 2.67a1.32 1.32 0 0 0-1.29-1.34z">
                                                        </path>
                                                    </svg></span><!-- react-text: 1870 -->Supprimer
                                                <!-- /react-text -->
                                                <form method="post"
                                                    action="https://compteperso.leboncoin.fr/store/main?cmd=adservices"
                                                    style="display: none;"><input type="hidden" name="cmd"
                                                        value="delete"></form>
                                            </button></div><!-- react-empty: 1539 -->
                                        <!-- react-empty: 1873 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3z3iI">
                            <div class="_2ZhPK">
                                <div class="_1i0e0 _3nLKo">
                                    <div>
                                        <div class="_3837W">
                                            <div class="_1m13d">
                                                <div class="_1f2Yt"><span>
                                                        <!-- react-text: 1194 -->0
                                                        <!-- /react-text -->
                                                        <!-- react-text: 1195 --> annonce
                                                        <!-- /react-text -->
                                                        <!-- react-text: 1196 -->
                                                        <!-- /react-text -->
                                                        <!-- react-text: 1197 --> en ligne :
                                                        <!-- /react-text --></span><span class="_3ER5S">
                                                        <!-- react-text: 1199 -->0
                                                        <!-- /react-text -->
                                                        <!-- react-text: 1200 --> trouvée
                                                        <!-- /react-text -->
                                                        <!-- react-text: 1201 -->
                                                        <!-- /react-text --></span>
                                                    <div class="_2Q3N2">
                                                        <!-- react-text: 1203 -->/
                                                        <!-- /react-text --><span class="_2PtAg WXITh">
                                                            <!-- react-text: 1205 -->0
                                                            <!-- /react-text -->
                                                            <!-- react-text: 1206 --> annonce
                                                            <!-- /react-text -->
                                                            <!-- react-text: 1207 -->
                                                            <!-- /react-text -->
                                                            <!-- react-text: 1208 --> sélectionnée
                                                            <!-- /react-text -->
                                                            <!-- react-text: 1209 -->
                                                            <!-- /react-text --></span></div>
                                                </div>
                                                <div class="_1VNqy">
                                                    <div class="selectWrapper blue"><select class="select _3zDBX">
                                                            <option value="date-desc">Trier par : Date</option>
                                                            <option value="price-asc">Trier par : Prix croissants
                                                            </option>
                                                            <option value="price-desc">Trier par : Prix décroissants
                                                            </option>
                                                        </select></div>
                                                </div>
                                            </div>
                                            <div class="oPgaL"><span class="_2PtAg WXITh">
                                                    <!-- react-text: 1218 -->0
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1219 --> annonce
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1220 -->
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1221 --> sélectionnée
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1222 -->
                                                    <!-- /react-text --></span></div>
                                        </div>
                                        <div class="_5v8TM">
                                            <div class="_1IqvG">
                                                <div class="_1R1eo"><input type="checkbox" class="TAYdd" value="on">
                                                </div>
                                            </div>
                                            <div class="_1jdTN">
                                                <div class="_2eNPA"><button class="_2sNbI e943h _2DNTi"
                                                        data-form="[object Object]" disabled=""><span
                                                            class="_1vK7W _1eOK1 QKFCn _1WM72" name="moveup"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.76 15.78h8.93c.54 0 .87-.46.87-1.14s-.33-1.14-.87-1.14H8.76c-.55 0-.87.46-.87 1.14a1 1 0 0 0 .87 1.14zM9 10.55h2.17a1.14 1.14 0 0 0 0-2.27H9a1.14 1.14 0 0 0 0 2.27zM23.13 18.73H8.76c-.55 0-.87.57-.87 1.13S8.32 21 8.76 21H23a1 1 0 0 0 1-1.14c0-.56-.44-1.13-.87-1.13zM4 3.17a.5.5 0 0 0-.76 0l-3 3.07c-.33.34-.11 1 .32 1h2v12.6A1.12 1.12 0 0 0 3.53 21a1.12 1.12 0 0 0 1.09-1.14V7.26h2a.63.63 0 0 0 .44-1z">
                                                                </path>
                                                            </svg></span><!-- react-text: 1879 -->Remonter en tête de
                                                        liste
                                                        <!-- /react-text -->
                                                        <form method="post"
                                                            action="https://compteperso.leboncoin.fr/store/main?cmd=top_list"
                                                            style="display: none;"><input type="hidden" name="cmd"
                                                                value="top_list"></form>
                                                    </button><button class="_2sNbI e943h _2DNTi"
                                                        data-form="[object Object]" disabled=""><span
                                                            class="_1vK7W _1eOK1 QKFCn _1WM72" name="clockarrow"><svg
                                                                height="24" width="24" viewBox="0 0 24 24"
                                                                focusable="false">
                                                                <path
                                                                    d="M13.66 1.004c5.546.152 10.182 4.724 10.336 10.195C24.16 17.136 19.325 22 13.352 22c-2.471 0-4.73-.828-6.527-2.228-.556-.42-.592-1.248-.095-1.738a1.189 1.189 0 0 1 1.562-.093 8.225 8.225 0 0 0 5.06 1.726c4.613 0 8.337-3.72 8.279-8.282-.06-4.339-3.761-7.989-8.16-8.048-4.635-.058-8.396 3.616-8.396 8.165H7.19c.532 0 .793.63.426.992l-3.3 3.266a.592.592 0 0 1-.84 0L.18 12.494c-.38-.362-.12-.992.413-.992H2.71c0-5.89 4.93-10.66 10.95-10.498zm-.603 5.833c.484 0 .887.396.887.863v3.966l3.405 1.995a.877.877 0 0 1 .308 1.2.903.903 0 0 1-1.218.304l-3.69-2.158a1.176 1.176 0 0 1-.58-1.003V7.712c0-.48.403-.875.888-.875z"
                                                                    fill="#1A1A1A"></path>
                                                            </svg></span><!-- react-text: 1886 -->Abonnement tête de
                                                        liste
                                                        <!-- /react-text -->
                                                        <form method="post"
                                                            action="https://compteperso.leboncoin.fr/store/main?cmd=sub_toplist"
                                                            style="display: none;"><input type="hidden" name="cmd"
                                                                value="sub_toplist"></form>
                                                    </button><button class="_2sNbI e943h _2DNTi"
                                                        data-form="[object Object]" disabled=""><span
                                                            class="_1vK7W _1eOK1 QKFCn _1WM72" name="spotlight"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M18.43 0H5.57A2.63 2.63 0 0 0 3 2.67V24l9-4 9 4V2.67A2.63 2.63 0 0 0 18.43 0z">
                                                                </path>
                                                            </svg></span><!-- react-text: 1893 -->À la une
                                                        <!-- /react-text -->
                                                        <form method="post"
                                                            action="https://compteperso.leboncoin.fr/store/main?cmd=gallery"
                                                            style="display: none;"><input type="hidden" name="cmd"
                                                                value="gallery"></form>
                                                    </button><button class="_2sNbI e943h _2DNTi"
                                                        data-form="[object Object]" disabled=""><span
                                                            class="_1vK7W _1eOK1 QKFCn _1WM72" name="star"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M22.66 8l-6.75-.59L13.23.87a1.35 1.35 0 0 0-2.53 0L8 7.43 1.28 8a1.55 1.55 0 0 0-.84 2.62l5.2 4.66-1.55 6.87a1.44 1.44 0 0 0 2.11 1.61l5.8-3.65 5.76 3.65a1.41 1.41 0 0 0 2.11-1.61L18.3 15.3l5.2-4.66A1.51 1.51 0 0 0 22.66 8z">
                                                                </path>
                                                            </svg></span><!-- react-text: 1900 -->Logo Urgent
                                                        <!-- /react-text -->
                                                        <form method="post"
                                                            action="https://compteperso.leboncoin.fr/store/main?cmd=urgent"
                                                            style="display: none;"><input type="hidden" name="cmd"
                                                                value="urgent"></form>
                                                    </button><button class="_2sNbI e943h _2DNTi trackable"
                                                        data-form="[object Object]" disabled=""><span
                                                            class="_1vK7W _1eOK1 QKFCn _1WM72" name="trash"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M17.14 5.33H6.86A2.62 2.62 0 0 0 4.29 8v13.33A2.62 2.62 0 0 0 6.86 24h10.28a2.62 2.62 0 0 0 2.57-2.67V8a2.62 2.62 0 0 0-2.57-2.67zM19.71 1.33H16.5l-.91-.94a1.28 1.28 0 0 0-.9-.39H9.31a1.28 1.28 0 0 0-.9.39l-.91.94H4.29A1.32 1.32 0 0 0 3 2.67 1.31 1.31 0 0 0 4.29 4h15.42A1.31 1.31 0 0 0 21 2.67a1.32 1.32 0 0 0-1.29-1.34z">
                                                                </path>
                                                            </svg></span><!-- react-text: 1907 -->Supprimer
                                                        <!-- /react-text -->
                                                        <form method="post"
                                                            action="https://compteperso.leboncoin.fr/store/main?cmd=adservices"
                                                            style="display: none;"><input type="hidden" name="cmd"
                                                                value="delete"></form>
                                                    </button></div><!-- react-empty: 1576 -->
                                                <!-- react-empty: 1910 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_27BOB">
                        <div class="_1i0e0">
                            <div>
                                <p>Vous n’avez aucune annonce en ligne</p><span class="_28rnK"><a
                                        class="_2sNbI _1xIyN _2xk2l rz48Z trackable" href="{{route('advertise')}}"
                                        title="Déposer une annonce"><span class="_1vK7W _2S72Q" name="newadoutline"><svg
                                                viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                <path
                                                    d="M17.33 10.67h-4v-4a1.33 1.33 0 1 0-2.66 0v4h-4a1.33 1.33 0 1 0 0 2.66h4v4a1.33 1.33 0 1 0 2.66 0v-4h4a1.33 1.33 0 1 0 0-2.66z">
                                                </path>
                                                <path
                                                    d="M21.6 0H2.4A2.41 2.41 0 0 0 0 2.4v19.2A2.41 2.41 0 0 0 2.4 24h19.2a2.41 2.41 0 0 0 2.4-2.4V2.4A2.41 2.41 0 0 0 21.6 0zm0 20.4a1.2 1.2 0 0 1-1.2 1.2H3.6a1.2 1.2 0 0 1-1.2-1.2V3.6a1.2 1.2 0 0 1 1.2-1.2h16.8a1.2 1.2 0 0 1 1.2 1.2v16.8z">
                                                </path>
                                            </svg></span><!-- react-text: 1411 -->Déposer une annonce
                                        <!-- /react-text --></a></span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
          

        </div>
        
    </section>
   
    <!-- @include('frontoffice.partials.profilefooter') -->

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
    <script>
        $(document).ready(function () {
            var flag = true;

            var classname = document.getElementsByClassName("_Ctitle");  
            $('#Tcslection').on('click', function () {
                //  console.log('test');
                if (flag) {
                    $('#Lclist').css("display", "flex");
                    flag = false;
                } else {
                    $('#Lclist').css("display", "none");
                    flag = true;
                }


            });
            $("#Trselect").on('click',function(){
              $('#Lclist').css("display", "none");
              $('._Cname').html("Toutes catégories");
            });

            var myFunction = function() {
                var attribute = this.getAttribute("data-id");
                // console.log(attribute);
                $('#Lclist').css("display", "none");
                $('._Cname').html(attribute);
            };
              for (var i = 0; i < classname.length; i++) {
                classname[i].addEventListener('click', myFunction, false);
              }

});
  
    </script>

    @yield('after-script')

</body>

</html>