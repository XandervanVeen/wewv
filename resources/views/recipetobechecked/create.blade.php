@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="wrapper">
            <form>
                <div class="form-group">
                    <label for="RecipeName">Recept naam</label>
                    <input id="RecipeName" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="RecipeDescription">Beschrijving</label>
                    <textarea id="RecipeDescription" class="form-control"></textarea>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
                <small id="emailHelp" class="form-text text-muted">Dit recept wordt doorgestuurd naar een van de administrators en die zullen kijken of het daadwerkelijk wordt toegevoegd aan het systeem</small>
                <button type="submit" class="btn btn-primary">Opsturen</button>
            </form>
        </div>
    </div>
@endsection
