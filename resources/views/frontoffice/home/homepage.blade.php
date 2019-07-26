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

    @include('frontoffice.partials.header')
    <!-- /Header -->

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
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Connectez-vous pour retrouver vos favoris</font>
                                    </font>
                                </h1>
                                <div class="_2xBxS">
                                    <div class="_3tqKI">
                                        <div class="_1sEbc"><img
                                                src="//static-rav.leboncoin.fr/0e3b77656afbf2453c54854f82591e3b.png"
                                                alt="Saved Ads"></div>
                                        <div class="_1w6py">
                                            <h2>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Annonces sauvegardées</font>
                                                </font>
                                            </h2>
                                            <p>En naviguant connecté, vous pouvez sauvegarder les annonces qui vous intéressent le plus pour les surveiller. Vous pourrez les retrouver quand vous voulez sur tous vos appareils.</p>
                                        </div>
                                    </div>
                                    <div class="_2eODT">
                                        <div class="_1sEbc"><img
                                                src="//static-rav.leboncoin.fr/57932636817eb6df6d73c423b4183d55.png"
                                                alt="Saved Searches"></div>
                                        <div class="_1w6py">
                                            <h2>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Recherches sauvegardées</font>
                                                </font>
                                            </h2>
                                            <p>Sauvegardez vos recherches pour consulter plus facilement les nouveaux résultats.</p>
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
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Connexion</font>
                                            </font>
                                        </div>
                                        <div>
                                            <div class="_1uVWE">
                                                <form id="loginform" class="_382l8" method="POST"
                                                    action="{{route('homelogin')}}">
                                                    @csrf
                                                    <div><label class="TMFen" for="email">
                                                            <!-- react-text: 36 -->
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Adresse email
                                                                </font>
                                                            </font><!-- /react-text -->
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
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Mot de passe
                                                                        </font>
                                                                    </font><!-- /react-text -->
                                                                </label>
                                                                <div class="_2wuZK">
                                                                    <input type="password" class="_2erBM _2yMsD"
                                                                        data-qa-id="authmodal-password" value=""
                                                                        name="password">

                                                                </div>
                                                            </div><a data-qa-id="link-forgotten-password" class="_-0qA4"
                                                                href="#">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Mot de passe oublié ?</font>
                                                        
                                                                </font>
                                                            </a>
                                                        </div>
                                                    </div><button type="submit" data-qa-id="authmodal-login" style="background-color: #4183d7;
                                                                                                color: white;
                                                                                                width: 100%;
                                                                                                height: 40px;
                                                                                                border-width: inherit;
                                                                                                margin-top:15px;
                                                                                                border-radius: 5px;">
                                                        <!-- react-text: 48 -->
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Se connecter</font>
                                                        </font><!-- /react-text -->
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
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Vous n’avez pas de compte ? </font>
                                                            account ?
                                                       
                                                    </font>
                                                </p><button id="create_account"
                                                    class="_2sNbI _1xIyN GXQkc _2BP2c trackable"
                                                    data-qa-id="create-account" data-toggle="modal"
                                                    data-target="#Regsiter_modal">
                                                    <!-- react-text: 54 -->
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Créer un compte</font>
                                                    </font>
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
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Login to find your favorites</font>
                                </font>
                            </h1>
                            <div class="_2xBxS">
                                <div class="_3tqKI">
                                    <div class="_1sEbc"><img
                                            src="//static-rav.leboncoin.fr/0e3b77656afbf2453c54854f82591e3b.png"
                                            alt="Saved Ads"></div>
                                    <div class="_1w6py">
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Saved Ads</font>
                                            </font>
                                        </h2>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">By browsing connected, you can
                                                    save the ads that interest you most to monitor them. </font>
                                                <font style="vertical-align: inherit;">You can find them whenever you
                                                    want on all your devices.</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="_2eODT">
                                    <div class="_1sEbc"><img
                                            src="//static-rav.leboncoin.fr/57932636817eb6df6d73c423b4183d55.png"
                                            alt="Saved Searches"></div>
                                    <div class="_1w6py">
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Saved Searches</font>
                                            </font>
                                        </h2>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Save your searches for easier
                                                    viewing of new results.</font>
                                            </font>
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


    <!--Dialog-->
    <!-- Home Section -->
    <div id="home" class="banner-area">
        <div class="bg-img overlay" style="background-image:url('img/background.jpg')"></div>

        <!-- Background Image -->

        <!-- /Background Image -->

        <!-- home wrapper -->
        <div class="home-wrapper">
            <section class="_1PTlP" data-reactid="111">
                <div class="_1AsHn _2R_g5" data-reactid="112">
                    <div class="_28iRT" data-reactid="113">
                        <div class="_3wIjM" data-reactid="114">
                            <h1 class="_2LkEH" data-reactid="115">
                                <!-- react-text: 116 -->Trouvez la bonne affaire parmi
                                <!-- /react-text -->
                                <!-- react-text: 117 -->
                                <!-- /react-text --><span data-qa-id="ad_number" data-reactid="118">
                                    <!-- react-text: 119 -->26,470,634
                                    <!-- /react-text -->
                                    <!-- react-text: 120 --> petites annonces
                                    <!-- /react-text --></span><!-- react-text: 121 -->
                                <!-- /react-text -->
                                <!-- react-text: 122 -->sur jamii.
                                <!-- /react-text -->
                            </h1>
                            <div class="_3RviA" data-reactid="123">
                                <div class="cCql2" data-qa-id="button_new_ad" data-reactid="124"><a href="#"
                                        class="_2JQAM _2gtZe _2tJk2 EsTCR _78wR-" data-reactid="125"><span
                                            class="_1oSml _1Cvux wnMxI sMU1c" data-reactid="126"><svg
                                                data-name="Calque 1" viewBox="0 0 24 24" width="1em" height="1em"
                                                data-reactid="127">
                                                <path
                                                    d="M17.33 10.67h-4v-4a1.33 1.33 0 1 0-2.66 0v4h-4a1.33 1.33 0 1 0 0 2.66h4v4a1.33 1.33 0 1 0 2.66 0v-4h4a1.33 1.33 0 1 0 0-2.66z"
                                                    data-reactid="128"></path>
                                                <path
                                                    d="M21.6 0H2.4A2.41 2.41 0 0 0 0 2.4v19.2A2.41 2.41 0 0 0 2.4 24h19.2a2.41 2.41 0 0 0 2.4-2.4V2.4A2.41 2.41 0 0 0 21.6 0zm0 20.4a1.2 1.2 0 0 1-1.2 1.2H3.6a1.2 1.2 0 0 1-1.2-1.2V3.6a1.2 1.2 0 0 1 1.2-1.2h16.8a1.2 1.2 0 0 1 1.2 1.2v16.8z"
                                                    data-reactid="129"></path>
                                            </svg></span><!-- react-text: 130 -->Déposer une annonce
                                        <!-- /react-text --></a></div>
                                <div data-tip="" data-place="bottom" data-qa-id="button_geoloc" data-reactid="131"
                                    currentitem="false">
                                    <div class="_22JTV" data-reactid="132"><button
                                            class="_2JQAM WjL3t _2tJk2 EsTCR _78wR-" type="button"
                                            data-reactid="133"><span class="_1oSml _1Cvux _3-_hz sMU1c"
                                                data-reactid="134"><svg data-name="Calque 1" viewBox="0 0 24 24"
                                                    width="1em" height="1em" data-reactid="135">
                                                    <path
                                                        d="M12 7.64A4.36 4.36 0 1 0 16.36 12 4.36 4.36 0 0 0 12 7.64zm9.75 3.27a9.8 9.8 0 0 0-8.66-8.66V1.09a1.09 1.09 0 1 0-2.18 0v1.16a9.8 9.8 0 0 0-8.66 8.66H1.09a1.09 1.09 0 0 0 0 2.18h1.16a9.8 9.8 0 0 0 8.66 8.66v1.16a1.09 1.09 0 0 0 2.18 0v-1.16a9.8 9.8 0 0 0 8.66-8.66h1.16a1.09 1.09 0 0 0 0-2.18zM12 19.64A7.64 7.64 0 1 1 19.64 12 7.64 7.64 0 0 1 12 19.64z"
                                                        data-reactid="136"></path>
                                                </svg></span><!-- react-text: 137 -->Rechercher autour de moi
                                            <!-- /react-text --></button></div>
                                    <div class="__react_component_tooltip place-top type-dark " data-id="tooltip"
                                        data-reactid="138"></div>
                                </div>
                                <div class="apn-be" data-reactid="139"><span id="be-l" class="teal-apn"
                                        data-reactid="140"></span><span id="be-xl" class="teal-apn"
                                        data-reactid="141"></span></div>
                            </div>
                        </div>
                        <div class="RcaAX" data-reactid="142">
                            <section class="_1ifAE" data-reactid="143">
                                <div class="_2jqYS" data-reactid="144">
                                    <div class="_3kk_Z" data-reactid="145">
                                        
                                    <svg version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 640 700" enable-background="new 0 0 640 700"
                                            xml:space="preserve" data-reactid="146">
                                            <g data-reactid="147"><a title="Alsace" class="trackable" href="#"
                                                    data-reactid="148">
                                                    <g id="alsace" class="_31AQE" data-reactid="149">
                                                        <path d="M540.3,215.4c4.4-4.6,13.2-22.6,13.4-27.6c0.4-8-11-10.8-7.6-15.4
      c2.3-3.2,7.8-2.7,9.1-5.9c1.8-4.1,1.5-8.9,0.8-12.5c-0.8-4.4-10.9-1-13.8-7.1
      c-2-4.4,3-10.7,7.6-9.9c5.2,0.9,5,6.3,13.8,5.3c7.2-0.8,5.6-3.6,9.4-7.6
      c2.7,1.7,7,2.4,11.8,2.3c3.9,0,6.4,1.8,7.2,3.4c0.4,0.7,1.5,3.1-0.5,9.4
      c-1,2.9-2.9,6.6-4.3,9.3c-0.2,0.3-3.9,7.6-6.7,14.4c-1.8,4.3-4,11.8-4.9,16.7
      c-0.9,4.9-0.2,8.6-3.3,17.8c-0.3,1-1.5,4.2-2.4,9.5c-0.7,4-0.3,8.3,2.3,11.6
      c1,1.2,2.7,2.9,2.5,4.3c-0.2,1.4-4.7,3.1-6.7,4.6c-0.8,0.6-6.9,3.1-13.8-0.3
      c-2.1-1.7-4.1-4.2-6.1-6.9c-1.1-1.6,6.1-5,5.2-6.6C550.1,218.5,539.7,215.2,540.3,215.4z" data-reactid="150"></path>
                                                    </g>
                                                </a><a title="Aquitaine" class="trackable" href="#" data-reactid="151">
                                                    <g id="aquitaine" class="_31AQE" data-reactid="152">
                                                        <path d="M179.2,536.8c-6.1-2.9-11.8-6.1-15-9.7c-1.2,1.7-4.1,4.2-5.2,3.9c-1.3-0.3-0.5-4.3-0.4-5
      c0.7-4.9-0.2-7-1.5-7.8c-1.6-1-3.9-0.8-4.9-0.9c-3.8-0.3-6.6-3.6-7.6-5.9c2-0.5,7.1-3.6,10.3-6.8
      c1.7-1.7,2.2-3.9,2.5-5.7c0.3-2,0.1-3.1,1.3-5.3c1-2,2-3.2,2.8-5.1c1.6-4,2.7-10.8,3.5-15
      c0.5-2.3,1.2-6.2,1.8-9.5c0.9-4.9,1.8-9.7,2.4-13.2c1.1-6.4,1.2-7.7,1.7-11.5
      c0.2-1.5,1.4-4.3,2.1-5.3c1.9-2.6,7.4-3.7,7.9-4.2c1.1-1,1.2-3.1,0.6-4.9c-1.4-4.4-5.7-4.6-9.5-3.3
      c2.3-7.8,3-8.4,5-11.4c1.6-3.9,2-10.7,2-14.2c0.1-9.1,0.6-20.6-1.7-24.2c9.5-1.7,15.4,10,16.9,14
      c5.4,14.6,8.8,18.9,10.2,17.8c-1.2-5.7-3.5-15.9-5.2-19.4c10.9-2.2,13.4,7,14.6,8.9
      c1.4,2,5.7,6.5,7.9,5.5c6.6-3,12.9-6.1,18.5-9c2.3-1.2-0.1-9.3,2-10.4c2-1,3.1-2.6,4.6-3.6
      c2.6-1.7,5.2-2.6,7.5-3.7c1.5-0.7-0.2-4.6,1.2-7c1.7-2.9,6.6-4.4,7.8-3.8c0.7,0.3,1.9,0.7,2.6,2.7
      c0.9,2.4,1.3,6.4,2.2,6.8c1.5,0.7,3.2-2.1,5.4-2.5c2.2-0.4,4.8,1.6,6.1,2.6c1.5,1.1,3.9-0.2,5.1,1.1
      c3.9,4.2,5,21.5,4.8,25.8c3,2.5,6.2,3.9,8,5.5c2,1.8,2.2,3.7,2.1,3.8c-2,2.2-3.7,5.9-5.9,9
      c-4.3,6.1-9.3,11.5-10.2,13.5c-1.2,2.4-6.2,1.8-7,3.8c-1.6,3.9-0.5,7.7-0.5,8.6
      c-0.1,2.1-5.2,3.3-5.6,6.3c-0.4,2.9,3.2,10,1.1,12.5c-3.6,4.4-21.4,5.2-26,7.1
      c-1.4,0.6-1.7,2.5-3.2,2.7c-6.5,0.7-10.3,2.7-12.1,4.4c-2.2,2.2-12.3-4.5-13.7-0.9
      c-3.2,7.9,0.8,21,0.5,23.9c4,2.4,8.5,6.2,9.6,11.8c1.3,6-5.2,18.5-10.2,21.6
      c-3.8,2.3-6.6,11.8-6,16.4c-1.4,0.5-2.4,0.7-3.9,0.8c-2,0.1-4.6-0.3-6.9-1c-1.5-0.5-2.8-3.6-3.3-5
      c-0.6-2-2.8-3-4.2-3C186.8,539.5,180,537.2,179.2,536.8z" data-reactid="153"></path>
                                                    </g>
                                                </a><a title="Auvergne" class="trackable" href="#" data-reactid="154">
                                                    <g id="auvergne" class="_31AQE" data-reactid="155">
                                                        <path d="M405.9,308.9c-1.1-2.2-1.6-5.4-2.4-7.8c-0.5-1.4-1.2-2.6-2-2.8c-1.9-0.6-4-0.3-6.2-0.2
      c-2.6,0-5.2-0.1-7.5-0.3c-5.1-0.4-9-1.7-12-3.3c-2.1-1.1-3.4-2.2-4.2-2.8c-1.5,1.9-2.7,2.7-4.3,3.4
      c-2.5,1-10.2-0.2-12,1.9c-1.3,1.6-0.4,5.3-0.6,7.5c-0.2,2.5-0.5,2.5-0.8,2.9c-1.5,3.1-9.9,2-11.3,5
      c-0.8,1.6-1.4,4.6-1.9,6.3c-0.4,1.4-0.6,1.6-1.2,2.2c3.2,3.9,10.4,5.1,12.5,9
      c2,3.6,0.6,8.5,1.1,10.8c2.9,13.1-7.2,8.9-7.8,15.3c-0.8,8.3,6.7,19.8,6.5,24.4
      c-0.2,3-10,4.5-13.9,8.2c-5.2,4.8-4.8,12.7-4.8,15.2c0,3.2-2.4,6.2-3.7,7.9c0.4,2.2,0.9,4.3,1.4,6
      c0.9,3.1,1.2,7.4,1.4,9.5c0.4,4.2,0.4,4.8,1.9,5.4c0.8,0.3,1.8-1,2.9-2c0.8-0.7,1.6-1.2,2.1-1.3
      c1-0.3,2.6-0.8,4.2-1.1c1.8-0.3,3.6-0.3,4.7-0.9c7-3.5,6.9-14.7,9.8-14.4c3.8,0.4,6.8,4.7,8.1,6.8
      c3.6,5.8,4.2,9.2,4.8,10.5c0.6-2.5,2.1-5.6,2.9-6.8c1.6-2.4,3.6-5.4,6.1-6.5
      c0.4-0.2,1.1-0.3,1.5-0.4c0.7-0.2,1.3-0.5,1.9-0.7c1.3-0.4,2.5-1,3.7-1.3c0.5-0.1,1-0.1,1.4-0.1
      c1.7-0.2,3.5,2.6,5.5,4.5c1.1,1.1,2.2,1.5,2.7,1.4c0.6-0.1,1.7-1.7,2.5-2.7c0.4-0.5,0.9-0.7,1-0.7
      c1.1-0.2,4.7,2.9,6.1,3.8c4.7,3,6.9,4,9.2,5.5c-0.2-1.1-0.5-3.2-0.5-3.7c0.9-10,17-5.7,16-15.5
      c-0.6-5.5,15.7-13.4,10.9-13.6c-3.1-0.1-5.8-0.2-8-0.3c-3-0.2,3.3-9.5,0.5-9.4
      c-3.5,0.1-6.8,0.4-9.7,1c-10.7,2.4-12.2,0.1-10.6-9.3c1.6-10-9.2-15.2-10-17.9
      c-3-9.8,2.2-9.2,3.2-15.9c0.7-4.6-2.1-10.8-1.3-12.4c0.7-1.4,4.7-4.6,7.6-4.6
      c0.3-0.8,0.5-1.6,0.9-2.9c0.3-0.9,0.4-2.5,0.1-3.2
      c-0.6-1.6-2.9-3.3-4.8-5C408.2,311.9,406.8,310.5,405.9,308.9z" data-reactid="156"></path>
                                                    </g>
                                                </a><a title="Basse-Normandie" class="trackable" href="#"
                                                    data-reactid="157">
                                                    <g id="basse_normandie" class="_31AQE" data-reactid="158">
                                                        <path d="M272.7,169.4c-1.4-3.2,3.6-6.7,2.3-7.6c-2.9-2.2-6.3-4.7-9.4-6.6c-2.8-1.7-5.1-0.8-6.9-2
      c-4.5-3-2.3-20.9-6-25c-2.6-2.8,0.2-7.7-2.1-10.1c-1.1-1.1-2.3-1.2-3.4-1.9
      c-5.2,5-11.6,9.9-16.2,11.4c-7.4,2.5-20.4-5.9-24.6-7.4c-2.9-1-8.1-2.2-11-0.7
      c-4.5,2.3-4.6,7.2-6.1,6.9c-2.5-0.5-5.4-13.1-6-15.2c-0.7-2.6,4.4-4.6,4.4-7.6
      c0-2-3.1-5.7-5.1-5.5c-1.6,0.2-7.2,2.8-8.2,3.3c-2.3,1.3-7.3-0.4-9.2-1.6c-3.5-2.2-9.4-6.7-9.6-6.2
      c-0.3,0.8,3.4,6.8,5.3,9.4c-0.3,4.5,1.5,11.1,3.5,15.1c1.2,2.8,3.2,4.8,4.7,7.3
      c1.9,3.2,2.2,5.4,2.6,8.1c0.8,5.2-0.1,10.6-0.4,12c-2.3,2.9-3,6.9-1.5,9.6c2.2,4.2,6.7,7.6,8.9,8.6
      c-3.1,1.9-7.1,4.7-9.6,6c-0.2,3.7-0.5,7.1,1.3,8.3c1.3,0.9,7.6-2.6,9.3-3.5c3.5-1.9,6-2.1,7.9-1.9
      c2.9,0.3,4.1,3.3,4.6,3.9c3.2-2.3,18.7-0.9,27.3-1.3c4.9-0.2,2.7-3.5,8.3-3.4
      c4.7,0.1,7,11.3,11.6,11.5c3.1,0.1,5.5-3.3,8.5-3.7c5.7-0.6,5.3,16.4,15.6,13.9
      c3.9-0.9,7-0.8,9.2,0.5c-0.3-2.5-0.6-4.8,0-7
      c0.9-3.1,6.2-4.4,5.9-8.2C278.4,175.3,273.7,171.5,272.7,169.4z" data-reactid="159"></path>
                                                    </g>
                                                </a><a title="Bourgogne" class="trackable" href="#" data-reactid="160">
                                                    <g id="bourgogne" class="_31AQE" data-reactid="161">
                                                        <path d="M371,291.9c0.3-2.3,0.6-4.7,0.5-7.2c-0.1-6.5-2.9-13.6-4.7-18.8
      c-3.8-11.3-2.3-27.2-3.1-33.8c-0.6-5.8,12.4-15,11.3-19.7c-1.3-5.6-5.1-10-6.3-11
      c0.4,0,1.4-0.1,1.7-1.7c0.6-2.7,0.1-7.3,2.4-9.4c0.6-0.5,1-1,1.7-1.3c1.7-0.7,4.1-0.7,6.6-1.2
      c2.5-0.5,6.1-1.2,8.1-2.7c0.3,0.6,0.8,1.4,1.3,2.2c0.5,0.8,1,1.5,1.3,2.6c2,7.8,2.7,11.1,4.8,12.6
      c1.8,1.3,6.1,2.9,7.3,4.4c2.7,3.4,5.3,10.7,7.8,11.3c0.7,0.2,1.4,0.7,2.2,0.1c2.1-1.6,4.2-3,5.9-3.1
      c2.2-0.2,6.4,0.2,9.6-0.3c1-0.1,2.1-0.8,3.1-1c1.8-0.3,3.6,2.1,5.1,2.2c2.9,0.2,5.9-7.1,7.9-7.1
      c2.2,0,5.2,3.2,7.5,8.1c1.6,3.3,2.6,7.4,3.7,11.5c0.3,0.9,0.7,1.6,1,2c0.4,0.6,1-0.4,2.2,0.1
      c3.9,1.6,6.9,7.5,10.7,9.7c1,0.6,2.6-1.3,3.8-4c1.3,1,4.5,5.1,3.4,7.7c-0.3,0.7-0.6,1.6-0.6,2.5
      c0.2,1.7,1.6,3.4,2.6,5.4c0.6,1,1.5,2.5,1.4,4.1c-0.1,2.2-3.6,7.1-4.7,9.3c-0.9,1.7-6.2,10-4.8,13.4
      c0.3,0.7,0.6,1.7,1,2.4c1.6,2.8,4.3,5.3,6.6,7.3c1.6,1.4,0,6.3-0.8,8.9c-0.8,2.5-4.5,10.6-4.3,15
      c-1-0.4-3.2-1.4-5.4-2.3c-1.7-0.6-5.7-3.5-6.8-2.3c-1.6,1.7-4.8,4.2-5.1,4.9c-0.6,1.4-0.8,2.8-1,4.8
      c-0.1,1.2-0.2,3-0.4,4.5c-0.1,1-0.3,2-0.4,2.9c-0.1,0.9-0.4,1.3-0.7,1.9c-0.2,0.4-0.9,1.4-1.6,1.9
      c-0.6,0.5-1.2,0.1-1.6-0.4c-0.1-0.1-0.5-1,0-2.4c0.2-0.6,0.3-1.1,0.4-1.6c0.1-0.4,0.2-0.8,0-1.2
      c-0.2-0.4-0.7-0.1-1.2-0.2c-1.5-0.2-3.4-0.8-4.1-1c-1.2-0.3-2.5-0.6-4.3-0.8c-0.4,0-2.8-0.2-4.1,1.2
      c-0.8,0.9-1.3,2.2-1.8,3.7c-0.4,1-0.8,2.3-1.3,3.3c-0.4,0.8-1.4,1.5-2.1,2.1c-1,0.8-4,2.8-6.2,3.3
      c-1,0.2-2.2,0.6-3.3,0.5c-1.9-0.1-3.1-1-4.4-3c-1-1.5-1.8-3.2-2.9-4.9c-0.7-1.1-1.9-2.2-3.4-2.3
      c0.2-1.4,1.2-2.6,1.1-5.3c0-2.8-5.8-5.2-8.6-10c-2.5-4.2-1.7-11.1-5.8-11.2
      c-3.4,0-11.6,0.4-18.2-1.2C375.2,295.7,370.6,292.2,371,291.9z" data-reactid="162"></path>
                                                    </g>
                                                </a><a title="Bretagne" class="trackable" href="#" data-reactid="163">
                                                    <g id="bretagne" class="_31AQE _20Pcj" data-reactid="164">
                                                        <path d="M154.8,161c1,2.2,0.2,4.7,0.4,6.8c-1,0.8-10.8-0.2-16.5-0.4c-0.6-2.8-2.3-4.1-4.5-4.2
      c-4.5,0-12.3,6.2-15.8,5.7c-2.2-0.3-3.7-2.9-5.8-6.1c-1.7-2.6-3.9-5.6-6.4-7.8
      c-3.7-3.5-10.1-4-12.9-4.3c-4.1-0.4-7.5-0.2-8.9,0.1c-7.6,7.5-9.9,8.6-12.5,8.4
      c-2.3-0.1-5.1-4.6-7.1-4.8c-2.1-0.2-9.6,2.5-11.1,2.6c-6.9,0.5-10.3,1.2-14.1,3.1
      c-3.7,1.8-6.5,4.3-8.3,6.4c-2.2,2.5-1.7,6.1,0,7.8c0.6,0.6,2.1,1.1,4,0.6c2.5-0.6,4.8-2.6,8.2-2.5
      c3.1,0.1,5.1,1.9,5.6,2.6c1,1.4,1,3.3,0.9,4.1c-0.2,2.7-2.7,3.1-5.6,2.7c-2.1-0.3-4.5-1-6.3-1.6
      c-1.5-0.5-2.6-0.5-3.2-0.6c-1.1-0.3-3,4.7-2.1,6.4c0.7,1.3,6.9,0,11.2,0.7c1.1,0.2,2.4,0.7,3.1,1.3
      c0.8,0.7,1,1.7,1.1,2c0.5,1.2-0.5,5.9-3.1,6.2c-1.5,0.2-4.2-1.3-6.5-2.3c-2.1-0.8-3.8-1.1-4.5-0.9
      c-0.9,0.3-0.4,1.4-0.2,1.9c3.8,6.5,9.8,17,12.6,17c2.9,0,5.8-4.5,7.6-8.4c1.1,1.5,2.5,3.4,3.9,3.6
      c2.2,0.3,6-2.3,7.6-1.9c3,0.7,2.7,4.2,5.1,9.1c1,2,4,1.5,5.2,1.6c1.3,0.1,2.7,2.3,4.2,3.8
      c1.1,1,2.4,1.4,3.3,1.5c3.5,0.3,8.7-4.2,11.7-2.9c3,1.3-2.1,11.4-2.5,14.5c-0.4,3.2,2.1,9.4,4.8,8.8
      c1.6-0.3-1.9-3,4.3-11.1c0.9-1.2,5.9-4.7,9.7-2.9c8.6,4.2,15.1,7.3,17.6,9c-0.9,1.8-1.5,4-2,5.4
      c2,0.2,5.9-0.5,10.6-4.6c2.6-2.2,6.7-5.4,9.6-8.3c2.7-2.8,11.7,0.8,14.3-2.3c1.6-2,3.7-6.9,6.8-7.7
      c5.2-1.4,11.7,1.8,12.9-2.1c0.4-1.5,0.5-5.7,2.6-7.6c2.9-2.6,8-3,7.3-5.5
      c-2.5-7.9-5.8-22.1,0.6-26.7c-1.3-1.9-2.2-4.6-7.6-3.9c-4.3,0.6-10,5.6-13.8,5.4
      c-2.5-0.1-1.9-5.5-1.7-8.4c-1.1,0.7-2.4,0.6-3.6,0.4C161.4,170,155.8,162.4,154.8,161z" data-reactid="165"></path>
                                                    </g>
                                                </a><a title="Centre" class="trackable" href="#" data-reactid="166">
                                                    <g id="centre" class="_31AQE" data-reactid="167">
                                                        <path d="M270.3,284.8c1.3,1.1,3.4,8.2,3.9,10.7c1.2,5.1-0.7,8,1.2,9.2
      c7.5,4.9,12.8,10.6,11.9,14.1c2.4,0.9,4.9,1.6,7.5,2.2c2.4,0.5,4-0.9,6.8-1.2
      c2.6-0.4,6.5,0.3,8.8,0.2c3.5-0.1,5.1-3.8,8.3-4.4c4.6-1,10.6,0.9,13.6,1.7c3.3,0.8,5.6,3.3,6.6,3.9
      c1.9-1.3,1.8-7.9,3.8-9.1c3.1-2,7.8-1.5,10.1-3.7c2.5-2.4,0.4-9.3,1.8-10.9
      c1.8-2.1,7.5-1.1,11.4-1.9c3-0.6,4.3-3.1,5.1-3.7c0.3-2.3,0.6-4.7,0.5-7.2
      c-0.1-6.5-2.9-13.6-4.7-18.8c-3.8-11.3-2.3-27.2-3.1-33.8c-0.6-5.8,12.4-15,11.3-19.7
      c-1.3-5.6-5.1-10-6.3-11c-3.9,0.5-7.4-1.1-8.9-0.9c-3.3,0.4-6.3,4.2-9.6,3.5
      c-2-0.5-2.6-2.7-2.9-5.1c-0.4-3.1-0.6-6.6-5-7.7c-5.5-1.2-12,3.5-16.2,2.2
      c-4.8-1.4-4.2-4.3-7.2-9.9c-0.9-1.6-6.8-3.4-7.9-4.3c-3.2-2.5-4.3-11.6-5-14.6
      c-0.9-4-1.4-6.8-2.9-7.8c-1.6-0.7-3.2-1.2-4.8-1.4c-1.1,1.3-2.6,2.8-4.1,4c-6.6,5-8.1,5.2-11.3,5.7
      c-3.4,0.5-6.8-1.7-8.2-2.7c0.1,0.6-2.7,4-2.8,5.7c-0.2,2.5,3,5,4.1,6.8c1.2,2,2.7,4.2,1.8,6.2
      c-1.1,2.7-4.9,4.6-5.7,6.7c-0.9,2.3,0,6.3,0,7c2.2,1.3,3.5,3.8,3.7,7.4c0.2,3.2-4.3,0.9-4.9,4.1
      c-0.6,3,0.4,7-0.4,10.1c-0.7,2.7-3.9,5.5-6.9,8.7c-2.3,2.5-4.1,5.4-7,8.1
      c-3.2,3.1-20.9,2.1-18.8,7.3c2.6,6.6-0.4,13.7-0.9,18.8c-0.5,4.9-0.5,4.9-0.2,7.5
      c-0.8-0.2,2,0,5.4,2.9c3.7,3.2,5.2,8.4,9.9,10.9C256.7,283,267,282,270.3,284.8z" data-reactid="168"></path>
                                                    </g>
                                                </a><a title="Champagne-Ardenne" class="trackable" href="#"
                                                    data-reactid="169">
                                                    <g id="champagne_ardenne" class="_31AQE" data-reactid="170">
                                                        <path d="M387.2,163.5c-2.4-5.5-1.1-5.7,5.7-8.7c2.6-1.1,4.8-3.4,6.7-6.5c1.1-1.8-4.4-6.8-3.5-9.1
      c0.7-1.9,3.1,0,3.8-2c1.3-3.8-3.4-6.2-2.4-10.4c1.6-6.5,15.3-1.7,17.5-7.6c3.3-8.9-4.2-13.9,0.1-17
      c2.5-1.8,5-1.7,6.6-5c1.7-3.6-0.3-9.8,6.9-13.6c1.2,0.8,3.6,1.5,5.9-0.5c2.1-1.9,2.6-3.2,5.8-8.9
      c1.6-2.8,3.8-3.9,5.4-2.5c2.7,2.2-3,9.8-1.2,15.3c1.2,3.7,5.1,5.2,14.5,9.6
      c2.6,1.3,10.1,6.8,12.1,8.4c-0.5,0.6-2.2,2.5-4.3,3.1c-1.5,0.4-4.2-2.5-6-2.2
      c-1.2,0.2-2.4,2.2-3.5,5.1c-0.8,2.1,3.5,6.7,2.7,9.3c-0.7,2.4-2.8,3.6-4.3,5.6c-1,1.3,2,14.3,0,19.2
      c-0.6,1.5-2,1.7-2.9,3c-1.7,2.5,3.1,19,7.4,23.3c1,1,8,3.5,13.8,9.5c1.8,1.9,1.2,5.7,3.1,7.9
      c1.8,2.1,6.6,0,8.5,2.1c3.6,4,1.5,15.2,4.3,19.3c1.8,2.6,4.2,1,6.1,2.6c-1.9,2.5-4.1,5.1-6.3,7.5
      c-1.3,1.4,3.6,9.9,2.3,11.1c-3.8,3.6-12.9,1-13.8,1c-2.4,0-2.1,4.3-5.8,7.6
      c-3,2.7-8.9-11.2-13.5-9.3c-1.7,0.7-2.3-6.8-4.8-12.6c-2.7-6.1-7.2-10.7-9-8.7
      c-1,1.1-2.6,3.8-4.8,5.8c-3.3,3-4.6-3.1-8.5-0.8c-2.1,1.2-7.5,0.2-11.9,0.8
      c-4.2,0.6-4.6,5.1-8.4,2.5c-2.7-1.9-4.1-7.6-7.1-11.1c-2-2.4-6-2.5-8-5.1c-2.9-3.7-2.4-9.2-4.6-13.3
      c-0.5-1-1.2-2-1.6-3c-0.8-2,4.3-11.5,2.8-14.7C390.7,165.9,388.9,167.5,387.2,163.5z" data-reactid="171"></path>
                                                    </g>
                                                </a><a title="Corse" class="trackable" href="#" data-reactid="172">
                                                    <g id="corse" class="_31AQE _2HlCq" data-reactid="173">
                                                        <path d="M560.7,552.2c0,0,10.4,0,7.3-4.4c-3-4.4-11-2.4-4.9-7.7c6.1-5.2,21.2-26.6,31.7-20.5
      c3.5,2.1,6-0.9,3.7-10.5c-2.3-9.6,6.1-7.9,5.8-4.3c-0.2,3.7,0,19.7,0,19.7s4.4,1.1,2.8,12.4
      c-1.6,11.3,6.1,8-0.4,20.4c-6.5,12.3-4.5,22.5-4.6,26c-0.1,3.4-5.9,4.5-6.2,11.7
      c-0.4,7.2-4.5,19.6-6.1,13c-1.6-6.6-2-11.3-7.1-10c-5.1,1.3-15.7,0.2-5-10.8c0,0-9.8-6.9-6.7-15
      c0,0,1.3-1.9-2.1,0c-3.4,2-7.6-3.9-2.4-7.3
      c5.1-3.4-4-5.5-5-5.8C560.6,558.8,558.5,552.3,560.7,552.2z" data-reactid="174"></path>
                                                    </g>
                                                </a><a title="Franche-Comté" class="trackable" href="#"
                                                    data-reactid="175">
                                                    <g id="franche_comte" class="_31AQE" data-reactid="176">
                                                        <path d="M539.9,215.8c-1.9-0.6-10.9-3.4-17.2-7.5c-3,1.4-7.4,3.7-11.1,3.6
      c-3.5-0.1-5.7-3.5-8.9-3c-2.4,0.4-6.6,2.7-7,3.2c-3.3,3.5-6.2,7.2-6.9,7.9
      c-1.7,1.6,4.3,10.1,2.3,11.3c-2.5,1.4-5.3,2.2-8.1,1.7c-1.4-0.3-2.7-0.1-3.6-0.5
      c-3.3-1.4-4.5,1.4-5.1,3.6c3.2,2.9,4.3,6.1,3.2,8.2c-2.2,4.1,5.4,8.8,3.3,12.9
      c-3.4,6.9-7.5,12.2-9.1,18c-1.9,6.9,8.1,12.1,8.3,14.3c0.5,5.8-6.9,18.1-5.8,22.9
      c1.1,4.8,4.7,6.8,6.3,9.9c1.8,3.4,6.9-8.3,8.9-5.5c2,2.8,4.5,3,6.5,4.8c3.3,3.1,10-9.5,14-7.8
      c-0.2-1.1-1.4-5,0.4-9.5c0.7-1.6,2.8-4,4-5.3c2.7-3.2,5.9-7.3,6.8-8.5c1.2-1.5,4.2-7,7.5-11.7
      c3-4.3,6.7-8.6,8.1-10.5c5.5-7.7,14.6-12.4,14.2-16.9c-0.3-2.7-3.5-4-3.3-6.2c0.4-3.7,5-6.4,6.3-7.1
      c-2.1-1.7-4.1-4.2-6.1-6.9c-1.1-1.6,6.1-5,5.2-6.6C549.7,218.8,539.3,215.6,539.9,215.8z" data-reactid="177"></path>
                                                    </g>
                                                </a><a title="Haute-Normandie" class="trackable" href="#"
                                                    data-reactid="178">
                                                    <g id="haute_normandie" class="_31AQE" data-reactid="179">
                                                        <path d="M274.7,162.1c-2.9-2.2-6.3-4.7-9.4-6.6c-2.8-1.7-5.1-0.8-6.9-2c-4.5-3-2.3-20.9-6-25
      c-2.6-2.8,0.2-7.7-2.1-10.1c-1.1-1.1-2.3-1.2-3.4-1.9c-1-0.8-3.9-2.8-3.2-6.7
      c0.6-3.1,3.8-5.6,7.6-8.6c1.7-1.3,6.5-6.7,10.7-8.6c2.6-1.1,8.4-2.1,12.5-2.5c5.1-0.5,12-4.1,17-7.8
      c1.9-1.4,5.3-5.6,6.9-7.6c0.9,0.9,2.8,2.9,5,5c1.8,1.7,3.9,3.5,6.2,5.5c0.8,0.7,1.9,1.6,3.2,2.6
      c0.8,0.6,2,1.2,2.5,2.2c0.4,0.8,0.3,3,0.1,3.9c-0.6,3-2,9.1-2.1,11c0,1-0.3,2.6-0.1,3.5
      c0.2,0.7,1.1,0.8,1.3,1.6c0.3,1,0.6,2,0.7,3.2c0.1,2.1,0.4,6.5,0.5,11.1c0,2.3,0.2,4.6,0.5,6.6
      c-5.7,1.7-10.6,8.8-12,15.5c-0.7,3.5-4.6,5.8-5.6,8.3
      c-0.7,1.7-8.1,8.2-13.1,9.6C279.5,166.3,275.4,162.6,274.7,162.1z" data-reactid="180"></path>
                                                    </g>
                                                </a><a title="Ile-de-France" class="trackable" href="#"
                                                    data-reactid="181">
                                                    <g id="ile_de_france" class="_31AQE _20Pcj" data-reactid="182">
                                                        <path d="M348.1,138.9c4.1,2.8,13.4,8.3,21.2,2.4c4.8-3.6,16.3,16.5,23,13.5
      c-2.3,1.2-5.9,2.2-6.5,3.8c-0.8,2,0.7,4.3,1.1,5.6c0.6,1.8,3.3,3.2,4.2,4.4c1.4,1.9,1.6,3.3,1.3,4.5
      c-1,4.9-3.1,9.7-3.1,11.9c-4.3,3.2-13.5,3.1-15.1,4.1c-5.6,3.5-2,11.1-5,12.1c-3,1-7.7-0.8-9.2-0.8
      c-3.8,0.2-7.2,4.9-10.2,3.4c-4.6-2.4-0.5-10.7-6.9-12.5c-6.5-1.8-12.6,4.1-17.7,1.8
      c-5.2-2.4-3.5-8.3-7.8-11c-3.6-2.2-6.4-1.5-8.2-5.4c-3-6.6-3.1-18.8-6.3-20.1
      c-2-0.8-3.6-1.1-4.5-1.2c0.2-0.4,0.5-1,0.8-1.4c0.9-1.3,3.9-4.2,4.6-5.8c0.7-1.5,0.9-3.3,1.5-4.8
      c0.8-2.2,2-4.1,3-5.7c2.3-3.8,6.4-6,8-6.4
      c0.4,2.1,1.2,3.2,2.5,2.7C323.9,132,334.3,129.7,348.1,138.9z" data-reactid="183"></path>
                                                    </g>
                                                </a><a title="Languedoc-Roussillon" class="trackable" href="#"
                                                    data-reactid="184">
                                                    <g id="languedoc_roussillon" class="_31AQE" data-reactid="185">
                                                        <path d="M429.7,507.9c-5.8-8.2-8.6-6.5-15.5-0.2c-1.1,1-3.6,3.6-6.2,6c-5.5,5.3-12.9,8-17.4,7.2
      c-2.1,1.4-5.9,4.3-11.7,9.8c-2,1.9-3.2,3.3-4.4,6.1c-1,2.3-0.8,3.7,0.6,6.3c1,1.9,1.7,4.9,1.3,9.6
      c-0.2,3.1,1.3,7.8,2.4,11.4c0.5,1.5,2.5,8,2.2,10.9c-0.1,1.3-0.6,2.8-2.1,2.4
      c-2.5-0.5-4-2.6-6.8-3.6c-2.2-0.8-12.1,5.7-14.5,7.2c-1.1,0.7-3.6,2.4-13.5-2.2
      c-2.5-1.1-11.6-0.3-14.2,0.4c-2.6,0.7-9.3,1.5-12.5-3.2c-1.5-2.2-3.4-6.1-4.8-8.3
      c3.2-0.8,18.7-1.2,19.7-5.9c0.7-3.4-9.4-4-10.8-8.5c-3.1-9.8,1.3-11,0.4-17
      c-0.8-5.2-11.5-10.3-12.6-15c-0.5-2,1-5.9,3.7-9c3.6-4,36.9,3.6,40.9-2.6c1.1-1.6-0.3-4.1,0.2-6
      c1.1-3.9,15.1-6.5,17.9-12.8c0.5-1.2,6.2-0.5,8.5-3.3c4.4-5.3,11.3-11.9,10.9-14.8
      c-0.7-5.4-7.3-7.6-10.4-12.8c-2.2-3.6-0.5-10.8-3-14.3c-2.5-3.4-8.5-8.9-7.9-15.1
      c0.4-3.7,5.7-13.2,10-13.8c2.2-0.3,5.3-2.6,8-2.1c2.6,0.4,4.4,4.9,7.2,5.9c1.7,0.6,3-4.1,4.8-3.4
      c1.7,0.7,4.7,3.3,6.4,4.4c3.4,2.1,5.4,2.9,8.3,4.9c0.3,2.2,3.5,13.3,5.3,19c1.2,3.9,1.4,9.1,8.2,9.5
      c1.6,0.1,9.6-1.8,15.8-2.1c1.7-0.1,3.2,0.6,4.4,0.9c0.9,0.2,1.8,0.2,2.2,0.3
      c-1.1-0.1-1.1,11.3,9.8,22.3c-6.1,0.6-14.3,4.9-14.6,15C435.7,499.8,431.3,505.6,429.7,507.9z" data-reactid="186">
                                                        </path>
                                                    </g>
                                                </a><a title="Limousin" class="trackable" href="#" data-reactid="187">
                                                    <g id="limousin" class="_31AQE" data-reactid="188">
                                                        <path d="M338.5,320.8c3.2,3.9,10.4,5.1,12.5,9c2,3.6,0.6,8.5,1.1,10.8c2.9,13.1-7.2,8.9-7.8,15.3
      c-0.8,8.3,6.7,19.8,6.5,24.4c-0.2,3-10,4.5-13.9,8.2c-5.2,4.8-4.8,12.7-4.8,15.2
      c0,3.2-2.4,6.2-3.7,7.9c-0.7-0.2-3-0.4-5.8-0.5c-3.8-0.1-8.2,0.2-9.5-0.5c-2-1-4.1-2.4-6.2-3.6
      c-1.9-1.1-4-2.6-7.3,0.5c0.1-1.5-1.5-4-6.5-6.6c-1.2-0.7-2.4-1.7-3.6-2.6c0-1.3,0-6.7-0.6-11
      c-0.5-3.4-1.1-9.4-3.5-14c-0.2-0.3-0.6-1.1-1.5-1.3c-1-0.3-2.4-0.1-3.6-0.3c-0.7-0.1-1.2-0.8-2-1.3
      c-1.1-0.8-2.4-1.5-3.6-1.6c-0.8-0.1-1.8,0.1-2.8,0.8c-1.2,0.7-2.3,1.8-3.3,1.9
      c-1.3,0-1.6-3.7-2.4-6.4c-0.5-1.7-1.9-3.1-2.8-3.2c0.4-2,0.7-5.7,5.5-8.6c1.3-0.8,4.5-2.5,5.9-5.3
      c1-2.2-0.4-4.9-2.1-7.9c-1.6-2.9-3.8-5.7-3.1-8.2c0.5-1.9,2.6-2.8,4.9-3.9c1.5-0.7,3.1-1.3,4.6-2.2
      c2.5-1.5,4.7-3.3,6-4.8c0.3-0.4,0.7-0.7,1.1-1.2c0.3-0.3,0.6-0.8,0.9-1.3c1.6,0.5,5,1.7,8.3,2.3
      c1.1,0.2,2.3-0.4,3.5-0.8c1.5-0.5,3.1-0.8,4.7-0.7c2.2,0.1,4.4,0.2,6.7,0.3c2.7,0.1,6.1-4.6,8.7-4.6
      c0.7-0.2,1.5-0.2,2.3-0.2c1.3,0,2.6,0.1,3.7,0.3c3.3,0.6,6.3,1.2,8.5,2.1
      c1.8,0.8,3.1,1.8,3.9,2.5C338.1,320.4,338.4,320.7,338.5,320.8z" data-reactid="189"></path>
                                                    </g>
                                                </a><a title="Lorraine" class="trackable" href="#" data-reactid="190">
                                                    <g id="lorraine" class="_31AQE" data-reactid="191">
                                                        <path d="M470.8,104.6c-0.5,0.6-2.2,2.5-4.3,3.1c-1.5,0.4-4.2-2.5-6-2.2c-1.2,0.2-2.4,2.2-3.5,5.1
      c-0.8,2.1,3.5,6.7,2.7,9.3c-0.7,2.4-2.8,3.6-4.3,5.6c-1,1.3,2,14.3,0,19.2c-0.6,1.5-2,1.7-2.9,3
      c-1.7,2.5,3.1,19,7.4,23.3c1,1,8,3.5,13.8,9.5c1.8,1.9,1.2,5.7,3.1,7.9c1.8,2.1,6.6,0,8.5,2.1
      c3.6,4,1.5,15.2,4.3,19.3c1.8,2.6,4.2,1,6.1,2.6c1.9-1.4,4.6-3.6,8-3.7c2.8,0,5,2.7,8.3,3
      c3.5,0.3,8.1-2,11.2-3.6c6.4,4.4,15.8,6.9,17.2,7.5c4.4-4.6,13.2-22.6,13.4-27.6
      c0.4-8-11-10.8-7.6-15.4c2.3-3.2,7.8-2.7,9.1-5.9c1.8-4.1,1.5-8.9,0.8-12.5
      c-0.8-4.4-10.9-1-13.8-7.1c-2-4.4,3-10.7,7.6-9.9c5.2,0.9,5,6.3,13.8,5.3c7.2-0.8,5.6-3.6,9.4-7.6
      c-5.3-2.9-10.4-7.6-12.8-6.4c-4,2-9.4,4.5-14.6,4c-7.2-0.8-12.8-7-14.6-8.9
      c-6.8-7.4-10.2-12.2-15.5-13.2c-4-0.8-11.7,0.6-13.3,0.9c-5.1,1.1-9.7-2.7-12.5-3.3
      c-4.1-0.9-6.9-0.7-8.5,0c-0.9,0.4-1.5,1.3-2.4,1.5C476.5,109.9,473.3,106.2,470.8,104.6z" data-reactid="192"></path>
                                                    </g>
                                                </a><a title="Midi-Pyrénées" class="trackable" href="#"
                                                    data-reactid="193">
                                                    <g id="midi_pyrenees" class="_31AQE" data-reactid="194">
                                                        <path d="M312.4,567.8c3.2-0.8,18.7-1.2,19.7-5.9c0.7-3.4-9.4-4-10.8-8.5c-3.1-9.8,1.3-11,0.4-17
      c-0.8-5.2-11.5-10.3-12.6-15c-0.5-2,1-5.9,3.7-9c3.6-4,36.9,3.6,40.9-2.6c1.1-1.6-0.3-4.1,0.2-6
      c1.1-3.9,15.1-6.5,17.9-12.8c0.5-1.2,6.2-0.5,8.5-3.3c4.4-5.3,11.3-11.9,10.9-14.8
      c-0.7-5.4-7.3-7.6-10.4-12.8c-2.2-3.6-0.5-10.8-3-14.3c-2.5-3.4-8.5-8.9-7.9-15.1
      c0.1-0.7-5.6-16.9-12.8-17.5c-1.8-0.1-2.9,5.4-4.8,9.1c-1.9,3.6-4.6,5.5-6.4,5.7
      c-2.6,0.3-6.4,0.8-8.5,2c-2.1,1.2-2.6,3.2-4.3,2.8c-1.9-0.4-1.4-4.6-2-9.4c-0.5-3.9-2-8.4-2.5-11.5
      c-4.4-1-9.6-0.1-13.8-0.5c-3.6-0.4-8.6-5.7-11.8-5.3c-1.3,0.1-2.3,0.9-3.3,2c-2,2.2-3.7,5.9-5.9,9
      c-4.3,6.1-9.3,11.5-10.2,13.5c-1.2,2.4-6.2,1.8-7,3.8c-1.6,3.9-0.5,7.7-0.5,8.6
      c-0.1,2.1-5.2,3.3-5.6,6.3c-0.4,2.9,3.2,10,1.1,12.5c-3.6,4.4-21.4,5.2-26,7.1
      c-1.4,0.6-1.7,2.5-3.2,2.7c-6.5,0.7-10.3,2.7-12.1,4.4c-2.2,2.2-12.3-4.5-13.7-0.9
      c-3.2,7.9,0.8,21,0.5,23.9c4,2.4,8.5,6.2,9.6,11.8c1.3,6-5.2,18.5-10.2,21.6
      c-3.8,2.3-6.6,11.8-6,16.4c4.7-2.5,7.2-0.6,7.5-0.3c1.8,1.9,3.6,3.9,5.4,6
      c3.1,3.7,11.9,2.9,16.2,2.8c5.1-0.1,10.6,0.1,14.6-1.5c2-0.8,2.1-2.2,3.9-3.4
      c2.1-1.3,5.8-2.3,7.8-2.8c6.1-1.5,11.6,3.8,13.4,5.2
      c8.2,6,12.8,3.7,17.4,4.1C307.3,560,311.5,566.3,312.4,567.8z" data-reactid="195"></path>
                                                    </g>
                                                </a><a title="Nord-Pas-de-Calais" class="trackable" href="#"
                                                    data-reactid="196">
                                                    <g id="nord_pas_de_calais" class="_31AQE" data-reactid="197">
                                                        <path d="M311.6,21.9c0,0,29.5-7.8,34.1-10.1c4.6-2.3,6.6,4.3,6.6,6.9c0,2.7,1,7.6,1.7,7.8
      c0.7,0.2,10.6,7.4,22.1,6.9c0,0,1.6,12.6,6.2,15.2c0,0,4.5-3,6.5,0c1.9,3,6.7,10.4,15.5,10.7
      c8.8,0.4,17.1,1,13.9,5.2c-3.2,4.3-1.5,9,2.3,11.1c1.9,1,3.8,3.9,5.8,6
      c0.3,0.3-8.1,1.1-16.4-0.4C405.6,80.6,403,77,398,77c-6.7-0.1-13.3,5.4-19.1,5
      c-3.7-0.3-0.3-2.7-3.6-3c-7.9-0.7-12.4,2.2-14.1-0.2c-3.3-4.7-9.6-3.7-14.4-4.4
      c-3.5-0.5,2.1-7.6-1.3-8c-5.3-0.6-9.5,2.8-14.2,2.4c-5.8-0.5-4.1-8.9-8.6-8.3
      c-7.3,1-13.8-0.8-14.3-1.4c-2.3-2.9,4.8-7.6,4.6-9.9
      c-0.3-2.3-3.6-3.8-3.6-8.6C309.3,35.9,306.9,36.1,311.6,21.9z" data-reactid="198"></path>
                                                    </g>
                                                </a><a title="Pays de la Loire" class="trackable" href="#"
                                                    data-reactid="199">
                                                    <g id="pays_de_la_loire" class="_31AQE _20Pcj" data-reactid="200">
                                                        <path d="M154.3,255.7c-0.2-0.3-0.9-1.7-2.4-2.7c-1.7-1.1-4.4-1.6-6.3-1.5c-2.4,0.2-5.2,2.5-8,3.2
      c-2.2,0.5-4.3,0.9-6.2,0.9c-2.3,0-4.4-0.4-6.3-0.5c0-1.4,1-7.5,2.1-13.1c2,0.2,5.9-0.5,10.6-4.6
      c2.6-2.2,6.7-5.4,9.6-8.3c2.7-2.8,11.7,0.8,14.3-2.3c1.6-2,3.7-6.9,6.8-7.7
      c5.2-1.4,11.7,1.8,12.9-2.1c0.4-1.5,0.5-5.7,2.6-7.6c2.9-2.6,8-3,7.3-5.5
      c-2.5-7.9-5.8-22.1,0.6-26.7c3.2-2.3,18.7-0.9,27.3-1.3c4.9-0.2,2.7-3.5,8.3-3.4
      c4.7,0.1,7,11.3,11.6,11.5c3.1,0.1,5.5-3.3,8.5-3.7c5.7-0.6,5.3,16.4,15.6,13.9
      c3.9-0.9,7-0.8,9.2,0.5c2.2,1.3,3.5,3.8,3.7,7.4c0.2,3.2-4.3,0.9-4.9,4.1
      c-0.6,3,0.4,7-0.4,10.1c-0.7,2.7-3.9,5.5-6.9,8.7c-2.3,2.5-4.1,5.4-7,8.1
      c-3.2,3.1-20.9,2.1-18.8,7.3c2.6,6.6-0.4,13.7-0.9,18.8c-0.5,4.9-0.5,4.9-0.2,7.5
      c-2.4-0.5-4.9,5.2-7,4.9c-6.1-0.9-9.9-4.4-15.4-4.3c-2.6,0.1-3.3,4.2-6.8,5
      c-6.7,1.6-12.5-0.1-12.2,6.1c0.2,3.9,5.9,11.6,9,18.8c4.3,10,6,19.8,2.8,22.5
      c-1.7,1.5-5.6-0.3-9.8-2.6c-1.6-0.9-4.1,4.8-5.7,3.9c-3.6-2.1-0.8-6.3-4.6-7
      c-4.2-0.8-4.2,4.9-6.4,7c-0.1,0.1-1.5-3.8-4.1-4.3c-1.6-0.3-3.2-0.3-5.1-0.5
      c-2.4-0.2-7.3-2.2-11.1-4.6c-3.4-2.1-5.8-4.6-9.7-7.3c-3.5-2.4-3-11.3-5.7-13.9
      c-2.7-2.5-7.3-3.1-9.4-6.5c-0.7-1.1-1-4.7,0.7-6.6c1-1,2.3-1.9,3.5-2.6c0.6-1.1,2.2-3.2-0.1-6.9
      c-0.7-1.1-4.4-5.8-0.4-9.4c2.4-2.1,7.1-0.8,11.9,0.3C154.2,259.4,155,256.6,154.3,255.7z" data-reactid="201"></path>
                                                    </g>
                                                </a><a title="Picardie" class="trackable" href="#" data-reactid="202">
                                                    <g id="picardie" class="_31AQE" data-reactid="203">
                                                        <path d="M348.5,138.5c4.1,2.8,13.4,8.3,21.2,2.4c4.8-3.6,16.3,16.5,23,13.5
      c2.6-1.1,4.8-3.4,6.7-6.5c1.1-1.8-4.4-6.8-3.5-9.1c0.7-1.9,3.1,0,3.8-2c1.3-3.8-3.4-6.2-2.4-10.4
      c1.6-6.5,15.3-1.7,17.5-7.6c3.3-8.9-4.2-13.9,0.1-17c2.5-1.8,5-1.7,6.6-5c1.7-3.6-0.3-9.8,6.9-13.6
      c-0.7-0.4-1.4-1-2.1-1.8c0.3,0.3-8.1,1.1-16.4-0.4c-4.3-0.8-6.9-4.3-11.9-4.4
      c-6.7-0.1-13.3,5.4-19.1,5c-3.7-0.3-0.3-2.7-3.6-3c-7.9-0.7-12.4,2.2-14.1-0.2
      c-3.3-4.7-9.6-3.7-14.4-4.4c-3.5-0.5,2.1-7.6-1.3-8c-5.3-0.6-9.5,2.8-14.2,2.4
      c-5.8-0.5-4.1-8.9-8.6-8.3c-7.3,1-13.8-0.8-14.3-1.4c1.7,1.8,3.2,9.6,3.2,9.6s-6.8-1.6-12.8,6.1
      c2.1,2.9,8.9,9,16.4,14.9c2.7,2.1-3.9,17.6-1.2,19.6
      c3.9,2.8-0.3,26.5,5.1,24.5C324.3,131.6,334.7,129.3,348.5,138.5z" data-reactid="204"></path>
                                                    </g>
                                                </a><a title="Poitou-Charentes" class="trackable" href="#"
                                                    data-reactid="205">
                                                    <g id="poitou_charentes" class="_31AQE" data-reactid="206">
                                                        <path d="M198.8,385.2c10.9-2.2,13.4,7,14.6,8.9c1.4,2,5.7,6.5,7.9,5.5c6.6-3,12.9-6.1,18.5-9
      c2.3-1.2-0.1-9.3,2-10.4c2-1,3.1-2.6,4.6-3.6c2.6-1.7,5.2-2.6,7.5-3.7c1.5-0.7-0.2-4.6,1.2-7
      c1.7-2.9,6.6-4.4,7.8-3.8c0.1,0.1,0.1-4.7,4.2-7.7c2.3-1.7,7.7-4.3,7.6-8
      c-0.2-4.5-6.2-10.2-5.7-13.9c0.4-3.1,4.6-3.9,8.6-5.9c3.5-1.8,6.7-4.8,8.7-7.2
      c2.2-2.8-2.7-9-11-14.4c-2.4-1.5-1.2-4.5-1.5-7.7c-0.4-4-2.1-8.3-3.6-11.8c-1.6-3.7-13-2.2-18.9-5.2
      c-4.9-2.5-7.8-12.4-15.1-13.8c-2.4-0.5-4.9,5.2-7,4.9c-6.1-0.9-9.9-4.4-15.4-4.3
      c-2.6,0.1-3.3,4.2-6.8,5c-6.7,1.6-12.5-0.1-12.2,6.1c0.2,3.9,5.9,11.6,9,18.8
      c4.3,10,6,19.8,2.8,22.5c-1.7,1.5-5.6-0.3-9.8-2.6c-1.6-0.9-4.1,4.8-5.7,3.9c-3.6-2.1-0.8-6.3-4.6-7
      c-4.2-0.8-4.2,4.9-6.4,7c-0.4,0.4-3.8,9.1,2.8,16.1c2.8,3-1.5,11.3-4.6,15.1
      c-1.3,1.6-2.3,4.3-1.5,7.7c0.3,1.5,1.3,3.6,2.9,3.8
      c2.4,0.4,4.4,1.2,5.7,1.8C193,368.5,199.7,387.1,198.8,385.2z" data-reactid="207"></path>
                                                    </g>
                                                </a><a title="Provence-Alpes-Côte d'Azur" class="trackable" href="#"
                                                    data-reactid="208">
                                                    <g id="provence_alpes_cote_d_azur" class="_31AQE _20Pcj"
                                                        data-reactid="209">
                                                        <path d="M429.3,507.9c2.2,1,1.9,2.6,14.5,2.1c2.5-0.1,4.8,0.7,6.9,2c1.2,0.7,4.2,2.9,7,3.3
      c3.1,0.4,6.4,0,9.6,0.4c4.7,0.5,9.6,0.9,13.8,2.9c2.3,1.1,5.1,2.9,7.1,4.3c4.3,2.8,10.8,3,14.4,3.4
      c3.6,0.5,4.2,3.6,7.1,5.7c1.9,1.3,3.6-0.9,6-2.6c1.5-1.1,3.7-1.9,5.1-1.7c3.8,0.6,7.2,4.2,13.9-2.9
      c3.3-3.5,9.1,0.5,17.9-4.3c-8.6-3.2-3-9.5-2.6-10.1c1-1.4,3.9-4.4,8-7c1.2-0.7,2.4-1.6,3.9-2.3
      c1-0.5,3.9-1.1,5.8-2.1c2.6-1.4,4.7-3.2,6.3-7.8c0.7-2.2,2.3-2.1,5.1-2.5c3.6-0.6,7.6-2.3,9.9-4.8
      c1.6-1.8,2.1-3.9,1.9-6.5c-0.1-1.3,0.6-4.9,1.2-6.9c0.6-2.1,2.1-5.4,3.7-8.1
      c-0.6-0.8-2.6-3.3-5.3-4.3c-3.8-1.5-4,4.9-15.6,1.4c-7.9-2.4-15.8-9.4-21.2-18.2
      c-3-4.9,0.6-9.5,4-14.8c8.8-13.8-13.5-15.9-15.2-25.5c-1.3,0-2.6-0.2-4-0.7
      c-14.1-5-18.2-1.2-19.2,0.1c-2.3,2.9,10.9,9.4,7.5,13.1c-2.2,2.3-10.1-0.8-12.4,1.8
      c-7.7,8.7-14.8,16.3-20.3,22c-2,2-4.8,2.4-6.7,3.1c-2.5,0.8-3.6,1.7-0.9,2.6
      c9,2.8,10.7,13.1,11.8,15.3c4.5,8.8-14.9,4.4-20.2,3.9c-3.6-0.3-1.3-8.2-4.3-9
      c-4.9-1.2-11.1,5.3-13.5,6.1c-1.9,0.7-3.6-3.6-5.5-4.3c-1.4-0.5-2.9-0.5-4.4-0.6
      c-1.1-0.1-1.1,11.3,9.8,22.3c-6.1,0.6-14.3,4.9-14.6,15C435.4,499.8,430.9,505.6,429.3,507.9z" data-reactid="210">
                                                        </path>
                                                    </g>
                                                </a><a title="Rhône-Alpes" class="trackable" href="#"
                                                    data-reactid="211">
                                                    <g id="rhone_alpes" class="_31AQE" data-reactid="212">
                                                        <path d="M475.1,312.3c1.1,4.8,4.7,6.8,6.3,9.9c1.8,3.4,6.9-8.3,8.9-5.5c2,2.8,4.5,3,6.5,4.8
      c3.3,3.1,10-9.5,14-7.8c0,0.5,0.2,1.4,0.5,2.1c0.8,1.6,3.8,2.8,0.9,6.1c-5.9,6.8-4.7,8.6,0.4,9.6
      c7.6,1.4,10.5-8.7,10.2-12.6c2-2.1,7.2-4.6,8-4.8c4.4-1.1,5.1-1.1,11.4,0.4c1.5,8.4,4.5,15,6.1,17.9
      c0.8,1.4,9.6,8.3,9.6,8.3s-3.3,2.7-4.9,5c-5.2,7.4-0.2,16.8,5,21.2c4.8,4.1,5.5,10.2,5.2,13.1
      c-0.6,7-6.9,11.2-11.5,13.5c-6.7,3.4-8.3,5.5-8.6,6.9c-1.3,0-2.6-0.2-4-0.7
      c-14.1-5-18.2-1.2-19.2,0.1c-2.3,2.9,10.9,9.4,7.5,13.1c-2.2,2.3-10.1-0.8-12.4,1.8
      c-7.7,8.7-14.8,16.3-20.3,22c-2,2-4.8,2.4-6.7,3.1c-2.5,0.8-3.6,1.7-0.9,2.6
      c9,2.8,10.7,13.1,11.8,15.3c4.5,8.8-14.9,4.4-20.2,3.9c-3.6-0.3-1.3-8.2-4.3-9
      c-4.9-1.2-11.1,5.3-13.5,6.1c-1.9,0.7-3.6-3.6-5.5-4.3c-2.3-0.9-5.2-0.2-7.5-1.1
      c-5.5-2.2-14.8,1.6-19.3,1.5c-2.1-0.1-5.5-0.8-6.5-4.2c-3.1-10.1-7.7-24.8-7.4-28
      c0.9-10,17-5.7,16-15.5c-0.6-5.5,15.7-13.4,10.9-13.6c-3.1-0.1-5.8-0.2-8-0.3
      c-3-0.2,3.3-9.5,0.5-9.4c-3.5,0.1-6.8,0.4-9.7,1c-10.7,2.4-12.2,0.1-10.6-9.3
      c1.6-10-9.2-15.2-10-17.9c-3-9.8,2.2-9.2,3.2-15.9c0.7-4.6-2.1-10.8-1.3-12.4
      c0.9-1.8,6.7-6.1,9.4-4.1c3.2,2.4,4,8,7.5,9.4c4.3,1.7,12.1-3.9,12.9-5.2c1.4-2.2,1.9-5.9,3.4-7.4
      c3.2-3.2,10.8,1,13.1,0.6c2-0.3-1.9,5.6,1.1,6c0.9,0.1,1.4-1,2-1.7c2.1-2.6,1-12.4,2.9-14.7
      c1.7-2,3.3-2.8,4.6-4.4c1.2-1.4,3.5,0.5,6.1,1.6C471.6,310.7,474.9,311.6,475.1,312.3z" data-reactid="213"></path>
                                                    </g>
                                                </a><a title="Guadeloupe" class="trackable" href="#" data-reactid="214">
                                                    <g id="guadeloupe" class="_31AQE _2HlCq" data-reactid="215">
                                                        <path
                                                            d="M132.6,689.9c2.7,2.5,3.2-2.1,3.2-2.1C135.4,684.4,129.9,687.5,132.6,689.9z"
                                                            data-reactid="216"></path>
                                                        <path
                                                            d="M198.3,636.8c3.7,2.3,9-3.4,9.3-5.2C207.5,631.5,194.6,634.4,198.3,636.8z"
                                                            data-reactid="217"></path>
                                                        <path d="M179.2,671.9c0,0-9.9,5.9-10,9.8
        c-0.1,3.9,7.1,7.9,12.4,2.4C187,678.6,179.2,671.9,179.2,671.9z" data-reactid="218"></path>
                                                        <path
                                                            d="M140.4,686.1c0,0-1.6-0.7-1.8,1c-0.2,1.8,2.3,3,2.7,1C141.6,686.2,140.4,686.1,140.4,686.1z"
                                                            data-reactid="219"></path>
                                                        <path d="M167.9,632.9c-4.6,2.2-7.3-5.4-6.1-10.6c1.2-5.2-6.8-12.1-6.8-12.1s-16.1,10.1-4.4,16.6
        c0,0-9.8-0.8-6.2,7.6c1.6,3.7-10,4.8-10-2.9c0,0-6,6.8-12.3-4.6c0,0-9.4,6-5.2,16.6
        c4.1,10.6,4.3,19.7,4.5,23.6c0.2,3.9,3.5,2.4,6.2,11.2c0,0,16.9-6.2,16-17.7
        c-1-11.5-7.4-12.9-2.2-16.4c5.2-3.5,6,2.9,11,3.2c5,0.4,8.4,0,12.1-4.6c3.7-4.6,7.1,0,8.3,1.4
        c0,0,9.5-3.8,14-2.6c0,0-7.1-3.5-10.3-6.7C173.3,631.8,172.5,630.7,167.9,632.9z" data-reactid="220"></path>
                                                    </g>
                                                </a><a title="Martinique" class="trackable" href="#" data-reactid="221">
                                                    <g id="martinique" class="_31AQE _2HlCq" data-reactid="222">
                                                        <path d="M237.8,612.9c0,0-9.8,10.8,1.8,18.6c5.7,3.8-1.6,8.2,5.5,14.8
      c7.1,6.6,14.6,10.2,12.1,16.6c-2.6,6.4-2.6,13.9,5.3,17.9c0,0-1.6-8.6,7.9-3.8c0,0,4.6-5.5,4.6,1.3
      c0,0,7.1-4.2,12.2,2.6c0,0,6-0.7,3.1,4.2c-2.9,4.9,2.7,5.6,2.7,5.6s5.3-13.4,7.7-14.7
      c2.4-1.3-9-13-6.8-16.6c1.3-2-2.2,0.9-4.2-0.7c-2-1.6,1.8-2.7,1.1-4.6c-0.7-1.8-5.3-1.1-4.2-4.6
      c1.1-3.5,0.5-4.8-2.7-2c-3.3,2.7-10.2-7.7,4-6.8c0,0-14.6-4.9-8-7.5c6.6-2.6,3.8,2.9,7.1-0.4
      c3.3-3.3,5.5-5.5,0.2-4.4c-5.3,1.1-10.4,5.1-13.7-0.5s-17.4-19.7-34.9-15" data-reactid="223"></path>
                                                    </g>
                                                </a><a title="Guyane" class="trackable" href="#" data-reactid="224">
                                                    <g id="guyane" class="_31AQE _2HlCq" data-reactid="225">
                                                        <path d="M349.7,621.3c0,0,0.4,5.1-4.4,7.9c-4.8,2.7-6.9,9.9-5.8,13.3c1.1,3.5,2.4,4.6,2.2,8.8
      c-0.2,4.2,11.2,10,9.9,13.1c-1.3,3.1-2.7,1.5-4,6c-1.3,4.6-2,10.2-5.9,12.8
      c-3.8,2.6,2.9,3.3,5.7,4.8c2.7,1.5,2.9,2.2,5.7-1.6c2.7-3.8,6.2-2,8.4-0.9c2.2,1.1,9.3,5.8,12.4,3.7
      c3.1-2.1,8.2-6.1,7.7-12c-0.5-5.8,9.9-21.2,13.9-24.9c4-3.7-8-12.6-12.4-12.8
      c-4.4-0.2-9-11-11.3-11.2c-2.4-0.2-9,0.4-12.6-2.7C355.3,622.6,351.3,620,349.7,621.3z" data-reactid="226"></path>
                                                    </g>
                                                </a><a title="Réunion" class="trackable" href="#" data-reactid="227">
                                                    <g id="reunion" class="_31AQE _2HlCq" data-reactid="228">
                                                        <path d="M437.1,648.7c0,0-7.3,1.1,0,9.7c7.3,8.6,2.7,11.7,6,15.5c3.3,3.8,9,2.9,13.5,6.4
      c4.6,3.5,15.1,10.6,27.4,7.3c2.7-0.7,13,1.6,12.4-4c-0.5-5.7,1.3-13.1,2.4-15
      c1.1-2,3.9-4.9-4.6-10.9c-3.3-2.3-0.9-5.5-6.9-9c-6-3.5,4.6-8.6-10.4-14.8c-15-6.2-23.4-2.6-26.9,0
      c-3.5,2.6-8.6,4.6-9.1,8.8C440.4,646.9,437.1,648.7,437.1,648.7z" data-reactid="229"></path>
                                                    </g>
                                                </a>
                                                <path fill="none" stroke="#1E357D" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    d=" M426,81.8c-2.1-2.2-4-5-5.8-6c-3.8-2.1-5.5-6.8-2.3-11.1c3.2-4.3-5.1-4.9-13.9-5.2 c-8.8-0.4-13.5-7.7-15.5-10.7c-2-3-6.5,0-6.5,0c-4.6-2.7-6.2-15.2-6.2-15.2 c-11.5,0.5-21.3-6.7-22.1-6.9c-0.7-0.2-1.7-5.1-1.7-7.8c0-2.7-1.9-9.3-6.6-6.9 c-4.6,2.3-34.1,10.1-34.1,10.1c-4.7,14.2-2.3,14-2.2,18.8c0.1,4.8,3.4,6.3,3.6,8.6 c0.3,2.3-6.8,6.9-4.6,9.9c1.7,1.8,3.2,9.6,3.2,9.6s-6.8-1.6-12.8,6.1 c2.1,2.9,8.9,9,16.4,14.9c2.7,2.1-3.9,17.6-1.2,19.6c3.9,2.8-0.3,26.5,5.1,24.5 c4.9-1.8,15.4-4.1,29.2,5.1c4.1,2.8,13.4,8.3,21.2,2.4c4.8-3.6,16.3,16.5,23,13.5 c2.6-1.1,4.8-3.4,6.7-6.5c1.1-1.8-4.4-6.8-3.5-9.1c0.7-1.9,3.1,0,3.8-2 c1.3-3.8-3.4-6.2-2.4-10.4c1.6-6.5,15.3-1.7,17.5-7.6c3.3-8.9-4.2-13.9,0.1-17 c2.5-1.8,5-1.7,6.6-5c1.7-3.6-0.3-9.8,6.9-13.6 C427.4,83.2,426.7,82.6,426,81.8z"
                                                    data-reactid="230"></path>
                                                <path fill="none" stroke="#1E357D" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    d=" M592,141c-0.8-1.6-3.3-3.4-7.2-3.4c-4.8,0-9.1-0.7-11.8-2.3 c-5.3-2.9-10.4-7.6-12.8-6.4c-4,2-9.4,4.5-14.6,4c-7.2-0.8-12.8-7-14.6-8.9 c-6.8-7.4-10.2-12.2-15.5-13.2c-4-0.8-11.7,0.6-13.3,0.9c-5.1,1.1-9.7-2.7-12.5-3.3 c-4.1-0.9-6.9-0.7-8.5,0c-0.9,0.4-1.5,1.3-2.4,1.5c-2.6,0.6-5.8-3.2-8.3-4.7 c-2.1-1.6-9.5-7.1-12.1-8.4c-9.3-4.4-13.3-5.9-14.5-9.6c-1.8-5.6,3.9-13.1,1.2-15.3 c-1.6-1.4-3.9-0.3-5.4,2.5c-3.2,5.7-3.7,7-5.8,8.9c-2.3,2.1-4.7,1.3-5.9,0.5 c-7.2,3.8-5.2,10-6.9,13.6c-1.6,3.3-4.1,3.2-6.6,5c-4.3,3.1,3.2,8.1-0.1,17 c-2.2,5.9-15.8,1.1-17.5,7.6c-1.1,4.2,3.7,6.6,2.4,10.4c-0.7,2-3.1,0.1-3.8,2 c-0.9,2.3,4.6,7.3,3.5,9.1c-1.9,3.1-4.1,5.3-6.7,6.5c-6.8,2.9-8,3.2-5.7,8.7 c1.7,3.9,3.5,2.3,5.7,7c1.4,3.1-3.7,12.7-2.8,14.7c0.4,1,1.1,2,1.6,3 c2.2,4.1,1.7,9.5,4.6,13.3c2,2.7,6,2.7,8,5.1c3,3.5,4.4,9.2,7.1,11.1 c3.8,2.7,4.2-1.8,8.4-2.5c4.4-0.7,9.8,0.4,11.9-0.8c3.9-2.3,5.2,3.8,8.5,0.8 c2.3-2.1,3.9-4.8,4.8-5.8c1.8-2,6.4,2.5,9,8.7c2.5,5.8,3.2,13.3,4.8,12.6 c4.6-1.8,10.5,12,13.5,9.3c3.7-3.3,3.4-7.6,5.8-7.6c0.9,0,10,2.6,13.8-1 c1.3-1.2-3.7-9.7-2.3-11.1c2.2-2.3,4.4-4.9,6.3-7.5c1.9-1.4,4.6-3.6,8-3.7 c2.8,0,5,2.7,8.3,3c3.5,0.3,8.1-2,11.2-3.6c6.4,4.4,15.8,6.9,17.2,7.5 c0,0,0,0,0,0c0.5,0.1,10,3.3,13.1,8.6c0.9,1.6-6.3,5.1-5.2,6.6 c1.9,2.7,4,5.2,6.1,6.9c6.9,3.4,13,0.9,13.8,0.3c2-1.4,6.5-3.1,6.7-4.6 c0.2-1.4-1.6-3-2.5-4.3c-2.6-3.3-3-7.6-2.3-11.6c0.9-5.2,2.1-8.5,2.4-9.5 c3.2-9.1,2.4-12.8,3.3-17.8c0.9-4.9,3.1-12.3,4.9-16.7c2.8-6.8,6.5-14.1,6.7-14.4 c1.4-2.7,3.3-6.4,4.3-9.3C593.5,144.1,592.3,141.7,592,141z"
                                                    data-reactid="231"></path>
                                                <path fill="none" stroke="#1E357D" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    d=" M450.7,454c-0.5-0.1-1.3,0-2.2-0.3c-1.3-0.3-2.7-1-4.4-0.9 c-6.2,0.3-14.2,2.2-15.8,2.1c-6.8-0.4-6.9-5.5-8.2-9.5c-1.8-5.8-5-16.8-5.3-19 c-3-2-5-2.8-8.3-4.9c-1.7-1.1-4.8-3.7-6.4-4.4c-1.7-0.7-3.1,4-4.8,3.4 c-2.8-1-4.7-5.5-7.2-5.9c-2.7-0.5-5.9,1.8-8,2.1c-4.2,0.7-9.6,10.1-10,13.8 c0.1-0.7-5.6-16.9-12.8-17.5c-1.8-0.1-2.9,5.4-4.8,9.1c-1.9,3.6-4.6,5.5-6.4,5.7 c-2.6,0.3-6.4,0.8-8.5,2c-2.1,1.2-2.6,3.2-4.3,2.8c-1.9-0.4-1.4-4.6-2-9.4 c-0.5-3.9-2-8.4-2.5-11.5c-4.4-1-9.6-0.1-13.8-0.5c-3.6-0.4-8.6-5.7-11.8-5.3 c-1.3,0.1-2.3,0.9-3.3,2c-2,2.2-3.7,5.9-5.9,9c-4.3,6.1-9.3,11.5-10.2,13.5 c-1.2,2.4-6.2,1.8-7,3.8c-1.6,3.9-0.5,7.7-0.5,8.6c-0.1,2.1-5.2,3.3-5.6,6.3 c-0.4,2.9,3.2,10,1.1,12.5c-3.6,4.4-21.4,5.2-26,7.1c-1.4,0.6-1.7,2.5-3.2,2.7 c-6.5,0.7-10.3,2.7-12.1,4.4c-2.2,2.2-12.3-4.5-13.7-0.9c-3.2,7.9,0.8,21,0.5,23.9 c4,2.4,8.5,6.2,9.6,11.8c1.3,6-5.2,18.5-10.2,21.6c-3.8,2.3-6.6,11.8-6,16.4 c4.7-2.5,7.2-0.6,7.5-0.3c1.8,1.9,3.6,3.9,5.4,6c3.1,3.7,11.9,2.9,16.2,2.8 c5.1-0.1,10.6,0.1,14.6-1.5c2-0.8,2.1-2.2,3.9-3.4c2.1-1.3,5.8-2.3,7.8-2.8 c6.1-1.5,11.6,3.8,13.4,5.2c8.2,6,12.8,3.7,17.4,4.1c10.3,0.9,14.5,7.3,15.5,8.8 c1.4,2.2,3.3,6.1,4.8,8.3c3.1,4.7,9.9,3.9,12.5,3.2c2.6-0.7,11.7-1.5,14.2-0.4 c9.9,4.6,12.4,2.9,13.5,2.2c2.4-1.5,12.3-8,14.5-7.2c2.9,1,4.3,3.1,6.8,3.6 c1.5,0.3,2-1.2,2.1-2.4c0.3-2.9-1.8-9.3-2.2-10.9c-1.1-3.5-2.7-8.2-2.4-11.4 c0.4-4.7-0.2-7.6-1.3-9.6c-1.5-2.7-1.6-4.1-0.6-6.3c1.2-2.8,2.5-4.2,4.4-6.1 c5.7-5.5,9.5-8.5,11.7-9.8c4.4,0.7,11.8-1.9,17.4-7.2c2.6-2.5,5.1-5,6.2-6 c6.8-6.4,9.7-8,15.5,0.2c1.6-2.3,6.1-8.1,16.6-16.5 c0.4-10.1,8.5-14.4,14.6-15C449.6,465.3,449.6,454,450.7,454z"
                                                    data-reactid="232"></path>
                                                <path fill="none" stroke="#1E357D" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    d=" M315.9,124.5c-0.1-4.6-0.3-8.9-0.5-11.1c-0.1-1.2-0.4-2.2-0.7-3.2 c-0.2-0.7-1.1-0.8-1.3-1.6c-0.3-0.9,0-2.4,0.1-3.5c0.1-1.9,1.5-8,2.1-11 c0.2-0.9,0.3-3.1-0.1-3.9c-0.5-1-1.6-1.6-2.5-2.2c-1.3-1-2.4-1.9-3.2-2.6 c-2.3-2-4.4-3.8-6.2-5.5c-2.2-2.1-4.1-4.1-5-5c-1.7,2-5.1,6.2-6.9,7.6 c-4.9,3.7-11.9,7.3-17,7.8c-4.2,0.4-9.9,1.4-12.5,2.5c-4.2,1.8-9.1,7.2-10.7,8.6 c-3.8,3-7.1,5.5-7.6,8.6c-0.7,3.9,2.2,5.9,3.2,6.7c-5.2,5-11.6,9.9-16.2,11.4 c-7.4,2.5-20.4-5.9-24.6-7.4c-2.9-1-8.1-2.2-11-0.7c-4.5,2.3-4.6,7.2-6.1,6.9 c-2.5-0.5-5.4-13.1-6-15.2c-0.7-2.6,4.4-4.6,4.4-7.6c0-2-3.1-5.7-5.1-5.5 c-1.6,0.2-7.2,2.8-8.2,3.3c-2.3,1.3-7.3-0.4-9.2-1.6c-3.5-2.2-9.4-6.7-9.6-6.2 c-0.3,0.8,3.4,6.8,5.3,9.4c-0.3,4.5,1.5,11.1,3.5,15.1c1.2,2.8,3.2,4.8,4.7,7.3 c1.9,3.2,2.2,5.4,2.6,8.1c0.8,5.2-0.1,10.6-0.4,12c-2.3,2.9-3,6.9-1.5,9.6 c2.2,4.2,6.7,7.6,8.9,8.6c-3.1,1.9-7.1,4.7-9.6,6c-0.2,3.7-0.5,7.1,1.3,8.3 c1.3,0.9,7.6-2.6,9.3-3.5c3.5-1.9,6-2.1,7.9-1.9c2.9,0.3,4.1,3.3,4.6,3.9 c3.2-2.3,18.7-0.9,27.3-1.3c4.9-0.2,2.7-3.5,8.3-3.4c4.7,0.1,7,11.3,11.6,11.5 c3.1,0.1,5.5-3.3,8.5-3.7c5.7-0.6,5.3,16.4,15.6,13.9c3.9-0.9,7-0.8,9.2,0.5 c-0.3-2.5-0.6-4.8,0-7c0.9-3.1,6.2-4.4,5.9-8.2c-0.2-3.9-5-7.7-5.9-9.8 c-1.4-3.2,3.6-6.7,2.3-7.6c0.7,0.5,4.7,4.2,11,2.4c5-1.4,12.4-7.9,13.1-9.6 c1-2.5,4.9-4.8,5.6-8.3 c1.4-6.7,6.3-13.8,12-15.5C316.1,129.1,315.9,126.8,315.9,124.5z"
                                                    data-reactid="233"></path>
                                                <path fill="none" stroke="#1E357D" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    d=" M548,245.2c0.4-3.7,5-6.4,6.3-7.1c-2.1-1.7-4.1-4.2-6.1-6.9c-1.1-1.6,6.1-5,5.2-6.6 c-3.3-5.6-13.6-8.8-13.1-8.6c-1.9-0.6-10.9-3.4-17.2-7.5c-3,1.4-7.4,3.7-11.1,3.6 c-3.5-0.1-5.7-3.5-8.9-3c-2.4,0.4-6.6,2.7-7,3.2c-3.3,3.5-6.2,7.2-6.9,7.9 c-1.7,1.6,4.3,10.1,2.3,11.3c-2.5,1.4-5.3,2.2-8.1,1.7c-1.4-0.3-2.7-0.1-3.6-0.5 c-3.3-1.4-4.5,1.4-5.1,3.6c-1.3,2.7-2.9,4.6-3.8,4c-3.8-2.2-6.9-8.1-10.7-9.7 c-1.2-0.5-1.8,0.6-2.2-0.1c-0.3-0.4-0.7-1.1-1-2c-1.2-4.1-2.2-8.2-3.7-11.5 c-2.3-4.9-5.4-8.2-7.5-8.1c-2.1,0-5,7.3-7.9,7.1c-1.5-0.1-3.3-2.4-5.1-2.2 c-1,0.2-2.1,0.9-3.1,1c-3.2,0.4-7.5,0.1-9.6,0.3c-1.7,0.1-3.8,1.6-5.9,3.1 c-0.8,0.6-1.5,0.1-2.2-0.1c-2.6-0.7-5.1-7.9-7.8-11.3c-1.1-1.4-5.5-3.1-7.3-4.4 c-2.1-1.4-2.8-4.8-4.8-12.6c-0.3-1.1-0.8-1.8-1.3-2.6c-0.5-0.8-1-1.7-1.3-2.2 c-2,1.5-5.5,2.2-8.1,2.7c-2.5,0.5-4.9,0.5-6.6,1.2c-0.7,0.3-1.2,0.8-1.7,1.3 c-2.3,2.2-1.8,6.7-2.4,9.4c-0.4,1.6-1.3,1.6-1.7,1.7c1.2,1,5,5.3,6.3,11 c1.1,4.7-12,13.9-11.3,19.7c0.7,6.6-0.7,22.5,3.1,33.8c1.7,5.2,4.6,12.3,4.7,18.8 c0,2.5-0.2,5-0.5,7.2c-0.4,0.3,4.2,3.8,10.4,5.3c6.5,1.6,14.8,1.2,18.2,1.2 c4.1,0,3.3,7,5.8,11.2c2.8,4.8,8.6,7.2,8.6,10c0,2.8-1,4-1.1,5.3 c1.5,0,2.7,1.2,3.4,2.3c1.1,1.7,1.9,3.4,2.9,4.9c1.3,2,2.5,2.9,4.4,3 c1.2,0.1,2.3-0.3,3.3-0.5c2.2-0.5,5.2-2.5,6.2-3.3c0.7-0.5,1.7-1.3,2.1-2.1 c0.5-1,1-2.3,1.3-3.3c0.6-1.5,1-2.9,1.8-3.7c1.3-1.4,3.7-1.3,4.1-1.2 c1.8,0.2,3.1,0.5,4.3,0.8c0.7,0.2,2.5,0.8,4.1,1c0.5,0.1,1-0.1,1.2,0.2 c0.2,0.3,0.1,0.8,0,1.2c-0.1,0.5-0.2,1.1-0.4,1.6c-0.4,1.4-0.1,2.3,0,2.4 c0.4,0.5,1,0.9,1.6,0.4c0.7-0.5,1.4-1.5,1.6-1.9c0.3-0.6,0.6-1,0.7-1.9 c0.1-1,0.3-2,0.4-2.9c0.2-1.5,0.2-3.3,0.4-4.5c0.2-2,0.4-3.4,1-4.8 c0.3-0.7,3.5-3.2,5.1-4.9c1.1-1.2,5,1.7,6.8,2.3c2.2,0.8,4.4,1.8,5.4,2.3 c0-0.1,0-0.1,0-0.2c0,0.2,0,0.3,0.1,0.5c1.1,4.8,4.7,6.8,6.3,9.9 c1.8,3.4,6.9-8.3,8.9-5.5c2,2.8,4.5,3,6.5,4.8c3.3,3.1,10-9.5,14-7.8 c-0.2-1.1-1.4-5,0.4-9.5c0.7-1.6,2.8-4,4-5.3c2.7-3.2,5.9-7.3,6.8-8.5 c1.2-1.5,4.2-7,7.5-11.7c3-4.3,6.7-8.6,8.1-10.5 c5.5-7.7,14.6-12.4,14.2-16.9C551,248.7,547.7,247.4,548,245.2z"
                                                    data-reactid="234"></path>
                                                <path fill="none" stroke="#1E357D" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    d=" M557.5,367.1c-5.2-4.4-10.2-13.8-5-21.2c1.6-2.3,4.9-5,4.9-5s-8.8-6.9-9.6-8.3 c-1.6-2.9-4.6-9.5-6.1-17.9c-6.3-1.5-7-1.6-11.4-0.4c-0.8,0.2-6,2.7-8,4.8 c0.2,3.9-2.6,14-10.2,12.6c-5-0.9-6.2-2.8-0.4-9.6c2.8-3.3-0.2-4.4-0.9-6.1 c-0.3-0.7-0.6-1.6-0.5-2.1c-4-1.7-10.7,10.9-14,7.8c-2-1.9-4.5-2-6.5-4.8 c-2-2.8-7.1,8.9-8.9,5.5c-1.6-3.1-5.3-5.1-6.3-9.9c-0.1-0.7-3.4-1.6-6.5-3 c-2.6-1.2-4.9-3.1-6.1-1.6c-1.4,1.6-3,2.4-4.6,4.4c-1.8,2.3-0.8,12.1-2.9,14.7 c-0.6,0.7-1.1,1.9-2,1.7c-3-0.4,0.9-6.3-1.1-6c-2.3,0.3-10-3.9-13.1-0.6 c-1.5,1.6-2,5.2-3.4,7.4c-0.8,1.3-8.6,6.9-12.9,5.2c-3.4-1.3-4.3-7-7.5-9.4 c-0.5-0.4-1.1-0.5-1.8-0.5c0.3-0.8,0.5-1.6,0.9-2.9c0.3-0.9,0.4-2.5,0.1-3.2 c-0.6-1.6-2.9-3.3-4.8-5c-1.6-1.5-3-2.8-3.8-4.5c-1.1-2.2-1.6-5.4-2.4-7.8 c-0.5-1.4-1.2-2.6-2-2.8c-1.9-0.6-4-0.3-6.2-0.2c-2.6,0-5.2-0.1-7.5-0.3 c-5.1-0.4-9-1.7-12-3.3c-2.1-1.1-3.4-2.2-4.2-2.8c-1.5,1.9-2.7,2.7-4.3,3.4 c-2.5,1-10.2-0.2-12,1.9c-1.3,1.6-0.4,5.3-0.6,7.5c-0.2,2.5-0.5,2.5-0.8,2.9 c-1.5,3.1-9.9,2-11.3,5c-0.8,1.6-1.4,4.6-1.9,6.3c-0.4,1.4-0.6,1.6-1.2,2.2 c3.2,3.9,10.4,5.1,12.5,9c2,3.6,0.6,8.5,1.1,10.8c2.9,13.1-7.2,8.9-7.8,15.3 c-0.8,8.3,6.7,19.8,6.5,24.4c-0.2,3-10,4.5-13.9,8.2c-5.2,4.8-4.8,12.7-4.8,15.2 c0,3.2-2.4,6.2-3.7,7.9c0.4,2.2,0.9,4.3,1.4,6c0.9,3.1,1.2,7.4,1.4,9.5 c0.4,4.2,0.4,4.8,1.9,5.4c0.8,0.3,1.8-1,2.9-2c0.8-0.7,1.6-1.2,2.1-1.3 c1-0.3,2.6-0.8,4.2-1.1c1.8-0.3,3.6-0.3,4.7-0.9c7-3.5,6.9-14.7,9.8-14.4 c3.8,0.4,6.8,4.7,8.1,6.8c3.6,5.8,4.2,9.2,4.8,10.5c0.6-2.5,2.1-5.6,2.9-6.8 c1.6-2.4,3.6-5.4,6.1-6.5c0.4-0.2,1.1-0.3,1.5-0.4c0.7-0.2,1.3-0.5,1.9-0.7 c1.3-0.4,2.5-1,3.7-1.3c0.5-0.1,1-0.1,1.4-0.1c1.7-0.2,3.5,2.6,5.5,4.5 c1.1,1.1,2.2,1.5,2.7,1.4c0.6-0.1,1.7-1.7,2.5-2.7c0.4-0.5,0.9-0.7,1-0.7 c1.1-0.2,4.7,2.9,6.1,3.8c4.7,3,6.9,4,9.2,5.5c0,0,0,0,0-0.1 c1.2,5.8,4.5,16.5,7,24.4c1,3.4,4.4,4.1,6.5,4.2c4.6,0.2,13.8-3.6,19.3-1.5 c2.3,0.9,5.2,0.2,7.5,1.1c1.9,0.7,3.5,5,5.5,4.3c2.4-0.9,8.5-7.3,13.5-6.1 c3,0.7,0.6,8.6,4.3,9c5.3,0.5,24.7,4.9,20.2-3.9c-1.1-2.2-2.8-12.5-11.8-15.3 c-2.7-0.8-1.6-1.7,0.9-2.6c1.9-0.7,4.7-1,6.7-3.1c5.5-5.7,12.6-13.3,20.3-22 c2.3-2.6,10.2,0.5,12.4-1.8c3.4-3.7-9.8-10.2-7.5-13.1c1.1-1.3,5.2-5.2,19.2-0.1 c1.3,0.5,2.7,0.7,4,0.7c0.3-1.5,1.8-3.6,8.6-6.9 c4.6-2.3,10.9-6.5,11.5-13.5C562.9,377.3,562.3,371.1,557.5,367.1z"
                                                    data-reactid="235"></path>
                                                <path fill="none" stroke="#1E357D" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    d=" M299.9,407.9c3.3-3.1,5.5-1.6,7.3-0.5c2.1,1.2,4.2,2.6,6.2,3.6 c1.3,0.7,5.7,0.4,9.5,0.5c2.9,0,5.1,0.3,5.8,0.5c1.3-1.7,3.7-4.7,3.7-7.9 c0-2.5-0.4-10.4,4.8-15.2c3.9-3.6,13.7-5.1,13.9-8.2c0.3-4.6-7.3-16.1-6.5-24.4 c0.6-6.5,10.7-2.2,7.8-15.3c-0.5-2.3,0.8-7.2-1.1-10.8c-2.1-3.9-9.3-5.1-12.5-9 c-0.1-0.1-0.4-0.3-1.1-0.9c-0.8-0.7-2.1-1.7-3.9-2.5c-2.2-1-5.2-1.6-8.5-2.1 c-1.1-0.2-2.4-0.4-3.7-0.3c-0.8,0-1.6,0-2.3,0.2c-2.6-0.1-6,4.7-8.7,4.6 c-2.3-0.1-4.5-0.2-6.7-0.3c-1.6-0.1-3.2,0.2-4.7,0.7c-1.2,0.4-2.4,0.9-3.5,0.8 c-3.4-0.6-6.7-1.8-8.3-2.3c0,0,0,0,0,0c1.2-3-3.7-8.8-11.3-13.7 c-2.4-1.5-1.2-4.5-1.5-7.7c-0.4-4-2.1-8.3-3.6-11.8c-1.6-3.7-13-2.2-18.9-5.2 c-4.9-2.5-7.8-12.4-15.1-13.8c-2.4-0.5-4.9,5.2-7,4.9c-6.1-0.9-9.9-4.4-15.4-4.3 c-2.6,0.1-3.3,4.2-6.8,5c-6.7,1.6-12.5-0.1-12.2,6.1c0.2,3.9,5.9,11.6,9,18.8 c4.3,10,6,19.8,2.8,22.5c-1.7,1.5-5.6-0.3-9.8-2.6c-1.6-0.9-4.1,4.8-5.7,3.9 c-3.6-2.1-0.8-6.3-4.6-7c-4.2-0.8-4.2,4.9-6.4,7c-0.4,0.4-3.8,9.1,2.8,16.1 c2.8,3-1.5,11.3-4.6,15.1c-1.3,1.6-2.3,4.3-1.5,7.7c0.3,1.5,1.3,3.6,2.9,3.8 c2.4,0.4,4.4,1.2,5.7,1.8c6.5,2.9,12.6,18.2,13.1,19.8c0,0,0,0-0.1,0 c1.7,3.6,4,13.7,5.2,19.4c-1.5,1.1-4.8-3.2-10.2-17.8c-1.5-4-7.5-15.8-16.9-14 c2.3,3.6,1.8,15.1,1.7,24.2c0,3.4-0.4,10.2-2,14.2c-2,3-2.7,3.5-5,11.4 c3.8-1.3,8.1-1.1,9.5,3.3c0.6,1.8,0.5,3.8-0.6,4.9c-0.5,0.5-6,1.6-7.9,4.2 c-0.7,1-2,3.8-2.1,5.3c-0.4,3.8-0.5,5.1-1.7,11.5c-0.6,3.6-1.5,8.3-2.4,13.2 c-0.6,3.3-1.4,7.2-1.8,9.5c-0.8,4.2-1.9,11-3.5,15c-0.8,1.9-1.8,3.1-2.8,5.1 c-1.1,2.2-1,3.3-1.3,5.3c-0.2,1.8-0.8,4-2.5,5.7c-3.3,3.2-8.3,6.3-10.3,6.8 c1,2.3,3.8,5.5,7.6,5.9c1,0.1,3.3-0.1,4.9,0.9c1.3,0.8,2.3,2.9,1.5,7.8 c-0.1,0.7-0.9,4.7,0.4,5c1,0.2,4-2.2,5.2-3.9c3.2,3.6,9,6.8,15,9.7 c0.8,0.4,7.6,2.7,13.3,2.9c1.4,0.1,3.6,1.1,4.2,3c0.5,1.5,1.7,4.6,3.3,5 c2.3,0.7,4.9,1.1,6.9,1c1.5-0.1,2.4-0.3,3.9-0.8c-0.6-4.6,2.2-14.1,6-16.4 c5-3.1,11.5-15.6,10.2-21.6c-1.2-5.6-5.7-9.4-9.6-11.8c0.3-2.9-3.7-16-0.5-23.9 c1.5-3.6,11.5,3.1,13.7,0.9c1.7-1.7,5.6-3.7,12.1-4.4c1.5-0.2,1.8-2.1,3.2-2.7 c4.6-1.9,22.4-2.7,26-7.1c2-2.5-1.5-9.6-1.1-12.5c0.4-2.9,5.5-4.2,5.6-6.3 c0-0.9-1.1-4.8,0.5-8.6c0.8-2,5.9-1.4,7-3.8c1-2,6-7.4,10.2-13.5 c2.2-3.1,3.9-6.8,5.9-9"
                                                    data-reactid="236"></path>
                                            </g>
                                        </svg>
                                    
                                    </div>
                                </div>
                                <div class="_2lehD _11PoU" data-reactid="237">
                                    <div class="_11AC0" data-reactid="238">
                                        <ul data-reactid="239">
                                            <li data-reactid="240"><a title="Alsace" data-map="Alsace"
                                                    class="_3mctU trackable" href="#" data-reactid="241">Alsace</a></li>
                                            <li data-reactid="242"><a title="Aquitaine" data-map="Aquitaine"
                                                    class="_3mctU trackable" href="#" data-reactid="243">Aquitaine</a>
                                            </li>
                                            <li data-reactid="244"><a title="Auvergne" data-map="Auvergne"
                                                    class="_3mctU trackable" href="#" data-reactid="245">Auvergne</a>
                                            </li>
                                            <li data-reactid="246"><a title="Basse-Normandie" data-map="Basse-Normandie"
                                                    class="_3mctU trackable" href="#"
                                                    data-reactid="247">Basse-Normandie</a></li>
                                            <li data-reactid="248"><a title="Bourgogne" data-map="Bourgogne"
                                                    class="_3mctU trackable" href="#" data-reactid="249">Bourgogne</a>
                                            </li>
                                            <li data-reactid="250"><a title="Bretagne" data-map="Bretagne"
                                                    class="_3mctU trackable" href="#" data-reactid="251">Bretagne</a>
                                            </li>
                                            <li data-reactid="252"><a title="Centre" data-map="Centre"
                                                    class="_3mctU trackable" href="#" data-reactid="253">Centre</a></li>
                                            <li data-reactid="254"><a title="Champagne-Ardenne"
                                                    data-map="Champagne-Ardenne" class="_3mctU trackable" href="#"
                                                    data-reactid="255">Champagne-Ardenne</a></li>
                                            <li data-reactid="256"><a title="Corse" data-map="Corse"
                                                    class="_3mctU trackable" href="#" data-reactid="257">Corse</a></li>
                                            <li data-reactid="258"><a title="Franche-Comté" data-map="Franche-Comté"
                                                    class="_3mctU trackable" href="#"
                                                    data-reactid="259">Franche-Comté</a></li>
                                            <li data-reactid="260"><a title="Haute-Normandie" data-map="Haute-Normandie"
                                                    class="_3mctU trackable" href="#"
                                                    data-reactid="261">Haute-Normandie</a></li>
                                            <li data-reactid="262"><a title="Ile-de-France" data-map="Ile-de-France"
                                                    class="_3mctU trackable" href="#"
                                                    data-reactid="263">Ile-de-France</a></li>
                                            <li data-reactid="264"><a title="Languedoc-Roussillon"
                                                    data-map="Languedoc-Roussillon" class="_3mctU trackable" href="#"
                                                    data-reactid="265">Languedoc-Roussillon</a></li>
                                            <li data-reactid="266"><a title="Limousin" data-map="Limousin"
                                                    class="_3mctU trackable" href="#" data-reactid="267">Limousin</a>
                                            </li>
                                            <li data-reactid="268"><a title="Lorraine" data-map="Lorraine"
                                                    class="_3mctU trackable" href="#" data-reactid="269">Lorraine</a>
                                            </li>
                                            <li data-reactid="270"><a title="Midi-Pyrénées" data-map="Midi-Pyrénées"
                                                    class="_3mctU trackable" href="#"
                                                    data-reactid="271">Midi-Pyrénées</a></li>
                                            <li data-reactid="272"><a title="Nord-Pas-de-Calais"
                                                    data-map="Nord-Pas-de-Calais" class="_3mctU trackable" href="#"
                                                    data-reactid="273">Nord-Pas-de-Calais</a></li>
                                            <li data-reactid="274"><a title="Pays de la Loire"
                                                    data-map="Pays de la Loire" class="_3mctU trackable" href="#"
                                                    data-reactid="275">Pays de
                                                    la Loire</a></li>
                                            <li data-reactid="276"><a title="Picardie" data-map="Picardie"
                                                    class="_3mctU trackable" href="#" data-reactid="277">Picardie</a>
                                            </li>
                                            <li data-reactid="278"><a title="Poitou-Charentes"
                                                    data-map="Poitou-Charentes" class="_3mctU trackable" href="#"
                                                    data-reactid="279">Poitou-Charentes</a></li>
                                            <li data-reactid="280"><a title="Provence-Alpes-Côte d'Azur"
                                                    data-map="Provence-Alpes-Côte d'Azur" class="_3mctU trackable"
                                                    href="#" data-reactid="281">Provence-Alpes-Côte d'Azur</a></li>
                                            <li class="mbs" data-reactid="282"><a title="Rhône-Alpes"
                                                    data-map="Rhône-Alpes" class="_3mctU trackable" href="#"
                                                    data-reactid="283">Rhône-Alpes</a></li>
                                            <li data-reactid="284"><a title="Guadeloupe" data-map="Guadeloupe"
                                                    class="_3mctU trackable" href="#" data-reactid="285">Guadeloupe</a>
                                            </li>
                                            <li data-reactid="286"><a title="Martinique" data-map="Martinique"
                                                    class="_3mctU trackable" href="#" data-reactid="287">Martinique</a>
                                            </li>
                                            <li data-reactid="288"><a title="Guyane" data-map="Guyane"
                                                    class="_3mctU trackable" href="#" data-reactid="289">Guyane</a></li>
                                            <li data-reactid="290"><a title="Réunion" data-map="Réunion"
                                                    class="_3mctU trackable" href="#" data-reactid="291">Réunion</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="WPCRw" data-reactid="292">
                        <div class="_1O5cr" data-reactid="293">
                            <div class="_1etKl" data-reactid="294">
                                <div class="_26tGy" data-reactid="295"><span class="_1vK7W _2jG3V"
                                        name="chevrondown"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                            focusable="false">
                                            <path
                                                d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                            </path>
                                        </svg></span></div>
                                <div class="_2gTTZ" data-reactid="297"><select data-reactid="298">
                                        <option value="" data-reactid="299">Choisissez une région</option>
                                        <option value="1" data-region="Alsace" data-reactid="300">Alsace</option>
                                        <option value="2" data-region="Aquitaine" data-reactid="301">Aquitaine</option>
                                        <option value="3" data-region="Auvergne" data-reactid="302">Auvergne</option>
                                        <option value="4" data-region="Basse-Normandie" data-reactid="303">
                                            Basse-Normandie</option>
                                        <option value="5" data-region="Bourgogne" data-reactid="304">Bourgogne</option>
                                        <option value="6" data-region="Bretagne" data-reactid="305">Bretagne</option>
                                        <option value="7" data-region="Centre" data-reactid="306">Centre</option>
                                        <option value="8" data-region="Champagne-Ardenne" data-reactid="307">
                                            Champagne-Ardenne</option>
                                        <option value="9" data-region="Corse" data-reactid="308">Corse</option>
                                        <option value="10" data-region="Franche-Comté" data-reactid="309">Franche-Comté
                                        </option>
                                        <option value="11" data-region="Haute-Normandie" data-reactid="310">
                                            Haute-Normandie</option>
                                        <option value="12" data-region="Ile-de-France" data-reactid="311">Ile-de-France
                                        </option>
                                        <option value="13" data-region="Languedoc-Roussillon" data-reactid="312">
                                            Languedoc-Roussillon</option>
                                        <option value="14" data-region="Limousin" data-reactid="313">Limousin</option>
                                        <option value="15" data-region="Lorraine" data-reactid="314">Lorraine</option>
                                        <option value="16" data-region="Midi-Pyrénées" data-reactid="315">Midi-Pyrénées
                                        </option>
                                        <option value="17" data-region="Nord-Pas-de-Calais" data-reactid="316">
                                            Nord-Pas-de-Calais</option>
                                        <option value="18" data-region="Pays de la Loire" data-reactid="317">Pays de la
                                            Loire</option>
                                        <option value="19" data-region="Picardie" data-reactid="318">Picardie</option>
                                        <option value="20" data-region="Poitou-Charentes" data-reactid="319">
                                            Poitou-Charentes</option>
                                        <option value="21" data-region="Provence-Alpes-Côte d'Azur" data-reactid="320">
                                            Provence-Alpes-Côte d'Azur</option>
                                        <option value="22" data-region="Rhône-Alpes" data-reactid="321">Rhône-Alpes
                                        </option>
                                        <option value="23" data-region="Guadeloupe" data-reactid="322">Guadeloupe
                                        </option>
                                        <option value="24" data-region="Martinique" data-reactid="323">Martinique
                                        </option>
                                        <option value="25" data-region="Guyane" data-reactid="324">Guyane</option>
                                        <option value="26" data-region="Réunion" data-reactid="325">Réunion</option>
                                    </select></div>
                            </div>
                        </div>
                    </div>
                    <div class="apn-be" data-reactid="326"><span id="be-s" class="teal-apn"
                            data-reactid="327"></span><span id="be-m" class="teal-apn" data-reactid="328"></span></div>
                    <div class="_2Hpd9" data-reactid="329">
                        <p class="_25gYq" data-reactid="330">Jamii est le site référent de petites annonces de
                            particulier à particulier et professionnels en France. Découvrez nos annonces voitures
                            d’occasion, motos, immobilier, emploi, location de vacances, vêtements, électroménager,
                            jouets, déco, meubles, etc. Déposez une annonce gratuite en toute simplicité pour vendre,
                            donner vos biens ou promouvoir vos services. Avec des milliers de nouvelles annonces mises
                            en ligne chaque jour vous trouverez l’objet d’occasion ou neuf que vous désirez.</p>

                    </div>
                    <div class="apn-comp" data-reactid="333"><span id="comp-s" class="teal-apn"
                            data-reactid="334"></span><span id="comp-m" class="teal-apn" data-reactid="335"></span><span
                            id="comp-l" class="teal-apn" data-reactid="336"></span><span id="comp-xl" class="teal-apn"
                            data-reactid="337"></span></div>
                </div>
            </section>

        </div>
        <!-- /home wrapper -->

    </div>
    <!-- /Home Section -->

    <!--Middle Section-->
    <div class="_11PoU" data-reactid="338">
        <section class="_33mha" data-reactid="339">
            <div class="_1AsHn _1YhkB" data-reactid="340">
                <div class="_3UM0h" data-reactid="341">
                    <ul data-reactid="342">
                        <li class="_3f3p2" data-reactid="343"><a title="EMPLOI" class="trackable" href="#"
                                data-reactid="344">EMPLOI</a></li>
                        <li class="" data-reactid="345"><a title="Offres d'emploi" class="trackable" href="#"
                                data-reactid="346">Offres d'emploi</a></li>
                        <li class="" data-reactid="347"><a href="https://go.onelink.me/3471221858/bcf737d8"
                                target="_self" title="Offres d'emploi Cadres" class="trackable"
                                data-reactid="348">Offres d'emploi Cadres</a></li>
                        <li class="_3f3p2" data-reactid="349"><a title="VEHICULES" class="trackable" href="#"
                                data-reactid="350">VEHICULES</a></li>
                        <li class="" data-reactid="351"><a title="Voitures" class="trackable"
                                href="{{route('production')}}" data-reactid="352">Voitures</a></li>
                        <li class="" data-reactid="353"><a title="Motos" class="trackable" href="/motos/offres/"
                                data-reactid="354">Motos</a></li>
                        <li class="" data-reactid="355"><a title="Caravaning" class="trackable" href="#"
                                data-reactid="356">Caravaning</a></li>
                        <li class="" data-reactid="357"><a title="Utilitaires" class="trackable" href="#"
                                data-reactid="358">Utilitaires</a></li>
                        <li class="" data-reactid="359"><a href="#" target="_self" title="Camions" class="trackable"
                                data-reactid="360">Camions</a></li>
                        <li class="" data-reactid="361"><a title="Nautisme" class="trackable" href="#"
                                data-reactid="362">Nautisme</a></li>
                        <li class="" data-reactid="363"><a title="Equipement Auto" class="trackable" href="#"
                                data-reactid="364">Equipement Auto</a></li>
                        <li class="" data-reactid="365"><a title="Equipement Moto" class="trackable" href="#"
                                data-reactid="366">Equipement Moto</a></li>
                        <li class="" data-reactid="367"><a title="Equipement Caravaning" class="trackable" href="#"
                                data-reactid="368">Equipement Caravaning</a></li>
                        <li class="" data-reactid="369"><a title="Equipement Nautisme" class="trackable" href="#"
                                data-reactid="370">Equipement Nautisme</a></li>
                        <li class="_3f3p2" data-reactid="371"><a title="IMMOBILIER" class="trackable" href="#"
                                data-reactid="372">IMMOBILIER</a></li>
                        <li class="" data-reactid="373"><a title="Ventes immobilières" class="trackable" href="#"
                                data-reactid="374">Ventes immobilières</a></li>
                        <li class="" data-reactid="375"><a href="#" target="_self" title="Immobilier Neuf"
                                class="trackable" data-reactid="376">Immobilier Neuf</a></li>
                        <li class="" data-reactid="377"><a title="Locations" class="trackable" href="#"
                                data-reactid="378">Locations</a></li>
                        <li class="" data-reactid="379"><a title="Colocations" class="trackable" href="#"
                                data-reactid="380">Colocations</a></li>
                        <li class="" data-reactid="381"><a title="Bureaux &amp; Commerces" class="trackable" href="#"
                                data-reactid="382">Bureaux &amp; Commerces</a></li>
                    </ul>
                </div>
                <div class="_3UM0h" data-reactid="383">
                    <ul data-reactid="384">
                        <li class="_3f3p2" data-reactid="385"><a title="VACANCES" class="trackable" href="#"
                                data-reactid="386">VACANCES</a></li>
                        <li class="" data-reactid="387"><a title="Locations &amp; Gîtes" class="trackable" href="#"
                                data-reactid="388">Locations &amp; Gîtes</a></li>
                        <li class="" data-reactid="389"><a title="Chambres d'hôtes" class="trackable" href="#"
                                data-reactid="390">Chambres d'hôtes</a></li>
                        <li class="" data-reactid="391"><a title="Campings" class="trackable" href="#"
                                data-reactid="392">Campings</a></li>
                        <li class="" data-reactid="393"><a title="Hôtels" class="trackable" href="#"
                                data-reactid="394">Hôtels</a></li>
                        <li class="" data-reactid="395"><a title="Hébergements insolites" class="trackable" href="#"
                                data-reactid="396">Hébergements insolites</a>
                        </li>
                        <li class="" data-reactid="397"><a href="#" target="_self" title="Ventes privées vacances"
                                class="trackable" data-reactid="398">Ventes privées vacances</a></li>
                        <li class="_3f3p2" data-reactid="399"><a title="MAISON" class="trackable" href="#"
                                data-reactid="400">MAISON</a></li>
                        <li class="" data-reactid="401"><a title="Ameublement" class="trackable" href="#"
                                data-reactid="402">Ameublement</a></li>
                        <li class="" data-reactid="403"><a title="Electroménager" class="trackable" href="#"
                                data-reactid="404">Electroménager</a></li>
                        <li class="" data-reactid="405"><a title="Arts de la table" class="trackable" href="#"
                                data-reactid="406">Arts de la table</a></li>
                        <li class="" data-reactid="407"><a title="Décoration" class="trackable" href="#"
                                data-reactid="408">Décoration</a></li>
                        <li class="" data-reactid="409"><a title="Linge de maison" class="trackable" href="#"
                                data-reactid="410">Linge de maison</a></li>
                        <li class="" data-reactid="411"><a title="Bricolage" class="trackable" href="#"
                                data-reactid="412">Bricolage</a></li>
                        <li class="" data-reactid="413"><a title="Jardinage" class="trackable" href="#"
                                data-reactid="414">Jardinage</a></li>
                        <li class="_3f3p2" data-reactid="415"><a title="MODE" class="trackable" href="#"
                                data-reactid="416">MODE</a></li>
                        <li class="" data-reactid="417"><a title="Vêtements" class="trackable" href="#"
                                data-reactid="418">Vêtements</a></li>
                        <li class="" data-reactid="419"><a title="Chaussures" class="trackable" href="#"
                                data-reactid="420">Chaussures</a></li>
                        <li class="" data-reactid="421"><a title="Accessoires &amp; Bagagerie" class="trackable"
                                href="#" data-reactid="422">Accessoires &amp; Bagagerie</a>
                        </li>
                        <li class="" data-reactid="423"><a title="Montres &amp; Bijoux" class="trackable" href="#"
                                data-reactid="424">Montres &amp; Bijoux</a></li>
                        <li class="" data-reactid="425"><a title="Equipement bébé" class="trackable" href="#"
                                data-reactid="426">Equipement bébé</a></li>
                        <li class="" data-reactid="427"><a title="Vêtements bébé" class="trackable" href="#"
                                data-reactid="428">Vêtements bébé</a></li>
                        <li class="" data-reactid="429"><a href="#" target="_self" title="Videdressing"
                                class="trackable" data-reactid="430">Videdressing</a></li>
                    </ul>
                </div>
                <div class="_3UM0h" data-reactid="431">
                    <ul data-reactid="432">
                        <li class="_3f3p2" data-reactid="433"><a title="MULTIMEDIA" class="trackable" href="#"
                                data-reactid="434">MULTIMEDIA</a></li>
                        <li class="" data-reactid="435"><a title="Informatique" class="trackable" href="#"
                                data-reactid="436">Informatique</a></li>
                        <li class="" data-reactid="437"><a title="Consoles &amp; Jeux vidéo" class="trackable"
                                href="#"" data-reactid=" 438">Consoles &amp; Jeux vidéo</a>
                        </li>
                        <li class="" data-reactid="439"><a title="Image &amp; Son" class="trackable"
                                href="#"" data-reactid=" 440">Image &amp; Son</a></li>
                        <li class="" data-reactid="441"><a title="Téléphonie" class="trackable" href="#"
                                data-reactid="442">Téléphonie</a></li>
                        <li class="_3f3p2" data-reactid="443"><a title="LOISIRS" class="trackable" href="#"
                                data-reactid="444">LOISIRS</a></li>
                        <li class="" data-reactid="445"><a title="DVD / Films" class="trackable" href="#"
                                data-reactid="446">DVD / Films</a></li>
                        <li class="" data-reactid="447"><a title="CD / Musique" class="trackable" href="#"
                                data-reactid="448">CD / Musique</a></li>
                        <li class="" data-reactid="449"><a title="Livres" class="trackable" href="#"
                                data-reactid="450">Livres</a></li>
                        <li class="" data-reactid="451"><a title="Animaux" class="trackable" href="#"
                                data-reactid="452">Animaux</a></li>
                        <li class="" data-reactid="453"><a title="Vélos" class="trackable" href="#"
                                data-reactid="454">Vélos</a></li>
                        <li class="" data-reactid="455"><a title="Sports &amp; Hobbies" class="trackable" href="#"
                                data-reactid="456">Sports &amp; Hobbies</a></li>
                        <li class="" data-reactid="457"><a title="Instruments de musique" class="trackable" href="#"
                                data-reactid="458">Instruments de musique</a>
                        </li>
                        <li class="" data-reactid="459"><a title="Collection" class="trackable" href="#"
                                data-reactid="460">Collection</a></li>
                        <li class="" data-reactid="461"><a title="Jeux &amp; Jouets" class="trackable" href="#"
                                data-reactid="462">Jeux &amp; Jouets</a></li>
                        <li class="" data-reactid="463"><a title="Vins &amp; Gastronomie" class="trackable" href="#"
                                data-reactid="464">Vins &amp; Gastronomie</a></li>
                    </ul>
                </div>
                <div class="_3UM0h" data-reactid="465">
                    <ul data-reactid="466">
                        <li class="_3f3p2" data-reactid="467"><a title="MATERIEL PROFESSIONNEL" class="trackable"
                                href="#" data-reactid="468">MATERIEL PROFESSIONNEL</a>
                        </li>
                        <li class="" data-reactid="469"><a title="Matériel Agricole" class="trackable" href="#"
                                data-reactid="470">Matériel Agricole</a></li>
                        <li class="" data-reactid="471"><a title="Transport - Manutention" class="trackable" href="#"
                                data-reactid="472">Transport - Manutention</a>
                        </li>
                        <li class="" data-reactid="473"><a title="BTP - Chantier Gros-oeuvre" class="trackable" href="#"
                                data-reactid="474">BTP - Chantier
                                Gros-oeuvre</a></li>
                        <li class="" data-reactid="475"><a title="Outillage - Matériaux 2nd-oeuvre" class="trackable"
                                href="#" data-reactid="476">Outillage - Matériaux
                                2nd-oeuvre</a></li>
                        <li class="" data-reactid="477"><a title="Équipements Industriels" class="trackable" href="#"
                                data-reactid="478">Équipements Industriels</a>
                        </li>
                        <li class="" data-reactid="479"><a title="Restauration - Hôtellerie" class="trackable" href="#"
                                data-reactid="480">Restauration - Hôtellerie</a>
                        </li>
                        <li class="" data-reactid="481"><a title="Fournitures de Bureau" class="trackable" href="#"
                                data-reactid="482">Fournitures de Bureau</a></li>
                        <li class="" data-reactid="483"><a title="Commerces &amp; Marchés" class="trackable" href="#"
                                data-reactid="484">Commerces &amp; Marchés</a></li>
                        <li class="" data-reactid="485"><a title="Matériel Médical" class="trackable" href="#"
                                data-reactid="486">Matériel Médical</a></li>
                        <li class="_3f3p2" data-reactid="487"><a title="SERVICES" class="trackable" href="#"
                                data-reactid="488">SERVICES</a></li>
                        <li class="" data-reactid="489"><a title="Prestations de services" class="trackable" href="#"
                                data-reactid="490">Prestations de services</a>
                        </li>
                        <li class="" data-reactid="491"><a title="Billetterie" class="trackable" href="#"
                                data-reactid="492">Billetterie</a></li>
                        <li class="" data-reactid="493"><a title="Evénements" class="trackable" href="#"
                                data-reactid="494">Evénements</a></li>
                        <li class="" data-reactid="495"><a title="Cours particuliers" class="trackable" href="#"
                                data-reactid="496">Cours particuliers</a></li>
                        <li class="" data-reactid="497"><a title="Covoiturage" class="trackable" href="#"
                                data-reactid="498">Covoiturage</a></li>
                        <li class="_3f3p2" data-reactid="499"><a title="Autres" class="trackable" href="#"
                                data-reactid="500">Autres</a></li>
                        <li class="" data-reactid="501"><a title="Autres" class="trackable" href="#"
                                data-reactid="502">Autres</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
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
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>
<script>
    $(document).ready(function () {
        $('.main-navbar li a').click(function () {
            console.log("rw");
            $('#Login_modal').modal('toggle');
        });
        $('#create_account').click(function () {
            console.log("rw");
            $('#Login_modal').modal('hide');
        });
        $('.back_loginmodal').click(function () {
            $('#Regsiter_modal').modal('toggle');
            $('#Login_modal').modal('toggle');
        });
        // $('#loginform').on('submit', function (e) {
        //     e.preventDefault();
        //     var email = $('input[name=email]').val();
        //     var password = $('input[name=password]').val();
        //     if (email == "" || password == "") {
        //         document.getElementById('login_request_error').innerHTML = "Error";
        //         setTimeout(() => {
        //             document.getElementById('login_request_error').innerHTML = "";
        //         }, 2000);
        //     } else {
        //         var data = $('#loginform').serialize();
        //         var url = $('#loginform').attr('action');
        //         var base_url = {!! json_encode(url('/')) !!};
        //         console.log(data);
              
        //         $.ajax({
        //             type: 'POST',
        //             url: url,
        //             data: data,
        //             dataType: "json",
        //             success: function (data) {
        //                 console.log(data);
        //                 if (data.error) {
        //                     document.getElementById('login_request_error').innerHTML = data
        //                         .result;
        //                     setTimeout(() => {
        //                         document.getElementById('login_request_error')
        //                             .innerHTML = "";
        //                     }, 2000);

        //                 } else {
        //                     console.log(data.result);

        //                    window.location = base_url + "/frontoffice/advertise";
                             
        //                 }

        //             }
        //         });
        //     }
        // });
    });

</script>
@yield('after-script')

</html>
