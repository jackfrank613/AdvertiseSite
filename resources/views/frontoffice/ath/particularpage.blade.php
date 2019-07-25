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
    <link type="text/css" rel="stylesheet" href="{{asset('css/auth.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/header.css')}}">

</head>

<body>
    <!-- Header -->
    @include('frontoffice.partials.headerpart')
    <!-- /Header -->

    <!-- Home Section -->
    <div class="_1WPxu">
        <div class="_1AsHn">
            <!-- react-empty: 2396 -->
            <div class="_2b-5F" id="account_create">
                <div class="_3cZR-">
                    <div class="_1z132">
                        <div class="_2xBxS">
                            <section>
                                <h1 style="font-size:17px">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Pourquoi créer un compte ?</font>
                                    </font>
                                </h1>
                                <div class="_1q4RC">
                                    <div class="_3Q_VU"><span class="_1vK7W" name="clock"><svg viewBox="0 0 24 24"
                                                data-name="Calque 1" focusable="false">
                                                <path
                                                    d="M17.24 15.07l-4.64-2.76V6.86a.85.85 0 0 0-.86-.86h-.08a.85.85 0 0 0-.86.86v5.67a1.2 1.2 0 0 0 .59 1l5 3a.86.86 0 1 0 .87-1.48z">
                                                </path>
                                                <path
                                                    d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm0 21.6a9.6 9.6 0 1 1 9.6-9.6 9.6 9.6 0 0 1-9.6 9.6z">
                                                </path>
                                            </svg></span></div>
                                    <div class="_2Cof-">
                                        <p class="_3jQDS">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Gagnez du temps</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Publiez vos annonces rapidement, avec vos informations pré-remplies chaque fois que vous souhaitez déposer une nouvelle annonce.
                                                </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="_1q4RC">
                                    <div class="_3Q_VU"><span class="_1vK7W" name="notif"><svg viewBox="0 0 24 24"
                                                data-name="Calque 1" focusable="false">
                                                <path
                                                    d="M12 24a2.49 2.49 0 0 0 2.51-2.46h-5A2.48 2.48 0 0 0 12 24zM21.13 18.2l-1.61-1.58v-6.16c0-3.78-2.06-6.94-5.64-7.78v-.83a1.88 1.88 0 0 0-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 0 0 .88 2.11h16.49a1.23 1.23 0 0 0 .89-2.11z">
                                                </path>
                                            </svg></span></div>
                                    <div class="_2Cof-">
                                        <p class="_3jQDS">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Soyez les premiers informés</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Créez des alertes Immo ou Emploi et ne manquez jamais l’annonce qui vous intéresse.</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="_1q4RC">
                                    <div class="_3Q_VU"><span class="_1vK7W" name="eyes"><svg viewBox="0 0 24 24"
                                                data-name="Calque 1" focusable="false">
                                                <path
                                                    d="M12 8.6A3.33 3.33 0 0 0 8.73 12 3.33 3.33 0 0 0 12 15.4a3.33 3.33 0 0 0 3.27-3.4A3.33 3.33 0 0 0 12 8.6z">
                                                </path>
                                                <path
                                                    d="M12 3.5A12.92 12.92 0 0 0 0 12a12.92 12.92 0 0 0 12 8.5A12.92 12.92 0 0 0 24 12a12.92 12.92 0 0 0-12-8.5zm0 14.17A5.56 5.56 0 0 1 6.55 12 5.56 5.56 0 0 1 12 6.33 5.56 5.56 0 0 1 17.45 12 5.56 5.56 0 0 1 12 17.67z">
                                                </path>
                                            </svg></span></div>
                                    <div class="_2Cof-">
                                        <p class="_3jQDS">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Visibilité</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Suivez les statistiques de vos annonces (nombre de fois où votre annonce a été vue, nombre de contacts reçus).</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="_1z132">
                        <section>
                            <h1 class="_3WcWK" style="font-size:17px">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Créez un compte</font>
                                </font>
                            </h1>
                            <form id="create_part_form" method="POST" action="{{route('signup')}}">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div><label class="TMFen" for="pseudo">
                                        <!-- react-text: 2435 -->
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Pseudo *</font>
                                        </font><!-- /react-text -->                    
                                    </label>
                                    <div class="_2wuZK">
                                    <input type="text" class="_2erBM PRRzF"
                                            data-qa-id="input-pseudo" value="" name="name"></div>
                                </div>
                                <div><label class="TMFen" for="email">
                                        <!-- react-text: 2440 -->
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Adresse email *</font>
                                        </font><!-- /react-text -->
                                    </label>
                                    <div class="_2wuZK">
                                    <input type="text" class="_2erBM PRRzF" data-qa-id="input-email"
                                            value="" name="email"></div>
                                </div>
                                <div class="_2Wi8a">
                                    <div class="OBFx_">
                                        <div><label class="TMFen" for="password">
                                                <!-- react-text: 2447 -->
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Mot de passe *</font>
                                                </font><!-- /react-text -->
                                            </label>
                                            <div class="_2wuZK">
                                            <input type="password" class="_2erBM _1ON-K"
                                                    data-qa-id="input-password" value="" name="password">
                                            </div>
                                            <div class="Z4c6m">
                                                <div class="_2Kpxj _3iULV _3K12h">
                                                    <div>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                            Pour plus de sécurité, votre mot de passe doit contenir au moins 8 caractères dont 1 chiffre et 1 lettre.</font>
                                                        </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="OBFx_">
                                        <div><label class="TMFen" for="confirmationPassword">
                                                <!-- react-text: 2453 -->
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Confirmer le mot de passe *</font>
                                                </font><!-- /react-text -->
                                            </label>
                                            <div class="_2wuZK">
                                            <input type="password" class="_2erBM _1ON-K"
                                                    data-qa-id="input-confirm-password" value=""
                                                    name="confirmationPassword"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2jU3P">
                                    <div class="_2k0Hf"><input type="checkbox" id="optin" class="s3aUf"
                                            data-qa-id="checkbox-offre-partenaire" name="optin" value="on"><label
                                            for="optin" class="_1ltHB"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Je souhaite recevoir des offres des partenaires du site jamii susceptibles de m’intéresser</font>
                                                </font>
                                            </span></label></div>
                                </div>
                           
                                <button  class="btn_particular" type="submit">
                                    <!-- react-text: 2474 -->
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Créer mon Compte Personnel</font>
                                    </font><!-- /react-text -->
                                </button>
                                <h5 id="register_request_error"></h5>
                            </form>
                        </section>
                    </div>
                </div>
                <p class="_3HysG">Si vous agissez à titre professionnel, vous devez créer un Compte professionnel. A défaut, en application de l’article L 132-2 du Code de la consommation qui sanctionne les pratiques commerciales trompeuses, vous encourez notamment une peine d’emprisonnement de 2 ans et une amende de 300 000 euros.</p>
            </div>
            <div class="alj24">
                <div class="_26R2k _1qeGi" data-qa-id="cnil_container">
                    <p class="d1zJr">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Information:</font>
                        </font>
                    </p>
                    <div>
                        <div class="_3Dg4T"><span class="TextLink-15wnQ">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Le responsable de traitement, les destinataires et la finalité de la collecte des données.</font>
                                </font>
                            </span></div>
                        <div class="_3Dg4T"><span class="TextLink-15wnQ">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Learn more about your rights, how long your
                                        data is kept and how to contact us.</font>
                                </font>
                            </span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Home Section -->

    <!-- Footer Section -->
    <footer class="_3mBNy">
        <div class="_1AsHn In37K">
            <div class="_29yTo">
                <div>
                    <!-- react-text: 1008 -->Jamii 20019 -
                    <!-- /react-text -->
                    <!-- react-text: 1009 -->2030
                    <!-- /react-text -->
                </div>
            </div>
        </div>
    </footer>
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
   $(document).ready(function(){
  //  console.log("dfdf");
    $('#create_part_form').on('submit',function(e){
     e.preventDefault();
     var name=$('input[name=name]').val();
     var email=$('input[name=email]').val();
     var password=$('input[name=password]').val();
     var conpassword=$('input[name=confirmationPassword]').val();
    // console.log(password);
    if(email == "" || name == "" || password == "" && password !=conpassword)
    {
      document.getElementById('register_request_error').innerHTML = "Error";
      setTimeout(() => {
                    document.getElementById('register_request_error').innerHTML = "";
                }, 2000);

    }
    else{
        var data = $('#create_part_form').serialize();
        var url = $('#create_part_form').attr('action');
        var base_url = {!! json_encode(url('/')) !!};
        $.ajax({
            type:'POST',
            url:"{{route('signup')}}",
            data:{
                name:name,
                email:email,
                password:password,
                _token: $('input[name=_token]').val(),
            },
            dataType:"json",
            success:function(data){
                console.log(data);
                if(data.error)
                {
                   
                    document.getElementById('register_request_error').innerHTML = data.result;
                    setTimeout(() => {
                    document.getElementById('register_request_error').innerHTML = "";
                }, 2000);
                   
                }
                else{
                   
                    window.location= base_url + "/frontoffice/dadmob";
                }

            },
            error: function(error){
                console.log(error);
            }
        });
    }
    });

   });
   </script>
   @yield('after-script')
</html>