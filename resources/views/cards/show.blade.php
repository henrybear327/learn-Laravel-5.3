@extends('layouts.cardLayout')

@section('title')
    Show a card
@stop

@section('body')
    Card!

    <h1>{{$card->title}}</h1>
@stop