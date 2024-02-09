@extends('templates.base')
@section('title', 'crear Programacion de ambiente')
@section('header', 'Crear Programacion de ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="course_id">Curso</label>
                        <select name="course_id" id="course_id"
                        class="form-control" required>
                        <option value="">Seleccionar</option>
                    </div>
                
                
                    <div class="col-lg-4 mb-4">   
                            <label for="document_instructor">Documento instructor</label>
                            <select name="document_instructor" id="document_instructor"
                            class="form-control" required>
                            <option value="">Seleccionar</option>
                        </div>
                    

                    
                        <div class="col-lg-4 mb-4">
                            <label for="date_scheduling">Fecha de planificacion</label>
                            <input type="date" class="form-control"
                             id="date_scheduling" name="date_scheduling" required>
                        </div>
                    </div>
             

                
                
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="initial_hour">Hora inicial</label>
                        <input type="time" class="form-control"
                         id="initial_hour" name="initial_hour" required>
                    </div>

                        <div class="col-lg-4 mb-4">
                        <label for="inventory">Hora final</label>
                        <input type="time" class="form-control"
                         id="inventory" name="inventory" required>
                    </div>
                    
                        <div class="col-lg-4 mb-4">
                            <div class="col-lg-4 mb-4">
                                <label for="environment_id ">identificación del entorno</label>
                                <select name="enviroment_id" id="enviroment_id"
                                class="form-control" required>
                                <option value="">Seleccionar</option>
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