<div class="_1i0e0 _2siHy _38NUf _3aduF">
    <div class="_3Bswj">
        <div class="_3QHYd">
            <h3 class="_30A-8">Dites-nous en plus</h3>
        </div>
        <form id="clothing_upload_form">
            <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
            <div class="_3KRvg">
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="clothing_type">
                            <!-- react-text: 505 -->Univers
                            <!-- /react-text -->
                            <!-- react-text: 506 -->*
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ"><select data-qa-id="select_clothing_type" name="clothing_type"
                                    id="univer_list">
                                    <option value="">«Choisissez»</option>
                                    @foreach($univers as $univer)
                                    <option data-qa-id="select_clothing_type_0" value="{{$univer['id']}}">
                                        {{$univer['c_univer']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- react-text: 519 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0 wCERC">
                    <div><label class="_2GeK6" for="clothing_st">
                            <!-- react-text: 523 -->Taille
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ">
                                <select data-qa-id="select_clothing_st" name="clothing_st" id="cut_list">
                                    <option value="">«Choisissez»</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="_18n2o"><span class="TextLink-15wnQ">Guide des tailles</span></div>
                        <!-- react-text: 534 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="clothing_category">
                            <!-- react-text: 538 -->Type de vêtements
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ">
                                <select data-qa-id="select_clothing_category" name="clothing_category"
                                    id="category_list">
                                    <option value="">«Choisissez»</option>
                                    @foreach($types as $type)
                                    <option data-qa-id="select_clothing_category_0" value="{{$type['id']}}">
                                        {{$type['type_name']}}</option>
                                    @endforeach
                                </select></div>
                        </div><!-- react-text: 563 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="clothing_brand">
                            <!-- react-text: 567 -->Marque
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ"><select data-qa-id="select_clothing_brand" name="clothing_brand"
                                    id="brand_list">
                                    <option value="">«Choisissez»</option>
                                    @foreach($marks as $mark)
                                    <option data-qa-id="select_clothing_brand_0" value="{{$mark['id']}}">
                                        {{$mark['mark_name']}}</option>

                                    @endforeach
                                </select></div>
                        </div><!-- react-text: 678 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="clothing_color">
                            <!-- react-text: 682 -->Couleur
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ"><select data-qa-id="select_clothing_color" name="clothing_color"
                                    id="color_list">
                                    <option value="">«Choisissez»</option>
                                    @foreach($colors as $color)
                                    <option data-qa-id="select_clothing_color_0" value="{{$color['id']}}">
                                        {{$color['color']}}</option>
                                    @endforeach
                                </select></div>
                        </div><!-- react-text: 711 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="clothing_condition">
                            <!-- react-text: 715 -->Etat
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ">
                                <select data-qa-id="select_clothing_condition" name="clothing_condition"
                                    id="state_list">
                                    <option value="">«Choisissez»</option>
                                    @foreach($states as $state)
                                    <option data-qa-id="select_clothing_condition_0" value="{{$state['id']}}">
                                        {{$state['state']}}</option>


                                    @endforeach
                                </select></div>
                        </div><!-- react-text: 729 -->
                        <!-- /react-text -->
                    </div>
                </div>
            </div>
            <div class="_3lDmP">
                <div class="_39Nsm">
                    <div><button class="_2sNbI _1xIyN _2BP2c" type="button" data-qa-id="newad-button-prev-ad_params"
                            id="return_button">
                            <!-- react-text: 734 -->Retour
                            <!-- /react-text --></button></div>
                    <div>
                        <button class="_2sNbI _1xIyN _2xk2l" type="submit" data-qa-id="newad-button-next-ad_params">
                            <!-- react-text: 4414 -->Continuer
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
                <!-- react-text: 859 -->Mettez en valeur votre annonce !
                <!-- /react-text --><br><br><!-- react-text: 862 -->Plus il y a de détails, plus votre futur acheteur
                vous trouvera rapidement.
                <!-- /react-text --></span></div>
    </div>
</div>
<script>
    $(document).ready(function () {

       var univers=document.getElementById("univer_list");
       var univer_id
       univers.addEventListener("change",function(){
        univer_id=document.getElementById("univer_list").value;

        $.ajax({
         type:'POST',
         url:"{{route('getCuts')}}",
         data:{
              id:univer_id,
             _token:$('input[name=_token]').val(),
         },
         dataType:"json",
            success:function(data){
                console.log(data.result);   
                $('#cut_list').empty();
                for(var i=0;i<data.result.length;i++)
                {
                    $('#cut_list').append('<option data-qa-id="select_model_1" value="'+data.result[i]['id']+'">'+data.result[i]['cut_name']+'</option>');
                }
            
            }      
    });

       });


    });

</script>
