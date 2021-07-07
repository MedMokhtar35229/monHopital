@extends('layouts.app1')

@section('content1')
<div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
       <h1>Ajouter dans une salle un malade</h1>
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
  
  

    <form action="{{ route('hospitalises.store') }}" method="POST" >
        @csrf
      
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<br><br>
<center>

<div class="card">
 <div class="card-header " style="color: #0FFFFF; background-color:black">{{ __('Ajouter dans une salle un malade') }}</div>

<div class="card-body">
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
                    <input type="int" name="numLit" class="form-control" placeholder="Numero de Lit:">
                </div>
            </div>
           
            <div class="form-group row mb-0 col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" style="background-color:black">Ajouter</button>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </form>
    </center>
@endsection