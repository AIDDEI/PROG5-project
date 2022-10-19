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
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->date}}</td>
                            <td><a href="{{route('marketplace.show', $product->id)}}" class="btn btn-success">Details</a></td>
                            <td>
                                <form action="{{route('marketplace.destroy', $product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Verwijderen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
