<section>
    <div class="intestazione w-100 text-center">
        <h2>{{$series_updated['category']}}</h2>
        <p>{{$series_updated['subtitle']}}</p>
    </div>

    @foreach ($series_updated['cards'] as $card)
    <div id="series_updated" class="singolo w-75 d-flex">
        <div class="contenuto col-8">
            <button class="tag rounded-pill mb-3" value="{{$card['tag']}}">{{$card['tag']}}</button>
            <h3 class="mb-4">{{$card['title']}}</h3>
            <p class="mb-5">{{$card['description']}}</p>
            <div class="info d-flex align-items-center">
                <div class="container_level d-flex align-items-center">
                    <img src="../img/cards/difficulty_meter.png" alt=""></img>
                    <span>{{$card['level']}} <br>Difficulty </span>
                </div>


                <i class="fas fa-book"></i><span>{{$card['lessons']}}</span>
                <i class="fas fa-clock"></i><span>{{$card['time']}}</span>
            </div>

            <button class=" start rounded-pill mt-4"><i class="far fa-play-circle"></i>Start Series</button>
        </div>
        <div class="immagine col-4">
            <img src="{{$card['image']}}"></img>
        </div>


    </div>

    @endforeach

</section>