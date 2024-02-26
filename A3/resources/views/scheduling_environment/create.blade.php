@extends('templates.base')
@section('title', 'crear Programacion de ambiente')
@section('header', 'Crear Programacion de ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('scheduling_environment.store') }}" method="POST">
                @csrf
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
                            <select name="document_instructor" id="document_instructor"
                            class="form-control" required>
                            <option value="">Seleccionar</option>
                            <option value="41286872">41286872</option>
                            <option value="927197788">927197788</option>
                            <option value="487110641">487110641</option>
                            <option value="29301321">29301321</option>
                        </select>
                        </div>
                    

                    
                        <div class="col-lg-4 mb-4">
                            <label for="date_scheduling">Fecha de planificacion</label>
                            <input type="date" class="form-control"
                             id="date_scheduling" name="date_scheduling" required
                             value="{{ old('date_scheduling') }}">
                        </div>
                    </div>
             

                
                
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="initial_hour">Hora inicial</label>
                        <input type="time" class="form-control"
                         id="initial_hour" name="initial_hour" required
                         value="{{ old('initial_hour') }}">
                    </div>

                        <div class="col-lg-4 mb-4">
                        <label for="final_hour">Hora final</label>
                        <input type="time" class="form-control"
                         id="final_hour" name="final_hour" required
                         value="{{ old('final_hour') }}">
                    </div>
                    
                        
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