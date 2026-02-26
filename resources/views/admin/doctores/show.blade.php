@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Secretaria: {{$secretaria->nombre}} {{$secretaria->apellido}}</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <p>{{$secretaria->nombre}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="apellido" class="form-label">Apellido</label>
                <p>{{$secretaria->apellido}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="ci" class="form-label">CI</label>
                <p>{{$secretaria->ci}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                <p>{{$secretaria->fecha_nacimiento}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="direccion" class="form-label">Dirección</label>
                <p>{{$secretaria->direccion}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label>
                <p>{{$secretaria->user->email}}</p>
            </div>
            <div class="mb-3 form-group">
                <a href="{{url('admin/secretarias')}}" class="btn btn-secondary">Volver</a>
            </div>
    </div>
</div>
@endsection