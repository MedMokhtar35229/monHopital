@extends('layouts.app1')

@section('content1')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des docteurs </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('docteurs.create') }}" title="Creer un nouveau Docteur"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-success table-sm">
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>numTelephone</th>
            <th>Specialite</th>
            <th >Action</th>
        </tr>
        @foreach ($docteurs as $docteur)
            <tr>
            <td>{{ $docteur->id  }}</td>
                <td>{{ $docteur->Nom  }}</td>
                <td>{{ $docteur->Prenom }}</td>
                <td>{{ $docteur->Adresse }}</td>
                <td>{{ $docteur->numTelephone }}</td>
                <td>{{ $docteur->Specialite }}</td>
                <td>
                    <form action="{{ route('docteurs.destroy', $docteur->id) }}" method="POST">

                        <a href="{{ route('docteurs.show', $docteur->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('docteurs.edit', $docteur->id) }}" title="edit">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

  

@endsection