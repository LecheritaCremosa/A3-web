@extends('templates.base')
@section('title', 'crear carrera')
@section('header', 'Crear carrera')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="code">Ficha</label>
                        <input type="text" class="form-control"
                         id="code" name="code" required>
                    </div>
                </div>
                    <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="shift">Jornada</label>
                        <input type="text" class="form-control"
                         id="shift" name="shift" required>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-lg-4 mb-4">
                            <label for="career_id">Carrera</label>
                            <input type="text" class="form-control"
                             id="career_id" name="career_id" required>
                        </div>
                    
                </div>
              
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="initial_date">Fecha inicial</label>
                        <input type="text" class="form-control"
                         id="initial_date" name="initial_date" required>
                    </div>
                
                    <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="final_date">Fecha final</label>
                        <input type="text" class="form-control"
                         id="final_date" name="final_date" required>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4 mb-4">
                            <label for="status">Estado</label>
                            <input type="text" class="form-control"
                             id="status" name="status" required>
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
                            <a href="{{ route('career.index') }}" class="btn btn-secondary btn-block">
                               Cancelar
                            </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection