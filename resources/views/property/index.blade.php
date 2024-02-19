@extends('base')

@section('title', 'Tous nos biens')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            @csrf
            <input type="number" name="surface" placeholder="Surface minimum" class="form-control" value="{{ $input['surface'] ?? '' }}">
            <input type="number" name="rooms" placeholder="Nombre de pièce min" class="form-control" value="{{ $input['rooms'] ?? '' }}">
            <input type="number" name="price" placeholder="Budget max" class="form-control" value="{{ $input['price'] ?? '' }}">
            <input name="title" placeholder="Mot clef" class="form-control" value="{{ $input['title'] ?? '' }}">
            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            @forelse($properties as $property)
                <div class="col-3">
                    @include('property.card')
                </div>
            @empty
                <div class="col">
                    Aucun bien ne correspond à votre recherche
                </div>    
            @endforelse
        </div>
        <div class="my-4">
            {{ $properties->links() }}
        </div>
    </div>

@endsection