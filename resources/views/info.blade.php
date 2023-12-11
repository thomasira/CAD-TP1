@extends('layouts.layout')
@section('title', 'Info')
@section('content')
@include('layouts.nav')
<main class="info">
    <div>
        <h1>Info</h1>
        <a href="https://github.com/thomasIRA/CAD-TP1">Suivez le projet sur Github</a>
    </div>
    <div>
        <section>
            <h2>Résumé du projet</h2>
            <p>Forum_ est pour l'instant un simple cadre pour expérimenter les fonctionnalitées de Laravel. Blade est utilisé comme modélisateur de contenu et le module Eloquent de paire avec Request de Laravel aide à la gestion de la DB. À terme, Forum_ sera une plate-forme de discussion étudiante permettant l'échange de nouvelles et la création de groupes de discussions.</p>
        </section>
        <section>
            <h2>Références</h2>
            <p>Merci à ces gens/apps pour l'aide à la réalisation de ce projet</p>
            <table>
                <tr>
                    <th>Animations</th>
                    <td><a href="https://animejs.com/documentation/">AnimeJs</a></td>
                </tr>
                <tr>
                    <th>Animation lettrage</th>
                    <td><a href="https://github.com/mattboldt/typed.js">Typed.js</a></td>
                </tr>
                <tr>
                    <th>Cadriciel</th>
                    <td><a href="https://laravel.com/docs/10.x/readme">Laravel</a></td>
                </tr>
            </table>
        </section>
    </div>
</main>
@include('layouts.footer')
@endsection