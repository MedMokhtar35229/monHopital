@extends('layouts.app1')

@section('content1')

<div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('malades.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('malades.store') }}" method="POST" >
        @csrf
        <div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Ajouter un Malade') }}</div>

<div class="card-body">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="Nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>prenom:</strong>
                    <input type="text" name="prenom" class="form-control" placeholder="prenom">

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Adresse:</strong>
                    <input type="text" name="Adresse" class="form-control" placeholder="Adresse">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>numTelephone:</strong>
                    <input type="text" name="numTelephone" class="form-control" placeholder="numTelephone">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>diagnostics:</strong>
                    <input type="text" name="diagnostics" class="form-control" placeholder="diagnostics">
                </div>
            </div>
            
            
            <div class="form-group row mb-0 col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" style="background-color:black">Ajouter</button>
            </div>
        </div>

    </form>
@endsection