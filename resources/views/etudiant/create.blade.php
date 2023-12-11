@extends('layouts.layout')
@section('title', 'Creer')
@section('content')

@include('layouts.nav')
<main class="formulaire">
    <div>
        <h2>Formulaire d'ajout d'un étudiant</h2>
        <p>Ce formulaire permet l'ajout d'un étudiant dans le système informatique du Forum. Ceci entrainera l'enregistrement des données requises à tout jamais. Veuillez obtenir toutes les autorisations nécessaires avant de procéder.</p>
    </div>
    <form method="post">
        @csrf
        <label>Nom
            <input type="text" name="nom" value="{{ old('nom') }}">
            @if ($errors->has('nom'))
                <span class="error">{{ $errors->first('nom') }}</span>
            @endif
        </label>
        <label>Date de naissance
            <input type="text" name="date_naissance" placeholder="1993-12-23" value="{{ old('date_naissance') }}">
            @if ($errors->has('date_naissance'))
                <span class="error">{{ $errors->first('date_naissance') }}</span>
            @endif
        </label>
        <label>Email
            <input type="text" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @endif
        </label>
        <label>Téléphone
            <input type="text" name="phone" value="{{ old('phone') }}">
            @if ($errors->has('phone'))
                <span class="error">{{ $errors->first('phone') }}</span>
            @endif
        </label>
        <label>Adresse
            <input type="text" name="adresse" value="{{ old('adresse') }}">
        </label>
        <label>Ville
            <select name="ville_id">
            @foreach($villes as $ville)
                <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
            @endforeach
            </select>
        </label>
        <button class="btn">Sauvegarder</button>
    </form>
</main>

@endsection