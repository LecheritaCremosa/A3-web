@extends('templates.base')
@section('title', 'crear curso')
@section('header', 'Crear curso')
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
                
                
                    <div class="col-lg-4 mb-4">
                        <label for="shift">Jornada</label>
                        <select name="shift" id="shift" class="form-control" required>
                         <option value="">Seleccione</option>
                         <option value="diurna">DIURNA</option>
                         <OPtion value="mixta">MIXTA</OPtion>
                         <Option value="nocturna">NOCTURNA</Option>
                        </select>
                    </div>

                    
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

                        <div class="col-lg-4 mb-4">
                        <label for="final_date">Fecha final</label>
                        <input type="text" class="form-control"
                         id="final_date" name="final_date" required>
                    </div>
                    
                        <div class="col-lg-4 mb-4">
                            <label for="status">Estado</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">Seleccione</option>
                                <option value="lectiva">LECTIVA</option>
                                <OPtion value="productiva">PRODUCTIVA</OPtion>
                                <Option value="induccion">INDUCCION</Option>
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
                            <a href="{{ route('course.index') }}" class="btn btn-secondary btn-block">
                               Cancelar
                            </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection