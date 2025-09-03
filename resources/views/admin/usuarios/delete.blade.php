@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Usuario: {{ $usuario->name }} </h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <h3>¿Está seguro de eliminar a este usuario?</h3>
        <form action="{{url('/admin/usuarios/delete')}}" method="POST">
            @csrf <!-- campo token -->
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" value="{{$usuario->name}}" class="form-control" id="name" name="name" disabled>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{$usuario->email}}" class="form-control" id="email" name="email" disabled>
                @error('email')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>
@endsection