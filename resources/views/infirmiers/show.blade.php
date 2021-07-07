@extends('layouts.app1')

@section('content1')
<div class="row">
        <div class="col-lg-8">
            <div class="pull-left">
                <h2>  {{ $infirmier->Nom }}
               
                <a class="btn btn-primary" href="{{ route('infirmiers.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </h2>
            </div>
            
        </div>
    </div>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Les informations de l`infirmier') }}</div>


    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $infirmier->Nom}}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Prenom:</strong>
                {{ $infirmier->Prenom }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Adresse:</strong>
                {{ $infirmier->Adresse }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>numTelephone:</strong>
                {{ $infirmier->numTelephone }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Rotation:</strong>
                {{ $infirmier->Rotation }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Salaire:</strong>
                {{ $infirmier->Salaire }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Code:</strong>
                {{ $infirmier->Code }}
            </div>
        </div>
    </div>
@endsection