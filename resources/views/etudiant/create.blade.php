@extends('layouts.layout')
@section('title', 'Creer')
@section('content')
@include('layouts.nav')
<main class="formulaire">
    <section>
        <h2>Formulaire d'ajout d'un étudiant</h2>
        <p>Ce formulaire permet l'ajout d'un étudiant dans le système informatique du Forum. Ceci entrainera l'enregistrement des données requises à tout jamais. Veuillez obtenir toutes les autorisations nécessaires avant de procéder.</p>
    </section>
    <section>
        <header>
            <h3>Formulaire c45a</h3>
            <div>
                <p>ID{{ $nextId }}</p>
                <p>{{ $date }}</p>
            </div>
        </header>
        <form method="post">
            @csrf
            <div>
                <label>Nom
                    <input type="text" name="nom" value="{{ old('nom') }}">
                    @if ($errors->has('nom'))
                        <span class="error">{{ $errors->first('nom') }}</span>
                    @endif
                </label>
                <label>Date de naissance
                    <input type="text" name="date_naissance" placeholder="yyyy-mm-dd" value="{{ old('date_naissance') }}">
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
            </div>
            <button class="btn">Sauvegarder</button>
        </form>
    </section>
</main>

@endsection