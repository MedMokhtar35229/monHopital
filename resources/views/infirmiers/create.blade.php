@extends('layouts.app1')

@section('content1')

<div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('infirmiers.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Ajouter un Infirmier') }}</div>

<div class="card-body">
    <form action="{{ route('infirmiers.store') }}" method="POST" >
        @csrf

        <div class="row">
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
                    <strong>Rotation:</strong>
                    <input type="text" name="Rotation" class="form-control" placeholder="Rotation">
                </div>
            </div>
            <div class="col-md-4 col-form-label text-md-right">
                <div class="form-group">
                    <strong>Salaire:</strong>
                    <input type="float" name="Salaire" class="form-control" placeholder="Salaire">
                </div>
            </div>
            <div class="col-md-4 col-form-label text-md-right">
                <div class="form-group">
                    <strong>Code:</strong>
                    
                    <select type="text" name="Code" class="form-control">
                    <option  >.....</option>
                    @foreach ($services as $service)
                    <option  value="{{$service->Code }}" >{{$service->Code }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row mb-0 col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" style="background-color:black">Ajouter</button>
            </div>
        </div>

    </form>
@endsection