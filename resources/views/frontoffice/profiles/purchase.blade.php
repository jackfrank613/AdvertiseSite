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
                        <li class="_3Y9_a rljXf _3cD2j"><a class="_2KBuw" href="{{route('purchase')}}">
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
            <div class="_1o5Iq">
                <!-- react-empty: 3035 -->
                <div class="_1i0e0 _14mnT">
                    <div class="_2Dlhe">
                        <div class="_36XVT"><a data-qa-id="credit-link-mobile"
                                href="https://www.leboncoin.fr/account/my-shopping" class="trackable"><span
                                    class="_1vK7W _210mY" name="credit"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                        focusable="false">
                                        <path
                                            d="M11.2 3.92c0 1.34-2.51 2.43-5.6 2.43S0 5.26 0 3.92 2.51 1.5 5.6 1.5s5.6 1.08 5.6 2.42zM5.6 7.56C2.51 7.56 0 6.47 0 5.14v1.61c0 1.34 2.51 2.42 5.6 2.42s5.6-1.08 5.6-2.42V5.14c0 1.33-2.51 2.42-5.6 2.42zm0 2.83C2.51 10.39 0 9.3 0 8v1.58C0 10.92 2.51 12 5.6 12s5.6-1.08 5.6-2.42V8c0 1.3-2.51 2.39-5.6 2.39zm12.8-6.06c-3.09 0-5.6 1.08-5.6 2.42s2.51 2.42 5.6 2.42S24 8.09 24 6.75s-2.51-2.42-5.6-2.42zm0 6.06c-3.09 0-5.6-1.09-5.6-2.43v1.62c0 1.34 2.51 2.42 5.6 2.42S24 10.92 24 9.58V8c0 1.3-2.51 2.39-5.6 2.39zM6 13.2h-.4c-3.09 0-5.6-1.08-5.6-2.42v1.62c0 1.34 2.51 2.43 5.6 2.43v-.41A2 2 0 0 1 6 13.2zm-6 .42v1.61c0 1.34 2.51 2.42 5.6 2.42V16C2.51 16 0 15 0 13.62zm18.4 1.21c3.09 0 5.6-1.09 5.6-2.43v-1.61c0 1.34-2.51 2.42-5.6 2.42H18a2 2 0 0 1 .42 1.22zm5.6.4v-1.61C24 15 21.49 16 18.4 16v1.61c3.09.04 5.6-1.04 5.6-2.38zM12 12c-3.09 0-5.6 1.08-5.6 2.42s2.51 2.43 5.6 2.43 5.6-1.09 5.6-2.43S15.09 12 12 12zm0 6.06c-3.09 0-5.6-1.09-5.6-2.42v1.61c0 1.34 2.51 2.42 5.6 2.42s5.6-1.08 5.6-2.42v-1.61c0 1.36-2.51 2.42-5.6 2.42zm0 2.83c-3.09 0-5.6-1.09-5.6-2.43v1.62c0 1.34 2.51 2.42 5.6 2.42s5.6-1.08 5.6-2.42v-1.62c0 1.34-2.51 2.43-5.6 2.43z">
                                        </path>
                                    </svg></span><!-- react-text: 3043 -->Acheter des crédits
                                <!-- /react-text --></a></div>
                    </div>
                    <h1 style="font-weight: 100;
    font-size: 18px;
    font-size: 1.8rem;
    margin-top: 10px;">Mes achats</h1>
                </div>
                <section class="_3sqhV">
                    <div class="_1i0e0 _1kQ3D">
                        <h2 style="font-weight:100;font-size:20px">Acheter des crédits</h2>
                        <p class="_3U-Dz"><span class="_4CWiq">Facile, Rapide, Pratique !</span>
                            <!-- react-text: 3050 -->
                            <!-- /react-text -->
                            <!-- react-text: 3051 -->Grâce à l'achat de crédits, vous pré-chargez votre Compte Personnel
                            du montant de votre choix. Vous n'aurez ainsi plus besoin de saisir vos coordonnées
                            bancaires à chaque dépôt d'annonce et achat d'option sur le site ou les applications. Vous
                            gagnez du temps et gérez ainsi mieux votre budget.
                            <!-- /react-text -->
                        </p>
                        <form  name="actionPurchase" class="_2-SZr" id="form-id">
                            <div class="_1-sM_"><label for="price_s15000" class="_3SSA_">
                                    <div><input type="radio" id="price_s15000" name="credits_product_id" value="0">
                                        <!-- react-text: 3077 -->150 €
                                        <!-- /react-text -->
                                    </div>
                                    <div class="_1394M">
                                        <!-- react-text: 3079 -->+
                                        <!-- /react-text -->
                                        <!-- react-text: 3080 -->10
                                        <!-- /react-text -->
                                        <!-- react-text: 3081 --> € offerts
                                        <!-- /react-text -->
                                    </div>
                                </label><label for="price_s10000" class="_3SSA_">
                                    <div><input type="radio" id="price_s10000" name="credits_product_id" value="1">
                                        <!-- react-text: 3085 -->100 €
                                        <!-- /react-text -->
                                    </div>
                                    <div class="_1394M">
                                        <!-- react-text: 3087 -->+
                                        <!-- /react-text -->
                                        <!-- react-text: 3088 -->5
                                        <!-- /react-text -->
                                        <!-- react-text: 3089 --> € offerts
                                        <!-- /react-text -->
                                    </div>
                                </label><label for="price_s5000" class="_3SSA_">
                                    <div><input type="radio" id="price_s5000" name="credits_product_id" value="2">
                                        <!-- react-text: 3093 -->50 €
                                        <!-- /react-text -->
                                    </div>
                                </label><label for="price_s2500" class="_3SSA_ ya5Kg">
                                    <div><input type="radio" id="price_s2500" name="credits_product_id" value="3">
                                        <!-- react-text: 3097 -->25 €
                                        <!-- /react-text -->
                                    </div>
                                </label><label for="price_s1000" class="_3SSA_">
                                    <div><input type="radio" id="price_s1000" name="credits_product_id" value="4">
                                        <!-- react-text: 3101 -->10 €
                                        <!-- /react-text -->
                                    </div>
                                </label>
                                <p class="_3HZKW">Les montants des crédits sont indiqués en TTC</p>
                            </div>
                            <div class="checkbox _2WZ__">
                                <div class="_2k0Hf">
                                    <input type="checkbox" id="accept_rule" name="accept_rule"
                                        value="on">
                                    <label for="accept_rule" class="_1ltHB" style="padding-left: 0;">
                                        <span>
                                            <!-- react-text: 3060 -->Je reconnais avoir lu et accepté
                                            <!-- /react-text -->
                                            <!-- react-text: 3061 -->
                                            <!-- /react-text --><a class="_Clink" href="#"
                                                target="_blank" rel="noopener">
                                                <!-- react-text: 3063 -->les Conditions Générales de Vente
                                                <!-- /react-text -->
                                                <!-- react-text: 3064 -->
                                                <!-- /react-text --></a><span class="italic">(nos CGV ont évolué,
                                                n’hésitez pas à les consulter).</span></span></label></div>
                            </div>
                            <div class="_1mm81" style="display:none" data-qa-id="cgv-error" id="purchase_error">Merci de cocher la case déclarant que vous avez
                                lu et accepté les Conditions Générales de Vente.</div>
                            <button class="_2sNbI _1xIyN _2xk2l trackable" id="btn_id" title="Valider" >
                                <!-- react-text: 3067 -->Valider
                            </button>
                        </form>
                    </div>
                </section>
                <section class="xGZGo">
                    <div class="_1i0e0 _1JON3">
                        <h2 style="font-weight:100;font-size:20px;">Historique de vos achats</h2>
                        <p class="information-alert">Vous n’avez effectué aucune transaction sur le site web ou les
                            applications.</p>
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
            var check_error=true;
            var class_purchases = document.getElementsByClassName("_3SSA_");
            var myPurchase = function () {
                // console.log(class_purchases[0]);
                $(class_purchases).removeClass("ya5Kg");
                $(this).addClass("ya5Kg");


            }
            for (var i = 0; i < class_purchases.length; i++) {
                class_purchases[i].addEventListener('click', myPurchase, false);
            }
            $('#accept_rule').change(function() {
                check_error=false;
           });

           var form = document.getElementById("form-id");
           document.getElementById("btn_id").addEventListener("click", function () {
             if(check_error)
             {
                 console.log('test');
                 $('#purchase_error').css("display","block");
             }
             else{
                  form.submit();
             }
         });



        });

    </script>

    @yield('after-script')

</body>

</html>
