@extends('templates.base')
@section('title', 'Listado carreras')
@section('header', 'Listado carreras')
@section('content')
  
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('career.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="col-lg-12 mb-4">
        <table id="table_data" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                  
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sistemas</td>
                    <td>Tecnico</td>
                    <td>
                        <a href="#" title="editar" class="btn btn-info btn-circle btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="#" title="eliminar" class="btn btn-danger btn-circle btn-sm" onclick="return remove()">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/general.js') }}"></script>

@endsection