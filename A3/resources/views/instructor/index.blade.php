@extends('templates.base')
@section('title', 'Listado instructores')
@section('header', 'Listado instructores')
@section('content')
  
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('instructor.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="col-lg-12 mb-4">
        <table id="table_data" class="table table-striped table-hover">
            <thead>
                <tr>
                  
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Correo Sena</th>
                    <th>Correo personal</th>
                    <th>Telefono</th>
                    <th>Contraseña</th>
                    <th>Tipo</th>
                    <th>profile</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($instructors as $instructor)
                <tr>
                    <td>{{ $instructor['document'] }}</td>
                    <td>{{ $instructor['fullname'] }}</td>
                    <td>{{ $instructor['sena_email'] }}</td>
                    <td>{{ $instructor['personal_email'] }}</td>
                    <td>{{ $instructor['phone'] }}</td>
                    <td>{{ $instructor['passsword'] }}</td>
                    <td>{{ $instructor['type'] }}</td>
                    <td>{{ $instructor['profile'] }}</td>
                    <td>
                        <a href="{{ route('instructor.edit', $instructor['document']) }}" title="editar" class="btn btn-info btn-circle btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="{{ route('instructor.destroy', $instructor['document']) }}" title="eliminar" class="btn btn-danger btn-circle btn-sm" onclick="return remove()">
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