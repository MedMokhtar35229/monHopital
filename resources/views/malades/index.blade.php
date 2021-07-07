@extends('layouts.app1')

@section('content1')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des malades </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('malades.create') }}" title="Creer un nouveau Malade"> <i class="fas fa-plus-circle"></i>
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
            <th>prenom</th>
            <th >Adresse</th>
            <th>numTelephone</th>
            <th >diagnostics</th>
            
            <th >Action</th>
        </tr>
        @foreach ($malades as $malade)
            <tr>
            <td>{{ $malade->id  }}</td>
                <td>{{ $malade->Nom  }}</td>
                <td>{{ $malade->prenom }}</td>
                <td>{{ $malade->Adresse }}</td>
                <td>{{ $malade->NumTelephone }}</td>
                <td>{{ $malade->diagnostics }}</td>
                
                <td>
                    <form action="{{ route('malades.destroy', $malade->id) }}" method="POST">

                        <a href="{{ route('malades.show', $malade->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('malades.edit', $malade->id) }}" title="edit">
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

    {!! $malades->links() !!}

@endsection