@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Editar consultorio: {{$consultorio->nombre}}</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="{{url('/admin/consultorios',$consultorio->id)}}" method="POST">
            @csrf <!-- campo token -->
            @method('PUT')
            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre</label><b> *</b>
                <input type="text" value="{{$consultorio->nombre}}" class="form-control" id="nombre" name="nombre" required>
                @error('nombre')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="ubicacion" class="form-label">Ubicación</label><b> *</b>
                <input type="text" value="{{$consultorio->ubicacion}}" class="form-control" id="ubicacion" name="ubicacion" required>
                @error('ubicacion')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="capacidad" class="form-label">Capacidad</label><b> *</b>
                <input type="text" value="{{$consultorio->capacidad}}" class="form-control" id="capacidad" name="capacidad" required>
                @error('capacidad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="telefono" class="form-label">Telefono</label><b> *</b>
                <input type="text" value="{{$consultorio->telefono}}" class="form-control" id="telefono" name="telefono" required>
                @error('telefono')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="especialidad" class="form-label">Especialidad</label><b> *</b>
                <input type="text" value="{{$consultorio->especialidad}}" class="form-control" id="especialidad" name="especialidad" required>
                @error('especialidad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="estado" class="form-label">Estado</label><b> *</b>
                <select name="estado" id="" class="form-control">
                    <option value="ACTIVO" @selected($consultorio->grupo_sanguineo == 'ACTIVO')>Activo</option>
                    <option value="INACTIVO" @selected($consultorio->grupo_sanguineo == 'INACTIVO')>Inactivo</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>
@endsection