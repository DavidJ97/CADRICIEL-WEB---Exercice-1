@extends('layouts.master')

@section('title', 'Accueil')

@section('header-title', 'Architecture Innovante')
@section('header-subtitle', 'Redéfinir l\'espace et la forme')

@section('content')
<div class="content-section">
    <div class="row gx-5 align-items-center staggered-row">
        <div class="col-lg-6 order-lg-2">
            <div class="p-5">
                <div class="rounded-circle-container half-size">
                    <img src="{{ asset('images/architecture1.png') }}" alt="Architecture innovante" />
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-lg-1">
            <div class="p-5">
                <h2 class="display-4">Pour ceux qui osent innover...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisquam saepe tempore quaerat, nisi consequuntur dolorem rem omnis exercitationem doloribus veniam, dolores autem molestiae voluptas quod. Natus molestias numquam iure ipsa dolorem temporibus, quos ducimus esse.</p>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="row gx-5 align-items-center staggered-row">
        <div class="col-lg-6">
            <div class="p-5">
                <div class="rounded-circle-container half-size">
                    <img src="{{ asset('images/architecture3.png') }}" alt="Architecture fonctionnelle" />
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-5">
                <h2 class="display-4">L'Architecture : Une Rencontre entre Audace et Fonctionnalité</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisquam saepe tempore quaerat, nisi consequuntur dolorem rem omnis exercitationem doloribus veniam, dolores autem molestiae voluptas quod. Natus molestias numquam iure ipsa dolorem temporibus, quos ducimus esse.</p>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="row gx-5 align-items-center staggered-row">
        <div class="col-lg-6">
            <div class="p-5">
                <h2 class="display-4">Urbanisme : Réinventer l'Espace</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisquam saepe tempore quaerat, nisi consequuntur dolorem rem omnis exercitationem doloribus veniam, dolores autem molestiae voluptas quod. Natus molestias numquam iure ipsa dolorem temporibus, quos ducimus esse.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="rounded-circle-container half-size">
                    <img src="{{ asset('images/urbanisme.png') }}" alt="Urbanisme" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection