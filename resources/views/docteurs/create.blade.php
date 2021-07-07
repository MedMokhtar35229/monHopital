@extends('layouts.app1')

@section('content1')

<div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('docteurs.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il y a un probleme avec tes donnees.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Ajouter un Docteur') }}</div>

<div class="card-body">
    <form action="{{ route('docteurs.store') }}" method="POST" >
        @csrf

        <div class=" form-group row">
            <div class="col-md-4 col-form-label text-md-right">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="Nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-md-4 col-form-label text-md-right">
                <div class="form-group">
                    <strong>Prenom:</strong>
                    <input type="text" name="Prenom" class="form-control" placeholder="Prenom">

                </div>
            </div>
            <div class="col-md-4 col-form-label text-md-right">
                <div class="form-group">
                    <strong>Adresse:</strong>
                    <input type="text" name="Adresse" class="form-control" placeholder="Adresse">
                </div>
            </div>
            <div class="col-md-4 col-form-label text-md-right">
                <div class="form-group">
                    <strong>numTelephone:</strong>
                    <input type="text" name="numTelephone" class="form-control" placeholder="numTelephone">
                </div>
            </div>
            <div class="col-md-4 col-form-label text-md-right">
                <div class="form-group">
                    <strong>Specialite:</strong>
                    <input type="text" name="Specialite" class="form-control" placeholder="Specialite">
                </div>
            </div>
            <div class="form-group row mb-0 col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" style="background-color:black">Ajouter</button>
            </div>
        </div>

    </form>
@endsection