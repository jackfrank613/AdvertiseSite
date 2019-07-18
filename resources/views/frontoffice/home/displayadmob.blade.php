<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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


</head>

<body>
    <!-- Header -->
    @include('frontoffice.partials.headerpart')
    <!-- Header -->

    <section>
        <div class="_3iQ0i" style="pointer-events: inherit;">
            <div class="_1ydbl">
                <div class="_3mkBC" style="display:flex;"><label class="radio" for="offer"><input type="radio"
                            id="offer" name="ad_type" value="offer"><!-- react-text: 653 -->Offres
                        <!-- /react-text --></label><label class="radio" for="demand" style="margin-top:0px"><input
                            type="radio" id="demand" name="ad_type" value="demand"><!-- react-text: 656 -->Demandes
                        <!-- /react-text --></label></div>
                <div class="MoDD- ypWAz">
                    <form>
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
                                                <div class="bVqYZ"><input class="_2erBM _20_tk "
                                                        data-qa-id="input-searchtext" value=""
                                                        placeholder="Que recherchez-vous ?" maxlength="500"
                                                        autocomplete="off">
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
                                            </div>
                                        </div>
                                        <div class="AGP6T">
                                            <div>
                                                <div class="SiZLq">
                                                    <div class="_1CJVw egIn7" data-qa-id="select-toggle_category">
                                                        <div class="_1etKl">
                                                            <div class="_26tGy"><span class="_1vK7W _2jG3V"
                                                                    name="chevrondown"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                        </path>
                                                                    </svg></span></div>
                                                            <div class="_2gTTZ"><select autocomplete="off">
                                                                    <option value="">Toutes catégories</option>
                                                                    <option data-qa-id="categorylist_cat_71" value="71"
                                                                        class="_1_1B4">-- EMPLOI --</option>
                                                                    <option value="33" data-qa-id="categorylist_cat_33">
                                                                        Offres d'emploi</option>
                                                                    <option
                                                                        value="https://go.onelink.me/3471221858/bcf737d8">
                                                                        Offres d'emploi Cadres</option>
                                                                    <option data-qa-id="categorylist_cat_1" value="1"
                                                                        class="_1_1B4">-- VÉHICULES --</option>
                                                                    <option value="2" data-qa-id="categorylist_cat_2">
                                                                        Voitures</option>
                                                                    <option value="3" data-qa-id="categorylist_cat_3">
                                                                        Motos</option>
                                                                    <option value="4" data-qa-id="categorylist_cat_4">
                                                                        Caravaning</option>
                                                                    <option value="5" data-qa-id="categorylist_cat_5">
                                                                        Utilitaires</option>
                                                                    <option
                                                                        value="https://www.truckscorner.fr/#xtor=CS1-16-[leboncoin]-[lien]-[lien_menu]-[tc]">
                                                                        Camions</option>
                                                                    <option value="6" data-qa-id="categorylist_cat_6">
                                                                        Équipement auto</option>
                                                                    <option value="44" data-qa-id="categorylist_cat_44">
                                                                        Équipement moto</option>
                                                                    <option value="50" data-qa-id="categorylist_cat_50">
                                                                        Équipement caravaning</option>
                                                                    <option value="7" data-qa-id="categorylist_cat_7">
                                                                        Nautisme</option>
                                                                    <option value="51" data-qa-id="categorylist_cat_51">
                                                                        Équipement nautisme</option>
                                                                    <option data-qa-id="categorylist_cat_8" value="8"
                                                                        class="_1_1B4">-- IMMOBILIER --</option>
                                                                    <option value="9" data-qa-id="categorylist_cat_9">
                                                                        Ventes immobilières</option>
                                                                    <option value="https://immobilierneuf.leboncoin.fr">
                                                                        Immobilier Neuf</option>
                                                                    <option value="10" data-qa-id="categorylist_cat_10">
                                                                        Locations</option>
                                                                    <option value="11" data-qa-id="categorylist_cat_11">
                                                                        Colocations</option>
                                                                    <option value="13" data-qa-id="categorylist_cat_13">
                                                                        Bureaux &amp; Commerces</option>
                                                                    <option data-qa-id="categorylist_cat_66" value="66"
                                                                        class="_1_1B4">-- VACANCES --</option>
                                                                    <option value="12" data-qa-id="categorylist_cat_12">
                                                                        Locations &amp; Gîtes</option>
                                                                    <option value="67" data-qa-id="categorylist_cat_67">
                                                                        Chambres d'hôtes</option>
                                                                    <option value="68" data-qa-id="categorylist_cat_68">
                                                                        Campings</option>
                                                                    <option value="69" data-qa-id="categorylist_cat_69">
                                                                        Hôtels</option>
                                                                    <option value="70" data-qa-id="categorylist_cat_70">
                                                                        Hébergements insolites</option>
                                                                    <option
                                                                        value="https://www.locasun-vp.fr/?afiliate=leboncoin&amp;utm_campaign=liencat_locasunvp_leboncoin&amp;utm_source=leboncoin&amp;utm_medium=cpc#ectrans=1">
                                                                        Ventes privées vacances</option>
                                                                    <option data-qa-id="categorylist_cat_14" value="14"
                                                                        class="_1_1B4">-- MULTIMÉDIA --</option>
                                                                    <option value="15" data-qa-id="categorylist_cat_15">
                                                                        Informatique</option>
                                                                    <option value="43" data-qa-id="categorylist_cat_43">
                                                                        Consoles &amp; Jeux vidéo</option>
                                                                    <option value="16" data-qa-id="categorylist_cat_16">
                                                                        Image &amp; Son</option>
                                                                    <option value="17" data-qa-id="categorylist_cat_17">
                                                                        Téléphonie</option>
                                                                    <option data-qa-id="categorylist_cat_18" value="18"
                                                                        class="_1_1B4">-- MAISON --</option>
                                                                    <option value="19" data-qa-id="categorylist_cat_19">
                                                                        Ameublement</option>
                                                                    <option value="20" data-qa-id="categorylist_cat_20">
                                                                        Électroménager</option>
                                                                    <option value="45" data-qa-id="categorylist_cat_45">
                                                                        Arts de la table</option>
                                                                    <option value="39" data-qa-id="categorylist_cat_39">
                                                                        Décoration</option>
                                                                    <option value="46" data-qa-id="categorylist_cat_46">
                                                                        Linge de maison</option>
                                                                    <option value="21" data-qa-id="categorylist_cat_21">
                                                                        Bricolage</option>
                                                                    <option value="52" data-qa-id="categorylist_cat_52">
                                                                        Jardinage</option>
                                                                    <option data-qa-id="categorylist_cat_72" value="72"
                                                                        class="_1_1B4">-- MODE --</option>
                                                                    <option value="22" data-qa-id="categorylist_cat_22">
                                                                        Vêtements</option>
                                                                    <option value="53" data-qa-id="categorylist_cat_53">
                                                                        Chaussures</option>
                                                                    <option value="47" data-qa-id="categorylist_cat_47">
                                                                        Accessoires &amp; Bagagerie</option>
                                                                    <option value="42" data-qa-id="categorylist_cat_42">
                                                                        Montres &amp; Bijoux</option>
                                                                    <option value="23" data-qa-id="categorylist_cat_23">
                                                                        Équipement bébé</option>
                                                                    <option value="54" data-qa-id="categorylist_cat_54">
                                                                        Vêtements bébé</option>
                                                                    <option
                                                                        value="https://www.videdressing.com/femme/c-c5988.html?utm_source=leboncoin.fr&amp;utm_medium=referral&amp;utm_campaign=Test4Default">
                                                                        Videdressing</option>
                                                                    <option data-qa-id="categorylist_cat_24" value="24"
                                                                        class="_1_1B4">-- LOISIRS --</option>
                                                                    <option value="25" data-qa-id="categorylist_cat_25">
                                                                        DVD - Films</option>
                                                                    <option value="26" data-qa-id="categorylist_cat_26">
                                                                        CD - Musique</option>
                                                                    <option value="27" data-qa-id="categorylist_cat_27">
                                                                        Livres</option>
                                                                    <option value="28" data-qa-id="categorylist_cat_28">
                                                                        Animaux</option>
                                                                    <option value="55" data-qa-id="categorylist_cat_55">
                                                                        Vélos</option>
                                                                    <option value="29" data-qa-id="categorylist_cat_29">
                                                                        Sports &amp; Hobbies</option>
                                                                    <option value="30" data-qa-id="categorylist_cat_30">
                                                                        Instruments de musique</option>
                                                                    <option value="40" data-qa-id="categorylist_cat_40">
                                                                        Collection</option>
                                                                    <option value="41" data-qa-id="categorylist_cat_41">
                                                                        Jeux &amp; Jouets</option>
                                                                    <option value="48" data-qa-id="categorylist_cat_48">
                                                                        Vins &amp; Gastronomie</option>
                                                                    <option data-qa-id="categorylist_cat_56" value="56"
                                                                        class="_1_1B4">-- MATÉRIEL PROFESSIONNEL --
                                                                    </option>
                                                                    <option value="57" data-qa-id="categorylist_cat_57">
                                                                        Matériel agricole</option>
                                                                    <option value="58" data-qa-id="categorylist_cat_58">
                                                                        Transport - Manutention</option>
                                                                    <option value="59" data-qa-id="categorylist_cat_59">
                                                                        BTP - Chantier gros-oeuvre</option>
                                                                    <option value="60" data-qa-id="categorylist_cat_60">
                                                                        Outillage - Matériaux 2nd-oeuvre</option>
                                                                    <option value="32" data-qa-id="categorylist_cat_32">
                                                                        Équipements industriels</option>
                                                                    <option value="61" data-qa-id="categorylist_cat_61">
                                                                        Restauration - Hôtellerie</option>
                                                                    <option value="62" data-qa-id="categorylist_cat_62">
                                                                        Fournitures de bureau</option>
                                                                    <option value="63" data-qa-id="categorylist_cat_63">
                                                                        Commerces &amp; Marchés</option>
                                                                    <option value="64" data-qa-id="categorylist_cat_64">
                                                                        Matériel médical</option>
                                                                    <option data-qa-id="categorylist_cat_31" value="31"
                                                                        class="_1_1B4">-- SERVICES --</option>
                                                                    <option value="34" data-qa-id="categorylist_cat_34">
                                                                        Prestations de services</option>
                                                                    <option value="35" data-qa-id="categorylist_cat_35">
                                                                        Billetterie</option>
                                                                    <option value="49" data-qa-id="categorylist_cat_49">
                                                                        Évènements</option>
                                                                    <option value="36" data-qa-id="categorylist_cat_36">
                                                                        Cours particuliers</option>
                                                                    <option value="65" data-qa-id="categorylist_cat_65">
                                                                        Covoiturage</option>
                                                                    <option data-qa-id="categorylist_cat_37" value="37"
                                                                        class="_1_1B4">-- AUTRES --</option>
                                                                    <option value="38" data-qa-id="categorylist_cat_38">
                                                                        Autres</option>
                                                                </select></div>
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
                                                                <div>Informatique</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="TwSJ3">
                                        <div class="_3Hx4s"><label class="WzIvr"><input type="checkbox" id="ctitle"
                                                    name="it" data-qa-id="checkbox-title_only" value="on">
                                                <!-- react-text: 773 -->Recherche dans le titre uniquement
                                                <!-- /react-text --></label><label class="WzIvr"><input type="checkbox"
                                                    id="curgent" name="ur" data-qa-id="checkbox-urgent" value="on">
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
                                                                        autocomplete="off"
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
                                <div class="_2bh4L trackable" data-qa-id="input-search_button"><button
                                        class="_2sNbI _1xIyN GXQkc _2xk2l">
                                        <!-- react-text: 818 -->Rechercher
                                        <!-- /react-text --></button></div>
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
                                        <div class="_1uP35"><select data-qa-id="select-price_min">
                                                <option>Prix min</option>
                                                <option value="">0</option>
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
                                        <div class="_1uP35"><select data-qa-id="select-price_max">
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
                                                <option value="">1 000 +</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- react-empty: 827 -->
                    </form>
                </div>
            </div>

            <div class="apn-hbl apn-hb"><span id="hbl-s" class="teal-apn"></span></div>

            <div class="l17WS bgMain" data-reactid="327">
                <div data-reactid="328">
                    <div class="_36eyL" data-reactid="329">
                        <h1 data-reactid="330" style="font-size:18px">Annonces&nbsp;: Aquitaine</h1>
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
                                <div data-reactid="357">
                                    <div class="_1uEY7" data-reactid="358">
                                        <p data-reactid="359"><span class="_2ilNG" data-reactid="360">1 251 830</span>
                                            <!-- react-text: 361 --> Annonce
                                            <!-- /react-text -->
                                            <!-- react-text: 362 -->s
                                            <!-- /react-text -->
                                        </p>
                                        <div data-reactid="363"><input type="checkbox" name="adlist_filter"
                                                data-qa-id="result_part" id="result_part" value="private"
                                                data-reactid="364" checked=""><label for="result_part"
                                                data-reactid="365">
                                                <!-- react-text: 366 -->Particuliers
                                                <!-- /react-text --><span data-reactid="367"><span class="_2ilNG"
                                                        data-reactid="368">1 121 864</span></span></label></div>
                                        <div data-reactid="369"><input type="checkbox" name="adlist_filter"
                                                data-qa-id="result_pro" id="result_pro" value="pro" data-reactid="370"
                                                checked=""><label for="result_pro" data-reactid="371">
                                                <!-- react-text: 372 -->Professionnels
                                                <!-- /react-text --><span data-reactid="373"><span class="_2ilNG"
                                                        data-reactid="374">129 966</span></span></label></div>
                                        <div class="selectWrapper" data-reactid="375"><select class="select"
                                                data-reactid="376">
                                                <option selected="" value="time-desc" data-reactid="377">Tri : Plus
                                                    récentes</option>
                                                <option value="time-asc" data-reactid="378">Tri : Plus anciennes
                                                </option>
                                                <option value="price-asc" data-reactid="379">Tri : Prix croissants
                                                </option>
                                                <option value="price-desc" data-reactid="380">Tri : Prix décroissants
                                                </option>
                                            </select></div>
                                    </div>
                                    <div data-reactid="381">
                                        <ul class="undefined" data-reactid="382">
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="383">
                                                <div data-reactid="384">
                                                    <div data-reactid="385">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="386">
                                                            <div data-reactid="387">
                                                                <div class="_3C4to" data-reactid="388">
                                                                    <div class="_3xQS8" data-reactid="389"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="391"></div>
                                                </div><a title="Peugeot 208 1.6 e-hdi fap 92 allure etg6 5p"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/voitures/1647690628.htm/" data-reactid="392">
                                                    <div class="_3dPxM" data-reactid="393"><span class="_a3cT"
                                                            data-reactid="394">
                                                            <div class="LazyLoad is-visible" data-reactid="395"><img
                                                                    class=""
                                                                    src="https://img2.leboncoin.fr/ad-image/db7695bb62ad79d48d4af2178af90ba79e72f7db.jpg"
                                                                    itemprop="image"
                                                                    content="https://img2.leboncoin.fr/ad-image/db7695bb62ad79d48d4af2178af90ba79e72f7db.jpg"
                                                                    alt="Peugeot 208 1.6 e-hdi fap 92 allure etg6 5p">
                                                            </div>
                                                        </span><span class="_2lY3w" data-reactid="396"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="398">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="399">
                                                        <div data-reactid="400">
                                                            <p class="_2tubl" data-reactid="401"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="402">Peugeot
                                                                    208 1.6 e-hdi fap 92 allure etg6 5p</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="403">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="404"><span class="_1JRvz"
                                                                    data-reactid="405"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="406">
                                                                        <!-- react-text: 407 -->10 500
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 408 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="409">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Voitures"
                                                                data-reactid="410">
                                                                <!-- react-text: 411 -->Voitures
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="412">
                                                                Colayrac-Saint-Cirq 47450</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="413">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="414">
                                                    <div data-reactid="415"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_0" data-id="tooltip" data-reactid="416"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="417">
                                                <div data-reactid="418">
                                                    <div data-reactid="419">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="420">
                                                            <div data-reactid="421">
                                                                <div class="_3C4to" data-reactid="422">
                                                                    <div class="_3xQS8" data-reactid="423"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="425"></div>
                                                </div><a title="Pantalon électrique" class="clearfix trackable"
                                                    rel="nofollow" href="/vetements/1647690276.htm/" data-reactid="426">
                                                    <div class="_3dPxM" data-reactid="427"><span class="_a3cT"
                                                            data-reactid="428">
                                                            <div class="LazyLoad is-visible" data-reactid="429"><img
                                                                    class=""
                                                                    src="https://img0.leboncoin.fr/ad-image/afa4f26b3c120640e6f23776a0a7bc4603119b59.jpg"
                                                                    itemprop="image"
                                                                    content="https://img0.leboncoin.fr/ad-image/afa4f26b3c120640e6f23776a0a7bc4603119b59.jpg"
                                                                    alt="Pantalon électrique"></div>
                                                        </span><span class="_2lY3w" data-reactid="430"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="432">1</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="433">
                                                        <div data-reactid="434">
                                                            <p class="_2tubl" data-reactid="435"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="436">Pantalon électrique</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="437">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="438"><span class="_1JRvz"
                                                                    data-reactid="439"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="440">
                                                                        <!-- react-text: 441 -->10
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 442 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="443">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Vêtements"
                                                                data-reactid="444">
                                                                <!-- react-text: 445 -->Vêtements
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="446">Cézac
                                                                33620</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="447">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="448">
                                                    <div data-reactid="449"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_1" data-id="tooltip" data-reactid="450"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="451">
                                                <div data-reactid="452">
                                                    <div data-reactid="453">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="454">
                                                            <div data-reactid="455">
                                                                <div class="_3C4to" data-reactid="456">
                                                                    <div class="_3xQS8" data-reactid="457"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="459"></div>
                                                </div><a title="Roue complète 195 55 15" class="clearfix trackable"
                                                    rel="nofollow" href="/equipement_auto/1526257845.htm/"
                                                    data-reactid="460">
                                                    <div class="_3dPxM" data-reactid="461"><span class="_a3cT"
                                                            data-reactid="462">
                                                            <div class="LazyLoad is-visible" data-reactid="463"><img
                                                                    class=""
                                                                    src="https://img4.leboncoin.fr/ad-image/e415452cba5b96f5a2216c4c0319d81ca8a06953.jpg"
                                                                    itemprop="image"
                                                                    content="https://img4.leboncoin.fr/ad-image/e415452cba5b96f5a2216c4c0319d81ca8a06953.jpg"
                                                                    alt="Roue complète 195 55 15"></div>
                                                        </span><span class="_2lY3w" data-reactid="464"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="466">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="467">
                                                        <div data-reactid="468">
                                                            <p class="_2tubl" data-reactid="469"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="470">Roue
                                                                    complète 195 55 15</span></p>
                                                        </div>
                                                        <div data-reactid="471">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Équipement auto"
                                                                data-reactid="472">
                                                                <!-- react-text: 473 -->Équipement auto
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="474">
                                                                Pontiacq-Viellepinte 64460</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="475">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="476">
                                                    <div data-reactid="477"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_2" data-id="tooltip" data-reactid="478"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="479">
                                                <div data-reactid="480">
                                                    <div data-reactid="481">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="482">
                                                            <div data-reactid="483">
                                                                <div class="_3C4to" data-reactid="484">
                                                                    <div class="_3xQS8" data-reactid="485"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="487"></div>
                                                </div><a title="Axe de flèche pour B27" class="clearfix trackable"
                                                    rel="nofollow" href="/btp_chantier_gros_oeuvre/1647690534.htm/"
                                                    data-reactid="488">
                                                    <div class="_3dPxM" data-reactid="489"><span class="_a3cT"
                                                            data-reactid="490">
                                                            <div class="LazyLoad is-visible" data-reactid="491"><img
                                                                    class=""
                                                                    src="https://img7.leboncoin.fr/ad-image/ab8152d960ba9f4de07a790c704e9ede075aa7c4.jpg"
                                                                    itemprop="image"
                                                                    content="https://img7.leboncoin.fr/ad-image/ab8152d960ba9f4de07a790c704e9ede075aa7c4.jpg"
                                                                    alt="Axe de flèche pour B27"></div>
                                                        </span><span class="_2lY3w" data-reactid="492"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="494">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="495">
                                                        <div data-reactid="496">
                                                            <p class="_2tubl" data-reactid="497"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="498">Axe de
                                                                    flèche pour B27</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="499">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="500"><span class="_1JRvz"
                                                                    data-reactid="501"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="502">
                                                                        <!-- react-text: 503 -->200
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 504 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="505">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category"
                                                                content="BTP - Chantier gros-oeuvre" data-reactid="506">
                                                                <!-- react-text: 507 -->BTP - Chantier gros-oeuvre
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="508">Bergerac
                                                                24100</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="509">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="510">
                                                    <div data-reactid="511"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_3" data-id="tooltip" data-reactid="512"></div>
                                            </li>
                                            <li data-reactid="513">
                                                <div class="apn-na" data-reactid="514"><span id="na1-s" class="teal-apn"
                                                        data-reactid="515"></span><span id="na1-m" class="teal-apn"
                                                        data-reactid="516"></span><span id="na1-l" class="teal-apn"
                                                        data-reactid="517"></span><span id="na1-xl" class="teal-apn"
                                                        data-reactid="518">
                                                        <div id="div_utif_na1-xl" style="display: inline;"><iframe
                                                                id="utif_na1-xl_51755b24-3a24-437a-9660-688fa84c7b0e"
                                                                name="utif_na1-xl_51755b24-3a24-437a-9660-688fa84c7b0e"
                                                                height="145" width="745" tabindex="-1" marginwidth="0"
                                                                marginheight="0" scrolling="no" frameborder="0"
                                                                style="border: 0px;"></iframe></div>
                                                        <script class="ayl-injected-element"
                                                            src="//fo-api.omnitagjs.com/fo-api/ot.js?Placement=f2297f503c7899554a5285c7bf52a33f"
                                                            type="text/javascript" async="true"></script>
                                                    </span><span id="na3-s" class="teal-apn"
                                                        data-reactid="519"></span><span id="na3-m" class="teal-apn"
                                                        data-reactid="520"></span><span id="na3-l" class="teal-apn"
                                                        data-reactid="521"></span><span id="na3-xl" class="teal-apn"
                                                        data-reactid="522"></span></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="523">
                                                <div data-reactid="524">
                                                    <div data-reactid="525">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="526">
                                                            <div data-reactid="527">
                                                                <div class="_3C4to" data-reactid="528">
                                                                    <div class="_3xQS8" data-reactid="529"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="531"></div>
                                                </div><a title="Trotteur" class="clearfix trackable" rel="nofollow"
                                                    href="/equipement_bebe/1647679686.htm/" data-reactid="532">
                                                    <div class="_3dPxM" data-reactid="533"><span class="_a3cT"
                                                            data-reactid="534">
                                                            <div class="LazyLoad is-visible" data-reactid="535"><img
                                                                    class=""
                                                                    src="https://img2.leboncoin.fr/ad-image/16fabd37853b1efbdcc1a0e3c1cb4d730bf9cd47.jpg"
                                                                    itemprop="image"
                                                                    content="https://img2.leboncoin.fr/ad-image/16fabd37853b1efbdcc1a0e3c1cb4d730bf9cd47.jpg"
                                                                    alt="Trotteur"></div>
                                                        </span><span class="_2lY3w" data-reactid="536"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="538">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="539">
                                                        <div data-reactid="540">
                                                            <p class="_2tubl" data-reactid="541"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="542">Trotteur</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="543">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="544"><span class="_1JRvz"
                                                                    data-reactid="545"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="546">
                                                                        <!-- react-text: 547 -->15
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 548 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="549">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Équipement bébé"
                                                                data-reactid="550">
                                                                <!-- react-text: 551 -->Équipement bébé
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="552">Izon
                                                                33450</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="553">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="554">
                                                    <div data-reactid="555"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_4" data-id="tooltip" data-reactid="556"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="557">
                                                <div data-reactid="558">
                                                    <div data-reactid="559">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="560">
                                                            <div data-reactid="561">
                                                                <div class="_3C4to" data-reactid="562">
                                                                    <div class="_3xQS8" data-reactid="563"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="565"></div>
                                                </div><a title="Plombier" class="clearfix trackable" rel="nofollow"
                                                    href="/prestations_de_services/1647679598.htm/" data-reactid="566">
                                                    <div class="_3dPxM" data-reactid="567"><span class="_a3cT"
                                                            data-reactid="568">
                                                            <div class="LazyLoad is-visible" data-reactid="569"><img
                                                                    class=""
                                                                    src="https://img4.leboncoin.fr/ad-image/5fa23c9fc09c323c83281e654529c94fd1ff3b05.jpg"
                                                                    itemprop="image"
                                                                    content="https://img4.leboncoin.fr/ad-image/5fa23c9fc09c323c83281e654529c94fd1ff3b05.jpg"
                                                                    alt="Plombier"></div>
                                                        </span><span class="_2lY3w" data-reactid="570"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="572">4</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="573">
                                                        <div data-reactid="574">
                                                            <p class="_2tubl" data-reactid="575"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="576">Plombier</span></p>
                                                        </div>
                                                        <div data-reactid="577">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category"
                                                                content="Prestations de services" data-reactid="578">
                                                                <span class="_1HeL0"
                                                                    data-reactid="579">(Pro)&nbsp;</span>
                                                                <!-- react-text: 580 -->Prestations de services
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="581">Eysines
                                                                33320</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="582">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="583">
                                                    <div data-reactid="584"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_5" data-id="tooltip" data-reactid="585"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="586">
                                                <div data-reactid="587">
                                                    <div data-reactid="588">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="589">
                                                            <div data-reactid="590">
                                                                <div class="_3C4to" data-reactid="591">
                                                                    <div class="_3xQS8" data-reactid="592"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="594"></div>
                                                </div><a title="Spectrophotomètre" class="clearfix trackable"
                                                    rel="nofollow" href="/bricolage/1587119480.htm/" data-reactid="595">
                                                    <div class="_3dPxM" data-reactid="596"><span class="_a3cT"
                                                            data-reactid="597">
                                                            <div class="LazyLoad is-visible" data-reactid="598"><img
                                                                    class=""
                                                                    src="https://img3.leboncoin.fr/ad-image/555f7a74cd996d8f36bbde96ca409c0ff323ad43.jpg"
                                                                    itemprop="image"
                                                                    content="https://img3.leboncoin.fr/ad-image/555f7a74cd996d8f36bbde96ca409c0ff323ad43.jpg"
                                                                    alt="Spectrophotomètre"></div>
                                                        </span><span class="_2lY3w" data-reactid="599"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="601">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="602">
                                                        <div data-reactid="603">
                                                            <p class="_2tubl" data-reactid="604"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="605">Spectrophotomètre</span></p>
                                                        </div>
                                                        <div data-reactid="606">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Bricolage"
                                                                data-reactid="607">
                                                                <!-- react-text: 608 -->Bricolage
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="609">Pau
                                                                64000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="610">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="611">
                                                    <div data-reactid="612"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_6" data-id="tooltip" data-reactid="613"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="614">
                                                <div data-reactid="615">
                                                    <div data-reactid="616">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="617">
                                                            <div data-reactid="618">
                                                                <div class="_3C4to" data-reactid="619">
                                                                    <div class="_3xQS8" data-reactid="620"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="622"></div>
                                                </div><a title="2 canapés et un fauteuil club"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/ameublement/1647690969.htm/" data-reactid="623">
                                                    <div class="_3dPxM" data-reactid="624"><span class="_a3cT"
                                                            data-reactid="625">
                                                            <div class="LazyLoad is-visible" data-reactid="626"><img
                                                                    class=""
                                                                    src="https://img2.leboncoin.fr/ad-image/47999fe7eb5d5822e80a637ea765a748b8d12d3a.jpg"
                                                                    itemprop="image"
                                                                    content="https://img2.leboncoin.fr/ad-image/47999fe7eb5d5822e80a637ea765a748b8d12d3a.jpg"
                                                                    alt="2 canapés et un fauteuil club"></div>
                                                        </span><span class="_2lY3w" data-reactid="627"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="629">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="630">
                                                        <div data-reactid="631">
                                                            <p class="_2tubl" data-reactid="632"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="633">2
                                                                    canapés et un fauteuil club</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="634">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="635"><span class="_1JRvz"
                                                                    data-reactid="636"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="637">
                                                                        <!-- react-text: 638 -->40
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 639 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="640">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Ameublement"
                                                                data-reactid="641">
                                                                <!-- react-text: 642 -->Ameublement
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="643">Pessac
                                                                33600</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="644">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="645">
                                                    <div data-reactid="646"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_7" data-id="tooltip" data-reactid="647"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="648">
                                                <div data-reactid="649">
                                                    <div data-reactid="650">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="651">
                                                            <div data-reactid="652">
                                                                <div class="_3C4to" data-reactid="653">
                                                                    <div class="_3xQS8" data-reactid="654"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="656"></div>
                                                </div><a title="Pearl buck" class="clearfix trackable" rel="nofollow"
                                                    href="/livres/809150815.htm/" data-reactid="657">
                                                    <div class="_3dPxM" data-reactid="658"><span
                                                            class="_a3cT Ywd7f eSiI0" data-reactid="659">
                                                            <div class="LazyLoad is-visible" data-reactid="660"><img
                                                                    class="hidden"
                                                                    src="https://img4.leboncoin.fr/ad-image/d7c5a15817ba7d880bf8c0ab157968b72cbc2b2e.jpg"
                                                                    itemprop="image"
                                                                    content="https://img4.leboncoin.fr/ad-image/d7c5a15817ba7d880bf8c0ab157968b72cbc2b2e.jpg"
                                                                    alt="Pearl buck"></div>
                                                        </span><span class="_2lY3w" data-reactid="661"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="663">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="664">
                                                        <div data-reactid="665">
                                                            <p class="_2tubl" data-reactid="666"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="667">Pearl
                                                                    buck</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="668">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="669"><span class="_1JRvz"
                                                                    data-reactid="670"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="671">
                                                                        <!-- react-text: 672 -->3
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 673 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="674">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Livres"
                                                                data-reactid="675">
                                                                <!-- react-text: 676 -->Livres
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="677">Ondres
                                                                40440</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="678">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="679">
                                                    <div data-reactid="680"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_8" data-id="tooltip" data-reactid="681"></div>
                                            </li><!-- react-empty: 682 -->
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="683">
                                                <div data-reactid="684">
                                                    <div data-reactid="685">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="686">
                                                            <div data-reactid="687">
                                                                <div class="_3C4to" data-reactid="688">
                                                                    <div class="_3xQS8" data-reactid="689"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="691"></div>
                                                </div><a title="T shirt Zara 18/24 mois" class="clearfix trackable"
                                                    rel="nofollow" href="/vetements_bebe/1433254178.htm/"
                                                    data-reactid="692">
                                                    <div class="_3dPxM" data-reactid="693"><span class="_a3cT"
                                                            data-reactid="694">
                                                            <div class="LazyLoad is-visible" data-reactid="695"><img
                                                                    class=""
                                                                    src="https://img1.leboncoin.fr/ad-image/fcf4f96bfdc46befeb179e9de0624bf90e9fe5a6.jpg"
                                                                    itemprop="image"
                                                                    content="https://img1.leboncoin.fr/ad-image/fcf4f96bfdc46befeb179e9de0624bf90e9fe5a6.jpg"
                                                                    alt="T shirt Zara 18/24 mois"></div>
                                                        </span><span class="_2lY3w" data-reactid="696"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="698">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="699">
                                                        <div data-reactid="700">
                                                            <p class="_2tubl" data-reactid="701"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="702">T shirt
                                                                    Zara 18/24 mois</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="703">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="704"><span class="_1JRvz"
                                                                    data-reactid="705"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="706">
                                                                        <!-- react-text: 707 -->2
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 708 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="709">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Vêtements bébé"
                                                                data-reactid="710">
                                                                <!-- react-text: 711 -->Vêtements bébé
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="712">
                                                                Saint-Vincent-de-Tyrosse 40230</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="713">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="714">
                                                    <div data-reactid="715"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_9" data-id="tooltip" data-reactid="716"></div>
                                            </li>
                                            <li data-reactid="717">
                                                <div class="vl" data-reactid="718"><span id="vl-s" class="teal-apn"
                                                        data-reactid="719"></span><span id="vl-m" class="teal-apn"
                                                        data-reactid="720"></span><span id="vl-l" class="teal-apn"
                                                        data-reactid="721"></span><span id="vl-xl" class="teal-apn"
                                                        data-reactid="722"></span></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="723">
                                                <div data-reactid="724">
                                                    <div data-reactid="725">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="726">
                                                            <div data-reactid="727">
                                                                <div class="_3C4to" data-reactid="728">
                                                                    <div class="_3xQS8" data-reactid="729"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="731"></div>
                                                </div><a title="Applique murale" class="clearfix trackable"
                                                    rel="nofollow" href="/decoration/1618979160.htm/"
                                                    data-reactid="732">
                                                    <div class="_3dPxM" data-reactid="733"><span class="_a3cT"
                                                            data-reactid="734">
                                                            <div class="LazyLoad is-visible" data-reactid="735"><img
                                                                    class=""
                                                                    src="https://img7.leboncoin.fr/ad-image/f8094717c4407f7de01228cdfb2f3ec3ed723e85.jpg"
                                                                    itemprop="image"
                                                                    content="https://img7.leboncoin.fr/ad-image/f8094717c4407f7de01228cdfb2f3ec3ed723e85.jpg"
                                                                    alt="Applique murale"></div>
                                                        </span><span class="_2lY3w" data-reactid="736"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="738">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="739">
                                                        <div data-reactid="740">
                                                            <p class="_2tubl" data-reactid="741"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="742">Applique murale</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="743">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="744"><span class="_1JRvz"
                                                                    data-reactid="745"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="746">
                                                                        <!-- react-text: 747 -->10
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 748 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="749">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Décoration"
                                                                data-reactid="750">
                                                                <!-- react-text: 751 -->Décoration
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="752">
                                                                Carignan-de-Bordeaux 33360</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="753">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="754">
                                                    <div data-reactid="755"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_10" data-id="tooltip" data-reactid="756"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="757">
                                                <div data-reactid="758">
                                                    <div data-reactid="759">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="760">
                                                            <div data-reactid="761">
                                                                <div class="_3C4to" data-reactid="762">
                                                                    <div class="_3xQS8" data-reactid="763"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="765"></div>
                                                </div><a title="Aile avant gauche et parechoc av/ar"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/equipement_auto/1526252971.htm/" data-reactid="766">
                                                    <div class="_3dPxM" data-reactid="767"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="768">
                                                            <div class="LazyLoad" data-reactid="769"></div>
                                                        </span><span class="_2lY3w" data-reactid="770"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="772">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="773">
                                                        <div data-reactid="774">
                                                            <p class="_2tubl" data-reactid="775"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="776">Aile
                                                                    avant gauche et parechoc av/ar</span></p>
                                                        </div>
                                                        <div data-reactid="777">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Équipement auto"
                                                                data-reactid="778">
                                                                <!-- react-text: 779 -->Équipement auto
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="780">
                                                                Pontiacq-Viellepinte 64460</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="781">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="782">
                                                    <div data-reactid="783"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_11" data-id="tooltip" data-reactid="784"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="785">
                                                <div data-reactid="786">
                                                    <div data-reactid="787">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="788">
                                                            <div data-reactid="789">
                                                                <div class="_3C4to" data-reactid="790">
                                                                    <div class="_3xQS8" data-reactid="791"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="793"></div>
                                                </div><a title="Mercedes" class="clearfix trackable" rel="nofollow"
                                                    href="/voitures/1647690804.htm/" data-reactid="794">
                                                    <div class="_3dPxM" data-reactid="795"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="796">
                                                            <div class="LazyLoad" data-reactid="797"></div>
                                                        </span><span class="_2lY3w" data-reactid="798"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="800">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="801">
                                                        <div data-reactid="802">
                                                            <p class="_2tubl" data-reactid="803"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="804">Mercedes</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="805">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="806"><span class="_1JRvz"
                                                                    data-reactid="807"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="808">
                                                                        <!-- react-text: 809 -->2 300
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 810 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="811">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Voitures"
                                                                data-reactid="812">
                                                                <!-- react-text: 813 -->Voitures
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="814">Bordeaux
                                                                33000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="815">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="816">
                                                    <div data-reactid="817"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_12" data-id="tooltip" data-reactid="818"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="819">
                                                <div data-reactid="820">
                                                    <div data-reactid="821">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="822">
                                                            <div data-reactid="823">
                                                                <div class="_3C4to" data-reactid="824">
                                                                    <div class="_3xQS8" data-reactid="825"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="827"></div>
                                                </div><a title="Cuisine regionale / curiosites"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/livres/884219973.htm/" data-reactid="828">
                                                    <div class="_3dPxM" data-reactid="829"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="830">
                                                            <div class="LazyLoad" data-reactid="831"></div>
                                                        </span><span class="_2lY3w" data-reactid="832"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="834">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="835">
                                                        <div data-reactid="836">
                                                            <p class="_2tubl" data-reactid="837"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="838">Cuisine
                                                                    regionale / curiosites</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="839">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="840"><span class="_1JRvz"
                                                                    data-reactid="841"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="842">
                                                                        <!-- react-text: 843 -->2
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 844 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="845">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Livres"
                                                                data-reactid="846">
                                                                <!-- react-text: 847 -->Livres
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="848">Ondres
                                                                40440</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="849">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="850">
                                                    <div data-reactid="851"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_13" data-id="tooltip" data-reactid="852"></div>
                                            </li>
                                            <li data-reactid="853">
                                                <div class="apn-na" data-reactid="854"><span id="na2-s" class="teal-apn"
                                                        data-reactid="855"></span><span id="na2-m" class="teal-apn"
                                                        data-reactid="856"></span><span id="na2-l" class="teal-apn"
                                                        data-reactid="857"></span><span id="na2-xl" class="teal-apn"
                                                        data-reactid="858">
                                                        <div id="div_utif_na2-xl" style="display: inline;"><img
                                                                id="anx_388864751563455042078"
                                                                src="https://lax1-ib.adnxs.com/it?an_audit=0&amp;referrer=https%3A%2F%2Fwww.leboncoin.fr%2Fannonces%2Foffres%2Faquitaine%2Fp-3%2F&amp;e=wqT_3QKaCvBDGgUAAAMA1gAFAQjA3MHpBRCezuDYz6qpvTkY0bCShZz-z-s-KjYJZOlDF9S3vD8RZOlDF9S3vD8ZAAAA4KNw7T8hZOkJGwApESTw3jEAAABA4XrEPzD8us4COOAZQOAZSAJQy7jFElj-0yxgAGjBh1B42LQFgAEBigEDVVNEkgEDRVVSmAHpBaABkQGoAQGwAQC4AQHAAQTIAQLQAQDYAQDgAQDwAQD6ATVGUi1MZWJvbmNvaW4td2ViLWRpdmVycy10b3V0ZXNfY2F0ZWdvcmllcy1OYXRpdmVfYWRfMooCVnVmKCdhJywgNzAwODE4LCAxNTYzNDU1MDQwKTt1ZignaScsIDI2MTA5MiwgMTU2MzQ1NTA0MCk7dWYoJ3InLCAzODg4NjQ3NSwyOgD0IAGSAqkCIWFVTTVUQWlDN3QwSEVNdTR4UklZQUNEXzB5d3dCRGdBUUFSSTRCbFFfTHJPQWxnQVlKa0ZhQUJ3Tm5nNGdBSENBWWdCT0pBQkFaZ0JBYUFCRXFnQkE3QUJBTGtCZGFzTmJKcVp1VF9CQWJoczJMc0l1THdfeVFHUlRTSGZNckRTUDlrQjJQRDBTbG1HN0RfZ0FlVDNEX1VCQUFBQUFQZ0JBSmdDQUtBQ0FMVUNBQUFBQUwwQ0FBQUFBTUFDQU1nQ0FOQUN3Z0hZQWpqZ0FnRG9BZ0Q0QWdDQUF3R1FBd0NZQXdHb0E0THUzUWU2QXdsTVFWZ3hPalF5TmpiZ0E0a1BrQVFBbUFRQndRUUFBQUFBQUFBQUFNa0VBQUFBBXBEQURZQkFBLpoChQEhWkJaOTB3Ni0BNF85TXNJQVFvQURHYW1aBQKINVB6b0pURUZZTVRvME1qWTJRSWtQU2RqdzlFcFpodXdfVVEJWwEBAFcdeABZHQwAYR0MAGMdDPTyAbICT2V5SnJhV1FpT2lJeUlpd2lZV3huSWpvaVNGTXlOVFlpZlEuLldoZ05uZ3htRWpLUVBKWWpNa0pCbUhOdVdJcUhOdUktUFNsRHpUZUJzSUHYAt6MAuACis8n6gI3aHR0cHM6Ly93d3cubGVib25jb2luLmZyL2Fubm9uY2VzL29mZnJlcy9hcXVpdGFpbmUvcC0zL4ADAIgDAZADAJgDF6ADAaoDAMADrALIAwDYA7u_HOADAOgDAPgDAYAEAJIEBi91dC92M5gEAKIEDzE5My4xODcuMTE2LjE0OagE1JYIsgQQCAAQARjpBSCRASgAMAA4ArgEAMAEAMgEANIEDjMyOTYjTEFYMTo0MjY22gQCCAHgBAHwBMu4xRKIBQGYBQCgBf___________wHABQDJBQAAAAAAAPA_0gUJCQAAAAAAAAAA2AUB4AUB8AUB-gUECAAQAJAGAJgGALIGiwFCT2oxekRhT2oxekRhRFdBQUNGUkNiLUFBQUFvMXJ2X19fN19fOV8tX19fXzl1ejdPdl92X2ZfXzMzZTg3Nzl2X2hfN18tX19fdV8tM3pkNHVfMXZmOTl5Zm0xLTdjdHIzdHBfODd1ZXNtX1h1cl9fNTlfXzN6M185cGhQNzhrODlyNzMzN0V3NE1BuAYBwQYRvhzIBgDaBhYKEAkQGQFEEAAYAOAGAfIGAggAgAcBiAcA&amp;s=e35c53c052ab856eeb3246d82fd2f2b0bcd3f5db"
                                                                height="0" width="0" style="display: none;"><iframe
                                                                id="utif_na2-xl_4a4dd8df-58d9-4cb4-a4b7-ea6a3fb1402e"
                                                                name="utif_na2-xl_4a4dd8df-58d9-4cb4-a4b7-ea6a3fb1402e"
                                                                height="145px" width="745px" tabindex="-1"
                                                                marginwidth="0" marginheight="0" scrolling="no"
                                                                frameborder="0"
                                                                style="border: 0px; width: 100%;"></iframe></div>
                                                    </span></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="859">
                                                <div data-reactid="860">
                                                    <div data-reactid="861">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="862">
                                                            <div data-reactid="863">
                                                                <div class="_3C4to" data-reactid="864">
                                                                    <div class="_3xQS8" data-reactid="865"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="867"></div>
                                                </div><a title="casque logitech" class="clearfix trackable"
                                                    rel="nofollow" href="/image_son/1618996788.htm/" data-reactid="868">
                                                    <div class="_3dPxM" data-reactid="869"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="870">
                                                            <div class="LazyLoad" data-reactid="871"></div>
                                                        </span><span class="_2lY3w" data-reactid="872"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="874">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="875">
                                                        <div data-reactid="876">
                                                            <p class="_2tubl" data-reactid="877"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="878">casque
                                                                    logitech</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="879">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="880"><span class="_1JRvz"
                                                                    data-reactid="881"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="882">
                                                                        <!-- react-text: 883 -->30
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 884 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="885">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Image &amp; Son"
                                                                data-reactid="886">
                                                                <!-- react-text: 887 -->Image &amp; Son
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="888">Bordeaux
                                                                33000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="889">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="890">
                                                    <div data-reactid="891"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_14" data-id="tooltip" data-reactid="892"></div>
                                            </li><!-- react-empty: 893 -->
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="894">
                                                <div data-reactid="895">
                                                    <div data-reactid="896">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="897">
                                                            <div data-reactid="898">
                                                                <div class="_3C4to" data-reactid="899">
                                                                    <div class="_3xQS8" data-reactid="900"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="902"></div>
                                                </div><a title="Radio reveil spiderman" class="clearfix trackable"
                                                    rel="nofollow" href="/jeux_jouets/1618981564.htm/"
                                                    data-reactid="903">
                                                    <div class="_3dPxM" data-reactid="904"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="905">
                                                            <div class="LazyLoad" data-reactid="906"></div>
                                                        </span><span class="_2lY3w" data-reactid="907"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="909">1</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="910">
                                                        <div data-reactid="911">
                                                            <p class="_2tubl" data-reactid="912"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="913">Radio
                                                                    reveil spiderman</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="914">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="915"><span class="_1JRvz"
                                                                    data-reactid="916"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="917">
                                                                        <!-- react-text: 918 -->10
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 919 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="920">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Jeux &amp; Jouets"
                                                                data-reactid="921">
                                                                <!-- react-text: 922 -->Jeux &amp; Jouets
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="923">
                                                                Carignan-de-Bordeaux 33360</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:01"
                                                                data-reactid="924">Aujourd'hui, 15:01</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="925">
                                                    <div data-reactid="926"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_15" data-id="tooltip" data-reactid="927"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="928">
                                                <div data-reactid="929">
                                                    <div data-reactid="930">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="931">
                                                            <div data-reactid="932">
                                                                <div class="_3C4to" data-reactid="933">
                                                                    <div class="_3xQS8" data-reactid="934"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="936"></div>
                                                </div><a title="Opel corsa" class="clearfix trackable" rel="nofollow"
                                                    href="/voitures/1647659370.htm/" data-reactid="937">
                                                    <div class="_3dPxM" data-reactid="938"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="939">
                                                            <div class="LazyLoad" data-reactid="940"></div>
                                                        </span><span class="_2lY3w" data-reactid="941"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="943">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="944">
                                                        <div data-reactid="945">
                                                            <p class="_2tubl" data-reactid="946"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="947">Opel
                                                                    corsa</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="948">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="949"><span class="_1JRvz"
                                                                    data-reactid="950"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="951">
                                                                        <!-- react-text: 952 -->500
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 953 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="954">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Voitures"
                                                                data-reactid="955">
                                                                <!-- react-text: 956 -->Voitures
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="957">Soustons
                                                                40140</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="958">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="959">
                                                    <div data-reactid="960"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_16" data-id="tooltip" data-reactid="961"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="962">
                                                <div data-reactid="963">
                                                    <div data-reactid="964">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="965">
                                                            <div data-reactid="966">
                                                                <div class="_3C4to" data-reactid="967">
                                                                    <div class="_3xQS8" data-reactid="968"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="970"></div>
                                                </div><a title="Panneaux rideaux" class="clearfix trackable"
                                                    rel="nofollow" href="/linge_de_maison/762159768.htm/"
                                                    data-reactid="971">
                                                    <div class="_3dPxM" data-reactid="972"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="973">
                                                            <div class="LazyLoad" data-reactid="974"></div>
                                                        </span><span class="_2lY3w" data-reactid="975"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="977">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="978">
                                                        <div data-reactid="979">
                                                            <p class="_2tubl" data-reactid="980"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="981">Panneaux rideaux</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="982">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="983"><span class="_1JRvz"
                                                                    data-reactid="984"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="985">
                                                                        <!-- react-text: 986 -->12
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 987 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="988">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Linge de maison"
                                                                data-reactid="989">
                                                                <!-- react-text: 990 -->Linge de maison
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="991">
                                                                Mont-de-Marsan 40000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="992">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="993">
                                                    <div data-reactid="994"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_17" data-id="tooltip" data-reactid="995"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="996">
                                                <div data-reactid="997">
                                                    <div data-reactid="998">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="999">
                                                            <div data-reactid="1000">
                                                                <div class="_3C4to" data-reactid="1001">
                                                                    <div class="_3xQS8" data-reactid="1002"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1004"></div>
                                                </div><a title="Velo elliptique" class="clearfix trackable"
                                                    rel="nofollow" href="/sports_hobbies/1647690391.htm/"
                                                    data-reactid="1005">
                                                    <div class="_3dPxM" data-reactid="1006"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1007">
                                                            <div class="LazyLoad" data-reactid="1008"></div>
                                                        </span><span class="_2lY3w" data-reactid="1009"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1011">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1012">
                                                        <div data-reactid="1013">
                                                            <p class="_2tubl" data-reactid="1014"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1015">Velo
                                                                    elliptique</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1016">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1017"><span class="_1JRvz"
                                                                    data-reactid="1018"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1019">
                                                                        <!-- react-text: 1020 -->140
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1021 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1022">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category"
                                                                content="Sports &amp; Hobbies" data-reactid="1023">
                                                                <!-- react-text: 1024 -->Sports &amp; Hobbies
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1025">Le
                                                                Haillan 33185</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1026">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1027">
                                                    <div data-reactid="1028"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_18" data-id="tooltip" data-reactid="1029"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1030">
                                                <div data-reactid="1031">
                                                    <div data-reactid="1032">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1033">
                                                            <div data-reactid="1034">
                                                                <div class="_3C4to" data-reactid="1035">
                                                                    <div class="_3xQS8" data-reactid="1036"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1038"></div>
                                                </div><a title="4 anciennes chaises d ecole" class="clearfix trackable"
                                                    rel="nofollow" href="/decoration/1647690422.htm/"
                                                    data-reactid="1039">
                                                    <div class="_3dPxM" data-reactid="1040"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1041">
                                                            <div class="LazyLoad" data-reactid="1042"></div>
                                                        </span><span class="_2lY3w" data-reactid="1043"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1045">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1046">
                                                        <div data-reactid="1047">
                                                            <p class="_2tubl" data-reactid="1048"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1049">4
                                                                    anciennes chaises d ecole</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1050">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1051"><span class="_1JRvz"
                                                                    data-reactid="1052"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1053">
                                                                        <!-- react-text: 1054 -->40
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1055 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1056">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Décoration"
                                                                data-reactid="1057">
                                                                <!-- react-text: 1058 -->Décoration
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1059">
                                                                Trélissac 24750</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1060">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1061">
                                                    <div data-reactid="1062"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_19" data-id="tooltip" data-reactid="1063"></div>
                                            </li>
                                            <li data-reactid="1064">
                                                <div class="apn-autopromo_listing" data-reactid="1065"><span
                                                        id="autopromo_listing-s" class="teal-apn"
                                                        data-reactid="1066"></span><span id="autopromo_listing-m"
                                                        class="teal-apn" data-reactid="1067"></span><span
                                                        id="autopromo_listing-l" class="teal-apn"
                                                        data-reactid="1068"></span><span id="autopromo_listing-xl"
                                                        class="teal-apn" data-reactid="1069">
                                                        <div id="div_utif_autopromo_listing-xl"
                                                            style="display: inline;"><img
                                                                id="anx_1214329181563455042116"
                                                                src="https://lax1-ib.adnxs.com/it?an_audit=0&amp;referrer=https%3A%2F%2Fwww.leboncoin.fr%2Fannonces%2Foffres%2Faquitaine%2Fp-3%2F&amp;e=wqT_3QKhCvBDIQUAAAMA1gAFAQjA3MHpBRD3hLq4v56WsC0Y0bCShZz-z-s-KjYJ845TdCSXvz8R845TdCSXvz8ZAAAAYLge7T8h844JGwApESTw5TEAAAAA16PAPzDqqLMGOOAZQOAZSAJQ1tbzOVj-0yxgAGiV7kZ42LQFgAEBigEDVVNEkgEDRVVSmAHpBaABkQGoAQGwAQC4AQHAAQTIAQLQAQDYAQDgAQDwAQD6ATtGUi1MZWJvbmNvaW4td2ViLWRpdmVycy10b3V0ZXNfY2F0ZWdvcmllcy1BdXRvcHJvbW9fbGlzdGluZ4oCV3VmKCdhJywgNzAwODE4LCAxNTYzNDU1MDQwKTt1ZignaScsIDI2MTA5MiwgMTU2MzQ1NTA0MCk7dWYoJ3InLCAxMjE0MzI5MTgsMjsA9CABkgKpAiEwVUtZQUFqNWtaWU1FTmJXOHprWUFDRF8weXd3QURnQVFBUkk0QmxRNnFpekJsZ0FZSmtGYUFCd0lIZzRnQUhDQVlnQk9KQUJBWmdCQWFBQkFhZ0JBN0FCQUxrQlp3a1BxdllvdkRfQkFXUkVvYzQ4bDc4X3lRR1RuV0JsOElmU1A5a0IyUEQwU2xtRzdEX2dBZVQzRF9VQkFBQUFBUGdCQUpnQ0FLQUNBTFVDQUFBQUFMMENBQUFBQU1BQ0FNZ0NBTkFDd2dIWUFqamdBZ0RvQWdENEFnQ0FBd0dRQXdDWUF3R29BX21SbGd5NkF3bE1RVmd4T2pReU5qYmdBNGtQa0FRQW1BUUJ3UVFBQUFBQUFBQUFBTWtFQUFBQQVwREFEWUJBQS6aAoUBIUdSWkZ3UTYtAdBfOU1zSUFRb0FERXBYSV9DOVNpOFB6b0pURUZZTVRvME1qWTJRSWtQU2RqdzlFcFpodXdfVR1sAFcdDABZHQwAYR0MAGMdDPQ0AbICT2V5SnJhV1FpT2lJeUlpd2lZV3huSWpvaVNGTXlOVFlpZlEuLldoZ05uZ3htRWpLUVBKWWpNa0pCbUhOdVdJcUhOdUktUFNsRHpUZUJzSUHYAt6MAuACis8n6gI3aHR0cHM6Ly93d3cubGVib25jb2luLmZyL2Fubm9uY2VzL29mZnJlcy9hcXVpdGFpbmUvcC0zL4ADAIgDAZADAJgDF6ADAaoDAMADrALIAwDYA7u_HOADAOgDAPgDAYAEAJIEBi91dC92M5gEAKIEDzE5My4xODcuMTE2LjE0OagE1JYIsgQQCAAQARjpBSCRASgAMAA4ArgEAMAEAMgEANIEDjMyOTYjTEFYMTo0MjY22gQCCAHgBAHwBNbW8zmIBQGYBQCgBf___________wHABQDJBWHdHAAA8D_SBQkJCQyIAADYBQHgBQHwBQH6BQQIABAAkAYAmAYAsgaLAUJPajF6RGEJBiREV0FBQ0ZSQ2ItQQ-gbzFydl9fXzdfXzlfLV9fX185dXo3T3Zfdl9mX18zM2U4Nzc5dl9oXzcFHvBGdV8tM3pkNHVfMXZmOTl5Zm0xLTdjdHIzdHBfODd1ZXNtX1h1cl9fNTlfXzN6M185cGhQNzhrODlyNzMzN0V3NE1BuAYBwQYJsiTwP8gGANoGFgoQCRAZAUQQABgA4AYB8gYCCACABwGIBwA.&amp;s=30d9def364cb757d256c3604e99f107a852d26f7"
                                                                height="0" width="0" style="display: none;"><iframe
                                                                id="utif_autopromo_listing-xl_dc3a7d6c-aed3-41e3-9a40-935ac52b3bc9"
                                                                name="utif_autopromo_listing-xl_dc3a7d6c-aed3-41e3-9a40-935ac52b3bc9"
                                                                height="145px" width="745px" tabindex="-1"
                                                                marginwidth="0" marginheight="0" scrolling="no"
                                                                frameborder="0"
                                                                style="border: 0px; width: 100%;"></iframe></div>
                                                    </span></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1070">
                                                <div data-reactid="1071">
                                                    <div data-reactid="1072">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1073">
                                                            <div data-reactid="1074">
                                                                <div class="_3C4to" data-reactid="1075">
                                                                    <div class="_3xQS8" data-reactid="1076"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1078"></div>
                                                </div><a title="Coussins pouf deco" class="clearfix trackable"
                                                    rel="nofollow" href="/decoration/1647690351.htm/"
                                                    data-reactid="1079">
                                                    <div class="_3dPxM" data-reactid="1080"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1081">
                                                            <div class="LazyLoad" data-reactid="1082"></div>
                                                        </span><span class="_2lY3w" data-reactid="1083"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1085">1</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1086">
                                                        <div data-reactid="1087">
                                                            <p class="_2tubl" data-reactid="1088"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="1089">Coussins pouf deco</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1090">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1091"><span class="_1JRvz"
                                                                    data-reactid="1092"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1093">
                                                                        <!-- react-text: 1094 -->10
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1095 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1096">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Décoration"
                                                                data-reactid="1097">
                                                                <!-- react-text: 1098 -->Décoration
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1099">
                                                                Soumoulou 64420</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1100">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1101">
                                                    <div data-reactid="1102"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_20" data-id="tooltip" data-reactid="1103"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1104">
                                                <div data-reactid="1105">
                                                    <div data-reactid="1106">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1107">
                                                            <div data-reactid="1108">
                                                                <div class="_3C4to" data-reactid="1109">
                                                                    <div class="_3xQS8" data-reactid="1110"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1112"></div>
                                                </div><a title="Vélo de ville" class="clearfix trackable" rel="nofollow"
                                                    href="/velos/1647690321.htm/" data-reactid="1113">
                                                    <div class="_3dPxM" data-reactid="1114"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1115">
                                                            <div class="LazyLoad" data-reactid="1116"></div>
                                                        </span><span class="_2lY3w" data-reactid="1117"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1119">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1120">
                                                        <div data-reactid="1121">
                                                            <p class="_2tubl" data-reactid="1122"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1123">Vélo
                                                                    de ville</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1124">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1125"><span class="_1JRvz"
                                                                    data-reactid="1126"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1127">
                                                                        <!-- react-text: 1128 -->120
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1129 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1130">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Vélos"
                                                                data-reactid="1131">
                                                                <!-- react-text: 1132 -->Vélos
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1133">
                                                                Bordeaux 33000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1134">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1135">
                                                    <div data-reactid="1136"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_21" data-id="tooltip" data-reactid="1137"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1138">
                                                <div data-reactid="1139">
                                                    <div data-reactid="1140">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1141">
                                                            <div data-reactid="1142">
                                                                <div class="_3C4to" data-reactid="1143">
                                                                    <div class="_3xQS8" data-reactid="1144"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1146"></div>
                                                </div><a title="Portail bois" class="clearfix trackable" rel="nofollow"
                                                    href="/bricolage/1647690376.htm/" data-reactid="1147">
                                                    <div class="_3dPxM" data-reactid="1148"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1149">
                                                            <div class="LazyLoad" data-reactid="1150"></div>
                                                        </span><span class="_2lY3w" data-reactid="1151"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1153">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1154">
                                                        <div data-reactid="1155">
                                                            <p class="_2tubl" data-reactid="1156"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="1157">Portail bois</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1158">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1159"><span class="_1JRvz"
                                                                    data-reactid="1160"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1161">
                                                                        <!-- react-text: 1162 -->50
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1163 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1164">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Bricolage"
                                                                data-reactid="1165">
                                                                <!-- react-text: 1166 -->Bricolage
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1167">Cenon
                                                                33150</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1168">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1169">
                                                    <div data-reactid="1170"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_22" data-id="tooltip" data-reactid="1171"></div>
                                            </li><!-- react-empty: 1172 -->
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1173">
                                                <div data-reactid="1174">
                                                    <div data-reactid="1175">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1176">
                                                            <div data-reactid="1177">
                                                                <div class="_3C4to" data-reactid="1178">
                                                                    <div class="_3xQS8" data-reactid="1179"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1181"></div>
                                                </div><a title="Lot de 4 poupées en porcelaine"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/collection/1647690412.htm/" data-reactid="1182">
                                                    <div class="_3dPxM" data-reactid="1183"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1184">
                                                            <div class="LazyLoad" data-reactid="1185"></div>
                                                        </span><span class="_2lY3w" data-reactid="1186"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1188">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1189">
                                                        <div data-reactid="1190">
                                                            <p class="_2tubl" data-reactid="1191"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1192">Lot de
                                                                    4 poupées en porcelaine</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1193">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1194"><span class="_1JRvz"
                                                                    data-reactid="1195"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1196">
                                                                        <!-- react-text: 1197 -->45
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1198 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1199">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Collection"
                                                                data-reactid="1200">
                                                                <!-- react-text: 1201 -->Collection
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1202">
                                                                Biarritz 64200</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1203">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1204">
                                                    <div data-reactid="1205"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_23" data-id="tooltip" data-reactid="1206"></div>
                                            </li>
                                            <li data-reactid="1207">
                                                <div class="apn-na" data-reactid="1208"><span id="na4-s"
                                                        class="teal-apn" data-reactid="1209"></span><span id="na4-m"
                                                        class="teal-apn" data-reactid="1210"></span><span id="na4-l"
                                                        class="teal-apn" data-reactid="1211"></span><span id="na4-xl"
                                                        class="teal-apn" data-reactid="1212">
                                                        <div id="div_utif_na4-xl" style="display: inline;"><iframe
                                                                id="utif_na4-xl_7cd4a055-e29a-4cc7-8816-fbf07c939982"
                                                                name="utif_na4-xl_7cd4a055-e29a-4cc7-8816-fbf07c939982"
                                                                height="145" width="745" tabindex="-1" marginwidth="0"
                                                                marginheight="0" scrolling="no" frameborder="0"
                                                                style="border: 0px;"></iframe></div>
                                                        <script class="ayl-injected-element"
                                                            src="//fo-api.omnitagjs.com/fo-api/ot.js?Placement=386dd621943ef464523392a880e7cb25"
                                                            type="text/javascript" async="true"></script>
                                                    </span></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1213">
                                                <div data-reactid="1214">
                                                    <div data-reactid="1215">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1216">
                                                            <div data-reactid="1217">
                                                                <div class="_3C4to" data-reactid="1218">
                                                                    <div class="_3xQS8" data-reactid="1219"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1221"></div>
                                                </div><a title="406 td" class="clearfix trackable" rel="nofollow"
                                                    href="/voitures/1647690274.htm/" data-reactid="1222">
                                                    <div class="_3dPxM" data-reactid="1223"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1224">
                                                            <div class="LazyLoad" data-reactid="1225"></div>
                                                        </span><span class="_2lY3w" data-reactid="1226"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1228">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1229">
                                                        <div data-reactid="1230">
                                                            <p class="_2tubl" data-reactid="1231"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1232">406
                                                                    td</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1233">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1234"><span class="_1JRvz"
                                                                    data-reactid="1235"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1236">
                                                                        <!-- react-text: 1237 -->1 400
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1238 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1239">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Voitures"
                                                                data-reactid="1240">
                                                                <!-- react-text: 1241 -->Voitures
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1242">
                                                                Saint-Sylvestre-sur-Lot 47140</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1243">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1244">
                                                    <div data-reactid="1245"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_24" data-id="tooltip" data-reactid="1246"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1247">
                                                <div data-reactid="1248">
                                                    <div data-reactid="1249">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1250">
                                                            <div data-reactid="1251">
                                                                <div class="_3C4to" data-reactid="1252">
                                                                    <div class="_3xQS8" data-reactid="1253"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1255"></div>
                                                </div><a title="Ducati diavel 1200 2017 16000 kms"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/motos/1647690229.htm/" data-reactid="1256">
                                                    <div class="_3dPxM" data-reactid="1257"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1258">
                                                            <div class="LazyLoad" data-reactid="1259"></div>
                                                        </span><span class="_2lY3w" data-reactid="1260"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1262">5</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1263">
                                                        <div data-reactid="1264">
                                                            <p class="_2tubl" data-reactid="1265"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1266">Ducati
                                                                    diavel 1200 2017 16000 kms</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1267">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1268"><span class="_1JRvz"
                                                                    data-reactid="1269"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1270">
                                                                        <!-- react-text: 1271 -->15 990
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1272 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1273">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Motos"
                                                                data-reactid="1274"><span class="_1HeL0"
                                                                    data-reactid="1275">(Pro)&nbsp;</span>
                                                                <!-- react-text: 1276 -->Motos
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1277">
                                                                Mérignac 33700</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1278">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1279">
                                                    <div data-reactid="1280"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_25" data-id="tooltip" data-reactid="1281"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1282">
                                                <div data-reactid="1283">
                                                    <div data-reactid="1284">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1285">
                                                            <div data-reactid="1286">
                                                                <div class="_3C4to" data-reactid="1287">
                                                                    <div class="_3xQS8" data-reactid="1288"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1290"></div>
                                                </div><a title="Bordeaux T4 avec garage fermé et grand balcon"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/ventes_immobilieres/1635525125.htm/" data-reactid="1291">
                                                    <div class="_3dPxM" data-reactid="1292"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1293">
                                                            <div class="LazyLoad" data-reactid="1294"></div>
                                                        </span><span class="_2lY3w" data-reactid="1295"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1297">5</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1298">
                                                        <div data-reactid="1299">
                                                            <p class="_2tubl" data-reactid="1300"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="1301">Bordeaux T4 avec garage fermé et
                                                                    grand balcon</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1302">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1303"><span class="_1JRvz"
                                                                    data-reactid="1304"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1305">
                                                                        <!-- react-text: 1306 -->430 000
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1307 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1308">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category"
                                                                content="Ventes immobilières" data-reactid="1309"><span
                                                                    class="_1HeL0"
                                                                    data-reactid="1310">(Pro)&nbsp;</span>
                                                                <!-- react-text: 1311 -->Ventes immobilières
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1312">
                                                                Bordeaux 33000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1313">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1314">
                                                    <div data-reactid="1315"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_26" data-id="tooltip" data-reactid="1316"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1317">
                                                <div data-reactid="1318">
                                                    <div data-reactid="1319">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1320">
                                                            <div data-reactid="1321">
                                                                <div class="_3C4to" data-reactid="1322">
                                                                    <div class="_3xQS8" data-reactid="1323"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1325"></div>
                                                </div><a title="Proche centre studio meublé" class="clearfix trackable"
                                                    rel="nofollow" href="/locations/1634235155.htm/"
                                                    data-reactid="1326">
                                                    <div class="_3dPxM" data-reactid="1327"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1328">
                                                            <div class="LazyLoad" data-reactid="1329"></div>
                                                        </span><span class="_2lY3w" data-reactid="1330"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1332">9</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1333">
                                                        <div data-reactid="1334">
                                                            <p class="_2tubl" data-reactid="1335"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1336">Proche
                                                                    centre studio meublé</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1337">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1338"><span class="_1JRvz"
                                                                    data-reactid="1339"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1340">
                                                                        <!-- react-text: 1341 -->360
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1342 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1343">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Locations"
                                                                data-reactid="1344">
                                                                <!-- react-text: 1345 -->Locations
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1346">Agen
                                                                47000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1347">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1348">
                                                    <div data-reactid="1349"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_27" data-id="tooltip" data-reactid="1350"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1351">
                                                <div data-reactid="1352">
                                                    <div data-reactid="1353">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1354">
                                                            <div data-reactid="1355">
                                                                <div class="_3C4to" data-reactid="1356">
                                                                    <div class="_3xQS8" data-reactid="1357"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1359"></div>
                                                </div><a title="Siège vélo enfant Polisport noir"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/velos/1647690250.htm/" data-reactid="1360">
                                                    <div class="_3dPxM" data-reactid="1361"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1362">
                                                            <div class="LazyLoad" data-reactid="1363"></div>
                                                        </span><span class="_2lY3w" data-reactid="1364"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1366">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1367">
                                                        <div data-reactid="1368">
                                                            <p class="_2tubl" data-reactid="1369"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1370">Siège
                                                                    vélo enfant Polisport noir</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1371">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1372"><span class="_1JRvz"
                                                                    data-reactid="1373"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1374">
                                                                        <!-- react-text: 1375 -->20
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1376 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1377">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Vélos"
                                                                data-reactid="1378">
                                                                <!-- react-text: 1379 -->Vélos
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1380">Urrugne
                                                                64122</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1381">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1382">
                                                    <div data-reactid="1383"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_28" data-id="tooltip" data-reactid="1384"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1385">
                                                <div data-reactid="1386">
                                                    <div data-reactid="1387">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1388">
                                                            <div data-reactid="1389">
                                                                <div class="_3C4to" data-reactid="1390">
                                                                    <div class="_3xQS8" data-reactid="1391"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1393"></div>
                                                </div><a title="Sweat zippé Best Way 3 ans" class="clearfix trackable"
                                                    rel="nofollow" href="/vetements/1433129870.htm/"
                                                    data-reactid="1394">
                                                    <div class="_3dPxM" data-reactid="1395"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1396">
                                                            <div class="LazyLoad" data-reactid="1397"></div>
                                                        </span><span class="_2lY3w" data-reactid="1398"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1400">1</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1401">
                                                        <div data-reactid="1402">
                                                            <p class="_2tubl" data-reactid="1403"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1404">Sweat
                                                                    zippé Best Way 3 ans</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1405">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1406"><span class="_1JRvz"
                                                                    data-reactid="1407"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1408">
                                                                        <!-- react-text: 1409 -->3
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1410 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1411">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Vêtements"
                                                                data-reactid="1412">
                                                                <!-- react-text: 1413 -->Vêtements
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1414">
                                                                Saint-Vincent-de-Tyrosse 40230</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1415">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1416">
                                                    <div data-reactid="1417"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_29" data-id="tooltip" data-reactid="1418"></div>
                                            </li>
                                            <li data-reactid="1419">
                                                <div class="apn-na" data-reactid="1420"><span id="na5-s"
                                                        class="teal-apn" data-reactid="1421"></span><span id="na5-m"
                                                        class="teal-apn" data-reactid="1422"></span><span id="na5-l"
                                                        class="teal-apn" data-reactid="1423"></span><span id="na5-xl"
                                                        class="teal-apn" data-reactid="1424">
                                                        <div id="div_utif_na5-xl" style="display: inline;"><iframe
                                                                id="utif_na5-xl_f2c0c39b-5b2c-4c72-8e8d-a5daa2615f4a"
                                                                name="utif_na5-xl_f2c0c39b-5b2c-4c72-8e8d-a5daa2615f4a"
                                                                height="145" width="745" tabindex="-1" marginwidth="0"
                                                                marginheight="0" scrolling="no" frameborder="0"
                                                                style="border: 0px;"></iframe>
                                                            <script class="ayl-injected-element"
                                                                src="//fo-api.omnitagjs.com/fo-api/ot.js?Placement=73fbd1111054a2e0b19ceb701654583c"
                                                                type="text/javascript" async="true"></script>
                                                        </div>
                                                    </span></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1425">
                                                <div data-reactid="1426">
                                                    <div data-reactid="1427">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1428">
                                                            <div data-reactid="1429">
                                                                <div class="_3C4to" data-reactid="1430">
                                                                    <div class="_3xQS8" data-reactid="1431"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1433"></div>
                                                </div><a title="Grand Tableau Alinéa (cadre bois)"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/decoration/1405658031.htm/" data-reactid="1434">
                                                    <div class="_3dPxM" data-reactid="1435"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1436">
                                                            <div class="LazyLoad" data-reactid="1437"></div>
                                                        </span><span class="_2lY3w" data-reactid="1438"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1440">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1441">
                                                        <div data-reactid="1442">
                                                            <p class="_2tubl" data-reactid="1443"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1444">Grand
                                                                    Tableau Alinéa (cadre bois)</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1445">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1446"><span class="_1JRvz"
                                                                    data-reactid="1447"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1448">
                                                                        <!-- react-text: 1449 -->15
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1450 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1451">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Décoration"
                                                                data-reactid="1452">
                                                                <!-- react-text: 1453 -->Décoration
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1454">Le
                                                                Taillan-Médoc 33320</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1455">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1456">
                                                    <div data-reactid="1457"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_30" data-id="tooltip" data-reactid="1458"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1459">
                                                <div data-reactid="1460">
                                                    <div data-reactid="1461">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1462">
                                                            <div data-reactid="1463">
                                                                <div class="_3C4to" data-reactid="1464">
                                                                    <div class="_3xQS8" data-reactid="1465"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1467"></div>
                                                </div><a title="Robot Nettoyeur piscine E-Cleaner avec chariot"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/bricolage/1452406458.htm/" data-reactid="1468">
                                                    <div class="_3dPxM" data-reactid="1469"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1470">
                                                            <div class="LazyLoad" data-reactid="1471"></div>
                                                        </span><span class="_2lY3w" data-reactid="1472"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1474">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1475">
                                                        <div data-reactid="1476">
                                                            <p class="_2tubl" data-reactid="1477"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1478">Robot
                                                                    Nettoyeur piscine E-Cleaner avec chariot</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1479">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1480"><span class="_1JRvz"
                                                                    data-reactid="1481"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1482">
                                                                        <!-- react-text: 1483 -->599
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1484 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1485">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Bricolage"
                                                                data-reactid="1486"><span class="_1HeL0"
                                                                    data-reactid="1487">(Pro)&nbsp;</span>
                                                                <!-- react-text: 1488 -->Bricolage
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1489">
                                                                Bordeaux 33000</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1490">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1491">
                                                    <div data-reactid="1492"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_31" data-id="tooltip" data-reactid="1493"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1494">
                                                <div data-reactid="1495">
                                                    <div data-reactid="1496">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1497">
                                                            <div data-reactid="1498">
                                                                <div class="_3C4to" data-reactid="1499">
                                                                    <div class="_3xQS8" data-reactid="1500"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1502"></div>
                                                </div><a title="Tapis persan" class="clearfix trackable" rel="nofollow"
                                                    href="/decoration/1463522120.htm/" data-reactid="1503">
                                                    <div class="_3dPxM" data-reactid="1504"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1505">
                                                            <div class="LazyLoad" data-reactid="1506"></div>
                                                        </span><span class="_2lY3w" data-reactid="1507"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1509">2</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1510">
                                                        <div data-reactid="1511">
                                                            <p class="_2tubl" data-reactid="1512"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1513">Tapis
                                                                    persan</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1514">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1515"><span class="_1JRvz"
                                                                    data-reactid="1516"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1517">
                                                                        <!-- react-text: 1518 -->450
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1519 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1520">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Décoration"
                                                                data-reactid="1521">
                                                                <!-- react-text: 1522 -->Décoration
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1523">Magescq
                                                                40140</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1524">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1525">
                                                    <div data-reactid="1526"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_32" data-id="tooltip" data-reactid="1527"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1528">
                                                <div data-reactid="1529">
                                                    <div data-reactid="1530">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1531">
                                                            <div data-reactid="1532">
                                                                <div class="_3C4to" data-reactid="1533">
                                                                    <div class="_3xQS8" data-reactid="1534"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1536"></div>
                                                </div><a title="Machine à café" class="clearfix trackable"
                                                    rel="nofollow" href="/electromenager/1643078035.htm/"
                                                    data-reactid="1537">
                                                    <div class="_3dPxM" data-reactid="1538"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1539">
                                                            <div class="LazyLoad" data-reactid="1540"></div>
                                                        </span><span class="_2lY3w" data-reactid="1541"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1543">3</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1544">
                                                        <div data-reactid="1545">
                                                            <p class="_2tubl" data-reactid="1546"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="1547">Machine à café</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1548">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1549"><span class="_1JRvz"
                                                                    data-reactid="1550"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1551">
                                                                        <!-- react-text: 1552 -->90
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1553 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1554">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Électroménager"
                                                                data-reactid="1555">
                                                                <!-- react-text: 1556 -->Électroménager
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1557">Bordes
                                                                64510</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1558">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1559">
                                                    <div data-reactid="1560"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_33" data-id="tooltip" data-reactid="1561"></div>
                                            </li>
                                            <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                data-qa-id="aditem_container" data-reactid="1562">
                                                <div data-reactid="1563">
                                                    <div data-reactid="1564">
                                                        <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                            data-reactid="1565">
                                                            <div data-reactid="1566">
                                                                <div class="_3C4to" data-reactid="1567">
                                                                    <div class="_3xQS8" data-reactid="1568"><span
                                                                            class="_1vK7W" name="heartoutline"><svg
                                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aYw-j" data-reactid="1570"></div>
                                                </div><a title="Chandelier baroque en bois 3 branches neuf"
                                                    class="clearfix trackable" rel="nofollow"
                                                    href="/decoration/1647667147.htm/" data-reactid="1571">
                                                    <div class="_3dPxM" data-reactid="1572"><span
                                                            class="_a3cT Ywd7f _2eBcG" data-reactid="1573">
                                                            <div class="LazyLoad" data-reactid="1574"></div>
                                                        </span><span class="_2lY3w" data-reactid="1575"><span
                                                                class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                    width="24" viewBox="0 0 24 22" focusable="false">
                                                                    <path
                                                                        d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                        fill="#000"></path>
                                                                </svg></span><span data-reactid="1577">1</span></span>
                                                    </div>
                                                    <section class="_2EDA9" data-reactid="1578">
                                                        <div data-reactid="1579">
                                                            <p class="_2tubl" data-reactid="1580"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="1581">Chandelier baroque en bois 3
                                                                    branches neuf</span></p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1582">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1583"><span class="_1JRvz"
                                                                    data-reactid="1584"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7"
                                                                        data-reactid="1585">
                                                                        <!-- react-text: 1586 -->10
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1587 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="1588">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Décoration"
                                                                data-reactid="1589">
                                                                <!-- react-text: 1590 -->Décoration
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1591">
                                                                Margaux-Cantenac 33460</p>
                                                            <p class="mAnae" itemprop="availabilityStarts"
                                                                data-qa-id="listitem_date" content="Aujourd'hui, 15:00"
                                                                data-reactid="1592">Aujourd'hui, 15:00</p>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="yrUdB" data-reactid="1593">
                                                    <div data-reactid="1594"></div>
                                                </div>
                                                <div class="__react_component_tooltip place-top type-dark "
                                                    id="toggleSavedAd_34" data-id="tooltip" data-reactid="1595"></div>
                                            </li>
                                            <div class="_4cOP1" data-reactid="1596">
                                                <!-- react-empty: 1597 --><button
                                                    class="_2sNbI _1xIyN _2xk2l _2B6ae _1Q7d5 _2qyUu"
                                                    data-reactid="1598"><span class="_1vK7W _1eOK1 QKFCn _2-_jT"
                                                        name="notifoutline"><svg viewBox="0 0 24 24"
                                                            data-name="Calque 1" focusable="false">
                                                            <path
                                                                d="M12 24a2.49 2.49 0 0 0 2.5-2.46h-5A2.48 2.48 0 0 0 12 24zM21.13 18.2l-1.62-1.58v-6.16c0-3.78-2.05-6.94-5.63-7.78v-.83a1.88 1.88 0 0 0-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 0 0 .88 2.11h16.49a1.23 1.23 0 0 0 .89-2.11zM17 17.85H7v-7.39c0-3.05 1.89-5.54 5-5.54s5 2.49 5 5.54z">
                                                            </path>
                                                        </svg></span><span class="_3bnUw"
                                                        data-reactid="1600">Sauvegarder la recherche</span></button>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="googleafs" data-reactid="1601"></div>
                                <div class="_1evK6" data-reactid="1602">
                                    <nav class="nMaRG" data-reactid="1603">
                                        <div data-reactid="1604">
                                            <ul class="_25feg" data-reactid="1605">
                                                <li class="_2zwVR" data-reactid="1606"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-2/" data-reactid="1607"><span
                                                            class="_1vK7W K5CQx _Od24" name="chevronleft"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M10.13 12l8.25-8.33a2.15 2.15 0 0 0 0-3 2.1 2.1 0 0 0-3 0l-9.76 9.82a2.14 2.14 0 0 0 0 3l9.76 9.86a2.1 2.1 0 0 0 3 0 2.2 2.2 0 0 0 0-3.05z">
                                                                </path>
                                                            </svg></span></a></li>
                                                <li class="_2zwVR" data-reactid="1609"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/" data-reactid="1610">1</a>
                                                </li>
                                                <li class="_2zwVR" data-reactid="1611"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-2/" data-reactid="1612">2</a>
                                                </li>
                                                <li class="_2zwVR" data-reactid="1613"><span class="_1f-eo _2nsY3"
                                                        data-reactid="1614">3</span></li>
                                                <li class="_2zwVR" data-reactid="1615"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-4/" data-reactid="1616">4</a>
                                                </li>
                                                <li class="_2zwVR" data-reactid="1617"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-5/" data-reactid="1618">5</a>
                                                </li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-6/">6</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-7/">7</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-8/">8</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-9/">9</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-10/">10</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-11/">11</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-12/">12</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-13/">13</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-14/">14</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-15/">15</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-16/">16</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-17/">17</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-18/">18</a></li>
                                                <li class="_2zwVR"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-19/">19</a></li>
                                                <li class="_2zwVR" data-reactid="1619"><a class="_1f-eo"
                                                        href="/annonces/offres/aquitaine/p-4/" data-reactid="1620"><span
                                                            class="_1vK7W K5CQx _Od24" name="chevronright"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M18.38 10.49L8.62.63a2.1 2.1 0 0 0-3 0 2.15 2.15 0 0 0 0 3L13.87 12l-8.25 8.32a2.2 2.2 0 0 0 0 3.05 2.1 2.1 0 0 0 3 0l9.76-9.86a2.14 2.14 0 0 0 0-3.02z">
                                                                </path>
                                                            </svg></span></a></li>
                                            </ul>
                                        </div><!-- react-empty: 1622 -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="_2qwGs" data-reactid="1623">
                            <div data-reactid="1624">
                                <div class="_2_etK" data-reactid="1625">
                                    <ul data-reactid="1626">
                                        <li itemscope="" itemtype="http://schema.org/Offer" class="_3eDdy"
                                            data-reactid="1627">
                                            <div class="_3Zm0x" data-qa-id="listitem_save_ad" data-reactid="1628">
                                                <div data-reactid="1629">
                                                    <div class="_3C4to" data-reactid="1630">
                                                        <div class="" data-reactid="1631"><span class="_1vK7W"
                                                                name="heartoutline"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                </div>
                                            </div><a title="PROMO villa10 per,pisc vue pano ss vis a vis calme"
                                                class="_2fKRW" data-qa-id="aditem_container"
                                                href="/locations_gites/1643088160.htm/" data-reactid="1633"><span
                                                    class="_1sbqp" data-reactid="1634">À LA UNE</span>
                                                <div class="_2-jsN" data-reactid="1635">
                                                    <div class="LazyLoad is-visible" data-reactid="1636">
                                                        <div>
                                                            <div class="_6ntGx"
                                                                style="background-image: url(&quot;https://img2.leboncoin.fr/ad-image/f1c0f263a7b96540fe08647d87c59ac413c92e7e.jpg&quot;);">
                                                            </div><img
                                                                src="https://img2.leboncoin.fr/ad-image/f1c0f263a7b96540fe08647d87c59ac413c92e7e.jpg"
                                                                itemprop="image"
                                                                content="https://img2.leboncoin.fr/ad-image/f1c0f263a7b96540fe08647d87c59ac413c92e7e.jpg"
                                                                alt="subject">
                                                        </div>
                                                    </div><span class="_3R0AG" data-reactid="1637"><span
                                                            class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                width="24" viewBox="0 0 24 22" focusable="false">
                                                                <path
                                                                    d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                    fill="#000"></path>
                                                            </svg></span><span data-reactid="1639">10</span></span>
                                                </div>
                                                <div class="_3beID" data-reactid="1640">
                                                    <section class="irAof" data-reactid="1641">
                                                        <div data-reactid="1642">
                                                            <p class="_3ZfBw" data-reactid="1643"><span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="1644">PROMO
                                                                    villa10 per,pisc vue pano ss vis a vis calme</span>
                                                            </p>
                                                            <div class="CeFtS" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1645">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1646">
                                                                <div class="CeFtS" itemprop="priceSpecification"
                                                                    itemscope=""
                                                                    itemtype="http://schema.org/PriceSpecification"
                                                                    data-qa-id="aditem_price" data-reactid="1647"><span
                                                                        data-reactid="1648">
                                                                        <!-- react-text: 1649 -->à partir de
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1650 -->
                                                                        <!-- /react-text --><span itemprop="price"
                                                                            class="_1_bNq" data-reactid="1651">
                                                                            <!-- react-text: 1652 -->240
                                                                            <!-- /react-text -->
                                                                            <!-- react-text: 1653 -->&nbsp;€
                                                                            <!-- /react-text --></span>
                                                                        <!-- react-text: 1654 -->
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 1655 -->/ nuit
                                                                        <!-- /react-text --></span></div>
                                                            </div>
                                                        </div>
                                                        <div data-reactid="1656">
                                                            <p class="_2a7dC" itemprop="alternateName"
                                                                content="Locations &amp; Gîtes"
                                                                data-qa-id="aditem_category" data-reactid="1657">
                                                                <!-- react-text: 1658 -->Locations &amp; Gîtes
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_1s5WJ" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1659">
                                                                Marmande 47200</p>
                                                        </div>
                                                    </section>
                                                    <div class="_3A9T7" data-reactid="1660">
                                                        <div class="_3AnuW" data-reactid="1661">
                                                            <div class="_3jAsY" data-reactid="1662">
                                                                <div class="_3KcVT" data-reactid="1663"><span
                                                                        class="_1vK7W" name="star"><svg
                                                                            viewBox="0 0 24 24" data-name="Calque 1"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M22.66 8l-6.75-.59L13.23.87a1.35 1.35 0 0 0-2.53 0L8 7.43 1.28 8a1.55 1.55 0 0 0-.84 2.62l5.2 4.66-1.55 6.87a1.44 1.44 0 0 0 2.11 1.61l5.8-3.65 5.76 3.65a1.41 1.41 0 0 0 2.11-1.61L18.3 15.3l5.2-4.66A1.51 1.51 0 0 0 22.66 8z">
                                                                            </path>
                                                                        </svg></span></div>
                                                                <div class="_1MBDf" data-reactid="1665">Urgent</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="http://schema.org/Offer" class="_3eDdy"
                                            data-reactid="1666">
                                            <div class="_3Zm0x" data-qa-id="listitem_save_ad" data-reactid="1667">
                                                <div data-reactid="1668">
                                                    <div class="_3C4to" data-reactid="1669">
                                                        <div class="" data-reactid="1670"><span class="_1vK7W"
                                                                name="heartoutline"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                </div>
                                            </div><a title="Rachete comptant mobilier ancien tableaux bibelots"
                                                class="_2fKRW" data-qa-id="aditem_container"
                                                href="/ameublement/1645306598.htm/" data-reactid="1672"><span
                                                    class="_1sbqp" data-reactid="1673">À LA UNE</span>
                                                <div class="_2-jsN" data-reactid="1674">
                                                    <div class="LazyLoad is-visible" data-reactid="1675">
                                                        <div>
                                                            <div class="_6ntGx"
                                                                style="background-image: url(&quot;https://img7.leboncoin.fr/ad-image/c3910eb4331acf7272dafb06f2f3331018a1d3e7.jpg&quot;);">
                                                            </div><img
                                                                src="https://img7.leboncoin.fr/ad-image/c3910eb4331acf7272dafb06f2f3331018a1d3e7.jpg"
                                                                itemprop="image"
                                                                content="https://img7.leboncoin.fr/ad-image/c3910eb4331acf7272dafb06f2f3331018a1d3e7.jpg"
                                                                alt="subject">
                                                        </div>
                                                    </div><span class="_3R0AG" data-reactid="1676"><span
                                                            class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                width="24" viewBox="0 0 24 22" focusable="false">
                                                                <path
                                                                    d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                    fill="#000"></path>
                                                            </svg></span><span data-reactid="1678">5</span></span>
                                                </div>
                                                <div class="_3beID" data-reactid="1679">
                                                    <section class="irAof" data-reactid="1680">
                                                        <div data-reactid="1681">
                                                            <p class="_3ZfBw" data-reactid="1682"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="1683">Rachete comptant mobilier ancien
                                                                    tableaux bibelots</span></p>
                                                        </div>
                                                        <div data-reactid="1684">
                                                            <p class="_2a7dC" itemprop="alternateName"
                                                                content="Ameublement" data-qa-id="aditem_category"
                                                                data-reactid="1685"><span class="_3IXZH"
                                                                    data-reactid="1686">(Pro)&nbsp;</span>
                                                                <!-- react-text: 1687 -->Ameublement
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_1s5WJ" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1688">
                                                                Oloron-Sainte-Marie 64400</p>
                                                        </div>
                                                    </section>
                                                    <div class="_3A9T7" data-reactid="1689"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="http://schema.org/Offer" class="_3eDdy"
                                            data-reactid="1690">
                                            <div class="_3Zm0x" data-qa-id="listitem_save_ad" data-reactid="1691">
                                                <div data-reactid="1692">
                                                    <div class="_3C4to" data-reactid="1693">
                                                        <div class="" data-reactid="1694"><span class="_1vK7W"
                                                                name="heartoutline"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                </div>
                                            </div><a title="Batiment metal de 8m par 15m" class="_2fKRW"
                                                data-qa-id="aditem_container"
                                                href="/equipements_industriels/1636449964.htm/"
                                                data-reactid="1696"><span class="_1sbqp" data-reactid="1697">À LA
                                                    UNE</span>
                                                <div class="_2-jsN" data-reactid="1698">
                                                    <div class="LazyLoad is-visible" data-reactid="1699">
                                                        <div>
                                                            <div class="_6ntGx"
                                                                style="background-image: url(&quot;https://img1.leboncoin.fr/ad-image/b0cc1ba1d4ad6877ab4456f16efb44057242f030.jpg&quot;);">
                                                            </div><img
                                                                src="https://img1.leboncoin.fr/ad-image/b0cc1ba1d4ad6877ab4456f16efb44057242f030.jpg"
                                                                itemprop="image"
                                                                content="https://img1.leboncoin.fr/ad-image/b0cc1ba1d4ad6877ab4456f16efb44057242f030.jpg"
                                                                alt="subject">
                                                        </div>
                                                    </div><span class="_3R0AG" data-reactid="1700"><span
                                                            class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                width="24" viewBox="0 0 24 22" focusable="false">
                                                                <path
                                                                    d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                    fill="#000"></path>
                                                            </svg></span><span data-reactid="1702">10</span></span>
                                                </div>
                                                <div class="_3beID" data-reactid="1703">
                                                    <section class="irAof" data-reactid="1704">
                                                        <div data-reactid="1705">
                                                            <p class="_3ZfBw" data-reactid="1706"><span itemprop="name"
                                                                    data-qa-id="aditem_title"
                                                                    data-reactid="1707">Batiment metal de 8m par
                                                                    15m</span></p>
                                                            <div class="CeFtS" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="1708">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="1709">
                                                                <div class="CeFtS" itemprop="priceSpecification"
                                                                    itemscope=""
                                                                    itemtype="http://schema.org/PriceSpecification"
                                                                    data-qa-id="aditem_price" data-reactid="1710"><span
                                                                        class="_1_bNq" data-reactid="1711"><span
                                                                            itemprop="price" data-reactid="1712">3
                                                                            990</span><!-- react-text: 1713 -->&nbsp;€
                                                                        <!-- /react-text --></span></div>
                                                            </div>
                                                        </div>
                                                        <div data-reactid="1714">
                                                            <p class="_2a7dC" itemprop="alternateName"
                                                                content="Équipements industriels"
                                                                data-qa-id="aditem_category" data-reactid="1715"><span
                                                                    class="_3IXZH"
                                                                    data-reactid="1716">(Pro)&nbsp;</span>
                                                                <!-- react-text: 1717 -->Équipements industriels
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_1s5WJ" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="1718">Pau
                                                                64000</p>
                                                        </div>
                                                    </section>
                                                    <div class="_3A9T7" data-reactid="1719"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="advertisingSkyscraper" data-reactid="1720">
                                <div class="initPosition" data-reactid="1721" style="height: 6281px;">
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
                            <div class="_3UM0h">
                                <ul>
                                    <li class="_3f3p2"><a title="EMPLOI" class="trackable"
                                            href="/_emploi_/offres/aquitaine/">EMPLOI</a></li>
                                    <li class=""><a title="Offres d'emploi" class="trackable"
                                            href="/offres_d_emploi/offres/aquitaine/">Offres d'emploi</a></li>
                                    <li class=""><a href="https://go.onelink.me/3471221858/bcf737d8" target="_self"
                                            title="Offres d'emploi Cadres" class="trackable">Offres d'emploi Cadres</a>
                                    </li>
                                    <li class="_3f3p2"><a title="VEHICULES" class="trackable"
                                            href="/_vehicules_/offres/aquitaine/">VEHICULES</a></li>
                                    <li class=""><a title="Voitures" class="trackable"
                                            href="/voitures/offres/aquitaine/">Voitures</a></li>
                                    <li class=""><a title="Motos" class="trackable"
                                            href="/motos/offres/aquitaine/">Motos</a></li>
                                    <li class=""><a title="Caravaning" class="trackable"
                                            href="/caravaning/offres/aquitaine/">Caravaning</a></li>
                                    <li class=""><a title="Utilitaires" class="trackable"
                                            href="/utilitaires/offres/aquitaine/">Utilitaires</a></li>
                                    <li class=""><a
                                            href="https://www.truckscorner.fr/#xtor=CS1-16-[leboncoin]-[lien]-[lien_menu]-[tc]"
                                            target="_self" title="Camions" class="trackable">Camions</a></li>
                                    <li class=""><a title="Nautisme" class="trackable"
                                            href="/nautisme/offres/aquitaine/">Nautisme</a></li>
                                    <li class=""><a title="Equipement Auto" class="trackable"
                                            href="/equipement_auto/offres/aquitaine/">Equipement Auto</a></li>
                                    <li class=""><a title="Equipement Moto" class="trackable"
                                            href="/equipement_moto/offres/aquitaine/">Equipement Moto</a></li>
                                    <li class=""><a title="Equipement Caravaning" class="trackable"
                                            href="/equipement_caravaning/offres/aquitaine/">Equipement Caravaning</a>
                                    </li>
                                    <li class=""><a title="Equipement Nautisme" class="trackable"
                                            href="/equipement_nautisme/offres/aquitaine/">Equipement Nautisme</a></li>
                                    <li class="_3f3p2"><a title="IMMOBILIER" class="trackable"
                                            href="/_immobilier_/offres/aquitaine/">IMMOBILIER</a></li>
                                    <li class=""><a title="Ventes immobilières" class="trackable"
                                            href="/ventes_immobilieres/offres/aquitaine/">Ventes immobilières</a></li>
                                    <li class=""><a href="https://immobilierneuf.leboncoin.fr" target="_self"
                                            title="Immobilier Neuf" class="trackable">Immobilier Neuf</a></li>
                                    <li class=""><a title="Locations" class="trackable"
                                            href="/locations/offres/aquitaine/">Locations</a></li>
                                    <li class=""><a title="Colocations" class="trackable"
                                            href="/colocations/offres/aquitaine/">Colocations</a></li>
                                    <li class=""><a title="Bureaux &amp; Commerces" class="trackable"
                                            href="/bureaux_commerces/offres/aquitaine/">Bureaux &amp; Commerces</a></li>
                                </ul>
                            </div>
                            <div class="_3UM0h">
                                <ul>
                                    <li class="_3f3p2"><a title="VACANCES" class="trackable"
                                            href="/_vacances_/offres/aquitaine/">VACANCES</a></li>
                                    <li class=""><a title="Locations &amp; Gîtes" class="trackable"
                                            href="/locations_gites/offres/aquitaine/">Locations &amp; Gîtes</a></li>
                                    <li class=""><a title="Chambres d'hôtes" class="trackable"
                                            href="/chambres_d_hotes/offres/aquitaine/">Chambres d'hôtes</a></li>
                                    <li class=""><a title="Campings" class="trackable"
                                            href="/campings/offres/aquitaine/">Campings</a></li>
                                    <li class=""><a title="Hôtels" class="trackable"
                                            href="/hotels/offres/aquitaine/">Hôtels</a></li>
                                    <li class=""><a title="Hébergements insolites" class="trackable"
                                            href="/hebergements_insolites/offres/aquitaine/">Hébergements insolites</a>
                                    </li>
                                    <li class=""><a
                                            href="https://www.locasun-vp.fr/?afiliate=leboncoin&amp;utm_campaign=liencat_locasunvp_leboncoin&amp;utm_source=leboncoin&amp;utm_medium=cpc#ectrans=1"
                                            target="_self" title="Ventes privées vacances" class="trackable">Ventes
                                            privées vacances</a></li>
                                    <li class="_3f3p2"><a title="MAISON" class="trackable"
                                            href="/_maison_/offres/aquitaine/">MAISON</a></li>
                                    <li class=""><a title="Ameublement" class="trackable"
                                            href="/ameublement/offres/aquitaine/">Ameublement</a></li>
                                    <li class=""><a title="Electroménager" class="trackable"
                                            href="/electromenager/offres/aquitaine/">Electroménager</a></li>
                                    <li class=""><a title="Arts de la table" class="trackable"
                                            href="/arts_de_la_table/offres/aquitaine/">Arts de la table</a></li>
                                    <li class=""><a title="Décoration" class="trackable"
                                            href="/decoration/offres/aquitaine/">Décoration</a></li>
                                    <li class=""><a title="Linge de maison" class="trackable"
                                            href="/linge_de_maison/offres/aquitaine/">Linge de maison</a></li>
                                    <li class=""><a title="Bricolage" class="trackable"
                                            href="/bricolage/offres/aquitaine/">Bricolage</a></li>
                                    <li class=""><a title="Jardinage" class="trackable"
                                            href="/jardinage/offres/aquitaine/">Jardinage</a></li>
                                    <li class="_3f3p2"><a title="MODE" class="trackable"
                                            href="/_mode_/offres/aquitaine/">MODE</a></li>
                                    <li class=""><a title="Vêtements" class="trackable"
                                            href="/vetements/offres/aquitaine/">Vêtements</a></li>
                                    <li class=""><a title="Chaussures" class="trackable"
                                            href="/chaussures/offres/aquitaine/">Chaussures</a></li>
                                    <li class=""><a title="Accessoires &amp; Bagagerie" class="trackable"
                                            href="/accessoires_bagagerie/offres/aquitaine/">Accessoires &amp;
                                            Bagagerie</a></li>
                                    <li class=""><a title="Montres &amp; Bijoux" class="trackable"
                                            href="/montres_bijoux/offres/aquitaine/">Montres &amp; Bijoux</a></li>
                                    <li class=""><a title="Equipement bébé" class="trackable"
                                            href="/equipement_bebe/offres/aquitaine/">Equipement bébé</a></li>
                                    <li class=""><a title="Vêtements bébé" class="trackable"
                                            href="/vetements_bebe/offres/aquitaine/">Vêtements bébé</a></li>
                                    <li class=""><a
                                            href="https://www.videdressing.com/femme/c-c5988.html?utm_source=leboncoin.fr&amp;utm_medium=referral&amp;utm_campaign=Test4Default"
                                            target="_self" title="Videdressing" class="trackable">Videdressing</a></li>
                                </ul>
                            </div>
                            <div class="_3UM0h">
                                <ul>
                                    <li class="_3f3p2"><a title="MULTIMEDIA" class="trackable"
                                            href="/_multimedia_/offres/aquitaine/">MULTIMEDIA</a></li>
                                    <li class=""><a title="Informatique" class="trackable"
                                            href="/informatique/offres/aquitaine/">Informatique</a></li>
                                    <li class=""><a title="Consoles &amp; Jeux vidéo" class="trackable"
                                            href="/consoles_jeux_video/offres/aquitaine/">Consoles &amp; Jeux vidéo</a>
                                    </li>
                                    <li class=""><a title="Image &amp; Son" class="trackable"
                                            href="/image_son/offres/aquitaine/">Image &amp; Son</a></li>
                                    <li class=""><a title="Téléphonie" class="trackable"
                                            href="/telephonie/offres/aquitaine/">Téléphonie</a></li>
                                    <li class="_3f3p2"><a title="LOISIRS" class="trackable"
                                            href="/_loisirs_/offres/aquitaine/">LOISIRS</a></li>
                                    <li class=""><a title="DVD / Films" class="trackable"
                                            href="/dvd_films/offres/aquitaine/">DVD / Films</a></li>
                                    <li class=""><a title="CD / Musique" class="trackable"
                                            href="/cd_musique/offres/aquitaine/">CD / Musique</a></li>
                                    <li class=""><a title="Livres" class="trackable"
                                            href="/livres/offres/aquitaine/">Livres</a></li>
                                    <li class=""><a title="Animaux" class="trackable"
                                            href="/animaux/offres/aquitaine/">Animaux</a></li>
                                    <li class=""><a title="Vélos" class="trackable"
                                            href="/velos/offres/aquitaine/">Vélos</a></li>
                                    <li class=""><a title="Sports &amp; Hobbies" class="trackable"
                                            href="/sports_hobbies/offres/aquitaine/">Sports &amp; Hobbies</a></li>
                                    <li class=""><a title="Instruments de musique" class="trackable"
                                            href="/instruments_de_musique/offres/aquitaine/">Instruments de musique</a>
                                    </li>
                                    <li class=""><a title="Collection" class="trackable"
                                            href="/collection/offres/aquitaine/">Collection</a></li>
                                    <li class=""><a title="Jeux &amp; Jouets" class="trackable"
                                            href="/jeux_jouets/offres/aquitaine/">Jeux &amp; Jouets</a></li>
                                    <li class=""><a title="Vins &amp; Gastronomie" class="trackable"
                                            href="/vins_gastronomie/offres/aquitaine/">Vins &amp; Gastronomie</a></li>
                                </ul>
                            </div>
                            <div class="_3UM0h">
                                <ul>
                                    <li class="_3f3p2"><a title="MATERIEL PROFESSIONNEL" class="trackable"
                                            href="/_materiel_professionnel_/offres/aquitaine/">MATERIEL
                                            PROFESSIONNEL</a></li>
                                    <li class=""><a title="Matériel Agricole" class="trackable"
                                            href="/materiel_agricole/offres/aquitaine/">Matériel Agricole</a></li>
                                    <li class=""><a title="Transport - Manutention" class="trackable"
                                            href="/transport_manutention/offres/aquitaine/">Transport - Manutention</a>
                                    </li>
                                    <li class=""><a title="BTP - Chantier Gros-oeuvre" class="trackable"
                                            href="/btp_chantier_gros_oeuvre/offres/aquitaine/">BTP - Chantier
                                            Gros-oeuvre</a></li>
                                    <li class=""><a title="Outillage - Matériaux 2nd-oeuvre" class="trackable"
                                            href="/outillage_materiaux_2nd_oeuvre/offres/aquitaine/">Outillage -
                                            Matériaux 2nd-oeuvre</a></li>
                                    <li class=""><a title="Équipements Industriels" class="trackable"
                                            href="/equipements_industriels/offres/aquitaine/">Équipements
                                            Industriels</a></li>
                                    <li class=""><a title="Restauration - Hôtellerie" class="trackable"
                                            href="/restauration_hotellerie/offres/aquitaine/">Restauration -
                                            Hôtellerie</a></li>
                                    <li class=""><a title="Fournitures de Bureau" class="trackable"
                                            href="/fournitures_de_bureau/offres/aquitaine/">Fournitures de Bureau</a>
                                    </li>
                                    <li class=""><a title="Commerces &amp; Marchés" class="trackable"
                                            href="/commerces_marches/offres/aquitaine/">Commerces &amp; Marchés</a></li>
                                    <li class=""><a title="Matériel Médical" class="trackable"
                                            href="/materiel_medical/offres/aquitaine/">Matériel Médical</a></li>
                                    <li class="_3f3p2"><a title="SERVICES" class="trackable"
                                            href="/_services_/offres/aquitaine/">SERVICES</a></li>
                                    <li class=""><a title="Prestations de services" class="trackable"
                                            href="/prestations_de_services/offres/aquitaine/">Prestations de
                                            services</a></li>
                                    <li class=""><a title="Billetterie" class="trackable"
                                            href="/billetterie/offres/aquitaine/">Billetterie</a></li>
                                    <li class=""><a title="Evénements" class="trackable"
                                            href="/evenements/offres/aquitaine/">Evénements</a></li>
                                    <li class=""><a title="Cours particuliers" class="trackable"
                                            href="/cours_particuliers/offres/aquitaine/">Cours particuliers</a></li>
                                    <li class=""><a title="Covoiturage" class="trackable"
                                            href="/covoiturage/offres/aquitaine/">Covoiturage</a></li>
                                    <li class="_3f3p2"><a title="Autres" class="trackable"
                                            href="/autres/offres/aquitaine/">Autres</a></li>
                                    <li class=""><a title="Autres" class="trackable"
                                            href="/autres/offres/aquitaine/">Autres</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>

    </section>

    <!--Middle Section-->



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
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
<script>

</script>
@yield('after-script')

</html>