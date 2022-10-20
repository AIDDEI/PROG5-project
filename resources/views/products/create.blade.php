@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('marketplace.store')}}" method="post">
                @csrf
                <div>
                    <label for="title" class="form-label">Naam product</label>
                    <input id="title"
                           type="text"
                           name="title"
                           class="@error('title') is-invalid @enderror form-control"
                           value="{{ old('title') }}" />
                     @error('title')
                     <span class="">{{ $message }}</span>
                     @enderror
                </div>
                <div>
                    <label for="description" class="form-label">Omschrijving product</label>
                    <input id="description"
                           type="text"
                           name="description"
                           class="@error('description') is-invalid @enderror form-control"
                           value="{{ old('description') }}" />
                     @error('description')
                     <span class="">{{ $message }}</span>
                     @enderror
                </div>
                <div>
                    <label for="price" class="form-label">Prijs product</label>
                    <input id="price"
                           type="number"
                           name="price"
                           class="@error('price') is-invalid @enderror form-control"
                           value="{{ old('price') }}" />
                     @error('price')
                     <span class="">{{ $message }}</span>
                     @enderror
                </div>
                <div>
                    <label for="photo" class="form-label">Foto product</label>
                    <input id="photo"
                           type="text"
                           name="photo"
                           class="@error('photo') is-invalid @enderror form-control"
                           value="{{ old('photo') }}" />
                     @error('photo')
                     <span class="">{{ $message }}</span>
                     @enderror
                </div>
                <div>
                    <label for="date" class="form-label">Datum van plaatsen</label>
                    <input id="date"
                           type="date"
                           name="date"
                           class="@error('date') is-invalid @enderror form-control"
                           value="{{ old('date') }}" />
                     @error('date')
                     <span class="">{{ $message }}</span>
                     @enderror
                </div>
                <div>
                    <input type="submit" value="Plaats product">
                </div>
            </form>
        </div>
    </div>
@endsection
