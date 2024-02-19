@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, quod totam. Recusandae dolorum aspernatur nobis? Non pariatur qui soluta sit dolor autem laudantium incidunt voluptatum libero rerum quas eius et mollitia, vel magnam consectetur? Quaerat corrupti magnam qui beatae recusandae officiis doloribus neque. Nam corporis voluptatum nihil, eum expedita veniam!</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection