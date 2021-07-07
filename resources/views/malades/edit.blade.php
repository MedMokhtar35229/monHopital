@extends('layouts.app1')

@section('content1')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier le Docteur</h2>
            </div>
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
    <div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Modifier le Docteur') }}</div>

<div class="card-body">
    <form action="{{ route('malades.update', $malade->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="Nom" value="{{ $malade->Nom }}" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>prenom:</strong>
                    <input type="text" name="prenom" value="{{ $malade->prenom }}" class="form-control" placeholder="prenom">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Adresse:</strong>
                    <input type="text" name="Adresse" class="form-control" placeholder="{{ $malade->Adresse }}"
                        value="{{ $malade->Adresse }}">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>NumTelephone:</strong>
                    <input type="text" name="NumTelephone" class="form-control" placeholder="{{ $malade->NumTelephone }}"
                        value="{{ $malade->NumTelephone }}">
                </div>
            </div>
           
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>diagnostics:</strong>
                    <input type="text" name="diagnostics" class="form-control" placeholder="{{ $malade->diagnostics }}"
                        value="{{ $malade->diagnostics }}">
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection