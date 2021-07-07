@extends('layouts.app1')

@section('content1')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des infirmiers </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('infirmiers.create') }}" title="Creer un nouveau Infirmier"> <i class="fas fa-plus-circle"></i>
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
            <th >Adresse</th>
            <th>numTelephone</th>
            <th >Rotation</th>
            <th>Salaire</th>
            <th>Code</th>
            <th >Action</th>
        </tr>
        @foreach ($infirmiers as $infirmier)
            <tr>
            <td>{{ $infirmier->id  }}</td>
                <td>{{ $infirmier->Nom  }}</td>
                <td>{{ $infirmier->Prenom }}</td>
                <td>{{ $infirmier->Adresse }}</td>
                <td>{{ $infirmier->numTelephone }}</td>
                <td>{{ $infirmier->Rotation }}</td>
                <td>{{ $infirmier->Salaire }}</td>
                <td>{{ $infirmier->Code }}</td>
                <td>
                    <form action="{{ route('infirmiers.destroy', $infirmier->id) }}" method="POST">

                        <a href="{{ route('infirmiers.show', $infirmier->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('infirmiers.edit', $infirmier->id) }}" title="edit">
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