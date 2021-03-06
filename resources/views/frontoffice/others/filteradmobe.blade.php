<div data-reactid="381">
    <ul class="undefined" data-reactid="382">
        @foreach($result as $item)
        <?php
        $image = explode(",", $item->camera)[0];
        // echo $image;
        ?>
        <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-" data-qa-id="aditem_container"
            data-reactid="383">
            <div data-reactid="384">
                <div data-reactid="385">
                    <div class="W5Mie" data-qa-id="listitem_save_ad" data-reactid="386">
                        <div data-reactid="387">
                            <div class="_3C4to" data-reactid="388">
                                <div class="_3xQS8" data-reactid="389"><span class="_1vK7W" name="heartoutline"><svg
                                            viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                            <path
                                                d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                            </path>
                                        </svg></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aYw-j" data-reactid="391"></div>
            </div>
            <a title="Peugeot 208 1.6 e-hdi fap 92 allure etg6 5p" class="clearfix trackable" rel="nofollow"
                href="{{URL::to('frontoffice/aditems')}}/{{$item->id}}" data-reactid="392">
                <div class="_3dPxM" data-reactid="393"><span class="_a3cT" data-reactid="394">
                        <div class="LazyLoad is-visible" data-reactid="395">
                            <img class="" src="{{asset('public/img/picture')}}/{{$image}}" itemprop="image"
                                content="https://img2.leboncoin.fr/ad-image/db7695bb62ad79d48d4af2178af90ba79e72f7db.jpg"
                                alt="Peugeot 208 1.6 e-hdi fap 92 allure etg6 5p">
                        </div>
                    </span><span class="_2lY3w" data-reactid="396"><span class="_1vK7W _1eOK1" name="camera"><svg
                                height="22" width="24" viewBox="0 0 24 22" focusable="false">
                                <path
                                    d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                    fill="#000"></path>
                            </svg></span><span data-reactid="398">{{count(explode(",",$item->camera))}}</span></span>
                </div>
                <section class="_2EDA9" data-reactid="399">
                    <div data-reactid="400">
                        <p class="_2tubl" data-reactid="401">
                            <span itemprop="name" data-qa-id="aditem_title"
                                data-reactid="402">{{$item->subject}}</span>

                        </p>
                        <div class="_2OJ8g" itemprop="priceSpecification" itemscope=""
                            itemtype="http://schema.org/PriceSpecification" data-qa-id="aditem_price"
                            data-reactid="403">
                            <meta itemprop="priceCurrency" content="EUR" data-reactid="404"><span class="_1JRvz"
                                data-reactid="405"><span itemprop="priceCurrency" content="EUR" class="_1NfL7"
                                    data-reactid="406">
                                    <!-- react-text: 407 -->{{$item->price}}
                                    <!-- /react-text -->
                                    <!-- react-text: 408 -->&nbsp;€
                                    <!-- /react-text --></span></span></div>
                    </div>
                    <div data-reactid="409">
                        <p class="CZbT3" itemprop="alternateName" data-qa-id="aditem_category" content="Voitures"
                            data-reactid="410">
                            <!-- react-text: 411 -->{{$item->sname}}
                            <!-- /react-text -->
                        </p>
                        <p class="_2qeuk" itemprop="availableAtOrFrom" data-qa-id="aditem_location" data-reactid="412">
                            {{$item->adress}}</p>

                        <p class="mAnae" itemprop="availabilityStarts" data-qa-id="listitem_date"
                            content="Aujourd'hui, 15:01" data-reactid="413">{{$item->create_time}}</p>
                    </div>
                </section>
            </a>
            <div class="yrUdB" data-reactid="414">
                <div data-reactid="415"></div>
            </div>
            <div class="__react_component_tooltip place-top type-dark " id="toggleSavedAd_0" data-id="tooltip"
                data-reactid="416"></div>
        </li>
        @endforeach
        <div class="_4cOP1" data-reactid="1596">
            <!-- react-empty: 1597 --><button class="_2sNbI _1xIyN _2xk2l _2B6ae _1Q7d5 _2qyUu"
                data-reactid="1598"><span class="_1vK7W _1eOK1 QKFCn _2-_jT" name="notifoutline"><svg
                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                        <path
                            d="M12 24a2.49 2.49 0 0 0 2.5-2.46h-5A2.48 2.48 0 0 0 12 24zM21.13 18.2l-1.62-1.58v-6.16c0-3.78-2.05-6.94-5.63-7.78v-.83a1.88 1.88 0 0 0-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 0 0 .88 2.11h16.49a1.23 1.23 0 0 0 .89-2.11zM17 17.85H7v-7.39c0-3.05 1.89-5.54 5-5.54s5 2.49 5 5.54z">
                        </path>
                    </svg></span><span class="_3bnUw" data-reactid="1600">Sauvegarder la recherche</span></button>
        </div>
    </ul>

    <div class="googleafs" data-reactid="1601"></div>
    <div class="_1evK6" data-reactid="1602">
        <div id="pagination">
        </div>
    </div>
</div>
<script>
$(document).ready(function(){

            var ad_total_count = < ? php echo json_encode($count) ? > ;
            var current_page = < ? php echo json_encode($current_page) ? > ;
            var page_count = < ? php echo json_encode($page_count) ? > ;
            current_page = (current_page !== "undefined") ? current_page : 1;
            page_count = (page_count !== "undefined") ? page_count : 40;
            console.log(current_page);
            $('#pagination').pagination({
                items: ad_total_count,
                itemsOnPage: page_count,
                displayedPages: 10,
                currentPage: current_page,
                cssStyle: 'light-theme',
                hrefTextPrefix: "{{ URL::to('frontoffice/getdata/') }}/"
            });
      
});
</script>
