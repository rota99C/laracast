@extends('layout.app')

@section ("page-title", "Laracasts Series")
@section ('css')
<link rel="stylesheet" href="../sass/_series-type-1.scss">
<link rel="stylesheet" href="../sass/_series-type-2.scss">
@endsection

@section ("content")
@include ('recently_updated')
@include ('learn_oop')






@endsection