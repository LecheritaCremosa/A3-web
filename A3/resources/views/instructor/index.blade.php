@extends('templates.base')
@section('title', 'Listado carreras')
@section('header', 'Listado carreras')
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
                <tr>
                    <td>1117629736</td>
                    <td>Laura sanchez</td>
                    <td>laurapsb@sena.edu.co</td>
                    <td>laura123@gmail.com</td>
                    <td>3133333333</td>
                    <td>password</td>
                    <td>Contratista</td>
                    <td>Enfermera</td>
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