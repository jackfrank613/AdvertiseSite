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
                                        <p data-reactid="359"><span class="_2ilNG" data-reactid="360">{{$count}}</span>
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
                                        @foreach($result as $item)
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
                                                            <div class="LazyLoad is-visible" data-reactid="395">
                                                                <img
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
                                                            <p class="_2tubl" data-reactid="401">
                                                            <span itemprop="name"
                                                                    data-qa-id="aditem_title" data-reactid="402">{{$item['subject']}}</span>
                                            
                                                                    </p>
                                                            <div class="_2OJ8g" itemprop="priceSpecification"
                                                                itemscope=""
                                                                itemtype="http://schema.org/PriceSpecification"
                                                                data-qa-id="aditem_price" data-reactid="403">
                                                                <meta itemprop="priceCurrency" content="EUR"
                                                                    data-reactid="404"><span class="_1JRvz"
                                                                    data-reactid="405"><span itemprop="priceCurrency"
                                                                        content="EUR" class="_1NfL7" data-reactid="406">
                                                                        <!-- react-text: 407 -->{{$item['price']}}
                                                                        <!-- /react-text -->
                                                                        <!-- react-text: 408 -->&nbsp;€
                                                                        <!-- /react-text --></span></span></div>
                                                        </div>
                                                        <div data-reactid="409">
                                                            <p class="CZbT3" itemprop="alternateName"
                                                                data-qa-id="aditem_category" content="Voitures"
                                                                data-reactid="410">
                                                                <!-- react-text: 411 -->{{$item['sname']}}
                                                                <!-- /react-text -->
                                                            </p>
                                                            <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                data-qa-id="aditem_location" data-reactid="412">{{$item['adress']}}</p>
                                                                
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
                                         @endforeach
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