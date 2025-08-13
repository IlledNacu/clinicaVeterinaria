@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Datos del usuario</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Nombre</label><b> *</b>
                <p>{{$usuario->name}}</p>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label><b> *</b>
                <p>{{$usuario->email}}</p>
            </div>
            <div class="mb-3 form-group">
                <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">Volver</a>
            </div>            
    </div>
</div>
@endsection