<section>
    <div class="intestazione w-100 text-center">
        <h2>{{$series_oop['category']}}</h2>
        <p>{{$series_oop['subtitle']}}</p>
    </div>




    <div id="series_oop" class="singolo w-75 d-flex bg-white">
        @foreach ($series_oop['cards'] as $card)
        <div class="metaSingolo col-6 d-flex ">
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
        @endforeach


    </div>



</section>