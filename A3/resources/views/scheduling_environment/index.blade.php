@extends('templates.base')
@section('title', 'Listado carreras')
@section('header', 'Listado carreras')
@section('content')
  
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('scheduling_environment.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="col-lg-12 mb-4">
        <table id="table_data" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Curso</th>
                    <th>Documento instructor</th>
                    <th>Fecha de planificacion</th>
                    <th>Hora inicial</th>
                    <th>Hora final</th>
                    <th>identificación del entorno</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($scheduling_environments as $scheduling_environment)
                <tr>
                    <td>{{ $scheduling_environment->id }}</td>
                    <td>{{ $scheduling_environment->course_id }}</td>
                    <td>{{ $scheduling_environment->instructor_document }}</td>
                    <td>{{ $scheduling_environment->date_scheduling }}</td>
                    <td>{{ $scheduling_environment->initial_hour }}</td>
                    <td>{{ $scheduling_environment->final_hour }}</td>
                    <td>{{ $scheduling_environment->environment_id }}</td>
                   
                    <td>
                        <a href="{{ route('scheduling_environment.edit', $scheduling_environment['id']) }}" title="editar" class="btn btn-info btn-circle btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="{{ route('scheduling_environment.destroy', $scheduling_environment['id']) }}" title="eliminar" class="btn btn-danger btn-circle btn-sm" onclick="return remove()">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/general.js') }}"></script>

@endsection