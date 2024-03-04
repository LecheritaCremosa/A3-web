@extends('templates.base')
@section('title', 'Listado Ambientes de aprendizaje')
@section('header','Listado Ambientes de aprendizaje')
@section('content')

    @include('templates.messages')
        
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Reporte de ambientes de aprendizaje
                    </h6>
                    <div class="card-body">
                        <form action="{{ route('reports.learning_environments')  }}" method="post">
                            @csrf
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    <label for="location">Seleccione una sede:</label>
                                </div>
                                <div class="col-lg-3">
                                    <select name="location_id" id="location_id" class="form-control" required>
                                        <option value="">Seleccione</option>
                                        @foreach ( $locations as $location)
                                            <option value="{{ $location['id']}}">
                                                {{ $location['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-secondary btn-block col-lg-3 mb-4">Generar Reporte
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </button>
                                    
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection