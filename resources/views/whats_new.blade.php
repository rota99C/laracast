<section>
    <div class="intestazione w-100 text-center">
        <h2>{{$series_whats_new['category']}}</h2>
        <p>{{$series_whats_new['subtitle']}}</p>
    </div>
    <div class="w-75 m-auto container-whats_new gradient-red d-flex">
        <div class="container-image-hero col-3 position-relative">
            <img class="position-absolute" src="{{$series_whats_new['img-hero']}}" alt="">
        </div>
        <div class="singola-row col-9 d-flex flex-wrap">
            @foreach($series_whats_new['cards'] as $card)
            <div class="d-flex col-6 singola">
                <div class="container-logo">
                    <img class="rounded-circle" src="{{$card['image']}}" alt="">
                </div>
                <div class="d-flex flex-column justify-content-center ">
                    <h5>{{$card['title']}}</h5>
                    <p>{{$card['description']}}</p>
                </div>
            </div>





            @endforeach
        </div>

    </div>





</section>