@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="d-flex justify-content-between">
          <h1>Usuarios</h1>
          <a href="{{url('admin/usuarios/create')}}" class="btn btn-outline-primary"><i class="bi bi-plus-circle-fill"></i></a>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <table id="example1" class="table table-striped table-bordered table-hover">
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
        <script>
          $(function () {
            $("#example1").DataTable({
              "responsive": true, "lengthChange": false, "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });
        </script>
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
@endsection