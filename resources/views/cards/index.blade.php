@extends('layouts.cardLayout')

@section('title')
    Show all cards
@stop

@section('body')
    All cards

    <ol>
        @foreach($cards as $card)
            <li>{{$card->title}}</li>
        @endforeach
    </ol>
@stop