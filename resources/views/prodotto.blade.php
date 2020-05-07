@php
    $cards = config('products');
    $prodotto = $cards[$id];
@endphp

@extends('layouts.layout')

@section('titolo')
    {{$prodotto['titolo']}}
@endsection

@section('main')
    <div class="container2">
        <h2>{{$prodotto['titolo']}}</h2>
        <img src="{{$prodotto['src-h']}}" alt="{{$prodotto['titolo']}}">
        <img src="{{$prodotto['src-p']}}" alt="{{$prodotto['titolo']}}">
        @if ($id >=1)
            <a href="{{route('prodotto', $id - 1)}}"><img id="arrow-left" src="{{asset('img/arrow-left.svg')}}" alt="frecciasx"></a>
        @else
            <a href="{{route('prodotto', count($cards) - 1)}}"><img id="arrow-left" src="{{asset('img/arrow-left.svg')}}" alt="frecciasx"></a>
        @endif

        @if ($id == count($cards) -1)
            <a href="{{route('prodotto', $id = 0)}}"><img id="arrow-right" src="{{asset('img/arrow-right.svg')}}" alt="frecciadx"></a>
        @else
            <a href="{{route('prodotto', $id + 1)}}"><img id="arrow-right" src="{{asset('img/arrow-right.svg')}}" alt="frecciadx"></a>
        @endif


        <p>{!!$prodotto['descrizione']!!}</p>
    </div>
@endsection
