@extends('layouts.app1')

@section('content1')
<div class="row">
        <div class="col-lg-8">
            <div class="pull-left">
                <h2>  {{ $docteur->Nom }}
               
                <a class="btn btn-primary" href="{{ route('docteurs.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </h2>
            </div>
            
        </div>
    </div>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Les informations du docteur') }}</div>


    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $docteur->Nom}}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Prenom:</strong>
                {{ $docteur->Prenom }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Adresse:</strong>
                {{ $docteur->Adresse }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>numTelephone:</strong>
                {{ $docteur->numTelephone }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Specialite:</strong>
                {{ $docteur->Specialite }}
            </div>
        </div>
    </div>
@endsection