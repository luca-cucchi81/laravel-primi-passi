@php
    $cards = config('products');
    $articolo = $cards[$id];
@endphp

@extends('layouts.layout')

@section('titolo')
    {{$articolo['titolo']}}
@endsection

@section('main')
    <div class="container2">
        <h2>{{$articolo['titolo']}}</h2>
        <img src="{{$articolo['src-h']}}" alt="">
        <img src="{{$articolo['src-p']}}" alt="">
        <p>{!!$articolo['descrizione']!!}</p>
    </div>
@endsection
