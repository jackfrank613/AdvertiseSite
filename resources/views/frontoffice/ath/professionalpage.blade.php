<!DOCTYPE html>
<html lang="en">

<head>
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
            <!-- react-empty: 882 -->
            <div class="_19xDj">
                <h1 class="A_Arb">Créez votre Compte Professionnel</h1>
                <section>
                    <form id="store_creation_form" method="POST" action="{{route('prosignup')}}">
                        @csrf
                        <h2 class="_9RSlI">Vos coordonnées</h2><span class="label">Civilité</span>
                        <div class="_3Mo8Q"><label class="_1fypT" data-qa-id="radio-gender-m">
                        <input type="radio"
                                    id="gender_0" value="Mr" name="gender" class="_1L8pO">
                                    <span class="T9pXm"><span
                                        class="_3oEwn"></span><span>M.</span></span></label><label class="_1fypT"
                                data-qa-id="radio-gender-f">
                                <input type="radio" id="gender_1" value="Mrs" name="gender"
                                    class="_1L8pO">
                                    <span class="T9pXm"><span
                                        class="_3oEwn"></span><span>Mme</span></span></label></div>
                        <div class="_3pJUb">
                            <div class="_1--Jt">
                                <div class="_2H9-T">
                                    <div><label class="TMFen" for="lastname">
                                            <!-- react-text: 905 -->Nom *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class=" _2erBM validate xmyyj"
                                                data-qa-id="input-name" value="" name="lastname"></div>
                                    </div>
                                </div>
                                <div class="_2H9-T">
                                    <div><label class="TMFen" for="firstname">
                                            <!-- react-text: 911 -->Prénom *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class=" _2erBM validate xmyyj"
                                                data-qa-id="input-firstname" value="" name="firstname"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3pJUb">
                            <div class="_1--Jt">
                                <div class="_2H9-T">
                                    <div><label class="TMFen" for="company_name">
                                            <!-- react-text: 919 -->Nom de la société *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class=" _2erBM validate xmyyj"
                                                data-qa-id="input-company" value="" name="company_name"></div>
                                    </div>
                                </div>
                                <div class="_2H9-T">
                                    <div><label class="TMFen" for="siret">
                                            <!-- react-text: 925 -->SIRET *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class=" _2erBM validate xmyyj"
                                                data-qa-id="input-siret" value="" maxlength="14" name="siret"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3pJUb">
                            <div><label class="_2GeK6" for="activity_sector">Rubrique *</label>
                                <div class="selectWrapper"><select name="activity_sector" data-qa-id="list-rubric"
                                        class="select full">
                                        <option value="">Sélectionner la rubrique associée à votre activité
                                            professionnelle</option>
                                        <option value="Employment">EMPLOI</option>
                                        <option value="Vehicles">VEHICULES</option>
                                        <option value="Immovable">IMMOBILIER</option>
                                        <option value="Vacation">VACANCES</option>
                                        <option value="Multimedia">MULTIMEDIA</option>
                                        <option value="House">MAISON</option>
                                        <option value="Fashion">Mode</option>
                                        <option value="Hobbies">LOISIRS</option>
                                        <option value="Professional equipment">MATERIEL PROFESSIONNEL</option>
                                        <option value="Services">SERVICES</option>
                                    </select>
                                    </div>
                            </div>
                        </div>
                        <div class="_3pJUb">
                            <div><label class="TMFen" for="billing_address">
                                    <!-- react-text: 946 -->Adresse *
                                    <!-- /react-text --></label>
                                <div class="_2wuZK"><input type="text" class=" _2erBM validate xmyyj" data-qa-id="input-address"
                                        value="" name="billing_address"></div>
                            </div>
                        </div>
                        <div class="_3pJUb">
                            <div class="_1--Jt">
                                <div class="_2H9-T">
                                    <div class="line"><label class="_2GeK6" for="location">Ville ou code postal
                                            *</label>
                                        <div role="combobox" aria-expanded="false" aria-haspopup="listbox"
                                            aria-labelledby="downshift-0-label">
                                            <div class="_2jF2G"><input aria-autocomplete="list" 
                                                    aria-labelledby="downshift-0-label" value="" id="location"
                                                    class="input full _31JFp validate" name="location"
                                                    data-qa-id="autocomplete-input"><!-- react-text: 957 -->
                                                <!-- /react-text -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2H9-T">
                                    <div><label class="TMFen" for="phone">
                                            <!-- react-text: 961 -->Téléphone *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class=" _2erBM validate xmyyj"
                                                data-qa-id="input-phone" maxlength="10" name="phone"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="_9RSlI">Votre email et mot de passe</h2>
                        <div class="_3pJUb">
                            <div><label class="TMFen" for="email">
                                    <!-- react-text: 968 -->Adresse email *
                                    <!-- /react-text --></label>
                                <div class="_2wuZK"><input type="text" class=" _2erBM validate xmyyj" data-qa-id="input-email"
                                        name="email"></div>
                            </div>
                        </div>
                        <div class="_1--Jt">
                            <div class="_2H9-T">
                                <div class="_3pJUb">
                                    <div><label class="TMFen" for="password">
                                            <!-- react-text: 976 -->Mot de passe *
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="password" class=" _2erBM validate xmyyj"
                                                data-qa-id="input-password" name="password"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="_2H9-T">
                                <div><label class="TMFen" for="passwordConfirmation">
                                        <!-- react-text: 982 -->Confirmer le mot de passe *
                                        <!-- /react-text --></label>
                                    <div class="_2wuZK"><input type="password" class=" _2erBM validate xmyyj"
                                            data-qa-id="input-confirm-password" value="" name="passwordConfirmation">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3pJUb">
                            <div class="_2k0Hf">
                                <input type="checkbox" id="cgv_pro" name="cgv_pro" value="on">
                                <label for="cgv_pro" class="_1ltHB">
                                    <span>
                                    <span data-qa-id="checkbox-cgv">«&nbsp;J’accepteles&nbsp;</span>
                                    <a><strong>Conditions Générales de Vente</strong></a>
                                            <!-- react-text: 993 -->&nbsp;»
                                            <!-- /react-text -->
                                    </span>
                                </label>
                            </div>
                        </div><button  type="submit" id="create_store_button"
                            data-qa-id="button-account-creation-pro" style="background-color: #4183d7;
                                                                                                color: white;
                                                                                                width: 100%;
                                                                                                height: 40px;
                                                                                                border-width: inherit;
                                                                                                margin-top:15px;
                                                                                                border-radius: 5px;">
                            <!-- react-text: 995 -->Créer mon Compte Professionnel
                            <!-- /react-text --></button>
                           <p style="margin-top:20px; color:#f56b2a" id="professional_request_error"></p>
                    </form>
                </section>
            </div>
            <div class="EdZlD">
                <div class="_26R2k _1qeGi" data-qa-id="cnil_container">
                    <p class="d1zJr">Information :</p>
                    <div>
                        <div class="_3Dg4T"><span class="TextLink-15wnQ">Le responsable de traitement, les destinataires
                                et la finalité de la collecte des données.</span></div>
                        <div class="_3Dg4T"><span class="TextLink-15wnQ">En savoir plus sur vos droits, la durée de
                                conservation de vos données et les moyens de nous contacter.</span></div>
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
                    <!-- react-text: 1008 -->jamii 2019 -
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
 
 $('#store_creation_form').on('submit',function(e){

    e.preventDefault();
    var inputs = document.querySelectorAll('#store_creation_form .validate ');
    var validate = true;
    inputs.forEach(input => {
        // console.log($(input).val());
        
        if($(input).val() == ""){
            validate = false;
        }
    });
    var gender = $('input[name=gender]:checked').val();
    var cvs = $('input[name=cgv_pro]').is(':checked');
    var password=$('input[name=password]').val();
    var confirmpassword=$('input[name=passwordConfirmation]').val();
    //console.log(cvs);
    if(cvs && validate != false && typeof gender != "undefined" && password == confirmpassword){
        var data=$('#store_creation_form').serialize();
         console.log(data);
        var url = $('#store_creation_form').attr('action');
        var base_url = {!! json_encode(url('/')) !!};
        $.ajax({
            type:'POST',
            url:url,
            data:data,
            dataType:"json",
            success:function(data){
                console.log(data);
                if(!data.error)
                {
                     window.location= base_url + "/frontoffice/dadmob";
                }
                else{
                    document.getElementById('professional_request_error').innerHTML = '<i class="fa fa-warning" style="vertical-align: baseline;"></i>' + data.result;

                }

            },
            error:function(error)
            {
                console.log(error);
                }
        });
        //console.log(data);
    }
    else if(!cvs || validate == false || typeof gender == "undefined"){
        document.getElementById('professional_request_error').innerHTML = '<i class="fa fa-warning" style="vertical-align: baseline;"></i>' + "Please, fill all information.";
    }
    else {
        document.getElementById('professional_request_error').innerHTML ='<i class="fa fa-warning" style="vertical-align: baseline;"></i>' + "Password is not matched.";
    }
    setTimeout(function(){
        document.getElementById('professional_request_error').innerHTML = "";
    }, 3000);

 });


});
</script>
 @yield('after-script')
</html>