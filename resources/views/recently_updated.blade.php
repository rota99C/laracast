<section id="series_updated">
    <div class="intestazione w-100 text-center">
        <h2>{{$series_updated['category']}}</h2>
        <p>{{$series_updated['subtitle']}}</p>
    </div>

    @foreach ($series_updated['cards'] as $card)
    <div class="singolo w-75 m-auto d-flex">
        <div class="contenuto col-8">
            <button class="tag rounded-pill mb-3" value="{{$card['tag']}}">{{$card['tag']}}</button>
            <h3 class="mb-4">{{$card['title']}}</h3>
            <p class="mb-5">{{$card['description']}}</p>
            <div class="info">
                <div class="container_level">
                    <div>
                        <img src="../img/cards/difficulty_meter.png" alt=""></img>
                    </div>
                    <div>
                        <p>{{$card['level']}}</p>
                        <p>difficulty</p>
                    </div>
                </div>


                <i class="fas fa-book"></i>{{$card['lessons']}}
                <p>Diffiulty</p>
                <i class="fas fa-clock"></i>{{$card['time']}}
            </div>

            <button class=" start rounded-pill"><i class="far fa-play-circle"></i>Start Series</button>
        </div>
        <div class="immagine col-4">
            <img src="{{$card['image']}}"></img>
        </div>


    </div>

    @endforeach

</section>