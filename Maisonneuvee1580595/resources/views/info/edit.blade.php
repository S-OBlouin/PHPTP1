@extends('layouts.index')
@section('title', "Modifier")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3">
                <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h3 class="fw-bold text-center">Modifier</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <input type="text" name="nom" placeholder="Nom" class="form-control" value="{{$info->nom}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="adresse" placeholder="Adresse" class="form-control" value="{{$info->adresse}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="tel" placeholder="Téléphone" class="form-control" value="{{$info->tel}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="email" placeholder="Courriel" class="form-control" value="{{$info->email}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="date" name="ddn" placeholder="Date de naissance" class="form-control" value="{{$info->ddn}}">
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-select" name="ville_id">
                                <option selected>Choisissez un ville</option>
                                @foreach($villes as $ville)
                                <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" value="Enregistrer" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection