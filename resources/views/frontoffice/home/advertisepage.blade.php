<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="token" content="{{csrf_token()}}"> --}}
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- Header -->
    @include('frontoffice.partials.headerpart')
    <!-- /Header -->

    <!-- Home Section -->
    <section class="_33KQ9">
        <!-- react-empty: 1487 -->
        <div class="iD56L">
            <div class="_3ZAZw">
                <div class="_1OdoT">
                    <div class="_1AsHn">
                        <h1 class="_3MDJa dgtty">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Déposer une annonce</font>
                            </font>
                        </h1>
                    </div>
                </div>
                <div>
                    <div class="_14s_w tShLp" id="total_category">
                        <div class="UDd7g">
                            <div class="_2kY5F">
                                <div class="_1AsHn _2siHy _38NUf">
                                    <div class="_3Bswj">
                                        <div class="_3QHYd">
                                            <h3 class="_3MDJa _30A-8">Choisissez la catégorie</h3>
                                        </div>
                                        <div>
                                            <div class="_2Xqu9">
                                                <div class="_27rom" role="combobox" aria-expanded="false"
                                                    aria-haspopup="listbox" aria-labelledby="downshift-2-label">
                                                  

                                                    <input type="text" aria-autocomplete="list"
                                                        aria-labelledby="downshift-2-label" autocomplete="off" value=""
                                                        id="downshift-2-input" name="searchCategory"
                                                        placeholder="Que proposez-vous aujourd’hui ?" class="_1hEog">
                                                </div>
                                            </div>
                                            <div class="CUS2Y">
                                                <div class="_1Zk_b">
                                                    @php
                                                    $categories = $data['categories'];
                                                    $subcategories = $data['subcategories'];
                                                    for($i = 1; $i < count($categories); $i+=2){ $cate=$categories[$i];
                                                        @endphp 
                                                        <div class="_3BIbD">
                                                        <div class="PHfT3">
                                                            <div class="_3ytUb subcategory_collapse"
                                                                data-toggle="collapse"
                                                                data-target="#category{{$cate['id']}}">
                                                                <div class="_1clVx">
                                                                    <span class="_1vK7W" name="suitcase">
                                                                        <i class="fa {{$cate['icon']}}"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="_3MBji">{{$cate['cname']}}</div>
                                                                <div class="cMK9S"><span class="_1vK7W"
                                                                        name="chevrondown"><svg viewBox="0 0 24 24"
                                                                            data-name="Calque 1" focusable="false">
                                                                            <path
                                                                                d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </div>
                                                            @php
                                                            if(isset($subcategories[$cate['id']])){
                                                            @endphp
                                                            <div id="category{{$cate['id']}}" class="collapse">
                                                                @php
                                                                foreach($subcategories[$cate['id']] as $sub_cate){
                                                                @endphp
                                                                <div class="PXI8z">
                                                                    <div class="eILDV subcategory"
                                                                        data-subid="{{$sub_cate['s_id']}}">
                                                                        {{$sub_cate['sname']}}</div>
                                                                </div>
                                                                @php
                                                                }
                                                                @endphp
                                                            </div>
                                                            @php
                                                            }
                                                            @endphp

                                                        </div>


                                                </div>


                                                @php
                                                }

                                                @endphp


                                            </div>


                                            <div class="_1Zk_b">
                                                @php
                                                $categories = $data['categories'];
                                                $subcategories = $data['subcategories'];
                                                for($i = 0; $i < count($categories); $i+=2){ $cate=$categories[$i];
                                                    @endphp <div class="_3BIbD">
                                                    <div class="PHfT3">
                                                        <div class="_3ytUb subcategory_collapse" data-toggle="collapse"
                                                            data-target="#category{{$cate['id']}}">
                                                            <div class="_1clVx">
                                                                <span class="_1vK7W" name="suitcase">
                                                                    <i class="fa {{$cate['icon']}}"></i>
                                                                </span>
                                                            </div>
                                                            <div class="_3MBji">{{$cate['cname']}}</div>
                                                            <div class="cMK9S"><span class="_1vK7W"
                                                                    name="chevrondown"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                        </path>
                                                                    </svg></span></div>
                                                        </div>
                                                        @php
                                                        if(isset($subcategories[$cate['id']])){
                                                        @endphp
                                                        <div id="category{{$cate['id']}}" class="collapse">
                                                            @php
                                                            foreach($subcategories[$cate['id']] as $sub_cate){
                                                            @endphp
                                                            <div class="PXI8z">
                                                                <div class="eILDV subcategory"
                                                                    data-subid="{{$sub_cate['s_id']}}">
                                                                    {{$sub_cate['sname']}}</div>
                                                            </div>
                                                            @php
                                                            }
                                                            @endphp
                                                        </div>
                                                        @php
                                                        }
                                                        @endphp

                                                    </div>


                                            </div>


                                            @php
                                            }

                                            @endphp
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="_1aYAF">
                                <div class="_2BPbl">
                                    <div class="o73DF"></div>
                                    <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg
                                                viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                <path
                                                    d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                                </path>
                                            </svg></span></div>
                                    <div class="o73DF"></div>
                                </div>
                                <div><span>
                                        <!-- react-text: 161 -->Votre annonce sera trouvée plus facilement !
                                        <!-- /react-text --><br><br><!-- react-text: 164 -->Vous aurez 50% de
                                        chances en plus d’être contacté si votre annonce est dans la bonne
                                        catégorie.
                                        <!-- /react-text --></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_14s_w tShLp" id="choose_category" style="display:none">
                <div class="UDd7g">

                    <div class="_2kY5F">
                        <div class="_1AsHn _2siHy _38NUf">
                            <div class="_3Bswj">
                                <div class="_3QHYd">
                                    <h3 class="_3MDJa _30A-8">Choisissez la catégorie</h3>
                                </div>
                                <form id="new_button_subcategory" method="POST" action="{{route('postcategory')}}">

                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="LzDnW">
                                        <div class="_3lCVd">
                                            <div class="_3bAPj">Catégorie</div>
                                            <div class="_1etKl">
                                                <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg
                                                            viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                            <path
                                                                d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                            </path>
                                                        </svg></span></div>
                                                <div class="_2gTTZ">
                                                    <div id="select_subcategory">Voitures</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_3lCVd">
                                            <div class="_3bAPj">Type d’annonce</div>
                                            <div class="_1rAJm">
                                                <div class="_1IpS7"><label class="_1fypT"
                                                        data-qa-id="adType_offre"><input type="radio" value="sell"
                                                            name="adType" class="_1L8pO" checked><span
                                                            class="T9pXm"><span
                                                                class="_3oEwn"></span><span>Offre</span></span></label>
                                                    <div class="_3b90f">Vous vendez une voiture.</div>
                                                </div>
                                                <div class="_1IpS7"><label class="_1fypT"
                                                        data-qa-id="adType_demande"><input type="radio" value="buy"
                                                            name="adType" class="_1L8pO"><span class="T9pXm"><span
                                                                class="_3oEwn"></span><span>Demande</span></span></label>
                                                    <div class="_3b90f">Vous recherchez une voiture.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2Qp5n">
                                        <button class="_2sNbI _1xIyN _2xk2l _3FcC9" type="submit">
                                            <!-- react-text: 826 -->Continuer
                                            <!-- /react-text --></button>
                                    </div>
                                </form>
                            </div>
                            <div class="_1aYAF">
                                <div class="_2BPbl">
                                    <div class="o73DF"></div>
                                    <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg
                                                viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                <path
                                                    d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                                </path>
                                            </svg></span></div>
                                    <div class="o73DF"></div>
                                </div>
                                <div><span>
                                        <!-- react-text: 161 -->Votre annonce sera trouvée plus facilement !
                                        <!-- /react-text --><br><br><!-- react-text: 164 -->Vous aurez 50% de chances en
                                        plus d’être contacté si votre annonce est dans la bonne catégorie.
                                        <!-- /react-text --></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_14s_w" id="detail_category">
                `
            </div>
            <div class="_14s_w" id="category_description" style="display:none">
                <div class="_1AsHn _2siHy _38NUf _3aduF">
                    <div class="_3Bswj">
                        <div class="_3QHYd">
                            <h3 class="_3MDJa _30A-8">Décrivez votre bien !</h3>
                        </div>
                        <form id="description_form" method="POST" action="{{route('postdescription')}}">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="_3KRvg">
                                <div class="zfCs0 _2R7h7">
                                    <div><label class="TMFen" for="subject">
                                            <!-- react-text: 545 -->Titre de l'annonce
                                            <!-- /react-text -->
                                            <!-- react-text: 546 -->*
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class="_2erBM"
                                                data-qa-id="newad-input_subject" maxlength="100" value=""
                                                name="subject"></div>
                                    </div>
                                </div>
                                <div class="_3GY3c">
                                    <div><label class="_2GeK6" for="body">
                                            <!-- react-text: 552 -->Description de l'annonce
                                            <!-- /react-text -->
                                            <!-- react-text: 553 -->*
                                            <!-- /react-text --></label><textarea maxlength="4000" name="body"
                                            class="_2qGx6 _2TtNy" data-qa-id="newad-text_body" cols="20"
                                            rows="30"></textarea></div>
                                </div>
                            </div>
                            <div class="_3lDmP">
                                <div class="_39Nsm">
                                    <div><button class="_2sNbI _1xIyN _2BP2c" type="button"
                                            data-qa-id="newad-button-prev-description" id="backbutton">
                                            <!-- react-text: 559 -->Retour
                                            <!-- /react-text --></button></div>
                                    <div>
                                        <button class="_2sNbI _1xIyN _2xk2l _3FcC9" type="submit">
                                            <!-- react-text: 826 -->Continuer
                                            <!-- /react-text --></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="_1aYAF">
                        <div class="_2BPbl">
                            <div class="o73DF"></div>
                            <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                        </path>
                                    </svg></span></div>
                            <div class="o73DF"></div>
                        </div>
                        <div><span>
                                <!-- react-text: 654 -->Mettez en valeur votre annonce !
                                <!-- /react-text --><br><br><!-- react-text: 657 -->Plus il y a de détails, plus votre
                                annonce sera de qualité.
                                <!-- /react-text --><br><!-- react-text: 659 -->Dites-nous ici ce qui est important à
                                savoir et ajoutera de la valeur !
                                <!-- /react-text --></span></div>
                    </div>
                </div>
            </div>
            <div class="_14s_w" id="category_price" style="display:none">
                <div class="_1AsHn _2siHy _38NUf _3aduF">
                    <div class="_3Bswj">
                        <div class="_3QHYd">
                            <h3 class="_3MDJa _30A-8">Quel est votre prix ?</h3>
                        </div>
                        <form id="price_form" method="POST" action="{{route('postprice')}}">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="_3KRvg">
                                <div class="zfCs0">
                                    <div><label class="TMFen" for="price">
                                            <!-- react-text: 1874 -->Prix
                                            <!-- /react-text --></label>
                                        <div class="_2wuZK"><input type="text" class="_2erBM"
                                                data-qa-id="newad-input_price" maxlength="8" value="" name="price"><span
                                                class="_2x7fK">€</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3lDmP">
                                <div class="_39Nsm">
                                    <div><button class="_2sNbI _1xIyN _2BP2c" type="button"
                                            data-qa-id="newad-button-prev-price" id="backbutton">
                                            <!-- react-text: 1882 -->Retour
                                            <!-- /react-text --></button></div>
                                    <div>
                                        <button class="_2sNbI _1xIyN _2xk2l _3FcC9" type="submit">
                                            <!-- react-text: 826 -->Continuer
                                            <!-- /react-text --></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="_1aYAF">
                        <div class="_2BPbl">
                            <div class="o73DF"></div>
                            <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                        </path>
                                    </svg></span></div>
                            <div class="o73DF"></div>
                        </div>
                        <div><span>Vous le savez, le prix est important, autant pour vous que pour l’acheteur. Soyez
                                juste, mais ayez en tête une marge de négociation si besoin.</span></div>
                    </div>
                </div>
            </div>
            <div class="_14s_w" id="category_photo" style="display:none">
                <div class="_1AsHn _2siHy">
                    <!-- <div class="_1NSYj"></div> -->
                    <div class="_3Bswj">
                        <div class="_3QHYd">
                            <h3 class="_3MDJa _30A-8">Ajoutez des photos</h3>
                        </div>
                        <div class="_2NSAq">
                            <div>
                                <div class="_1nB62">
                                    <div class="TpVkZ _1znw4" aria-disabled="false">
                                        <div class="l1Oku">
                                            <div class="_11wrr">
                                                <div class="_2hSIh _2858t _26o9N" data-qa-id="newad-add_photos">
                                                    <div class="_35a0H add_new_image"><span class="_1vK7W _1Dmcp"
                                                            name="cameramore"><svg viewBox="0 0 24 24"
                                                                data-name="Calque 1" focusable="false">
                                                                <path
                                                                    d="M21.15 6.4H19a.8.8 0 0 1-.58-.26L17 4.58a.77.77 0 0 0-.58-.26h-5.14a1 1 0 1 0 0 2.08h4.22a.79.79 0 0 1 .58.25l1.43 1.57a.79.79 0 0 0 .58.25h3.06a.78.78 0 0 1 .78.79v10.88a.78.78 0 0 1-.78.78h-15a.78.78 0 0 1-.78-.78v-7.82a1 1 0 1 0-2.07 0v7.82A2.86 2.86 0 0 0 6.16 23h15A2.86 2.86 0 0 0 24 20.14V9.26a2.86 2.86 0 0 0-2.85-2.86z">
                                                                </path>
                                                                <path
                                                                    d="M15.06 19.7a5.09 5.09 0 0 0 3.58-3.59 5.19 5.19 0 0 0-6.39-6.41 5.07 5.07 0 0 0-3.58 3.59 5.2 5.2 0 0 0 6.39 6.41zm-4.34-6a3 3 0 0 1 1.92-1.92 3.12 3.12 0 0 1 3.95 4 3.06 3.06 0 0 1-1.91 1.93 3.13 3.13 0 0 1-3.96-4.04zM3.31 8.68a1 1 0 1 0 2.07 0V6.4h2.28a1 1 0 0 0 0-2.08H5.38V2a1 1 0 1 0-2.07 0v2.32H1A1 1 0 0 0 1 6.4h2.31z">
                                                                </path>
                                                            </svg></span>
                                                        <p id="refDrop">Ajouter des photos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_11wrr empty_file">
                                                <div class="_2hSIh _26o9N ufciE">
                                                    <div class="_35a0H "><span class="_1vK7W _3p-rd"
                                                            name="cameraoutline"><svg viewBox="0 0 24 24"
                                                                data-name="Calque 1" focusable="false">
                                                                <path
                                                                    d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z">
                                                                </path>
                                                            </svg></span>
                                                        <p>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Photo n °
                                                                    1</font>
                                                            </font>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_11wrr empty_file">
                                                <div class="_2hSIh _26o9N ufciE">
                                                    <div class="_35a0H "><span class="_1vK7W _3p-rd"
                                                            name="cameraoutline"><svg viewBox="0 0 24 24"
                                                                data-name="Calque 1" focusable="false">
                                                                <path
                                                                    d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z">
                                                                </path>
                                                            </svg></span>
                                                        <p>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Photo n °
                                                                    2</font>
                                                            </font>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_11wrr empty_file">
                                                <div class="_2hSIh _26o9N ufciE">
                                                    <div class="_35a0H "><span class="_1vK7W _3p-rd"
                                                            name="cameraoutline"><svg viewBox="0 0 24 24"
                                                                data-name="Calque 1" focusable="false">
                                                                <path
                                                                    d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z">
                                                                </path>
                                                            </svg></span>
                                                        <p>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Photo n °
                                                                    3</font>
                                                            </font>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="POST" id="upload_form" action="{{route('postimage')}}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="BB7X4">
                                <div class="_39Nsm">
                                    <!-- {{csrf_field()}} -->
                                    <div>
                                        <button class="_2sNbI _1xIyN _2BP2c" type="button"
                                            data-qa-id="newad-button-prev-price" id="backbutton"
                                            type="button">Retour</button>
                                    </div>
                                    <div>
                                        <input type="file" name="select_file" id="select_file" accept="image/*"
                                            style="display:none;">
                                        <button class="_2sNbI _1xIyN _2xk2l _3FcC9" type="submit">Continuer</button>
                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                    </div>
                    <div class="_1aYAF">
                        <div class="_2BPbl">
                            <div class="o73DF"></div>
                            <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                        </path>
                                    </svg></span></div>
                            <div class="o73DF"></div>
                        </div>
                        <div><span>Pour des raisons de confidentialité, si vous renseignez votre adresse exacte,
                                celle-ci n’apparaîtra jamais sur votre annonce.</span></div>
                    </div>
                </div>
            </div>
            <div class="_14s_w" id="category_map" style="display:none">
                <div class="_1AsHn _2siHy _1emXg">
                    <!-- <div class="_1NSYj"></div> -->
                    <div class="_3Bswj">
                        <div class="_3QHYd">
                            <h3 class="_3MDJa _30A-8">Où se trouve votre bien ?</h3>
                        </div>
                        <div class="_2-T4y">
                            <form>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div>
                                    <div class="_15M3j">
                                        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                        <div id="map"></div>
                                    </div>
                                    <div class="_4cwig">
                                        <div class="_39Nsm">
                                            <div>
                                                <button class="_2sNbI _1xIyN _2BP2c" type="button"
                                                    data-qa-id="newad-button-prev-description"
                                                    id="backbutton">Retour</button>

                                            </div>
                                            <div>
                                                <button class="_2sNbI _1xIyN _2xk2l _3FcC9" type="button"
                                                    id="forwardbutton">Continuer</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="_1aYAF">
                        <div class="_2BPbl">
                            <div class="o73DF"></div>
                            <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                        </path>
                                    </svg></span></div>
                            <div class="o73DF"></div>
                        </div>
                        <div><span>Pour des raisons de confidentialité, si vous renseignez votre adresse exacte,
                                celle-ci n’apparaîtra jamais sur votre annonce.</span></div>
                    </div>
                </div>
            </div>
            <div class="_14s_w" id="category_final_information" style="display:none">
                <div class="_1AsHn _2siHy _38NUf _3aduF">
                    <div class="_3Bswj">
                                <div class="_3QHYd">
                                    <h3 class="_3MDJa _30A-8">Vos coordonnées</h3>
                                </div>
                            <div class="_2-T4y">
                                        <form id="information_form" method="POST" action="{{route('information')}}">
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            <div>
                                                <div class="_3KRvg">
                                                    <div class="zfCs0">
                                                        <div><label class="TMFen" for="email">
                                                                <!-- react-text: 599 -->Email
                                                                <!-- /react-text -->
                                                                <!-- react-text: 600 -->*
                                                                <!-- /react-text --></label>
                                                            <div class="_2wuZK">
                                                                <input type="text" class="_2erBM QY7wN" disabled=""
                                                                    data-qa-id="newad-input_email" value="{{$email}}"
                                                                    name="email"></div>
                                                        </div>
                                                    </div>
                                                    <div class="zfCs0">
                                                        <div><label class="TMFen" for="phone">
                                                                <!-- react-text: 606 -->Téléphone
                                                                <!-- /react-text -->
                                                                <!-- react-text: 607 -->*
                                                                <!-- /react-text --></label>
                                                            <div class="_2wuZK"><input type="tel" class="_2erBM"
                                                                    data-qa-id="newad-input_phone" maxlength="10" value="1564048124"
                                                                    name="phone"></div>
                                                        </div>
                                                    </div>
                                                    <div class="_3GY3c _2f9Ri"><span class="ZwnLG">
                                                            <div class="_3CYsw">
                                                                <div class="JFVew">
                                                                    <div class="_2XsXm"></div>
                                                                </div>
                                                                <div class="z87OW">Masquer le numéro</div>
                                                            </div>
                                                        </span></div>
                                                    <div class="_3GY3c _2f9Ri"><span class="ZwnLG">
                                                            <div class="_3CYsw">
                                                                <div class="JFVew kNNj_">
                                                                    <div class="_2XsXm kNNj_ _2OzK3"></div>
                                                                </div>
                                                                <div class="z87OW kNNj_">Refuser tout démarchage commercial</div>
                                                            </div>
                                                        </span></div>
                                                </div>
                                                <div class="_3lDmP">
                                                    <div class="_3ixkI">En validant la diffusion de mon annonce, j’accepte les Règles de
                                                        diffusion et d’utilisation du site Leboncoin.fr et j’autorise Leboncoin.fr à
                                                        diffuser mon annonce.</div>
                                                    <div class="_39Nsm">
                                                        <div>
                                                            <button class="_2sNbI _1xIyN _2BP2c" type="button"
                                                                data-qa-id="newad-button-prev-contact" id="backbutton">Retour</button>

                                                        </div>
                                                        <div>

                                                            <button class="_2sNbI _1xIyN _2xk2l _3FcC9" type="submit"
                                                                id="btnbutton">Continuer</button>

                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                            </div>
                    </div>
                   
                </div>
                <div class="_1aYAF">
                        <div class="_2BPbl">
                            <div class="o73DF"></div>
                            <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                        </path>
                                    </svg></span></div>
                            <div class="o73DF"></div>
                        </div>
                        <div><span>Pour des raisons de confidentialité, si vous renseignez votre adresse exacte,
                                celle-ci n’apparaîtra jamais sur votre annonce.</span></div>
                    </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- /Home Section -->

    <!-- Footer Section -->

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


    <script>
        var sub_id;
        var id;
        $(document).ready(function () {
            // document.getElementById('choose_category').
            var userid={{$user_id}};
            $('.subcategory').on('click', function () {
                sub_id = $(this).data('subid');
                console.log(sub_id);
                var sub_name = this.innerHTML;
                document.getElementById('select_subcategory').innerHTML = this.innerHTML;

                $('#choose_category').css('display', 'block');
                $('#total_category').css('display', 'none');
            });
            $('.subcategory_collapse').click(function () {
                if ($(this).hasClass('sub_show'))
                    $(this).removeClass("sub_show");
                else
                    $(this).addClass("sub_show");
            });
            $('._1etKl').click(function () {
                $('#choose_category').css('display', 'none');
                $('#total_category').css('display', 'block');

            });
            $('#new_button_subcategory').on('submit', function (e) {
                e.preventDefault();
                // var data=$('#new_button_subcategory').serialize();
                var sub_category = document.getElementById('select_subcategory').innerHTML;
                console.log(sub_category);
                sub_category = sub_category.replace(/\s/g, '');
                console.log(sub_category);
                var adType = $('input[name=adType]:checked').val();
                var url = $('#new_button_subcategory').attr('action');
                console.log(url);
                // var base_url = {
                //     !!json_encode(url('/')) !!
                // };
                $.ajax({
                    type: 'POST',
                    url: "{{route('postcategory')}}",
                    data: {
                        sub_id: sub_id,
                        adName: sub_category,
                        adType: adType,
                        _token: $('input[name=_token]').val(),
                    },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        if (data.error == false) {
                            if (data.result == 'next_view') {
                                id = data.id;
                                $('#choose_category').css('display', 'none');
                                $('#category_description').css('display', 'block');
                            } else {
                                id = data.id;
                                console.log(data.result);
                                $('#choose_category').css('display', 'none');
                                $('#detail_category').html();
                                $('#detail_category').html(data.result);

                            }

                        }
                        else{
                            alert(data.result);
                        }

                    },
                    error: function(error){
                        console.log(error);
                    }
                });

            });


            $('#detail_category').on('click', '#return_button', function () {
                console.log("test");
                $('#choose_category').css('display', 'block');
                $('#detail_category').html("");
            });
            $('#detail_category').on('submit','#car_upload_form', function(event){
                    event.preventDefault();
                    var markers = document.getElementById("marker_list");
                  //  console.log(markers);
                    var marker_value = markers[markers.selectedIndex].value;
                    var models = document.getElementById("model_list");
                    var model_value=models[models.selectedIndex].value;
                    var dates=document.getElementById("date_list");
                    var date_value=dates[dates.selectedIndex].value;
                    var day_value=$('input[name=issuance_date]').val();
                    var kilo_value=$('input[name=mileage]').val();
                    var en_type = $('input[name=gearbox]:checked').val();
                    var fuel = $('.uO-lw.SgsUB').attr('value');
                    if(marker_value != 0 && model_value != 0 && date_value != "" && day_value != "" && kilo_value !="" && en_type !="" && fuel !="")
                    {
                        $.ajax({
                        type:"POST",
                        url:"{{route('addCardetail')}}",
                        data:{
                            id:id,
                            brand:marker_value,
                            model:model_value,
                            regdate:date_value,
                            issuance_date:day_value,
                            mileage:kilo_value,
                            fuel:fuel,
                            gearbox:en_type,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });

                    }
                    else{
                        alert("please fill fields correctly.");
                    }
                    
              });

              $('#detail_category').on('submit','#canva_form',function(event){
               
                    event.preventDefault();
                    var dates=document.getElementById("date_list");
                    var date_value=dates[dates.selectedIndex].value;
                    var day_value=$('input[name=issuance_date]').val();
                    var kilo_value=$('input[name=mileage]').val();
                     
                     if(date_value !="Choisissez" && day_value !="" && kilo_value !="")
                     {
                        $.ajax({
                        type:"POST",
                        url:"{{route('addCanva')}}",
                        data:{
                            id:id,
                            regdate:date_value,
                            issuance_date:day_value,
                            mileage:kilo_value,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });

                     }
                     else{
                        alert("please fill fields correctly.");
                     }

              });

              $('#detail_category').on('submit','#moto_form',function(event){
 
                    event.preventDefault();
                    var dates=document.getElementById("date_list");
                    var date_value=dates[dates.selectedIndex].value;
                    var day_value=$('input[name=issuance_date]').val();
                    var kilo_value=$('input[name=mileage]').val();
                    var cubic_capacity=$('input[name=cubic_capacity]').val();
                    if(date_value !="Choisissez" && day_value !="" && kilo_value !="")
                     {
                        $.ajax({
                        type:"POST",
                        url:"{{route('addMoto')}}",
                        data:{
                            id:id,
                            regdate:date_value,
                            issuance_date:day_value,
                            mileage:kilo_value,
                            cubic_capacity:cubic_capacity,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });

                     }
                     else{
                        alert("please fill fields correctly.");
                     }
         
              });
              $('#detail_category').on('submit','#util_form',function(event){
                event.preventDefault();
                    var dates=document.getElementById("date_list");
                    var date_value=dates[dates.selectedIndex].value;
                    var kilo_value=$('input[name=mileage]').val();
                    var en_type = $('input[name=gearbox]:checked').val();
                    var day_value=$('input[name=issuance_date]').val();
                    var fuel = $('.uO-lw.SgsUB').attr('value');

                    if(date_value !=""&& kilo_value !="" && en_type !="" && day_value !="" && fuel !="")
                    {
                        $.ajax({
                        type:"POST",
                        url:"{{route('addUtil')}}",
                        data:{
                            id:id,
                            regdate:date_value,
                            issuance_date:day_value,
                             mileage:kilo_value,
                             fuel:fuel,
                             gearbox:en_type,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });
                    }
                    else{
                        alert("please fill fields correctly.");
                    }


              });
            $('#detail_category').on('submit','#rental_form',function(event){
                event.preventDefault();
                var rental_building = $('._2GSq7._2uOGu').attr('value');
                var property = $('input[name=furnished]:checked').val();
                var square=$('input[name=square]').val();
                var rooms=$('input[name=rooms]').val();
                var energy=$('.uO-lw.energy._1ElXN').attr('value');
                var ges=$('.uO-lw.ges._1ElXN').attr('value');
                console.log(square);
                if(rental_building !=""&& property !="" && square !="" && rooms !="" && energy !="" && ges !="")
                {
                    $.ajax({
                        type:"POST",
                        url:"{{route('addRental')}}",
                        data:{
                            id:id,
                            good:rental_building,
                            energy_rage:energy,
                            ges:ges,
                            furnished:property,
                            rooms:rooms,
                            square:square,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });
                }
                else{
                    alert("please fill fields correctly.");


                }
            });

            $('#detail_category').on('submit','#realestate_form',function(event){
                event.preventDefault();
                var rental_building = $('._2GSq7._2uOGu').attr('value');
                var square=$('input[name=square]').val();
                var rooms=$('input[name=rooms]').val();
                var energy=$('.uO-lw.energy._1ElXN').attr('value');
                var ges=$('.uO-lw.ges._1ElXN').attr('value');
                if(rental_building !=""&& square !="" && rooms !="" && energy !="" && ges !="")
                {
                    $.ajax({
                        type:"POST",
                        url:"{{route('addRealestate')}}",
                        data:{
                            id:id,
                            good:rental_building,
                            energy_rage:energy,
                            ges:ges,
                            rooms:rooms,
                            square:square,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });
                }
                else{
                    alert("please fill fields correctly.");


                }
               

            });

        $('#detail_category').on('submit','#shoes_upload_form',function(event){  
             event.preventDefault();
               // console.log("test");
                var univer= $('#detail_category #univer_list').val();
             //   console.log(univer);
                var type=$('#detail_category #type_list').val();
              //  console.log(type);
                var size=$('#detail_category #size_list').val();
                //console.log(size);
                var color=$('#detail_category #color_list').val();
              //  console.log(color);
                var marker=$('#detail_category #marker_list').val();
                //console.log(marker);
                var state=$('#detail_category #sate_list').val();
               // console.log(state);

               if(univer !="" && type !="" && size !="" && color !="" && marker !="" && state !="")
               {
                  $.ajax({
                        type:"POST",
                        url:"{{route('addShoes')}}",
                        data:{
                            id:id,
                            univer:univer,
                            shoes_type:type,
                            shoes_size:size,
                            shoes_marker:marker,
                            shoes_color:color,
                            shoes_status:state,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });

               }
               else{

                alert("please fill fields correctly.");
            
               }
         
          });

          $('#detail_category').on('submit','#house_mate_form',function(event){  
             event.preventDefault();

                var square=$('input[name=square]').val();
                var rooms=$('input[name=rooms]').val();
                var energy=$('.uO-lw.energy._1ElXN').attr('value');
                var ges=$('.uO-lw.ges._1ElXN').attr('value');
              
               if(square !="" && rooms !="" && energy !="" && ges !="")
               {
                  $.ajax({
                        type:"POST",
                        url:"{{route('addHousemate')}}",
                        data:{
                            id:id,
                            energy_rage:energy,
                            ges:ges,
                            rooms:rooms,
                            square:square,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });

               }
               else{

                alert("please fill fields correctly.");
            
               }
         
          });

          $('#detail_category').on('submit','#office_upload_form',function(event){  
             event.preventDefault();

                var square=$('input[name=square]').val();
                var energy=$('.uO-lw.energy._1ElXN').attr('value');
                var ges=$('.uO-lw.ges._1ElXN').attr('value');
              
               if(square !=""  && energy !="" && ges !="")
               {
                  $.ajax({
                        type:"POST",
                        url:"{{route('addShop')}}",
                        data:{
                            id:id,
                            energy_rage:energy,
                            ges:ges,
                            square:square,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });

               }
               else{

                alert("please fill fields correctly.");
            
               }
         
          });

          $('#detail_category').on('submit','#clothing_upload_form',function(event){  
             event.preventDefault();

                // console.log("test");
                var univer= $('#detail_category #univer_list').val();
             //   console.log(univer);
                var cut=$('#detail_category #cut_list').val();
              //  console.log(type);
                var type=$('#detail_category #category_list').val();
                //console.log(size);
                var color=$('#detail_category #color_list').val();
              //  console.log(color);
                var marker=$('#detail_category #brand_list').val();
                //console.log(marker);
                var state=$('#detail_category #state_list').val();
               // console.log(state);

               if(univer !="" && type !="" && cut !="" && color !="" && marker !="" && state !="")
               {
                  $.ajax({
                        type:"POST",
                        url:"{{route('addClothing')}}",
                        data:{
                            id:id,
                            clothing_univer:univer,
                            clothing_type:type,
                            clothing_cut:cut,
                            clothing_mark:marker,
                            clothing_color:color,
                            clothing_state:state,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType:"json",
                        success:function(data){
                            console.log(data.result);
                            if(!data.error)
                            {
                               $('#detail_category').css("display","none");
                               $('#category_description').css("display","block");
                            }
                            else{
                                alert(data.result);
                            }
                        }

                    });

               }
               else{

                alert("please fill fields correctly.");
            
               }
         
          });

 


            $('#category_description').on('click', '#backbutton', function () {

                $('#category_description').css('display', 'none');
                $('#choose_category').css('display', 'block');
                // console.log("test");
            });

            $('#description_form').on('submit', function (e) {
                e.preventDefault();
                // console.log("test");
                var sub_category_id = id;
                var subject = $('input[name=subject]').val();
                var description = $('textarea[name=body]').val();
                var url = $('#description_form').attr('action');
                // console.log($('input[name=_token]').val());
                if (subject != "" && description != "") {

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            id: sub_category_id,
                            subject: subject,
                            body: description,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            if (!data.error) {
                                $('#category_description').css('display', 'none');
                                $('#category_price').css('display', 'block');
                            } else {
                                alert(data.result);
                            }

                        }



                    });
                } else {
                    alert("Please check fields exactly");
                }
            });

       
            $('#category_price').on('click', '#backbutton', function () {

                $('#category_price').css('display', 'none');
                $('#category_description').css('display', 'block');

            });
            $('#price_form').on('submit', function (e) {
                e.preventDefault();
                var subid = id;
                var price = $('input[name=price]').val();
                var url = $('#price_form').attr('action');
                if (price == "") {
                    alert("Please check price files correctly.")
                } else {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            id: subid,
                            price: price,
                            _token: $('input[name=_token]').val(),
                        },
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            if (!data.error) {
                                $('#category_price').css('display', 'none');
                                $('#category_photo').css('display', 'block');

                            } else {
                                alert(data.result);
                            }
                        }
                    });

                }

            });
            $('#category_photo').on('click', '#backbutton', function () {
                console.log("test");
                $('#category_photo').css('display', 'none');
                $('#category_price').css('display', 'block');

            });

            $('.add_new_image').click(function () {
                var fullimage_count = document.getElementsByClassName("full_image");
                console.log(fullimage_count.length);
                if (parseInt(fullimage_count.length) < 3) {
                    console.log("please add image");
                    $('input[name=select_file]').trigger('click');
                } else {
                    console.log("no");
                    alert("you must add images");
                }

                //   console.log(file);
            });
            $('.l1Oku').on('click', '.empty_file ._35a0H', function () {
                var fullimage_count = document.getElementsByClassName("full_image");
                console.log(fullimage_count.length);
                if (parseInt(fullimage_count.length) < 3) {
                    console.log("ok");
                    $('input[name=select_file]').trigger('click');
                } else {
                    console.log("no");
                    alert("you must add images");
                }
                //   console.log(file);
            });

            $('input[name=select_file]').on('change', function () {
                var formData = new FormData();
                if (typeof $('input[name=select_file]')[0].files[0] != "undefined") {
                    console.log($('input[name=select_file]')[0].files[0]);
                    formData.append('select_file', $('input[name=select_file]')[0].files[0]);
                    formData.append('_token', $('input[name=_token]').val());
                    var empty_file = document.getElementsByClassName('empty_file');
                    console.log($('input[name=_token]').val());
                    var first_element = empty_file[0];
                    var base_url = {!!json_encode(url('/')) !!};             
                    $.ajax({
                        type: "POST",
                        enctype: 'multipart/form-data',
                        url: "{{route('uploadpicture')}}",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {
                            data = JSON.parse(data);
                            if (!data.error) {
                                    var html ='<div class="_2hSIh _26o9N"><img alt="products" src="../img/picture/' + data.result +
                                    '"><span  class="_26mZh" name="close" data-name="' +
                                    data.result +
                                    '"><span class="_1vK7W" ><svg viewBox="0 0 24 24" data-name="Calque 1" focusable="false"><path d="M23.47 20.9l-8.9-8.9 8.9-8.9A1.81 1.81 0 0 0 20.9.55L12 9.43 3.1.53A1.82 1.82 0 0 0 .53 3.1l8.9 8.9-8.9 8.9a1.82 1.82 0 0 0 2.57 2.57l8.9-8.9 8.9 8.9a1.82 1.82 0 0 0 2.57-2.57z"></path></svg></span></span><div class="_35a0H"><span class="_1vK7W _3p-rd" name="cameraoutline"><svg viewBox="0 0 24 24" data-name="Calque 1" focusable="false"><path d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z"></path></svg></span><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Photo # 2</font></font></p></div></div>';
                                $(first_element).html(html);
                                $(first_element).removeClass('empty_file');
                                $(first_element).addClass('full_image');
                                $('#upload_form').append('<input type="hidden" id="' + (data
                                        .result).split('.')[0] +
                                    '" name="upload_images[]" value="' + data.result +
                                    '" />');
                            } else {

                            }
                            console.log(data);
                        },
                        error: function (e) {
                            console.log(e);
                        }
                    });
                }

            });

            $('.l1Oku').on('click', 'span[name=close]', function () {
                // var image = $(this).data('image');
                // console.log(image);
                $(this).parent().parent().remove();
                var delete_image = $(this).data('name');
                $("input[id=" + delete_image.split('.')[0] + ']').remove();
                // var full_images = document.getElementsByClassName('full_image');
                // var delete_image = full_images[full_images.length - 1];
                var html =
                    '<div class="_11wrr empty_file"><div class="_2hSIh _26o9N ufciE"><div class="_35a0H "><span class="_1vK7W _3p-rd" name="cameraoutline"><svg viewBox="0 0 24 24" data-name="Calque 1" focusable="false"><path d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z"></path></svg></span><p>Photo n°2</p></div></div></div>';
                $('.l1Oku').append(html);
                // $(delete_image).removeClass('full_image');
                // $(delete_image).addClass('empty_file');
            });

            $('#upload_form').on('submit', function (event) {
                event.preventDefault();
                var formData = new FormData($('#upload_form')[0]);
                formData.append('id', id);
                // data['file'] = $('input[type=file]')[0].files[0]; 
                console.log(formData);
                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "{{route('postimage')}}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {

                        if (data.error) {
                            console.log("error");
                        } else {
                            $('#category_photo').css('display', 'none');
                            $('#category_map').css('display', 'block');
                        }
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });

            });

            $('#category_map').on('click', '#backbutton', function () {
                console.log("test");
                $('#category_map').css('display', 'none');
                $('#category_photo').css('display', 'block');

            });
            $('#category_map').on('click', '#forwardbutton', function () {
                console.log("test");
                $('#category_map').css('display', 'none');
                $('#category_final_information').css('display', 'block');

            });
            $('#information_form').on('submit', function (event) {
                event.preventDefault();
                var email = $('input[name=email]').val();
                var phone = $('input[name=phone]').val();
                console.log(id);
                $.ajax({
                    type: 'POST',
                    url: "{{route('information')}}",
                    data: {
                        id: id,
                        email: email,
                        phone: phone,
                        user_id:userid,
                        enable: 1,
                        _token: $('input[name=_token]').val(),
                    },
                    dataType: "json",
                    success: function (data) {
                        if (data.error) {
                            console.log("error");

                        } else {
                            location.href = "{{route('viewadmob')}}";
                        }
                    }
                });
            });
            $('#category_final_information').on('click', '#backbutton', function () {
                $('#category_final_information').css('display', 'none');
                $('#category_map').css('display', 'block');
            });


        });

    </script>
   

    <script>
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        var poly ;
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 48.8566,
                    lng: 2.3522
                },
                zoom: 13,
                mapTypeId: 'roadmap'
            });

            // Create the search box and link it to the UI element.
            var options = {
                types: ['(cities)'],
            };
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input, options);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function () {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            var addresses = [];
            var city_name;
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.

            poly = new google.maps.Polyline({
                strokeColor: '##FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 3
            });
            poly.setMap(map);

            searchBox.addListener('places_changed', function () {

                var places = searchBox.getPlaces();
                // console.log(places[0]['name']); 

                addresses = places[0]['address_components'];
                console.log(addresses);
                for (var i = 0; i < addresses.length; i++) {
                    if (addresses[i]['types'][0] == "locality") {
                        city_name = addresses[i]['long_name'];

                        break;
                    }
                }
                  console.log(city_name);

                if (places.length == 0) {
                    return;
                }



                // Clear out the old markers.
                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
                poly.setMap(null);
                poly = new google.maps.Polyline({
                    strokeColor: '#FF0000',
                    strokeOpacity: 1.0,
                    strokeWeight: 3
                });
                poly.setMap(map);
                var path = poly.getPath();
                $.ajax({
                    type: 'POST',
                    url: "{{route('coordinates')}}",
                    data: {
                        id:id,
                        c_name: city_name,
                        _token: $('input[name=_token]').val(),
                    },
                    dataType: "json",
                    success: function (data) {

                        if (data.error) {
                            alert(data.result);
                        } else {
                            console.log(data.result);
                            var myTrip = [];
                            var count = data.result.length;
                            for (var i = 0; i < data.result.length; i++) {
                                  path.push(new google.maps.LatLng(data.result[i][1], data.result[i][0]));
                            }

                        }

                    }
                });

            });

        }

    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXAEJOmp7v7uXD-Vrmaw6xjBl_ZExIn7g&libraries=places&callback=initAutocomplete">
    </script>
</body>


</html>
