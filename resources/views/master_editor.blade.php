<section>
    <div class="intestazione w-100 text-center">
        <h2>{{$series_master_editor['category']}}</h2>
        <p>{{$series_master_editor['subtitle']}}</p>
    </div>

    <div class="container-misto w-75 m-auto d-flex flex-wrap">
        <div id="series_master_editor" class="singolo w-100 d-flex">
            @foreach ($series_master_editor['cards'] as $card)

            @if ($loop->first)


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

        @else

        <!-- <div id="series_build_an_app" class="singolo row m-auto w-75"> -->
        <div id="series_master_2" class="container-singolo col-4 d-flex">
            <div class="col-4 container-image d-flex flex-column justify-content-between {{$card['tag']}}">
                <button class="tag rounded-pill" value="{{$card['tag']}}">{{$card['tag']}}</button>
                <img src="{{$card['image']}}"></img>
                <div>
                    <p>{{$card['level']}} <br>Difficulty </p>
                    <div id="difficulty-meter" class="{{$card['level']}} d-flex justify-content-center">
                        <span></span><span></span><span></span>
                    </div>
                </div>


            </div>
            <div class="col-8 container-contenuto d-flex flex-column justify-content-between">
                <div>
                    <h3 class="mb-4">{{$card['title']}}</h3>
                    <p class="mb-5">{{$card['description']}}</p>
                </div>

                <div class="info">
                    <i class="fas fa-book"></i><span>{{$card['lessons']}}</span>
                    <i class="fas fa-clock"></i><span>{{$card['time']}}</span>
                </div>

            </div>


        </div>
        <!-- </div> -->
        @endif

        @endforeach
    </div>
</section>