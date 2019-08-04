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
    <link type="text/css" rel="stylesheet" href="{{asset('css/image-slider.css')}}">



</head>

<body>
    <!-- Header -->
    @include('frontoffice.partials.headerpart')
    <!-- Header -->

    <section>
        <div>
        
    
            <section class="_20rd1">
                <section class="_3ULJg">
                    <div class="Breadcrumb-1zlWo">
                        <div class="item-3ujJS" data-qa-id="breadcrumb-item-0"><a href="{{route('home')}}">Accueil</a>
                        </div>
                        <!-- react-text: 5874 -->&gt;
                        <!-- /react-text -->
                        <div class="item-3ujJS" data-qa-id="breadcrumb-item-1"><a
                                href="{{route('viewadmob')}}">Charente-Maritime</a></div>
                        <!-- react-text: 5877 -->&gt;
                        <!-- /react-text -->

                        <!-- /react-text -->
                        <div class="item-3ujJS" data-qa-id="breadcrumb-item-3">{{$admob['subject']}}</div>
                    </div>
                </section>
                <section class="_35sFG">
                    <section class="OjX8R">
                        <div class="_2NKYa" data-qa-id="adview_spotlight_container">
                            <div data-qa-id="adview_gallery_container">
                                <div class="_1weve">
                                    <div class="_18_xS">
                                        <img
                                            src="https://img0.leboncoin.fr/ad-large/8abe2231721be5509e47a41bda224fa309bf6b9f.jpg">
                                    </div>
                                    <div class="GwNx3">
                                        <div class="_3o99T pDZ0Z" data-qa-id="slideshow_container">
                                            <div class="_3bgJP">
                                                <?php 
                                                    $images=explode(",",$admob['camera']);
                                                    ?>
                                                @foreach ($images as $one)
                                                <img class="mySlides" src="{{asset('public/img/picture')}}/{{$one}}"
                                                    style="width:100%">
                                                @endforeach

                                            </div>
                                            <div class="tpexl lzz3k" id="left_slider" id="left_slider"
                                                data-qa-id="slideshow_control_prev">
                                                <div class="Mw3Xe"></div><span class="_1vK7W" name="chevronleft"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M10.13 12l8.25-8.33a2.15 2.15 0 0 0 0-3 2.1 2.1 0 0 0-3 0l-9.76 9.82a2.14 2.14 0 0 0 0 3l9.76 9.86a2.1 2.1 0 0 0 3 0 2.2 2.2 0 0 0 0-3.05z">
                                                        </path>
                                                    </svg></span>
                                            </div>
                                            <div class="tpexl _2o9Fy" id="right_slider" id="right_slider"
                                                data-qa-id="slideshow_control_next">
                                                <div class="Mw3Xe"></div><span class="_1vK7W" name="chevronright"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M18.38 10.49L8.62.63a2.1 2.1 0 0 0-3 0 2.15 2.15 0 0 0 0 3L13.87 12l-8.25 8.32a2.2 2.2 0 0 0 0 3.05 2.1 2.1 0 0 0 3 0l9.76-9.86a2.14 2.14 0 0 0 0-3.02z">
                                                        </path>
                                                    </svg></span>
                                            </div>
                                            <div class="_2mHu7" data-qa-id="slideshow_thumbnails_container"><span
                                                    class="_2YTBP"
                                                    data-qa-id="slideshow_thumbnails_text">{{count($images)}} photos
                                                    disponibles</span>
                                                <div class="_3rUFH">
                                                    <div class="_27kLD" style="transform: translate3d(0%, 0px, 0px);">

                                                        @foreach ($images as $one)
                                                        <span class="Lqamr" data-qa-id="slideshow_thumbnails_item">
                                                            <div alt=""
                                                                style="background-image: url(&quot;{{asset('public/img/picture')}}/{{$one}}&quot;);">
                                                            </div>
                                                        </span>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3aOPO" data-qa-id="adview_spotlight_description_container">
                                <div class="_14taM">
                                    <div data-qa-id="adview_title">
                                        <h1 class="dgtty">{{$admob['subject']}}</h1>
                                    </div>
                                    <div class="eVLNz" data-qa-id="adview_price">
                                        <div class="_386c2">
                                            <!-- react-text: 5926 -->
                                            <!-- /react-text --><span class="_1F5u3">
                                                <!-- react-text: 5928 -->{{$admob['price']}}
                                                <!-- /react-text -->
                                                <!-- react-text: 5929 --> €
                                                <!-- /react-text --></span>
                                            <div class="_1fCKz"></div>
                                        </div>
                                    </div>
                                    <div data-qa-id="adview_date">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{$admob['create_time']}}</font>
                                        </font>
                                    </div>
                                </div>
                                <div class="_3Q4C8 FtWCC" data-pub-id="clicked_annonce_saved_gallery">
                                    <div>
                                        <div class="_3C4to">
                                            <div class="_2152u"><span class="_1vK7W" name="heartoutline"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                        </path>
                                                    </svg></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- react-empty: 5939 -->
                        <div class="oykX4 _240CF sMU1c _12oyt _1wREY _1dt4D">
                            <div>
                                <div class="apn-blt"><span id="blt1-m" class="teal-apn"></span><span id="blt1-l"
                                        class="teal-apn"></span><span id="blt2-l" class="teal-apn"></span><span
                                        id="blt1-xl" class="teal-apn"></span><span id="blt2-xl" class="teal-apn"></span>
                                </div>
                            </div>
                        </div>
                        <div class="oykX4 sMU1c _12oyt _1wREY _1dt4D">
                            <div class="Gowqx" style="font-size:15px;font-weight:700">Description</div>
                            <div>
                                <div data-qa-id="adview_description_container">
                                    <div><span class="content-CxPmi">{{$admob['body']}}</span>
                                    </div>
                                    <div class="_3ey2y">
                                        <div class="_2DA_H trackable" data-qa-id="adview_description_link_report"><a
                                                href="#">
                                                <div class="_3jAsY">
                                                    <div class="_3KcVT"><span class="_1vK7W" name="warning"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M23.84 20.75L13 2.09a1.16 1.16 0 0 0-2 0L.16 20.75a1.17 1.17 0 0 0 1 1.75h21.67a1.17 1.17 0 0 0 1.01-1.75zM12 19a1.17 1.17 0 1 1 1.16-1.16A1.16 1.16 0 0 1 12 19zm1.16-5.85a1.17 1.17 0 0 1-2.33 0v-2.32a1.17 1.17 0 0 1 2.33 0z">
                                                                </path>
                                                            </svg></span></div>
                                                    <div class="_1MBDf">Signaler un abus</div>
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apn-pv"><span id="pv-s" class="teal-apn"></span></div>
                        <div class="oykX4 sMU1c _12oyt _1wREY _1dt4D">
                            <div class="Gowqx" style="font-size: 15px;font-weight:700">Localisation</div>
                            <div>
                                <div class="_2CWtv" data-qa-id="adview_location_container">
                                    <div class="trackable">
                                        <div class="LazyLoad is-visible">
                                            <div class="_2-Wn4" data-qa-id="adview_location_map">
                                                <div class="sF8mr" data-qa-id="locationMap_container">
                                                    <div id="map"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1aCZv" data-qa-id="adview_location_informations">
                                            <span>{{$admob['adress']}}</span>
                                            <div class="_2eUnk"><button
                                                    class="_2sNbI _1xIyN _2BP2c UbPim mapmodal_button">
                                                    <!-- react-text: 5978 -->Voir sur la carte
                                                    <!-- /react-text --></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oykX4 _240CF sMU1c _12oyt _1wREY _1dt4D">
                            <div>
                                <div class="GaC6X _2dGRO">
                                    <div class="VJs40">
                                        <div class="_3aIph trackable" data-qa-id="adview_share_print">
                                            <div class="_1IOEw"><span class="_1vK7W" name="print"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M20.4 7.11H3.6A3.63 3.63 0 0 0 0 10.78v4.89a2.43 2.43 0 0 0 2.4 2.44h2.4v2.45A2.43 2.43 0 0 0 7.2 23h9.6a2.43 2.43 0 0 0 2.4-2.44v-2.45h2.4a2.43 2.43 0 0 0 2.4-2.44v-4.89a3.63 3.63 0 0 0-3.6-3.67zm-3.6 12.22a1.22 1.22 0 0 1-1.2 1.23H8.4a1.22 1.22 0 0 1-1.2-1.23v-4.89h9.6zM20.4 12a1.22 1.22 0 1 1 1.2-1.22A1.21 1.21 0 0 1 20.4 12zM6 5.89h12a1.21 1.21 0 0 0 1.2-1.22V2.22A1.21 1.21 0 0 0 18 1H6a1.21 1.21 0 0 0-1.2 1.22v2.45A1.21 1.21 0 0 0 6 5.89z">
                                                        </path>
                                                    </svg></span></div>
                                            <div class="aN-Dk">Imprimer</div>
                                        </div>
                                        <div class="_3aIph _3IZzv trackable" data-qa-id="adview_share_email">
                                            <div class="_1IOEw"><span class="_1vK7W" name="mail"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M21.6 2.5H2.4A2.39 2.39 0 0 0 0 4.88v14.24a2.4 2.4 0 0 0 2.4 2.38h19.2a2.4 2.4 0 0 0 2.4-2.38V4.88a2.4 2.4 0 0 0-2.4-2.38zm-.48 5.05l-8.48 5.25a1.27 1.27 0 0 1-1.28 0L2.88 7.55A1 1 0 1 1 4 5.84l8 5 8-5a1 1 0 1 1 1.08 1.71z">
                                                        </path>
                                                    </svg></span></div>
                                            <div class="aN-Dk">Partager par mail</div>
                                        </div>
                                        <div class="_3aIph _3AFi4 trackable" data-qa-id="adview_share_facebook">
                                            <div>
                                                <div class="_1IOEw"><span class="_1vK7W" name="facebook"><svg
                                                            viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                            <path
                                                                d="M22.68 0H1.32A1.32 1.32 0 0 0 0 1.32v21.36A1.32 1.32 0 0 0 1.32 24h11.51v-9.28H9.7v-3.63h3.13V8.41c0-3.1 1.88-4.79 4.65-4.79H18.87c.47 0 .93.06 1.4.11V7h-1.92a3 3 0 0 0-.71.07c-.87.21-1.07.84-1.07 1.69v2.31h3.6l-.47 3.63h-3.15V24h6.13A1.32 1.32 0 0 0 24 22.68V1.32A1.32 1.32 0 0 0 22.68 0z">
                                                            </path>
                                                        </svg></span></div>
                                                <div class="aN-Dk">Partager sur facebook</div>
                                            </div>
                                        </div>
                                        <div class="_3p0gz">
                                            <div class="_3aIph trackable" data-qa-id="adview_share_rights"><a
                                                    rel="nofollow"
                                                    href="https://www.leboncoin.fr/dc/vos_droits_et_obligations"
                                                    title="Vos droits et obligations">
                                                    <div class="_1IOEw"><span class="_1vK7W" name="info"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm1.2 16.8A1.29 1.29 0 0 1 12 18a1.29 1.29 0 0 1-1.2-1.2V12a1.29 1.29 0 0 1 1.2-1.2 1.29 1.29 0 0 1 1.2 1.2zm-.6-7.44a1.33 1.33 0 0 1-1.68-.48 1.33 1.33 0 0 1 .48-1.68 1.24 1.24 0 1 1 1.2 2.16z">
                                                                </path>
                                                            </svg></span></div>
                                                    <div class="aN-Dk">Vos droits et obligations</div>
                                                </a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- react-empty: 6014 -->
                        <div class="oykX4 sMU1c _12oyt _1wREY _1dt4D">
                            <div class="Gowqx">
                                <div>Ces annonces peuvent vous intéresser</div>
                            </div>
                            <div>
                                <ul class="_3stQa">
                                    @foreach ($similars as $one)
                                    <li class="_3D9GO">
                                    <a class="xA__p trackable" title="Taille haie"
                                    href="{{URL::to('frontoffice/aditems')}}/{{$one['id']}}">
                                        <figure class="_2nHTx">
                                            <div class="_5ZXm_">
                                                <div class="_2ge_d">
                                                    <img
                                                        src="{{asset('public/img/picture')}}/{{explode(",",$one['camera'])[0]}}"
                                                        class="_29EFB" alt="Taille haie"></div>
                                                <figcaption class="_1CCIO"><span class="_1vK7W"
                                                        name="camera_old"><svg height="32" width="32"
                                                            viewBox="0 0 32 32" class="_1f3Hk" focusable="false">
                                                            <g fill="none">
                                                                <circle cx="16" cy="16" fill="#000" r="4.267">
                                                                </circle>
                                                                <path
                                                                    d="M12 2.667L9.56 5.333H5.333A2.675 2.675 0 0 0 2.667 8v16c0 1.467 1.2 2.667 2.666 2.667h21.334c1.466 0 2.666-1.2 2.666-2.667V8c0-1.467-1.2-2.667-2.666-2.667H22.44L20 2.667h-8z"
                                                                    fill="#000"></path>
                                                                <path d="M0 0h32v32H0z"></path>
                                                            </g>
                                                        </svg></span>
                                                    <div class="_1pYJt">{{count(explode(",",$one['camera']))}}</div>
                                                </figcaption>
                                            </div>
                                        </figure>
                                        <div class="_34QNM">
                                            <div class="_3RDHA">Taille haie</div>
                                            <p class="_1-aXU">Saint-Médard-en-Jalles</p>
                                            <div class="_386c2 _2Fe1I"><span class="_1F5u3">
                                                    <!-- react-text: 6222 -->{{$one['price']}}
                                                    <!-- /react-text -->
                                                    <!-- react-text: 6223 --> €
                                                    <!-- /react-text --></span>
                                                <div class="_1fCKz"></div>
                                            </div>
                                        </div>
                                    </a>
                                  </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </section>
                    <section class="_1_H-h">
                        <div class="_2-Dyg _2-42k">
                            <div class="">
                                <div>
                                    <div data-qa-id="adview_contact_container">
                                        <div>
                                            <div class="_1PTTu">
                                                <div class="_16dbL"><a class="_27Fyp trackable"
                                                        href="/profil/c87c8c5b-9aea-4f18-bdda-b1785cbe7b91/offres">
                                                        <div class="_1tuml"><span class="_1vK7W _2DvKy"
                                                                name="userprofile"><svg viewBox="0 0 200 200"
                                                                    focusable="false">
                                                                    <circle cx="100" cy="100" fill="#F3F7FA" r="100">
                                                                    </circle>
                                                                    <path
                                                                        d="M141.9 128.3c-27.1-1.4-79.3-.5-97.5-.1-7.9.2-15.6 2.6-22 7.2-4 2.9-7.9 6.9-10.2 12.3C29.1 178.9 62.1 200 100 200c13.3 0 26.4-2.6 38.6-7.7 8.3-3.7 16.1-8.5 23.3-14.1 2.5-12.9 7.1-48.5-20-49.9z"
                                                                        fill="#BCC2D0"></path>
                                                                    <path
                                                                        d="M75.3 105.5l-.3 35.7c0 2.9.6 5.8 1.8 8.5l.2.5c3.6 8.2 12.1 13.1 21 12.1 4.2-.5 8.2-2.2 11.4-5 6.2-5.4 10.1-12.9 11.2-21l1.6-11.6-46.9-19.2z"
                                                                        fill="#E1E4EB"></path>
                                                                    <path
                                                                        d="M118.5 144.5c.7-1.5 1.4-3.8 2.2-8.3l1.6-11.6-47-19.1 16.3 22.3c3.4 4.7 7.6 8.8 12.5 12 4.2 2.8 9.4 5.2 14.4 4.7z"
                                                                        fill="#BCC2D0"></path>
                                                                    <path
                                                                        d="M148.5 82.1c-1.8 25-10.4 69.7-45 51.6 0 0-12.3-5.2-22.7-19.1-2.9-3.9-7.1-11.5-8.7-16.1L67.7 85c-6.1-16.6-3.3-35.4 8-49.1C82 28.2 95 22.2 108 22.3c22.8.2 31.2 10.4 36.1 24 3.2 8.8 5 26.5 4.4 35.8z"
                                                                        fill="#E1E4EB"></path>
                                                                    <path
                                                                        d="M82 96.5c-1.5-5.3-10 2.1-10 2.1.9 2.4 2 4.7 3.2 7v3.1c5.2-1.6 8.3-7 6.8-12.2z"
                                                                        fill="#BCC2D0"></path>
                                                                    <path
                                                                        d="M83.3 11.4c-28.2 7.8-44.7 37.3-36.8 65.7 4.2 15.1 14.8 27.7 29.1 34.3v-10.7l4.5-9s38.5-14.6 53.2-49.3c0 0 5.4 15.1 11.8 27.6 1.2 2.5 2.5 4.9 3.7 7.1.1-.5.3-1 .4-1.5 2.1-8.9 2-18.1-.5-26.9-7.8-28.5-37.1-45.1-65.4-37.3z"
                                                                        fill="#97A0B6"></path>
                                                                    <circle cx="77.7" cy="95.8" fill="#E1E4EB" r="9.9">
                                                                    </circle>
                                                                </svg></span></div>
                                                    </a>
                                                    <div class="_3BlS7"><a class="_27Fyp trackable" href="#">
                                                            <div class="T5Lvz">{{$admob['name']}}</div>
                                                        </a><a class="_27Fyp trackable" href="#"><span class="_1Lgbc">
                                                                <!-- react-text: 6201 -->5
                                                                <!-- /react-text -->
                                                                <!-- react-text: 6202 --> annonces en ligne
                                                                <!-- /react-text --></span></a></div>
                                                </div>
                                            </div>
                                            <div class="_2V0tm"><span class="_1vK7W _2Irmy" name="clock"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M17.24 15.07l-4.64-2.76V6.86a.85.85 0 0 0-.86-.86h-.08a.85.85 0 0 0-.86.86v5.67a1.2 1.2 0 0 0 .59 1l5 3a.86.86 0 1 0 .87-1.48z">
                                                        </path>
                                                        <path
                                                            d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm0 21.6a9.6 9.6 0 1 1 9.6-9.6 9.6 9.6 0 0 1-9.6 9.6z">
                                                        </path>
                                                    </svg></span><!-- react-text: 6319 -->Répond généralement dans les 3
                                                heures
                                                <!-- /react-text -->
                                            </div>
                                        </div>
                                        <div class="YTu2J">
                                            <div>
                                                <div class="_2sPVF" data-pub-id="clicknumero">
                                                    <div>
                                                        <div>

                                                            <button class="_2sNbI _1xIyN GXQkc _2xk2l" id="phone_click"
                                                                data-qa-id="adview_button_phone_contact"><span
                                                                    class="_1vK7W _1eOK1 QKFCn" name="phone"><svg
                                                                        viewBox="0 0 24 24" data-name="Calque 1"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M21.65 16.37l-3.4-.37a2.69 2.69 0 0 0-2.19.76l-2.45 2.44a20.11 20.11 0 0 1-8.81-8.81l2.47-2.47A2.61 2.61 0 0 0 8 5.73l-.35-3.37A2.68 2.68 0 0 0 5 0H2.68A2.66 2.66 0 0 0 0 2.77 22.71 22.71 0 0 0 21.23 24 2.66 2.66 0 0 0 24 21.32V19a2.64 2.64 0 0 0-2.35-2.63z">
                                                                        </path>
                                                                    </svg></span><!-- react-text: 6052 -->Voir le numéro
                                                                <!-- /react-text --></button>
                                                            <div id="number_click" style="display:none"><span
                                                                    class="_28rnK"><a class="_2sNbI ObuDQ GXQkc _2BP2c"
                                                                        href="tel:{{$admob['phone']}}" title="Appeler"
                                                                        data-qa-id="adview_number_phone_contact">
                                                                        <!-- react-text: 3469 -->{{$admob['phone']}}
                                                                        <!-- /react-text --><span class="BidkV"
                                                                            data-tip="Opposé au démarchage commercial"
                                                                            data-place="left" currentitem="false"><span
                                                                                class="_1vK7W K5CQx"
                                                                                name="salesprospecting"><svg
                                                                                    viewBox="0 0 24 24"
                                                                                    data-name="Calque 1"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M23.67 22.05L1.87.43a1.08 1.08 0 0 0-1.54 0A1 1 0 0 0 .33 2l.67.71 3.4 3.37v13.47a2.2 2.2 0 0 0 2.21 2.17h13.54l2 2a1.06 1.06 0 0 0 1.54 0 1.16 1.16 0 0 0-.02-1.67zm-14.2-11l2 1.95H10a1.17 1.17 0 0 1-1.08-1 .86.86 0 0 1 .55-.92zm.55 6.3a1.1 1.1 0 0 1-1.1-1.09A1.18 1.18 0 0 1 10 15.2h3.63l2.2 2.18zM16.62 10.86a1.17 1.17 0 0 1 1.1 1.14 1.31 1.31 0 0 1-.44.86l4.85 4.78V7.38a2.14 2.14 0 0 0-.66-1.52L16.18.65A2.2 2.2 0 0 0 14.64 0H6.72a2.39 2.39 0 0 0-1.66.76l10.24 10.1zm-2.2-4.34V1.63l6.06 6h-5a1.09 1.09 0 0 1-1.06-1.11z">
                                                                                    </path>
                                                                                </svg></span></span></a></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_2sPVF trackable"
                                                    data-qa-id="adview_button_contact_contact">
                                                    <div>
                                                        <a
                                                            href="{{URL::to('frontoffice/aditems/sendmessage')}}/{{$admob['user_id']}}/{{$admob['name']}}">
                                                            <button class="_2sNbI _1xIyN GXQkc _2xk2l"
                                                                id="message_click" style="background:#f56b2a"><span
                                                                    class="_1vK7W _1eOK1 QKFCn" name="message"><svg
                                                                        viewBox="0 0 24 24" data-name="Calque 1"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M21.6 0H2.4A2.41 2.41 0 0 0 0 2.4v14.4a2.41 2.41 0 0 0 2.4 2.4h16.8L24 24V2.4A2.41 2.41 0 0 0 21.6 0zM18 14.4h-7.2a1.29 1.29 0 0 1-1.2-1.2 1.29 1.29 0 0 1 1.2-1.2H18a1.29 1.29 0 0 1 1.2 1.2 1.29 1.29 0 0 1-1.2 1.2zm0-3.6H6a1.29 1.29 0 0 1-1.2-1.2A1.29 1.29 0 0 1 6 8.4h12a1.29 1.29 0 0 1 1.2 1.2 1.29 1.29 0 0 1-1.2 1.2zm0-3.6H6A1.29 1.29 0 0 1 4.8 6 1.29 1.29 0 0 1 6 4.8h12A1.29 1.29 0 0 1 19.2 6 1.29 1.29 0 0 1 18 7.2z">
                                                                        </path>
                                                                    </svg></span><span>Envoyer un
                                                                    message</span></button>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="trackable"><button class="_2sNbI ObuDQ GXQkc _2xk2l _2SmEn"
                                                        data-qa-id="offer-button" style="display: none"><span
                                                            class="_1vK7W _1eOK1 QKFCn" name="deliverylbcoutline"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M24 4.77v-.1a1 1 0 0 0-.07-.23v-.05c0-.05 0 0 0 0a.79.79 0 0 0-.17-.2v-.05a.94.94 0 0 0-.37-.14l-11-3.9a.91.91 0 0 0-.67 0L.59 4.42a.88.88 0 0 0-.59.83V17a.92.92 0 0 0 .49.8l11.72 6.11a1 1 0 0 0 .45.11.87.87 0 0 0 .49-.14l10.41-6.24a.91.91 0 0 0 .44-.77v-12-.1zm-11.87-2.9L20.76 5l-2.89 1.41L9.3 3zm-.39 19.72l-9.87-5.15V6.63l9.87 4zm.9-12.54L3.38 5.28l3.44-1.34 8.89 3.56zm9.49 7.3l-8.52 5.11V10.6L17 8.9v3a.94.94 0 0 0 1.87 0V8l3.26-1.7z">
                                                                </path>
                                                            </svg></span><!-- react-text: 6313 -->Faire une offre
                                                        <!-- /react-text --></button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- react-empty: 6058 -->
                    </section>
                </section>
            </section>
        </div>
        <div class="modal _3vig1 globalContent contentAfterOpen" id="map_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" style="height:500px">
                            <div id="dialog_map" style="height:100%"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

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
    <script type="text/javascript" src="{{asset('js/image-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Pagination.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXAEJOmp7v7uXD-Vrmaw6xjBl_ZExIn7g&libraries=places">
    </script>
</body>
<script>
    var poly;
    var address ="{{$admob['adress']}}";

    function initAutocomplete() {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'address': address
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var Lat = results[0].geometry.location.lat();
                console.log(Lat);
                var Lng = results[0].geometry.location.lng();
                var myLatlng = new google.maps.LatLng(Lat, Lng);
                var myOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(Lat, Lng)
                };
                var map = new google.maps.Map(
                    document.getElementById("map"), myOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    title: address
                });
                marker.setMap(map);
            } else {
                alert("Something got wrong " + status);
            }
        });
        google.maps.event.addDomListener(window, "load", initAutocomplete);

    }
    function dialog_map_init() {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'address': address
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var Lat = results[0].geometry.location.lat();
                console.log(Lat);
                var Lng = results[0].geometry.location.lng();
                var myLatlng = new google.maps.LatLng(Lat, Lng);
                var myOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(Lat, Lng)
                };
                var map = new google.maps.Map(
                    document.getElementById("dialog_map"), myOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    title: address
                });
                marker.setMap(map);
            } else {
                alert("Something got wrong " + status);
            }
        });
        // google.maps.event.addDomListener(window, "load", dialog_map_init);

    }

    $(document).ready(function () {

        initAutocomplete();

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
    $('.mapmodal_button').click(function () {
        dialog_map_init();
        $('#map_modal').modal('toggle');
    })

</script>

@yield('after-script')

</html>
