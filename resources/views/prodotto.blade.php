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
        <img src="{{$articolo['src-h']}}" alt="{{$articolo['titolo']}}">
        <img src="{{$articolo['src-p']}}" alt="{{$articolo['titolo']}}">
        <a href=""><img id="arrow-left" src="{{asset('img/arrow-left.svg')}}" alt="frecciasx"></a>
        <a href=""><img id="arrow-right" src="{{asset('img/arrow-right.svg')}}" alt="frecciadx"></a>
        <p>{!!$articolo['descrizione']!!}</p>
    </div>
@endsection
