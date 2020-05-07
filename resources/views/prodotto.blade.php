@php
    $cards = config('products');
    $articolo = $cards[$id];
@endphp

@extends('layouts.layout')

@section('titolo')
    {{$articolo['titolo']}}
@endsection

@section('main')
    <img src="{{$articolo['src-h']}}" alt="">
    <img src="{{$articolo['src-p']}}" alt="">
    <p>{!!$articolo['descrizione']!!}</p>
@endsection
