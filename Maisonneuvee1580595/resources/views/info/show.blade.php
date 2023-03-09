@extends('layouts.index')
@section('title', "Plus d'information")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Information</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td><strong>Nom :</strong> {{$etudiant->nom}}</td>
                        </tr>
                        <tr>
                            <td><strong>Adresse : </strong> {{$etudiant->adresse}}</td>
                        </tr>
                        <tr>
                            <td><strong>Téléphone : </strong> {{$etudiant->tel}}</td>
                        </tr>
                        <tr>
                            <td><strong>Courriel : </strong> {{$etudiant->email}}</td>
                        </tr>
                        <tr>
                            <td><strong>Date de naissance : </strong> {{$etudiant->ddn}}</td>
                        </tr>
                        <tr>
                            <td><strong>Ville : </strong> {{$etudiant->etudiantHasVille->nom}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-center col">
                    <div class="mt-2">
                        <a href="{{ route('info.edit', $etudiant->id)}}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('info.index')}}" class="btn btn-primary">Retour</a>
                    </div>
                    <form method="post" class="text-center mt-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>