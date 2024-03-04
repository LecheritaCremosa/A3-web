@extends('templates.base_reports')
@section('header', 'Reporte General de Cursos Por Carrera')
@section('content')
    <section id="results">
        @method('POST')
        @if ($courses)
            <h3>Curso</h3>
            <table id="ReportTableInfo">
                <thead>
                    <tr>
                        <th>Ficha</th>
                        <th>Carrera</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['code'] }}</td>
                        <td>{{ $course->career->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5>No Existen Cursos</h5>
        @endif
    </section>
@endsection
