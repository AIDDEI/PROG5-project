@extends('layouts.web')
@section('title', 'welkom')
@section('content')
    <h1>{{$title}}</h1>
    <a href="{{route('help')}}">help</a>
@endsection
