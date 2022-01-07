@extends('layout.app')

@section ("page-title", "Laracasts Series")

@section ("content")

<h1>{{$series_updated['category']}}</h1>
<p>{{$series_updated['subtitle']}}</p>

@foreach ($series_updated['cards'] as $card)

<h1>{{$card['tag']}}</h1>

@endforeach

@endsection

