@extends('layouts.index')
@section('title', "Liste d'étudiants")
@section('content')
<div class="container">
    <div class="col">
        <div class="d-flex justify-content-between pt-3">
            <h1 class="fw-bold">Liste des étudiants</h1>
            <a href="{{ route('info.create')}}" class="btn btn-primary d-flex align-items-center">Nouvel Étudiant</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-stripped">
            <thead class="table-light text-center">
                <tr>
                    <th>Nom de l'étudiant</th>
                    <th>Adresse</th>
                    <th>Courriel</th>
                    <th>Information complète</th>
                    <th>Modifier</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($liste as $etudiant)
                <tr>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->adresse}}</td>
                    <td>{{$etudiant->email}}</td>
                    <td><a href="{{ route('info.etudiant', $etudiant->id)}}" class="btn btn-info">Plus d'info</a></td>
                    <td><a href="{{ route('info.modifier', $etudiant->id)}}" class="btn btn-warning">Modifier</a></td>
                </tr>
                @empty
                <tr>
                    <td>Information non disponible</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection