@extends('layouts.layout')
@section('title', 'Modifier')
@section('content')
@include('layouts.nav')
<main class="formulaire">
    <section>
        <h2>Formulaire de modification d'un étudiant</h2>
        <p>Ce formulaire permet la modification d'un étudiant dans le système informatique du Forum. Ceci entrainera l'enregistrement des données requises à tout jamais. Veuillez obtenir toutes les autorisations nécessaires avant de procéder.</p>
    </section>
    <section>
        <header>
            <h3>Formulaire c45b</h3>
            <div>
                <p>ID{{ $etudiant->id }}</p>
                <p>{{ $createdAt }}</p>
            </div>
        </header>
        <form method="post">
        @method('put')
        @csrf
            <label>Nom
                <input type="text" name="nom" value="{{ $etudiant->nom }}">
                @if ($errors->has('nom'))
                    <span class="error">{{ $errors->first('nom') }}</span>
                @endif
            </label>
            <label>Date de naissance
                <input type="text" name="date_naissance" placeholder="1993-12-23" value="{{ $etudiant->date_naissance }}">
                @if ($errors->has('date_naissance'))
                    <span class="error">{{ $errors->first('date_naissance') }}</span>
                @endif
            </label>
            <label>Email
                <input type="text" name="email" value="{{ $etudiant->email }}">
                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </label>
            <label>Téléphone
                <input type="text" name="phone" value="{{ $etudiant->phone }}">
                @if ($errors->has('phone'))
                    <span class="error">{{ $errors->first('phone') }}</span>
                @endif
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="{{ $etudiant->adresse }}">
            </label>
            <label>Ville
                <select name="ville_id">
                @foreach($villes as $ville)
                    <option value="{{ $ville->id }}" 
                    {{ $etudiant->ville_id == $ville->id ? 'selected' : '' }}>{{ $ville->ville }}</option>
                @endforeach
                </select>
            </label>
            <button class="btn">Sauvegarder</button>
        </form>
    </section>
</main>
@include('layouts.footer')
@endsection