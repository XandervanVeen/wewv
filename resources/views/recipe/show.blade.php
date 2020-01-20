@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="wrapper">
            <div class="media">
                <img src="{{ asset($recipe->img_link) }}" class="align-self-start mr-3 show-img">
                <div class="media-body">
                    <h5 class="mt-0">{{ $recipe->name }}</h5>
                    <p>{{ $recipe->description }}</p>
                </div>
            </div>
            <a href="{{ route('welcome.index') }}">
                <button type="button" class="btn btn-primary next-button">Ga Terug</button>
            </a>
        </div>
    </div>
@endsection
