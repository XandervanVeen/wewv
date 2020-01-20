@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="wrapper">
            <h1 class="title">Wat eten wij vanavond?</h1>
            <div class="card text-center" style="width: 18rem;">
                <img src="{{ asset($recipe[0]->img_link) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $recipe[0]->name }}</h5>
                    <a href="{{ route('recipe.show', $recipe[0]->id) }}" class="btn btn-secondary">Meer informatie</a>
                </div>
            </div>
            <a href="">
                <button type="button" class="btn btn-primary next-button">Volgende recept</button>
            </a>
        </div>
    </div>
@endsection
