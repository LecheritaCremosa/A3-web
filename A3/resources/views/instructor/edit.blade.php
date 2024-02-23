@extends('templates.base')
@section('title', 'Editar Instructor')
@section('header', 'Editar Instructor')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('instructor.update', $instructor['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="document">Documento</label>
                        <input type="number" class="form-control"
                         id="document" name="document" required
                         value="{{ $instructor['document'] }}">
                    </div>
                
                
                    
                        <div class="col-lg-4 mb-4">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control"
                             id="name" name="name" required
                             value="{{ $instructor['name'] }}">
                        </div>
                    

                    
                        <div class="col-lg-4 mb-4">
                            <label for="sena_email">Correo Sena</label>
                            <input type="email" class="form-control"
                             id="sena_email" name="sena_email" required
                             value="{{ $instructor['sena_email'] }}">
                        </div>
                </div>
             

                
                
                    <div class="row form-group">
                        <div class="col-lg-4 mb-4">
                            <label for="personal_email">Correo personal</label>
                            <input type="email" class="form-control"
                                id="personal_email" name="personal_email" required
                                value="{{ $instructor['personal_email'] }}">
                        </div>

                        <div class="col-lg-4 mb-4">
                            <label for="phone">Telefono</label>
                            <input type="text" class="form-control"
                                id="phone" name="phone" required
                                value="{{ $instructor['phone'] }}">
                        </div>
                    
                        <div class="col-lg-4 mb-4">
                            <label for="type">Tipo</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="">Seleccione</option>
                                @foreach($types as $type)
                                <option value="{{ $instructor['value'] }}">{{ $instructor['type'] }} </option>
                                @endforeach
                               </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-lg-4 mb-4">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control"
                             id="password" name="password" required
                         value="{{ $instructor['password'] }}">
                         
                        </div>
    
                        <div class="col-lg-4 mb-4">
                            <label for="profile">Perfil</label>
                            <input type="text" class="form-control"
                                id="profile" name="profile" required
                                value="{{ $instructor['profile'] }}">
                             
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
                            <a href="{{ route('instructor.index') }}" class="btn btn-secondary btn-block">
                               Cancelar
                            </a>
                        </div>
                    </div>
                
            </form>
        </div>
    </div>
@endsection
