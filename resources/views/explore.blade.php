<section>
    <div class="intestazione w-100 text-center">
        <h2>{{$series_explore['category']}}</h2>
        <p>{{$series_explore['subtitle']}}</p>
    </div>
    <div class="w-75 d-flex m-auto flex-wrap container-topics">
        @foreach($series_explore['cards'] as $card)
        <div class="singola d-flex align-items-center">
            <div class="container-image-topic">
                <img src="{{$card['image']}}" alt="">
            </div>
            <div class="container-contenuto">
                <h2>{{$card['topic']}}</h2>
                <p>{{$card['number_series']}} &#8226; {{$card['number_videos']}}</p>
            </div>

        </div>
        @endforeach
    </div>

</section>