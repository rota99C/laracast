<section>
    <div class="w-75 m-auto container-dont_forget">
        <h1 class="text-center text-white">{{$series_dont_forget['category']}}</h1>

        <div class="singola-row d-flex flex-wrap">
            @foreach ($series_dont_forget['cards'] as $card)
            <div class="singolo d-flex flex-column align-items-center">
                <div class="container-logo">
                    <img class="w-100" src="{{$card['image']}}"></img>
                </div>
                <div class="contenuto-container text-center text-white">
                    <h5>{{$card['title']}}</h5>
                    <h6>{{$card['date']}}</h6>
                    <p>{{$card['description']}}</p>
                </div>




            </div>
            @endforeach
        </div>

    </div>

</section>