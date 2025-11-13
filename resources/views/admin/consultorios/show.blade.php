@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>consultorio: {{$consultorio->nombre}} {{$consultorio->apellido}}</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">

        <div class="mb-3 form-group">
            <label for="nombre" class="form-label">Nombre</label><b> *</b>
            <p>{{$consultorio->nombre}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="apellido" class="form-label">Apellido</label><b> *</b>
            <p>{{$consultorio->apellido}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="ci" class="form-label">CI</label><b> *</b>
            <p>{{$consultorio->ci}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="nro_seguro" class="form-label">Nro. de seguro</label><b> *</b>
            <p>{{$consultorio->nro_seguro}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label><b> *</b>
            <p>{{$consultorio->fecha_nacimiento}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="genero" class="form-label">Género</label><b> *</b>
            <p>
                @if($consultorio->genero == 'M')
                    MASCULINO
                @else
                    FEMENINO
                @endif
            </p>
        </div>
        <div class="mb-3 form-group">
            <label for="telefono" class="form-label">Teléfono</label><b> *</b>
            <p>{{$consultorio->telefono}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="correo" class="form-label">Email</label><b> *</b>
            <p>{{$consultorio->correo}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="direccion" class="form-label">Dirección</label><b> *</b>
            <p>{{$consultorio->direccion}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="grupo_sanguineo" class="form-label">Grupo sanguíneo</label><b> *</b>
            <p>{{$consultorio->grupo_sanguineo}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="alergias" class="form-label">Alergias</label><b> *</b>
            <p>{{$consultorio->alergias}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="contacto_emergencia" class="form-label">Contacto de emergencia</label><b> *</b>
            <p>{{$consultorio->contacto_emergencia}}</p>
        </div>
        <div class="mb-3 form-group">
            <label for="observaciones" class="form-label">Observaciones</label>
            <p>{{$consultorio->observaciones}}</p>
        </div>
        <div class="mb-3 form-group">
            <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">Volver</a>
        </div>

    </div>
</div>
@endsection