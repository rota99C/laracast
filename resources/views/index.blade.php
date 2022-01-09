@extends('layout.app')

@section ("page-title", "Laracasts Series")
@section ('css')
<link rel="stylesheet" href="../sass/_series-type-1.scss">
<link rel="stylesheet" href="../sass/_series-type-2.scss">
<link rel="stylesheet" href="../sass/_series-type-3.scss">
<link rel="stylesheet" href="../sass/_series-type-4.scss">
<link rel="stylesheet" href="../sass/_series-type-5.scss">
<link rel="stylesheet" href="../sass/_series-type-6.scss">
@endsection

@section ("content")
@include ('recently_updated')
@include ('more_recently')
@include ('trending')
@include ('master_editor')
@include ('grow_TALL')
@include ('learn_a_tool')
@include('dont_forget')
@include ('new_to_laracast')
@include ('whats_new')
@include ('learn_oop')
@include ('level_up')
@include ('build_an_app')
@include ('currently_featured')
@include ('learn_laravel')
@include ('explore')







@endsection