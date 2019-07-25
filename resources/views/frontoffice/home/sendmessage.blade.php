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
    {{-- <!-- <link type="text/css" rel="stylesheet" href="{{asset('css/productionpage.css')}}" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('css/auth.css')}}" /> --> --}}
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/header.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/showitem.css')}}">



</head>

<body>
    <!-- Header -->
    @include('frontoffice.partials.headerpart')
    <!-- Header -->

    <section class="_1i0e0 _3Mbar" data-reactid="142">
        <section class="YVjlD _2nUlH" data-reactid="143" style="
            padding: 20px;">
            <h1 class="LjS8Y" data-reactid="144">
                <!-- react-text: 145 -->Envoyer un message à {{$name}}
                <!-- /react-text --><span class="_1vK7W _2UWWZ" name="salesprospecting"
                    data-tip="Opposé au démarchage commercial" data-place="bottom" currentitem="false"><svg
                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                        <path
                            d="M23.67 22.05L1.87.43a1.08 1.08 0 0 0-1.54 0A1 1 0 0 0 .33 2l.67.71 3.4 3.37v13.47a2.2 2.2 0 0 0 2.21 2.17h13.54l2 2a1.06 1.06 0 0 0 1.54 0 1.16 1.16 0 0 0-.02-1.67zm-14.2-11l2 1.95H10a1.17 1.17 0 0 1-1.08-1 .86.86 0 0 1 .55-.92zm.55 6.3a1.1 1.1 0 0 1-1.1-1.09A1.18 1.18 0 0 1 10 15.2h3.63l2.2 2.18zM16.62 10.86a1.17 1.17 0 0 1 1.1 1.14 1.31 1.31 0 0 1-.44.86l4.85 4.78V7.38a2.14 2.14 0 0 0-.66-1.52L16.18.65A2.2 2.2 0 0 0 14.64 0H6.72a2.39 2.39 0 0 0-1.66.76l10.24 10.1zm-2.2-4.34V1.63l6.06 6h-5a1.09 1.09 0 0 1-1.06-1.11z">
                        </path>
                    </svg>
                    <div class="__react_component_tooltip place-top type-dark " data-id="tooltip"></div>
                </span></h1>
            <div class="_2Kpxj _2yDC9" data-reactid="149">
                <div class="_1jIsn" data-reactid="150"><span class="_1BHQN" data-reactid="151">Attention:</span></div>
                <div data-reactid="154">Méfiez-vous des propositions trop alléchantes et des prix trop bas. Assurez-vous
                    de ne pas être victime d’une tentative d’escroquerie.<a data-reactid="157">En savoir plus</a></div>
            </div>
            <form data-reactid="158">
                <div data-reactid="169"><label class="_2GeK6" for="body" data-reactid="170">
                        <!-- react-text: 171 -->Votre message
                        <!-- /react-text --></label><textarea name="body" class="_2qGx6 _3Id6u" cols="20" rows="30"
                        data-reactid="172"></textarea></div>
                    <button class="_2sNbI e943h _3JCaR" type="submit"
                    disabled="" data-reactid="173" style="background-color: #4183d7;
                    color: white;">
                    <!-- react-text: 174 -->Envoyer votre message
                    <!-- /react-text --></button>
            </form>
            <div class="_26R2k" data-qa-id="cnil_container" data-reactid="175">
                <p class="d1zJr" data-reactid="176">Information :</p>
                <div data-reactid="177">
                    <div class="_3Dg4T" data-reactid="178"><span class="TextLink-15wnQ" data-reactid="179">Le
                            responsable de traitement, les destinataires et la finalité de la collecte des
                            données.</span></div>
                    <div class="_3Dg4T" data-reactid="180"><span class="TextLink-15wnQ" data-reactid="181">En savoir
                            plus sur vos droits, la durée de conservation de vos données et les moyens de nous
                            contacter.</span></div>
                </div>
            </div>
        </section>
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
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Pagination.js')}}"></script>
</body>
<script>
    $(document).ready(function () {
        var slideIndex = 1;
        showDivs(slideIndex);

        $('#right_slider').on('click', function () {

            showDivs(slideIndex += 1);

        });

        $('#left_slider').on('click', function () {
            showDivs(slideIndex -= 1);
        });

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var effect = document.getElementsByClassName("Lqamr ");
            $(effect).removeClass("_3lGXV");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
            $(effect[slideIndex - 1]).addClass("_3lGXV");

        }
        $('#phone_click').on('click', function () {

            $('#phone_click').css("display", "none");
            $('#number_click').css("display", "block");



        });

    });

</script>
@yield('after-script')

</html>
