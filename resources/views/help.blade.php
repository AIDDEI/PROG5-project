@extends('layouts.web')
@section('title', 'help')
@section('content')
    <h1>{{$help}}</h1>
    <a href={{route('home')}}>terug</a>
@endsection
