@extends('templates.base_reports')
@section('header', 'Reporte reservas de ambientes')
@section('content')
    <section id="results">
     @if ($learning_environments)
         
        <h3>Reservas</h3>
        <table id="ReportTableInfo">
            <thead>
                <tr>
                  
                     <th>Nombre</th>
                     <th>Descripcion</th>
                     <th>Lugar</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($learning_environments as $learning_environment)
                    <tr>
                        <td>{{ $learning_environment['name']}}</td>
                        <td>{{ $learning_environment->environment_type->description}}</td>
                        <td>{{ $learning_environment->location->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h5>No existen ambientes</h5>
    @endif
    </section>
@endsection