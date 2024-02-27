@extends('templates.base_reports')
@section('header', 'Reporte General de Ambientes de Aprendizaje Por Ubicación')
@section('content')
    <section id="results">
        @if ($learning_environments)
            <h3>Ambiente De Aprendizaje</h3>
            <table id="ReportTableInfo">
                <thead>
                    <tr>
                        <th>Ambiente</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($learning_environments as $learning_environment)
                    <tr>
                        <td>{{ $learning_environment['name'] }}</td>
                        <td>{{ $learning_environment->environment_type->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5>No Existen Actividades</h5>
        @endif
    </section>
@endsection