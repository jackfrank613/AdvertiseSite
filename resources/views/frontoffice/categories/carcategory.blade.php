
<div class="_1AsHn _2siHy _38NUf _3aduF">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <div class="_3Bswj">
        <div class="_3QHYd">
            <h3 class="_3MDJa _30A-8">Dites-nous en plus</h3>
        </div>
        <form method="post">
        @csrf
            <div class="_3KRvg">
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="brand">
                            <!-- react-text: 545 -->Marque
                            <!-- /react-text --></label>
                        <div class="_1etKl _32HCU">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ">
                            <select data-qa-id="select_brand" id="ddlist" name="brand">
                                    <!-- <option value="">«Choisissez»</option>
                                    <optgroup label="Marques courantes"> -->
                                        <option data-qa-id="select_brand_0" value="Audi">Audi</option>
                                        <option data-qa-id="select_brand_1" value="Bmw">Bmw</option>
                                        <option data-qa-id="select_brand_2" value="Citroen">Citroen</option>
                                        <option data-qa-id="select_brand_3" value="Fiat">Fiat</option>
                                        <option data-qa-id="select_brand_4" value="Ford">Ford</option>
                                        <option data-qa-id="select_brand_5" value="Mercedes">Mercedes</option>
                                        <option data-qa-id="select_brand_6" value="Opel">Opel</option>
                                        <option data-qa-id="select_brand_7" value="Peugeot">Peugeot</option>
                                        <option data-qa-id="select_brand_8" value="Renault">Renault</option>
                                        <option data-qa-id="select_brand_9" value="Volkswagen">Volkswagen</option>
                                    <!-- </optgroup>
                                    <optgroup label="Autres marques"> -->
                                        <option data-qa-id="select_brand_0" value="Abarth">Abarth</option>
                                        <option data-qa-id="select_brand_1" value="Aleko">Aleko</option>
                                        <option data-qa-id="select_brand_2" value="Alfa Romeo">Alfa Romeo</option>
                                        <option data-qa-id="select_brand_3" value="Alpina">Alpina</option>
                                        <option data-qa-id="select_brand_4" value="Aro">Aro</option>
                                        <option data-qa-id="select_brand_5" value="Artega">Artega</option>
                                        <option data-qa-id="select_brand_6" value="Aston Martin">Aston Martin</option>
                                        <option data-qa-id="select_brand_7" value="Autobianchi">Autobianchi</option>
                                        <option data-qa-id="select_brand_8" value="Auverland">Auverland</option>
                                        <option data-qa-id="select_brand_9" value="Bentley">Bentley</option>
                                        <option data-qa-id="select_brand_10" value="Bertone">Bertone</option>
                                        <option data-qa-id="select_brand_11" value="Bluecar Groupe Bollore">Bluecar
                                            Groupe Bollore</option>
                                        <option data-qa-id="select_brand_12" value="Buick">Buick</option>
                                        <option data-qa-id="select_brand_13" value="Cadillac">Cadillac</option>
                                        <option data-qa-id="select_brand_14" value="Chevrolet">Chevrolet</option>
                                        <option data-qa-id="select_brand_15" value="Chrysler">Chrysler</option>
                                        <option data-qa-id="select_brand_16" value="Corvette">Corvette</option>
                                        <option data-qa-id="select_brand_17" value="Dacia">Dacia</option>
                                        <option data-qa-id="select_brand_18" value="Daewoo">Daewoo</option>
                                        <option data-qa-id="select_brand_19" value="Daihatsu">Daihatsu</option>
                                        <option data-qa-id="select_brand_20" value="Dangel">Dangel</option>
                                        <option data-qa-id="select_brand_21" value="De La Chapelle">De La Chapelle
                                        </option>
                                        <option data-qa-id="select_brand_22" value="Dodge">Dodge</option>
                                        <option data-qa-id="select_brand_23" value="Donkervoort">Donkervoort</option>
                                        <option data-qa-id="select_brand_24" value="Dr">Dr</option>
                                        <option data-qa-id="select_brand_25" value="Ds">Ds</option>
                                        <option data-qa-id="select_brand_26" value="Ferrari">Ferrari</option>
                                        <option data-qa-id="select_brand_27" value="Fisker">Fisker</option>
                                        <option data-qa-id="select_brand_28" value="Gme">Gme</option>
                                        <option data-qa-id="select_brand_29" value="Honda">Honda</option>
                                        <option data-qa-id="select_brand_30" value="Hummer">Hummer</option>
                                        <option data-qa-id="select_brand_31" value="Hyundai">Hyundai</option>
                                        <option data-qa-id="select_brand_32" value="Infiniti">Infiniti</option>
                                        <option data-qa-id="select_brand_33" value="Innocenti">Innocenti</option>
                                        <option data-qa-id="select_brand_34" value="Isuzu">Isuzu</option>
                                        <option data-qa-id="select_brand_35" value="Iveco">Iveco</option>
                                        <option data-qa-id="select_brand_36" value="Jaguar">Jaguar</option>
                                        <option data-qa-id="select_brand_37" value="Jeep">Jeep</option>
                                        <option data-qa-id="select_brand_38" value="Kia">Kia</option>
                                        <option data-qa-id="select_brand_39" value="Lada">Lada</option>
                                        <option data-qa-id="select_brand_40" value="Lamborghini">Lamborghini</option>
                                        <option data-qa-id="select_brand_41" value="Lancia">Lancia</option>
                                        <option data-qa-id="select_brand_42" value="Land Rover">Land Rover</option>
                                        <option data-qa-id="select_brand_43" value="Lexus">Lexus</option>
                                        <option data-qa-id="select_brand_44" value="Lotus">Lotus</option>
                                        <option data-qa-id="select_brand_45" value="Mahindra">Mahindra</option>
                                        <option data-qa-id="select_brand_46" value="Maruti">Maruti</option>
                                        <option data-qa-id="select_brand_47" value="Maserati">Maserati</option>
                                        <option data-qa-id="select_brand_48" value="Mastretta">Mastretta</option>
                                        <option data-qa-id="select_brand_49" value="Maybach">Maybach</option>
                                        <option data-qa-id="select_brand_50" value="Mazda">Mazda</option>
                                        <option data-qa-id="select_brand_51" value="Mclaren">Mclaren</option>
                                        <option data-qa-id="select_brand_52" value="Mega">Mega</option>
                                        <option data-qa-id="select_brand_53" value="Mg">Mg</option>
                                        <option data-qa-id="select_brand_54" value="Mia">Mia</option>
                                        <option data-qa-id="select_brand_55" value="Mini">Mini</option>
                                        <option data-qa-id="select_brand_56" value="Mitsubishi">Mitsubishi</option>
                                        <option data-qa-id="select_brand_57" value="Morgan">Morgan</option>
                                        <option data-qa-id="select_brand_58" value="Nissan">Nissan</option>
                                        <option data-qa-id="select_brand_59" value="Pgo">Pgo</option>
                                        <option data-qa-id="select_brand_60" value="Piaggio">Piaggio</option>
                                        <option data-qa-id="select_brand_61" value="Polski/fso">Polski/fso</option>
                                        <option data-qa-id="select_brand_62" value="Pontiac">Pontiac</option>
                                        <option data-qa-id="select_brand_63" value="Porsche">Porsche</option>
                                        <option data-qa-id="select_brand_64" value="Proton">Proton</option>
                                        <option data-qa-id="select_brand_65" value="Rolls-royce">Rolls-royce</option>
                                        <option data-qa-id="select_brand_66" value="Rover">Rover</option>
                                        <option data-qa-id="select_brand_67" value="Saab">Saab</option>
                                        <option data-qa-id="select_brand_68" value="Santana">Santana</option>
                                        <option data-qa-id="select_brand_69" value="Seat">Seat</option>
                                        <option data-qa-id="select_brand_70" value="Shuanghuan">Shuanghuan</option>
                                        <option data-qa-id="select_brand_71" value="Skoda">Skoda</option>
                                        <option data-qa-id="select_brand_72" value="Smart">Smart</option>
                                        <option data-qa-id="select_brand_73" value="Ssangyong">Ssangyong</option>
                                        <option data-qa-id="select_brand_74" value="Subaru">Subaru</option>
                                        <option data-qa-id="select_brand_75" value="Suzuki">Suzuki</option>
                                        <option data-qa-id="select_brand_76" value="Talbot">Talbot</option>
                                        <option data-qa-id="select_brand_77" value="Tavria">Tavria</option>
                                        <option data-qa-id="select_brand_78" value="Tesla">Tesla</option>
                                        <option data-qa-id="select_brand_79" value="Toyota">Toyota</option>
                                        <option data-qa-id="select_brand_80" value="Tvr">Tvr</option>
                                        <option data-qa-id="select_brand_81" value="Venturi">Venturi</option>
                                        <option data-qa-id="select_brand_82" value="Volvo">Volvo</option>
                                        <option data-qa-id="select_brand_83" value="Autres">Autres</option>
                                    <!-- </optgroup> -->
                                </select></div>
                        </div><!-- react-text: 650 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="model">
                            <!-- react-text: 654 -->Modèle
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ">
                          <select data-qa-id="select_model" id="model_list" name="model"><option value="">«Choisissez»</option><option data-qa-id="select_model_0" value="100">100</option><option data-qa-id="select_model_1" value="200">200</option><option data-qa-id="select_model_2" value="80">80</option><option data-qa-id="select_model_3" value="90">90</option><option data-qa-id="select_model_4" value="A1">A1</option><option data-qa-id="select_model_5" value="A2">A2</option><option data-qa-id="select_model_6" value="A3">A3</option><option data-qa-id="select_model_7" value="A4">A4</option><option data-qa-id="select_model_8" value="A5">A5</option><option data-qa-id="select_model_9" value="A6">A6</option><option data-qa-id="select_model_10" value="A6/s6">A6/s6</option><option data-qa-id="select_model_11" value="A7">A7</option><option data-qa-id="select_model_12" value="A8">A8</option><option data-qa-id="select_model_13" value="Allroad">Allroad</option><option data-qa-id="select_model_14" value="Coupe">Coupe</option><option data-qa-id="select_model_15" value="Q2">Q2</option><option data-qa-id="select_model_16" value="Q3">Q3</option><option data-qa-id="select_model_17" value="Q5">Q5</option><option data-qa-id="select_model_18" value="Q7">Q7</option><option data-qa-id="select_model_19" value="R8">R8</option><option data-qa-id="select_model_20" value="Rs3">Rs3</option><option data-qa-id="select_model_21" value="Rs4">Rs4</option><option data-qa-id="select_model_22" value="Rs5">Rs5</option><option data-qa-id="select_model_23" value="Rs7">Rs7</option><option data-qa-id="select_model_24" value="S4">S4</option><option data-qa-id="select_model_25" value="S4 Avant">S4 Avant</option><option data-qa-id="select_model_26" value="S4 Cabriolet">S4 Cabriolet</option><option data-qa-id="select_model_27" value="S5">S5</option><option data-qa-id="select_model_28" value="S7">S7</option><option data-qa-id="select_model_29" value="S8">S8</option><option data-qa-id="select_model_30" value="Tt">Tt</option><option data-qa-id="select_model_31" value="Tts">Tts</option><option data-qa-id="select_model_32" value="V8">V8</option><option data-qa-id="select_model_33" value="Autres">Autres</option></select>
                             </div>
                        </div><!-- react-text: 663 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="_2GeK6" for="regdate">
                            <!-- react-text: 667 -->Année modèle
                            <!-- /react-text -->
                            <!-- react-text: 668 -->*
                            <!-- /react-text --></label>
                        <div class="_1etKl">
                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg viewBox="0 0 24 24"
                                        data-name="Calque 1" focusable="false">
                                        <path
                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                        </path>
                                    </svg></span></div>
                            <div class="_2gTTZ"><select data-qa-id="select_regdate" name="regdate">
                                    <option value="">«Choisissez»</option>
                                    <option data-qa-id="select_regdate_8" value="2011">2030</option>
                                    <option data-qa-id="select_regdate_9" value="2010">2029</option>
                                    <option data-qa-id="select_regdate_10" value="2009">2028</option>
                                    <option data-qa-id="select_regdate_11" value="2008">2027</option>
                                    <option data-qa-id="select_regdate_12" value="2007">2026</option>
                                    <option data-qa-id="select_regdate_13" value="2006">2025</option>
                                    <option data-qa-id="select_regdate_14" value="2005">2024</option>
                                    <option data-qa-id="select_regdate_15" value="2004">2023</option>
                                    <option data-qa-id="select_regdate_16" value="2003">2022</option>
                                    <option data-qa-id="select_regdate_17" value="2002">2021</option>
                                    <option data-qa-id="select_regdate_18" value="2001">2020</option>

                                    <option data-qa-id="select_regdate_0" value="2019">2019</option>
                                    <option data-qa-id="select_regdate_1" value="2018">2018</option>
                                    <option data-qa-id="select_regdate_2" value="2017">2017</option>
                                    <option data-qa-id="select_regdate_3" value="2016">2016</option>
                                    <option data-qa-id="select_regdate_4" value="2015">2015</option>
                                    <option data-qa-id="select_regdate_5" value="2014">2014</option>
                                    <option data-qa-id="select_regdate_6" value="2013">2013</option>
                                    <option data-qa-id="select_regdate_7" value="2012">2012</option>
                                    <option data-qa-id="select_regdate_8" value="2011">2011</option>
                                    <option data-qa-id="select_regdate_9" value="2010">2010</option>
                                    <option data-qa-id="select_regdate_10" value="2009">2009</option>
                                    <option data-qa-id="select_regdate_11" value="2008">2008</option>
                                    <option data-qa-id="select_regdate_12" value="2007">2007</option>
                                    <option data-qa-id="select_regdate_13" value="2006">2006</option>
                                    <option data-qa-id="select_regdate_14" value="2005">2005</option>
                                    <option data-qa-id="select_regdate_15" value="2004">2004</option>
                                    <option data-qa-id="select_regdate_16" value="2003">2003</option>
                                    <option data-qa-id="select_regdate_17" value="2002">2002</option>
                                    <option data-qa-id="select_regdate_18" value="2001">2001</option>
                                    <option data-qa-id="select_regdate_19" value="2000">2000</option>
                                    <option data-qa-id="select_regdate_20" value="1999">1999</option>
                                    <option data-qa-id="select_regdate_21" value="1998">1998</option>
                                    <option data-qa-id="select_regdate_22" value="1997">1997</option>
                                    <option data-qa-id="select_regdate_23" value="1996">1996</option>
                                    <option data-qa-id="select_regdate_24" value="1995">1995</option>
                                    <option data-qa-id="select_regdate_25" value="1994">1994</option>
                                    <option data-qa-id="select_regdate_26" value="1993">1993</option>
                                    <option data-qa-id="select_regdate_27" value="1992">1992</option>
                                    <option data-qa-id="select_regdate_28" value="1991">1991</option>
                                    <option data-qa-id="select_regdate_29" value="1990">1990</option>
                                    <option data-qa-id="select_regdate_30" value="1989">1989</option>
                                    <option data-qa-id="select_regdate_31" value="1988">1988</option>
                                    <option data-qa-id="select_regdate_32" value="1987">1987</option>
                                    <option data-qa-id="select_regdate_33" value="1986">1986</option>
                                    <option data-qa-id="select_regdate_34" value="1985">1985</option>
                                    <option data-qa-id="select_regdate_35" value="1984">1984</option>
                                    <option data-qa-id="select_regdate_36" value="1983">1983</option>
                                    <option data-qa-id="select_regdate_37" value="1982">1982</option>
                                    <option data-qa-id="select_regdate_38" value="1981">1981</option>
                                    <option data-qa-id="select_regdate_39" value="1980">1980</option>
                                    <option data-qa-id="select_regdate_40" value="1979">1979</option>
                                    <option data-qa-id="select_regdate_41" value="1978">1978</option>
                                    <option data-qa-id="select_regdate_42" value="1977">1977</option>
                                    <option data-qa-id="select_regdate_43" value="1976">1976</option>
                                    <option data-qa-id="select_regdate_44" value="1975">1975</option>
                                    <option data-qa-id="select_regdate_45" value="1974">1974</option>
                                    <option data-qa-id="select_regdate_46" value="1973">1973</option>
                                    <option data-qa-id="select_regdate_47" value="1972">1972</option>
                                    <option data-qa-id="select_regdate_48" value="1971">1971</option>
                                    <option data-qa-id="select_regdate_49" value="1970">1970</option>
                                    <option data-qa-id="select_regdate_50" value="1969">1969</option>
                                    <option data-qa-id="select_regdate_51" value="1968">1968</option>
                                    <option data-qa-id="select_regdate_52" value="1967">1967</option>
                                    <option data-qa-id="select_regdate_53" value="1966">1966</option>
                                    <option data-qa-id="select_regdate_54" value="1965">1965</option>
                                    <option data-qa-id="select_regdate_55" value="1964">1964</option>
                                    <option data-qa-id="select_regdate_56" value="1963">1963</option>
                                    <option data-qa-id="select_regdate_57" value="1962">1962</option>
                                    <option data-qa-id="select_regdate_58" value="1961">1961</option>
                                    <option data-qa-id="select_regdate_59" value="1960">1960 ou avant</option>
                                </select></div>
                        </div><!-- react-text: 737 -->
                        <!-- /react-text -->
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="TMFen" for="issuance_date">
                            <!-- react-text: 741 -->Date de première mise en circulation
                            <!-- /react-text --></label>
                        <div class="_2wuZK"><input type="text" class="_2erBM" data-qa-id="input_issuance_date"
                                maxlength="7" placeholder="MM / AAAA" value="" name="issuance_date"></div>
                    </div>
                </div>
                <div class="zfCs0">
                    <div><label class="TMFen" for="mileage">
                            <!-- react-text: 747 -->Kilométrage
                            <!-- /react-text -->
                            <!-- react-text: 748 -->*
                            <!-- /react-text --></label>
                        <div class="_2wuZK"><input type="text" class="_2erBM" data-qa-id="newad-input_mileage"
                                maxlength="6" value="" name="mileage"><span class="_2x7fK">km</span></div>
                    </div>
                </div>
                <div class="_3GY3c">
                    <div><label class="_2GeK6" for="fuel">
                            <!-- react-text: 755 -->Carburant
                            <!-- /react-text -->
                            <!-- react-text: 756 -->*
                            <!-- /react-text --></label>
                        <div class="BtHSu _2N99n" data-qa-id="select_toggle_fuel">
                            <div class="uO-lw" data-qa-id="select_toggle_fuel_1" tabindex="0" value="1" name="fuel">
                                Essence</div>
                            <div class="uO-lw" data-qa-id="select_toggle_fuel_2" tabindex="0" value="2" name="fuel">
                                Diesel</div>
                            <div class="uO-lw" data-qa-id="select_toggle_fuel_6" tabindex="0" value="6" name="fuel">
                                Hybride</div>
                            <div class="uO-lw" data-qa-id="select_toggle_fuel_4" tabindex="0" value="4" name="fuel">
                                Electrique</div>
                            <div class="uO-lw" data-qa-id="select_toggle_fuel_3" tabindex="0" value="3" name="fuel">GPL
                            </div>
                            <div class="uO-lw" data-qa-id="select_toggle_fuel_5" tabindex="0" value="5" name="fuel">
                                Autre</div>
                        </div>
                    </div>
                </div>
                <div class="_3GY3c">
                    <div><label class="_2GeK6" for="gearbox">
                            <!-- react-text: 767 -->Boîte de vitesse
                            <!-- /react-text -->
                            <!-- react-text: 768 -->*
                            <!-- /react-text --></label>
                        <div class="_3EcL2"><label class="_1fypT"><input type="radio" value="1" name="gearbox"
                                    class="_1L8pO" checked><span class="T9pXm"><span
                                        class="_3oEwn"></span><span>Manuelle</span></span></label><label
                                class="_1fypT"><input type="radio" value="2" name="gearbox" class="_1L8pO"><span
                                    class="T9pXm"><span class="_3oEwn"></span><span>Automatique</span></span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_3lDmP">
                <div class="_39Nsm">
                    <div><button class="_2sNbI _1xIyN _2BP2c" type="button" data-id="" id="return_button" >
                            <!-- react-text: 784 -->Retour
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
                <!-- react-text: 966 -->Mettez en valeur votre annonce !
                <!-- /react-text --><br><br><!-- react-text: 969 -->Plus il y a de détails, plus votre futur acheteur
                vous trouvera rapidement.
                <!-- /react-text --></span></div>
    </div>
</div>
<script>
    var token = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script>
$(document).ready(function(){

    var option_values=[];
    var count = document.getElementById("model_list").options.length;
   
    for(var i=0;i<count;i++)
    {
        option_values.push(document.getElementById("model_list").options.item(i).text);
    }

    //console.log(option_values);

    $.ajax({

         type:'POST',
         url:"{{route('addData')}}",
         data:{
              option:option_values,
             _token:$('input[name=_token]').val(),
         },
         dataType:"json",
            success:function(data){
                console.log(data.result);                                   
            }
        
    });

    var brand_optgroup = document.querySelectorAll("select[name=brand] optgroup");
    // console.log(brand_options);
    var data = [];
    brand_optgroup.forEach(group => {
        // console.log($(group).attr('label'));
        var label = $(group).attr('label');
        var brand_options = group.children;
        for(var i = 0 ; i < brand_options.length; i++){
            var temp = {optgroup: label, option: brand_options[i].value};
            data.push(temp);
            // console.log(temp);
        }
       
            console.log(data);
        
        // console.log(brand_options);
    });
    if(data.length != 0){
        // data['_token'] =  $('input[name="_token"]').val();
        console.log(data);
        var base_url = {!! json_encode(url('/')) !!};
        $.ajax({
            type:'POST',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:base_url + "/addmarker",
            data:data,
            dataType:"json",
            success:function(data){
                console.log(data);                                   
            }
        });
    }

});
</script>