@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard | Welkom: {{ Auth::user()->name }}</div>

                <div class="card-body">
                    <a href="{{ route('recipe.index') }}">
                        <button type="button" class="btn btn-primary next-button">Recept goedkeuren (WIP)</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
