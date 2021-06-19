@extends('layouts.app')
@section('content')
{{-- include the navigation (navbar) --}}
@include('components/navBar')

<!-- Masthead-->
<header class="mastheadcal calendar-section">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 style="    background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0));     -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    background-clip: text;" class="mx-auto my-0 text-uppercase"> Sérenité Santé</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Nous sommes une agence de placement de Professionnel dans le domaine de la santé</h2>
                <a class="btn btn-warning" href="">accéder à agendrix</a>
            </div>
        </div>
    </div>
</header>
@endsection