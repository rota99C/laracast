<section>
    <div class="intestazione w-100 text-center">
        <h2>{{$series_grow_TALL['category']}}</h2>
        <p>{{$series_grow_TALL['subtitle']}}</p>
    </div>

    <div class="container-misto w-75 m-auto d-flex flex-wrap">
        <div id="series_grow_TALL" class="singolo w-100 d-flex flex-wrap mb-3">
            @foreach ($series_grow_TALL['cards'] as $card)

            @if ($loop->index <= 1) <div class="metaSingolo col-6 d-flex bg-white ">
                <div class="col-6 immagine">
                    <img src="{{$card['image']}}"></img>
                </div>
                <div class="contenuto col-6 d-flex flex-column justify-content-between p-5">
                    <div>
                        <h3 class="mb-4">{{$card['title']}}</h3>
                        <p class="mb-5">{{$card['description']}}</p>
                    </div>

                    <div>
                        <div class="info d-flex align-items-center">
                            <i class="fas fa-book"></i><span>{{$card['lessons']}}</span>
                            <i class="fas fa-clock"></i><span>{{$card['time']}}</span>
                        </div>
                        <button class=" start rounded-pill mt-4"><i class="far fa-play-circle"></i>Start Series</button>
                    </div>

                </div>

        </div>

        @else

        <!-- <div id="series_build_an_app" class="singolo row m-auto w-75"> -->
        <div id="series_master_tool" class="container-singolo col-4 d-flex mt-4">
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