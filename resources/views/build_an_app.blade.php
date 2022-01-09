<section>
    <div class="intestazione w-100 text-center">
        <h2>{{$series_build_an_app['category']}}</h2>
        <p>{{$series_build_an_app['subtitle']}}</p>
    </div>
    <div id="series_build_an_app" class="singolo row m-auto w-75 d-flex">
        @foreach ($series_build_an_app['cards'] as $card)
        <div class="container-singolo col-4 d-flex">
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
        @endforeach
    </div>


</section>