@extends('layout.app')

@section ("page-title", "Laracasts Series")
@section ('css')
<link rel="stylesheet" href="../sass/_series-type-1.scss">
<link rel="stylesheet" href="../sass/_series-type-2.scss">
<link rel="stylesheet" href="../sass/_series-type-3.scss">
@endsection

@section ("content")
@include ('recently_updated')
@include ('learn_oop')
@include ('new_to_laracast')
@include ('master_editor')
@include ('learn_laravel')
@include ('build_an_app')
@include ('currently_featured')







@endsection