@extends('layouts.app1')

@section('content1')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hospitalises.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Modifier la Salle d`une malade') }}</div>

<div class="card-body">
    <form action="{{ route('hospitalises.update', $hospitalise) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Numero de la salle :</strong>
                    
                    <select type="int" name="Numero" class="form-control">
                    @foreach ($salles as $salle)
                    <option  value="{{$salle->Numero }}" >{{$salle->Numero }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>ID de la malade:</strong>
                    
                    <select type="int" name="id" class="form-control">
                    
                    @foreach ($malades as $malade)
                    <option  value="{{$malade->id }}" >{{$malade->id }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
         
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Numero de Lit:</strong>
                    <input type="int" name="numLit" class="form-control" value="{{ $hospitalise->numLit }}">
                </div>
            </div>
           
            
            <div class="form-group row mb-0 col-md-8 offset-md-4">
                <button type="submit"  style="background-color:black" class="btn btn-primary">Modifier</button>
            </div>
        </div>

    </form>
@endsection