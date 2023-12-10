@extends('layouts.layout')
@section('title', 'Creer')
@section('content')

@include('layouts.nav')
<main>
    <form method="post">
        @csrf
        <label>Nom
            <input type="text" name="nom">
            @if ($errors->has('nom'))
                <span class="text-danger">{{ $errors->first('nom') }}</span>
            @endif
        </label>
        <label>Email
            <input type="text" name="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </label>
        <label>Téléphone
            <input type="text" name="phone">
            @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </label>
        <label>Adresse
            <input type="text" name="adresse">
        </label>
        <label>Ville
            <select name="ville_id">
            @foreach($villes as $ville)
                <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
            @endforeach
            </select>
        </label>
        <input class="btn" type="submit" value="sauvegarder">
    </form>
</main>

@endsection