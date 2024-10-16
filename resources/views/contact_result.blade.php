@extends('layouts.master')

@section('title', 'Résultat du formulaire de contact')

@section('content')
    <h1>Données du formulaire de contact</h1>

    @if(isset($data))
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Informations soumises</h5>
                <p><strong>Nom :</strong> {{ $data['name'] }}</p>
                <p><strong>Email :</strong> {{ $data['email'] }}</p>
                <p><strong>Message :</strong></p>
                <p>{{ $data['message'] }}</p>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            Aucune donnée de formulaire n'a été trouvée.
        </div>
    @endif

    <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Retour au formulaire de contact</a>
@endsection