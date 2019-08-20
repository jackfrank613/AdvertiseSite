<div>
    <ul class="mwDh_">

        @foreach ($result as $item)
        <div class="_2EKK7" data-value="{{$item['subject']}}"  style="display:flex;padding:10px"><span class="_1Fe7S"><span class="_1oSml _3_8LY"><svg data-name="Calque 1"
                        viewBox="0 0 24 24" width="1em" height="1em">
                        <path
                            d="M23.58 21.45l-7-7a9.42 9.42 0 0 0 1.62-6.87A9.13 9.13 0 0 0 10.34.07a9.25 9.25 0 0 0-2.81 18.27 9.25 9.25 0 0 0 7-1.76l7 7a1.54 1.54 0 0 0 2.11 0 1.56 1.56 0 0 0-.06-2.13zM9.22 15.5a6.37 6.37 0 1 1 6.33-6.37 6.33 6.33 0 0 1-6.33 6.37z">
                        </path>
                    </svg></span></span>
            <div style="margin-left:10px"><span data-qa-id="text-keywords_suggestion-desktop" class="_3UAqt">
                    <!-- react-text: 3405 -->
                    <!-- /react-text --><span class="_19dt0" >{{$item['subject']}}</span><!-- react-text: 3511 -->
                    <!-- /react-text --></span></div>
        </div>
        @endforeach

    </ul>
</div>
