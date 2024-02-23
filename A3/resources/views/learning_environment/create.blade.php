@extends('templates.base')
@section('title', 'Crear Ambiente de Aprendizaje')
@section('header', 'Crear Ambiente de Aprendizaje')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('learning_environment.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control"
                         id="name" name="name" required>
                    </div>
                
                
                    <div class="col-lg-4 mb-4">   
                            <label for="capacity">Capacidad</label>
                            <input type="number" class="form-control"
                             id="capacity" name="capacity" required>
                        </div>
                    

                    
                        <div class="col-lg-4 mb-4">
                            <label for="area_mt2">Area Mt2</label>
                            <input type="number" class="form-control"
                             id="area_mt2" name="area_mt2" required>
                        </div>
                    </div>
             

                
                
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="floor">Piso</label>
                        <input type="number" class="form-control"
                         id="floor" name="floor" required>
                    </div>

                        <div class="col-lg-4 mb-4">
                        <label for="inventory">Inventario</label>
                        <input type="text" class="form-control"
                         id="inventory" name="inventory" required>
                    </div>
                    
                        <div class="col-lg-4 mb-4">
                            <div class="col-lg-4 mb-4">
                                <label for="type_id">Tipo</label>
                                <input type="text" class="form-control"
                                 id="type_id" name="type_id" required>
                            </div>
                        
                     </div>

                     <div class="row form-group">
                        <div class="col-lg-4 mb-4">
                            <label for="location_id">Ubicación</label>
                            <input type="text" class="form-control"
                             id="location_id" name="location_id" required>
                        </div>
    
                        <div class="col-lg-4 mb-4">
                        <label for="status">Estado</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">Activo</option>
                                <option value="contratista">Inactivo</option>
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
                            <a href="{{ route('learning_environment.index') }}" class="btn btn-secondary btn-block">
                               Cancelar
                            </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection