@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Consultorio: {{$consultorio->nombre}}</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <h3>¿Está seguro de eliminar a este consultorio?</h3>
        <form action="{{url('/admin/consultorios', $consultorio->id)}}" method="POST">
            @csrf <!-- campo token -->
            @method('DELETE')
            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre</label><b> *</b>
                <p>{{$consultorio->nombre}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="ubicacion" class="form-label">Ubicación</label><b> *</b>
                <p>{{$consultorio->ubicacion}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="capacidad" class="form-label">Capacidad</label><b> *</b>
                <p>{{$consultorio->capacidad}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="telefono" class="form-label">Teléfono</label><b> *</b>
                <p>{{$consultorio->telefono}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="especialidad" class="form-label">Especialidad</label><b> *</b>
                <p>{{$consultorio->especialidad}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="estado" class="form-label">Estado</label><b> *</b>
                <p>{{$consultorio->estado}}</p>
            </div>
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection