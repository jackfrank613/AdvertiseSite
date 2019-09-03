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
                        <li class="_3Y9_a rljXf">
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
                        <li class="_3Y9_a rljXf _3cD2j"><a class="_2KBuw" href="{{route('account')}}">
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
                                <div class="_36XVT"><a href="{{route('purchase')}}" data-qa-id="credit-link-desktop">
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
            <section class="_1i0e0 _3jfGU">
                <!-- react-empty: 3724 -->
                <div class="_2Q3N2">
                    <div class="_1Hs58">
                        <div class="_1dHF1">
                            <ul class="_2ULcp">
                                <li class="_1RKKG">Informations personnelles</li>
                                <li class="_3vk9e">E-mail</li>
                                <li class="_3vk9e">Mot de passe</li>
                                <li class="_3vk9e">Paramétrage des notifications</li><a class="trackable"
                                    href="/profil/2de9c762-c3a6-43b8-8363-59dc583d0a4c"><button
                                        class="_2JQAM WjL3t _2tJk2 EsTCR _2-qND" type="button">Voir mon profil
                                        public</button></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="_1i0e0 _1tu2-">
                    <div class="_154ia" id="personal_data">
                        <h2>Mes informations personnelles</h2>
                        <div class="vFvKI">
                            <div class="_1i0e0 _3fSfM">
                                <form autocomplete="nope">
                                    <div><label class="_2GeK6" for="gender">Civilité</label>
                                        <div class="selectWrapper"><select name="gender" data-qa-id="gender"
                                                class="select full">
                                                <option value="">Choisissez la civilité</option>
                                                <option value="1">Monsieur</option>
                                                <option value="2">Madame</option>
                                            </select></div>
                                    </div>
                                    <div><label class="TMFen" for="lastname">
                                            <!-- react-text: 3750 -->Nom *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class="_2erBM EZzl7"
                                                data-qa-id="input-name" value="" name="lastname"></div>
                                    </div>
                                    <div><label class="TMFen" for="firstname">
                                            <!-- react-text: 3755 -->Prénom *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class="_2erBM EZzl7"
                                                data-qa-id="input-firstname" value="" name="firstname"></div>
                                    </div>
                                    <div><label class="TMFen" for="pseudo">
                                            <!-- react-text: 3760 -->Pseudo *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class="_2erBM EZzl7"
                                                data-qa-id="input-pseudo" value="jack" name="pseudo"></div>
                                    </div>
                                    <div><label class="_2GeK6" for="occupational_category">Catégorie
                                            Socioprofessionnelle</label>
                                        <div class="selectWrapper"><select name="occupational_category"
                                                data-qa-id="list-rubric" class="select full">
                                                <option value="">Choisissez la catégorie</option>
                                                <option value="1">Cadre / Dirigeant</option>
                                                <option value="2">Profession libérale</option>
                                                <option value="3">Indépendant</option>
                                                <option value="4">Technicien / Agent de maîtrise</option>
                                                <option value="5">Professeur / Enseignant</option>
                                                <option value="6">Artisan</option>
                                                <option value="7">Employé de bureau ou administratif</option>
                                                <option value="8">Service aux particuliers</option>
                                                <option value="9">Commerçant</option>
                                                <option value="10">Ouvrier</option>
                                                <option value="11">Retraité</option>
                                                <option value="12">Etudiant</option>
                                                <option value="13">Femme / Homme au foyer</option>
                                                <option value="14">Militaire</option>
                                                <option value="15">Sans emploi</option>
                                            </select></div>
                                    </div>
                                    <div><label class="_2GeK6">Centres d’intérêt</label>
                                        <div>
                                            <label class="SdKcI" for="1"><input type="checkbox" name="1" id="1"
                                                    value="on"><!-- react-text: 3788 -->Automobile
                                                <!-- /react-text --></label><label class="SdKcI" for="2"><input
                                                    type="checkbox" name="2" id="2" value="on">
                                                <!-- react-text: 3791 -->Economie / Finance
                                                <!-- /react-text --></label><label class="SdKcI" for="3"><input
                                                    type="checkbox" name="3" id="3" value="on">
                                                <!-- react-text: 3794 -->Santé
                                                <!-- /react-text --></label><label class="SdKcI" for="4"><input
                                                    type="checkbox" name="4" id="4" value="on">
                                                <!-- react-text: 3797 -->Mode
                                                <!-- /react-text --></label><label class="SdKcI" for="5"><input
                                                    type="checkbox" name="5" id="5" value="on">
                                                <!-- react-text: 3800 -->Hygiène / Beauté
                                                <!-- /react-text --></label><label class="SdKcI" for="6"><input
                                                    type="checkbox" name="6" id="6" value="on">
                                                <!-- react-text: 3803 -->Technologie / Multimédia
                                                <!-- /react-text --></label><label class="SdKcI" for="7"><input
                                                    type="checkbox" name="7" id="7" value="on">
                                                <!-- react-text: 3806 -->Emploi / Formation
                                                <!-- /react-text --></label><label class="SdKcI" for="8"><input
                                                    type="checkbox" name="8" id="8" value="on">
                                                <!-- react-text: 3809 -->Puériculture
                                                <!-- /react-text --></label><label class="SdKcI" for="9"><input
                                                    type="checkbox" name="9" id="9" value="on">
                                                <!-- react-text: 3812 -->Sports
                                                <!-- /react-text --></label><label class="SdKcI" for="10"><input
                                                    type="checkbox" name="10" id="10" value="on">
                                                <!-- react-text: 3815 -->Cuisine / Gastronomie
                                                <!-- /react-text --></label><label class="SdKcI" for="11"><input
                                                    type="checkbox" name="11" id="11" value="on">
                                                <!-- react-text: 3818 -->Shopping / E-Commerce
                                                <!-- /react-text --></label><label class="SdKcI" for="12"><input
                                                    type="checkbox" name="12" id="12" value="on">
                                                <!-- react-text: 3821 -->Voyage
                                                <!-- /react-text --></label><label class="SdKcI" for="13"><input
                                                    type="checkbox" name="13" id="13" value="on">
                                                <!-- react-text: 3824 -->Culture
                                                <!-- /react-text --></label><label class="SdKcI" for="14"><input
                                                    type="checkbox" name="14" id="14" value="on">
                                                <!-- react-text: 3827 -->Photo / Vidéo
                                                <!-- /react-text --></label><label class="SdKcI" for="15"><input
                                                    type="checkbox" name="15" id="15" value="on">
                                                <!-- react-text: 3830 -->Cinéma
                                                <!-- /react-text --></label><label class="SdKcI" for="16"><input
                                                    type="checkbox" name="16" id="16" value="on">
                                                <!-- react-text: 3833 -->Musique
                                                <!-- /react-text --></label><label class="SdKcI" for="17"><input
                                                    type="checkbox" name="17" id="17" value="on">
                                                <!-- react-text: 3836 -->Jeux vidéo
                                                <!-- /react-text --></label><label class="SdKcI" for="18"><input
                                                    type="checkbox" name="18" id="18" value="on">
                                                <!-- react-text: 3839 -->Immobilier
                                                <!-- /react-text --></label><label class="SdKcI" for="19"><input
                                                    type="checkbox" name="19" id="19" value="on">
                                                <!-- react-text: 3842 -->Décoration / Ameublement
                                                <!-- /react-text --></label><label class="SdKcI" for="20"><input
                                                    type="checkbox" name="20" id="20" value="on">
                                                <!-- react-text: 3845 -->Travaux / Bricolage
                                                <!-- /react-text --></label><label class="SdKcI" for="21"><input
                                                    type="checkbox" name="21" id="21" value="on">
                                                <!-- react-text: 3848 -->Design
                                                <!-- /react-text --></label></div>
                                    </div>
                                    <div><label class="TMFen" for="billing_address">
                                            <!-- react-text: 3851 -->Adresse *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class="_2erBM EZzl7"
                                                data-qa-id="input-address" value="" name="billing_address"></div>
                                    </div>
                                    <div class="line"><label class="_2GeK6" for="location">Ville ou code postal
                                            *</label>
                                        <div role="combobox" aria-expanded="false" aria-haspopup="listbox"
                                            aria-labelledby="downshift-1-label">
                                            <div class="_2jF2G"><input aria-autocomplete="list"
                                                    aria-labelledby="downshift-1-label" value="" id="location"
                                                    class="input full _31JFp" name="location"
                                                    data-qa-id="autocomplete-input"><!-- react-text: 3859 -->
                                                <!-- /react-text -->
                                            </div>
                                        </div>
                                    </div>
                                    <div><label class="TMFen" for="phone">
                                            <!-- react-text: 3862 -->Téléphone *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class="_2erBM EZzl7"
                                                data-qa-id="input-phone" value="" maxlength="10" name="phone"></div>
                                    </div>
                                    <div class="line"><label class="_2GeK6">Date de naissance</label>
                                        <div class="grid-1 _3kOpD">
                                            <div class="selectWrapper _3SZmx"><select name="day" type="text"
                                                    class="select">
                                                    <option value="">Jour</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select></div>
                                            <div class="selectWrapper _3SZmx"><select name="month" type="text"
                                                    class="select">
                                                    <option value="">Mois</option>
                                                    <option value="1">janvier</option>
                                                    <option value="2">février</option>
                                                    <option value="3">mars</option>
                                                    <option value="4">avril</option>
                                                    <option value="5">mai</option>
                                                    <option value="6">juin</option>
                                                    <option value="7">juillet</option>
                                                    <option value="8">août</option>
                                                    <option value="9">septembre</option>
                                                    <option value="10">octobre</option>
                                                    <option value="11">novembre</option>
                                                    <option value="12">décembre</option>
                                                </select></div>
                                            <div class="selectWrapper _3SZmx"><select name="year" type="text"
                                                    class="select">
                                                    <option value="">Année</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                    <option value="1919">1919</option>
                                                    <option value="1918">1918</option>
                                                    <option value="1917">1917</option>
                                                    <option value="1916">1916</option>
                                                    <option value="1915">1915</option>
                                                </select></div>
                                        </div>
                                    </div><button class="_2sNbI e943h _2ktLd" type="submit" id="create_store_button"
                                        data-qa-id="button-account-creation-pro" disabled="">
                                        <!-- react-text: 4026 -->Valider les modifications
                                        <!-- /react-text --></button><span><button class="_2sNbI _1xIyN _2BP2c _1aZT7"
                                            type="button" data-qa-id="button-takeout">
                                            <!-- react-text: 4029 -->Récupérer mes données personnelles
                                            <!-- /react-text --></button><!-- react-empty: 4030 --></span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="_154ia" id="mail">
                        <div>
                            <div class="_1i0e0 _2Zru4">
                                <h2>Mon email</h2>
                                <form autocomplete="nope">
                                    <div>
                                        <div><label class="TMFen" for="email">
                                                <!-- react-text: 4039 -->Email *
                                                <!-- /react-text --></label>
                                            <div class="_2wuZK"><input type="text" class="_2erBM _2s2di QY7wN"
                                                    disabled="" data-qa-id="input-text-email"
                                                    placeholder="jackfrank613@gmail.com" name="email"></div>
                                        </div>
                                        <div class="line">
                                            <div class="_2k0Hf"><input type="checkbox" id="optin" class="_3Las7"
                                                    name="optin" disabled="" value="on"><label for="optin"
                                                    class="_1ltHB"><span>Je souhaite recevoir des offres des partenaires
                                                        du site leboncoin.fr susceptibles de
                                                        m’intéresser.</span></label></div>
                                        </div>
                                    </div><br>
                                    <div class="_2GXNv"><button class="_2JQAM WjL3t _2tJk2 EsTCR _1Gbw1"
                                            type="button">Modifier mon adresse email</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="_154ia" id="password">
                        <div>
                            <div class="_2shIA">
                                <form id="password_edit_form">
                                    <h2>Mon mot de passe</h2>
                                    <div><label class="TMFen" for="new_password">
                                            <!-- react-text: 4057 -->Mot de passe actuel *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="password" class="_2erBM QY7wN _1ON-K"
                                                disabled="" data-qa-id="input-text-new_password" value=""
                                                name="new_password"></div>
                                    </div><br>
                                    <div class="_2OCIK"><button class="_2sNbI _1xIyN _2BP2c _1jbAw" type="button">
                                            <!-- react-text: 4063 -->Modifier mon mot de passe
                                            <!-- /react-text --></button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="_154ia" id="pref_notif">
                        <div class="_1i0e0">
                            <h2>Paramétrage des notifications par e-mail</h2><span>Sélectionnez les notifications que
                                vous souhaitez recevoir par e-mail :</span>
                            <div class="_32X_C">
                                <div class="_1xjW3">
                                    <p class="_3DtTO">Nouveaux messages reçus</p>
                                    <div class="_3CYsw">
                                        <div class="JFVew kNNj_">
                                            <div class="_2XsXm kNNj_ _2OzK3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_1xjW3"><a class="_8SD7s" href="/mes-recherches/">Paramètrer mes recherches
                                        sauvegardées</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="_3K5sf">
                        <div>
                            <p class="FUfut">*&nbsp;champs obligatoires</p>
                            <div class="rYLYu">
                                <div>
                                    <div data-qa-id="delete-form"><button class="_2sNbI _2OSpJ _2BP2c _3n54U"
                                            type="button">
                                            <!-- react-text: 4083 -->Supprimer mon compte
                                            <!-- /react-text --></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_1GkIq"><a class="d6mIB">Les responsables de traitement, les destinataires et les
                            finalités de collecte des données ainsi que vos droits sur vos données.</a></div>
                </div>
            </section>

        </div>


    </section>

    @include('frontoffice.partials.profilefooter')

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


        });

    </script>

    @yield('after-script')

</body>

</html>
