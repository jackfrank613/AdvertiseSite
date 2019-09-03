<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Jamii</title>
    <meta name="csrf_token" content="{{csrf_token()}}">
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
   
    @include('frontoffice.partials.header')
    {{-- @php
    print_r($favorites);exit;
    @endphp --}}
    <section>
        
        <div class="_3p2mW">
         @if(empty($favorites))
            <div class="_3Cgb0">
                <div class="_-iQiq">
                    <img src="../img/m_favorite.png" alt="Vous n‘avez pas encore de recherche sauvegardée"
                        title="Vous n‘avez pas encore de recherche sauvegardée" class="_1hKxU">
                    <h1 class="_1XU38">Vous n‘avez pas encore d‘annonce sauvegardée</h1>
                    <span class="_28rnK">
                        <a  href="{{route('viewadmob')}}" class="_2sNbI _1xIyN _2xk2l _2yLrh"  type="submit"
                            alt="Créer une nouvelle recherche" title="Créer une nouvelle recherche"
                            data-qa-id="noresult-cta-button">Créer une nouvelle recherche</a>
                        
                    </span>
                    <img src="../img/favorite.png" alt="" class="gnz2y">
                </div>

            </div>
         @else
            <div class="_1ccGJ">
                    <div class="izdOv">
                        <!-- react-empty: 33033 -->
                        <!-- react-empty: 33034 -->
                        <div>
                            <p class="xNKbX">Retrouvez vos annonces sauvegardées sur tous vos appareils.</p>
                            <p class="_2-NRA">Si l’annonce n’est plus active sur le site, elle disparaîtra automatiquement de votre
                                sélection.</p>
                            <ul>
                                @foreach($favorites as $item)
                                <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-" data-qa-id="aditem_container">
                                    <div class="_2KWbn"><button class="_2JQAM WjL3t _3FDa9 EsTCR _3YAVg" data-id="{{$item['f_id']}}" type="button"><span
                                                class="_1vK7W _2jG3V _10dvK" name="trash"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                    focusable="false">
                                                    <path
                                                        d="M17.14 5.33H6.86A2.62 2.62 0 0 0 4.29 8v13.33A2.62 2.62 0 0 0 6.86 24h10.28a2.62 2.62 0 0 0 2.57-2.67V8a2.62 2.62 0 0 0-2.57-2.67zM19.71 1.33H16.5l-.91-.94a1.28 1.28 0 0 0-.9-.39H9.31a1.28 1.28 0 0 0-.9.39l-.91.94H4.29A1.32 1.32 0 0 0 3 2.67 1.31 1.31 0 0 0 4.29 4h15.42A1.31 1.31 0 0 0 21 2.67a1.32 1.32 0 0 0-1.29-1.34z">
                                                    </path>
                                                </svg></span>
                                            <div class="_2Q3N2"><span class="_2m9dr">Supprimer l’annonce</span></div>
                                        </button>
                                        <div class="aYw-j"><button class="_2sNbI _1xIyN GXQkc _2BP2c _2nD74 trackable"><span
                                                    class="_1vK7W _1eOK1 QKFCn _10dvK" name="message"><svg viewBox="0 0 24 24"
                                                        data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M21.6 0H2.4A2.41 2.41 0 0 0 0 2.4v14.4a2.41 2.41 0 0 0 2.4 2.4h16.8L24 24V2.4A2.41 2.41 0 0 0 21.6 0zM18 14.4h-7.2a1.29 1.29 0 0 1-1.2-1.2 1.29 1.29 0 0 1 1.2-1.2H18a1.29 1.29 0 0 1 1.2 1.2 1.29 1.29 0 0 1-1.2 1.2zm0-3.6H6a1.29 1.29 0 0 1-1.2-1.2A1.29 1.29 0 0 1 6 8.4h12a1.29 1.29 0 0 1 1.2 1.2 1.29 1.29 0 0 1-1.2 1.2zm0-3.6H6A1.29 1.29 0 0 1 4.8 6 1.29 1.29 0 0 1 6 4.8h12A1.29 1.29 0 0 1 19.2 6 1.29 1.29 0 0 1 18 7.2z">
                                                        </path>
                                                    </svg></span><span class="CkIot">Envoyer un message</span></button></div>
                                    </div><a title="Lot 6 ans fille" class="clearfix trackable" rel="nofollow"
                                        href="{{URL::to('frontoffice/aditems')}}/{{$item['id']}}">
                                        <div class="_3dPxM"><span class="_a3cT">
                                                <div class="LazyLoad is-visible">
                                                    @php 
                                                     $images=explode(",",$item['camera']);
                                                    @endphp
                                                    <img class=""
                                                        src="{{asset('/img/picture')}}/{{$images[0]}}"
                                                        itemprop="image"
                                                        content="{{asset('/img/picture')}}/{{$images[0]}}"
                                                        alt="Lot 6 ans fille"></div>
                                            </span><span class="_2lY3w"><span class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                        width="24" viewBox="0 0 24 22" focusable="false">
                                                        <path
                                                            d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                            fill="#000"></path>
                                                    </svg></span><span>{{count($images)}}</span></span></div>
                                        <section class="_2EDA9">
                                            <div>
                                                <p class="_2tubl"><span itemprop="name" data-qa-id="aditem_title">{{$item['subject']}}</span>
                                                </p>
                                                <div class="_2OJ8g" itemprop="priceSpecification" itemscope=""
                                                    itemtype="http://schema.org/PriceSpecification" data-qa-id="aditem_price">
                                                    <meta itemprop="priceCurrency" content="EUR"><span class="_1JRvz"><span
                                                            itemprop="priceCurrency" content="EUR" class="_1NfL7">
                                                            <!-- react-text: 33070 -->{{$item['price']}}
                                                            <!-- /react-text -->
                                                            <!-- react-text: 33071 -->&nbsp;€
                                                            <!-- /react-text --></span></span></div>
                                            </div>
                                            <div>
                                                <p class="CZbT3" itemprop="alternateName" data-qa-id="aditem_category"
                                                    content="Vêtements">
                                                    <!-- react-text: 33074 -->{{$item['adName']}}
                                                    <!-- /react-text -->
                                                </p>
                                                <p class="_2qeuk" itemprop="availableAtOrFrom" data-qa-id="aditem_location">{{$item['adress']}}</p>
                                                    
                                                <p class="mAnae" itemprop="availabilityStarts" data-qa-id="listitem_date"
                                                    content="Hier, 21:04">{{$item['create_time']}}</p>
                                            </div>
                                        </section>
                                    </a>
                                   
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
          @endif
    </section>

    <footer>
    </footer>

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    @yield('after-script')
    <script>
        $('._2JQAM.WjL3t._3FDa9').click(function(){
            var id=$(this).data('id');
            console.log(id);
            var $this= $(this);
            $.ajax({
                type: "POST",
                url: "{{route('deletefavorite')}}",
                data: {
                    id: id,
                    _token:"{{csrf_token()}}",
                },
                dataType: "json",
                success: function (data) {
                      console.log(data);
                    if (!data.error) {
                        console.log("test");
                        $this.parents('li').remove();
                    } else {
                        alert(data.result);
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr);
                }
            });
           
        })
    </script>
</html>
