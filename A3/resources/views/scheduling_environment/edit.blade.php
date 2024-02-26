@extends('templates.base')
@section('title', 'crear Programacion de ambiente')
@section('header', 'Crear Programacion de ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('scheduling_environment.update', $scheduling_environment['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="course_id">Curso</label>
                        <select name="course_id" id="course_id"
                        class="form-control" required>
                        <option value="">Seleccionar</option>
                        @foreach($courses as $course)
                            <option value="{{ $course['course_id'] }}"
                            @if(old('course_id') == $course['id']) selected @endif>
                            {{ $course['name'] }}</option>
                         @endforeach
                    </select>
                    </div>
                
                
                    <div class="col-lg-4 mb-4">   
                            <label for="document_instructor">Documento instructor</label>
                            <input type="number" class="form-control"
                             id="document_instructor" name="document_instructor" required
                             value="{{ $scheduling_environment['document_instructor'] }}">
                        </div>
                    

                    
                        <div class="col-lg-4 mb-4">
                            <label for="date_scheduling">Fecha de planificacion</label>
                            <input type="date" class="form-control"
                             id="date_scheduling" name="date_scheduling" required
                             value="{{ $scheduling_environment['date_scheduling'] }}">
                        </div>
                    </div>
             

                
                
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="initial_hour">Hora inicial</label>
                        <input type="time" class="form-control"
                         id="initial_hour" name="initial_hour" required
                         value="{{ $scheduling_environment['initial_hour'] }}">
                    </div>

                        <div class="col-lg-4 mb-4">
                        <label for="final_hour">Hora final</label>
                        <input type="time" class="form-control"
                         id="final_hour" name="final_hour" required
                         value="{{ $scheduling_environment['final_hour'] }}">
                    </div>
                    
                        <div class="col-lg-4 mb-4">
                            <div class="col-lg-4 mb-4">
                                <label for="environment_id ">identificación del entorno</label>
                                <select name="enviroment_id" id="enviroment_id"
                                class="form-control" required>
                                <option value="">Seleccionar</option>
                                @foreach($learning_environments as $learning_environment)
                                <option value="{{ $learning_environment['environment_id'] }}"
                                @if(old('environment_id') == $course['id']) selected @endif>
                                {{ $course['name'] }}</option>
                             @endforeach
                            </select>
                            </div>
                        
                     </div>

                   
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                            <button class="btn btn-primary btn-block"
                                type="submit">
                               Guardar
                            </button>
                    </div>
                    <div class="col-lg-6 mb-4">
                            <a href="{{ route('scheduling_environment.index') }}" class="btn btn-secondary btn-block">
                               Cancelar
                            </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection