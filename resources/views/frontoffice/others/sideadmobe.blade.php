<div class="_2_etK" data-reactid="1625">
    <ul data-reactid="1626">
@if (!empty($side_admobs))
@foreach ($side_admobs as $item)
        <?php
        $image = explode(",", $item['camera'])[0];
        // echo $image;
        ?>
 <li itemscope="" itemtype="http://schema.org/Offer" class="_3eDdy"
       data-reactid="1627">
       <div class="_3Zm0x" data-qa-id="listitem_save_ad" data-reactid="1628">
           <div data-reactid="1629">
               <div class="_3C4to" data-reactid="1630">
                   <div class="" data-reactid="1631"><span class="_1vK7W"
                           name="heartoutline"><svg viewBox="0 0 24 24"
                               data-name="Calque 1" focusable="false">
                               <path
                                   d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                               </path>
                           </svg></span></div>
               </div>
           </div>
       </div>
       <a title="PROMO villa10 per,pisc vue pano ss vis a vis calme"
           class="_2fKRW" data-qa-id="aditem_container"  href="{{URL::to('frontoffice/aditems')}}/{{$item['id']}}"
           data-reactid="1633">
           
           <span class="_1sbqp" data-reactid="1634">À LA
               UNE</span>
           <div class="_2-jsN" data-reactid="1635">
               <div class="LazyLoad is-visible" data-reactid="1636">
                   <div>
                       <div class="_6ntGx"
                           style="background-image: url(&quot;{{asset('/img/picture')}}/{{$image}}&quot;);">
                       </div>
                       <img
                           src="{{asset('/img/picture')}}/{{$image}}"
                           itemprop="image"
                           alt="subject">
                   </div>
               </div>
               <span class="_3R0AG" data-reactid="1637">
                   <span
                       class="_1vK7W _1eOK1" name="camera"><svg height="22"
                           width="24" viewBox="0 0 24 22" focusable="false">
                           <path
                               d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                               fill="#000"></path>
                       </svg></span><span data-reactid="1639">{{count(explode(",",$item['camera']))}}</span></span>
           </div>
           <div class="_3beID" data-reactid="1640">
               <section class="irAof" data-reactid="1641">
                   <div data-reactid="1642">
                       <p class="_3ZfBw" data-reactid="1643">
                        <span itemprop="name" data-qa-id="aditem_title" data-reactid="1644">{{$item['subject']}}</span>                 
                      </p>
                       <div class="CeFtS" itemprop="priceSpecification"
                           itemscope=""
                           itemtype="http://schema.org/PriceSpecification"
                           data-qa-id="aditem_price" data-reactid="1645">
                           <meta itemprop="priceCurrency" content="EUR"
                               data-reactid="1646">
                               <div class="_2OJ8g" itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/PriceSpecification" data-qa-id="aditem_price" data-reactid="403">
                                <meta itemprop="priceCurrency" content="EUR" data-reactid="404"><span class="_1JRvz" data-reactid="405"><span itemprop="priceCurrency" content="EUR" class="_1NfL7" data-reactid="406">
                                        <!-- react-text: 407 --><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item['price']}}
                                         </font></font><!-- /react-text -->
                                        <!-- react-text: 408 --><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;€
                                        </font></font><!-- /react-text --></span></span></div>
                       </div>
                   </div>
                   <div data-reactid="1656">
                       <p class="_2a7dC" itemprop="alternateName"
                           content="Locations &amp; Gîtes"
                           data-qa-id="aditem_category" data-reactid="1657">
                           <!-- react-text: 1658 -->Locations &amp; Gîtes
                           <!-- /react-text -->
                       </p>
                       <p class="_1s5WJ" itemprop="availableAtOrFrom"
                           data-qa-id="aditem_location" data-reactid="1659">
                          {{$item['adress']}}</p>
                   </div>
               </section>
              @if($item['star_style'] =="1")
               <div class="_3A9T7" data-reactid="1660">
                   <div class="_3AnuW" data-reactid="1661">
                       <div class="_3jAsY" data-reactid="1662">
                           <div class="_3KcVT" data-reactid="1663"><span    
                                   class="_1vK7W" name="star"><svg
                                       viewBox="0 0 24 24" data-name="Calque 1"
                                       focusable="false">
                                       <path
                                           d="M22.66 8l-6.75-.59L13.23.87a1.35 1.35 0 0 0-2.53 0L8 7.43 1.28 8a1.55 1.55 0 0 0-.84 2.62l5.2 4.66-1.55 6.87a1.44 1.44 0 0 0 2.11 1.61l5.8-3.65 5.76 3.65a1.41 1.41 0 0 0 2.11-1.61L18.3 15.3l5.2-4.66A1.51 1.51 0 0 0 22.66 8z">
                                       </path>
                                   </svg></span></div>
                           <div class="_1MBDf" data-reactid="1665">Urgent</div>
                       </div>
                   </div>
               </div>
             @endif
           </div>
       </a>
</li>   
 @endforeach
    
@else
    
@endif

    
    </ul>
</div>