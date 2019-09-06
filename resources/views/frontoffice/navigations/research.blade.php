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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
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
    <section>
        <div class="_3p2mW">
            @if(empty($researches))
            <div class="_3Cgb0">
                <div class="_-iQiq">
                    <img src="../img/m_research.PNG" alt="Vous n‘avez pas encore de recherche sauvegardée"
                        title="Vous n‘avez pas encore de recherche sauvegardée" class="_1hKxU">
                    <h1 class="_1XU38">Vous n‘avez pas encore de recherche sauvegardée</h1>
                    <span class="_28rnK"><a class="_2sNbI _1xIyN _2xk2l _2yLrh trackable" href="{{route('viewadmob')}}"
                            type="submit" alt="Créer une nouvelle recherche" title="Créer une nouvelle recherche"
                            data-qa-id="noresult-cta-button">Créer une nouvelle recherche</a></span>
                    <img src="../img/research.PNG" alt="" class="gnz2y">
                </div>

            </div>
            @else
            <div>
                <div class="_1H6Hh">
                    <div class="_1i0e0 _3tW0B">
                        <div class="_40Lw2">
                            <ul>
                            @foreach($researches as $item)
                            <li>
                            <div class="CnKEI">
                                <div class="_11jYC" data-qa-id="searchitem_container">

                                    <div class="himq3">
                                        <div class="_2yRsc">
                                            <div>
                                                <div class="MVavy" data-qa-id="searchitem_title">{{$item['category']}}</div>
                                                <div class="_1jlTW">{{$item['save_time']}}</div>
                                            </div>
                                            <div>
                                                <div class="_2Q3N2" style="display:none">
                                                    <div class="_21VUt">
                                                        <div class="_3nNLP">
                                                            <div class="_3q-U8 _33Liv">
                                                                <div class="_3z1kq _33Liv _2-I2D"></div>
                                                            </div>
                                                            <div class="_2DOX_ _33Liv">M’alerter par email</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2yRsc" style="display:none">
                                            <div class="_2ZplW">Nautisme, Centre</div>
                                        </div>
                                        <div class="_2yRsc _39IoG">
                                            <div class="_2yRsc"><span class="_28Nf2"><span class="_28rnK"><a
                                                            class="_2sNbI _1xIyN _2xk2l"
                                                           @if($item['r_state'] == 0) href="{{route('viewadmob')}}" @else onclick="search({{$item['category']}});" @endif><span
                                                                data-qa-id="searchitem_preview">Voir les
                                                                annonces</span></a></span></span><span class="_28Nf2">
                                                    <div class="oPgaL"><button
                                                            class="_2sNbI _1xIyN _2BP2c _3uIg7 _3jQA5"><span
                                                                class="_1vK7W _2jG3V QKFCn" name="pen"><svg
                                                                    viewBox="0 0 24 24" data-name="Calque 1"
                                                                    focusable="false">
                                                                    <path
                                                                        d="M.2 18.8a.66.66 0 0 0-.2.48v4a.66.66 0 0 0 .67.72h4.05a.65.65 0 0 0 .47-.2L19.74 9.26l-5-5zM23.61 3.51L20.49.39a1.33 1.33 0 0 0-1.88 0l-2.44 2.44 5 5 2.44-2.44a1.33 1.33 0 0 0 0-1.88z">
                                                                    </path>
                                                                </svg></span></button></div>
                                                    <div class="_2Q3N2" style="display:none"><button class="_2sNbI _1xIyN _2BP2c"><span
                                                                class="_1vK7W _1eOK1 QKFCn" name="pen"><svg
                                                                    viewBox="0 0 24 24" data-name="Calque 1"
                                                                    focusable="false">
                                                                    <path
                                                                        d="M.2 18.8a.66.66 0 0 0-.2.48v4a.66.66 0 0 0 .67.72h4.05a.65.65 0 0 0 .47-.2L19.74 9.26l-5-5zM23.61 3.51L20.49.39a1.33 1.33 0 0 0-1.88 0l-2.44 2.44 5 5 2.44-2.44a1.33 1.33 0 0 0 0-1.88z">
                                                                    </path>
                                                                </svg></span><span data-qa-id="searchitem_edit">Modifier
                                                                la recherche</span></button></div>
                                                </span></div>
                                            <div><span class="_28Nf2">
                                                    <div class="oPgaL"><button
                                                            class="_2sNbI _2OSpJ _2BP2c _3uIg7 _3jQA5"><span
                                                                class="_1vK7W _2jG3V QKFCn" name="trash"><svg
                                                                    viewBox="0 0 24 24" data-name="Calque 1"
                                                                    focusable="false">
                                                                    <path
                                                                        d="M17.14 5.33H6.86A2.62 2.62 0 0 0 4.29 8v13.33A2.62 2.62 0 0 0 6.86 24h10.28a2.62 2.62 0 0 0 2.57-2.67V8a2.62 2.62 0 0 0-2.57-2.67zM19.71 1.33H16.5l-.91-.94a1.28 1.28 0 0 0-.9-.39H9.31a1.28 1.28 0 0 0-.9.39l-.91.94H4.29A1.32 1.32 0 0 0 3 2.67 1.31 1.31 0 0 0 4.29 4h15.42A1.31 1.31 0 0 0 21 2.67a1.32 1.32 0 0 0-1.29-1.34z">
                                                                    </path>
                                                                </svg></span></button></div>
                                                    <div class="_2Q3N2" data-id="{{$item['r_id']}}" id="delete_search"><button class="_2sNbI _2OSpJ _3E2ib"><span
                                                                class="_1vK7W _1eOK1 QKFCn" name="trash"><svg
                                                                    viewBox="0 0 24 24" data-name="Calque 1"
                                                                    focusable="false">
                                                                    <path
                                                                        d="M17.14 5.33H6.86A2.62 2.62 0 0 0 4.29 8v13.33A2.62 2.62 0 0 0 6.86 24h10.28a2.62 2.62 0 0 0 2.57-2.67V8a2.62 2.62 0 0 0-2.57-2.67zM19.71 1.33H16.5l-.91-.94a1.28 1.28 0 0 0-.9-.39H9.31a1.28 1.28 0 0 0-.9.39l-.91.94H4.29A1.32 1.32 0 0 0 3 2.67 1.31 1.31 0 0 0 4.29 4h15.42A1.31 1.31 0 0 0 21 2.67a1.32 1.32 0 0 0-1.29-1.34z">
                                                                    </path>
                                                                </svg></span><span
                                                                data-qa-id="searchitem_delete">Supprimer la
                                                                recherche</span></button></div>
                                                </span></div>
                                        </div>
                                    </div>
                                    <div class="oPgaL">
                                        <div class="himq3 jttNp">
                                            <div class="_2yRsc">
                                                <div class="_21VUt">
                                                    <div class="_3nNLP">
                                                        <div class="_3q-U8 _33Liv">
                                                            <div class="_3z1kq _33Liv _2-I2D"></div>
                                                        </div>
                                                        <div class="_2DOX_ _33Liv">M’alerter par email</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </li>
                              @endforeach
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
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


<script>
     function search(category) {
         console.log(category);
        }
  $('#delete_search').on('click',function(){
     var r_id=$(this).data('id');
    // console.log("test");
    var $this= $(this);
    $.ajax({
     type:"POST",
     url:"{{route('deleteresearch')}}",
     data:{
         r_id:r_id,
       _token:"{{csrf_token()}}",
     },
     dataType:"json",
     success:function(data){
        // console.log(data);
       if(data.error){
        alert(data.result);
       }
       else{
        console.log('test');
        $this.parents('li').remove();
        
       }
     },
     error:function(e){
         console.log(e);
     }

    });
  });

</script>
@yield('after-script')
</html>
