@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h1>Usuarios</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php $contador = 0; ?>
          @foreach($usuarios as $usuario)
            <tr>
              <th scope="row">{{$contador++}}</th>
              <td>{{$usuario->name}}</td>
              <td>{{$usuario->email}}</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-primary"><i class="bi bi-pencil-fill"></i></button>
                  <button type="button" class="btn btn-outline-primary"><i class="bi bi-trash3-fill"></i></button>
                </div>
              </td>
            </tr>
          @endforeach()
          </tbody>
        </table>
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
@endsection