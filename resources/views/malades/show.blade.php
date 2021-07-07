@extends('layouts.app1')

@section('content1')
<div class="row">
        <div class="col-lg-8">
            <div class="pull-left">
                <h2>  {{ $malade->Nom }}
               
                <a class="btn btn-primary" href="{{ route('malades.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </h2>
            </div>
            
        </div>
    </div>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Les informations du malade') }}</div>



    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $malade->Nom}}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>prenom:</strong>
                {{ $malade->prenom }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Adresse:</strong>
                {{ $malade->Adresse }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>numTelephone:</strong>
                {{ $malade->NumTelephone }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>diagnostics:</strong>
                {{ $malade->diagnostics }}
            </div>
        </div>
       
    </div>
@endsection