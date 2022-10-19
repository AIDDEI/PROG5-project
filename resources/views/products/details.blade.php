@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <table class="table">
                    <tr>
                        <th>Titel</th>
                        <th>Omschrijving</th>
                        <th>Prijs</th>
                        <th>Datum</th>
                    </tr>
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->date}}</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
