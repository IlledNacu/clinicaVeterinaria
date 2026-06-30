@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Doctor: {{$doctor->nombre}} {{$doctor->apellido}}</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <p>{{$doctor->nombre}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="apellido" class="form-label">Apellido</label>
                <p>{{$doctor->apellido}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="telefono" class="form-label">Teléfono</label>
                <p>{{$doctor->telefono}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="licencia_medica" class="form-label">Licencia médica</label>
                <p>{{$doctor->licencia_medica}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="especialidad" class="form-label">Especialidad</label>
                <p>{{$doctor->especialidad}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label>
                <p>{{$doctor->user->email}}</p>
            </div>
            <div class="mb-3 form-group">
                <a href="{{url('admin/doctores')}}" class="btn btn-secondary">Volver</a>
            </div>
    </div>
</div>
@endsection