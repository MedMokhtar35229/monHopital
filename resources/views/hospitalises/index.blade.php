@extends('layouts.app1')

@section('content1')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Les malades hospitalisés</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('hospitalises.create') }}" title="Creer un nouveau Malade"> <i class="fas fa-plus-circle"></i>
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
            <th>Numero de la Salle </th>
            <th>ID de la malade</th>
            <th>Numero de Lit:</th>
             <th >Action</th>
        </tr>
        @foreach ($hospitalises as $hospitalise)
            <tr>
            <td>{{ $hospitalise->Numero}}</td>
                <td>{{ $hospitalise->id}}</td>
                <td>{{ $hospitalise->numLit}}</td>
                
                
                <td>
                    <form action="{{ route('hospitalises.destroy', $hospitalise) }}" method="POST">

                        <a href="{{ route('hospitalises.edit', $hospitalise) }}" title="edit">
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

    {!! $hospitalises->links() !!}

@endsection