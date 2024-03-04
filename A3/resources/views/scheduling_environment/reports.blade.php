@extends('templates.base')
@section('title', 'Reportes de Programacion de Ambientes de Aprendizaje')
@section('header', 'Reportes de Programacion de Ambientes de Aprendizaje')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Reporte de Reservas por Fecha y Ficha
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route("scheduling_environment.reports") }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div>
                            <label for="initial_date">Fecha Inicial:</label>
                        </div>
                            <div class="col-lg-2">
                                <input type="date" class="form-control"
                                id="initial_date" name="initial_date" required >
                        </div>
                        <div>
                            <label for="final_date">Fecha Final:</label>
                        </div>
                            <div class="col-lg-2">
                                <input type="date" class="form-control"
                                id="final_date" name="final_date" required >
                        </div>
                        <div>
                            <label for="code">Ficha:</label>
                        </div>

                        <div class="col-lg-2">
                            <select name="course_id" id="course_id" class="form-control" required>
                                <option value="">Seleccione</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course['id'] }}">{{ $course['code'] }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-success btn-block col-lg-3 mb-4 ">
                            <i class="fa-solid fa-file-pdf"></i>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Reporte de Reservas por Fecha e Instructor
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route("scheduling_environment_instructor.reports") }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div>
                            <label for="initial_date">Fecha Inicial:</label>
                        </div>
                            <div class="col-lg-2">
                                <input type="date" class="form-control"
                                id="initial_date" name="initial_date" required >
                        </div>
                        <div>
                            <label for="final_date">Fecha Final:</label>
                        </div>
                            <div class="col-lg-2">
                                <input type="date" class="form-control"
                                id="final_date" name="final_date" required >
                        </div>
                        <div>
                            <label for="instructor">Instructor:</label>
                        </div>

                        <div class="col-lg-2">
                            <select name="instructor_id" id="instructor_id" class="form-control" required>
                                <option value="">Seleccione</option>
                          @isset($instructors)
                              
                          
                                @foreach($instructors as $instructor)
                                    <option value="{{ $instructor['document'] }}">{{ $instructor['fullname'] }} </option>
                                @endforeach
                                @endisset
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-success btn-block col-lg-3 mb-4 ">
                            <i class="fa-solid fa-file-pdf"></i>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection