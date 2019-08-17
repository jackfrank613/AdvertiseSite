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
                    <h2>Total : {{$amount}} € TTC </h2>
                </section>

                <section class="S6kt5">
                    <h2>Saisissez votre numéro de carte bancaire</h2>
                    <div class="card">
                            <form action="{{route('process')}}" method="post" id="payment-form">
                                @csrf                    
                                <div class="form-group">
                                    <div class="card-header">
                                        <label for="card-element">
                                                Entrez vos informations de carte de crédit
                                        </label>
                                    </div>
                                    <div class="card-body">
                                        <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                        <input type="hidden" name="boost_id" value={{$boost_id}} />
                                    </div>
                                </div>
                                <div class="card-footer">
                                        <button class="_2sNbI _1xIyN _2xk2l _1lcUU" id="btn_pay" type="submit"
                                        data-qa-id="stickySubmitButton">Valider</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                 <div class="_2e0qf">Informations:</div>
                    <div class="_38Fo3" style="margin:0 0 1rem"><span class="_1JWO_" id="span1"><img
                                src="//static-rav.leboncoin.fr/46c5e452fd381c4d2b435ac7eff43df9.png"></span>
                        <div class="D0sVS">
                            <div class="ezWFo">Le responsable de traitement, les destinataires et la finalité de la
                                collecte des données.</div>
                            <div class="_2CroS" id="cr_1" style="display:none">Dans le cadre de l’exécution du contrat qui nous lie, vos données de paiement sont indispensables à LBC France pour donner suite à votre paiement. A cette fin, elles sont transmises à notre prestataire de service de paiement, qui concourt techniquement à réaliser la finalité ci-dessus. Nous sommes susceptibles de traiter vos données de manière automatisée à des fins de lutte contre la fraude. Ce traitement pourra donner lieu à un blocage automatique de votre transaction.</div>
                        </div>
                    </div>
                    <div class="_38Fo3" style="margin:0 0 1rem"><span class="_1JWO_" id="span2"><img
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

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script src="https://js.stripe.com/v3/"></script>

<script>

$(document).ready(function(){

      var boost_id="{{$boost_id}}";
      console.log(boost_id);
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

   // Create a Stripe client.
   var stripe = Stripe('{{ env("STRIPE_KEY") }}');

   var elements = stripe.elements();
   var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
            color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
};


 var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
 card.mount('#card-element');

  // Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
     // console.log(result.token);
     stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  console.log(form);
  // Submit the form
  form.submit();
}
});

</script>


</html>