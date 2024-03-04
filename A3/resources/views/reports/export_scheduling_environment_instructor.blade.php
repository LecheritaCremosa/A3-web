@extends('templates.base_reports')
@section('header', 'Reporte General de Ambientes de Aprendizaje Por Ubicación')
@section('content')
    <section id="results">
        @if ($scheduling_environments)



            <h3>Ambiente De Aprendizaje</h3>
            <table id="ReportTableInfo">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Ficha</th>
                        <th>Documento Instructor</th>
                        <th>Fecha</th>
                        <th>Hora Inicial</th>
                        <th>Hora Final</th>
                        <th>Ambiente</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($scheduling_environments as $scheduling_environment)
                    <tr>
                        <td>{{ $scheduling_environment['id'] }}</td>
                        <td>{{ $scheduling_environment->course->code}}</td> 
                        <td>{{ $scheduling_environment->instructor_document}}</td>
                        <td>{{ $scheduling_environment['date_scheduling']}}</td>
                        <td>{{ $scheduling_environment['initial_hour']}}</td>
                        <td>{{ $scheduling_environment['final_hour']}}</td>
                        <td>{{ $scheduling_environment->learning_environment->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5>No Existen reservas</h5>
        @endif
    </section>
@endsection
