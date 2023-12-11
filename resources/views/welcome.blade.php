@extends('layouts.layout')
@section('title', 'Accueil')
@section('content')
<div class="home" data-js-forum>
    
    <div data-js-type="1">
        <!-- string is defined and animated in JS -->
    </div>

    <main data-js-main class="hidden">
        <section>
            <header>
                <h1 class="logo">Forum_</h1>
            </header>
                <div data-js-type="2">
                    <!-- string is defined and animated in JS -->
                </div>
        </section>
        <section>
            <div>
                <a href="{{ route('etudiant.index')}}" class="btn">Entrez</a>
            </div>
        </section>
    </main>
</div>
@endsection
