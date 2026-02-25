@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="d-flex justify-content-between">
          <h1>Secretarias</h1>
          <a href="{{url('admin/secretarias/create')}}" class="btn btn-outline-primary"><i class="bi bi-plus-circle-fill"></i></a>
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
              <th scope="col">Apellido</th>
              <th scope="col">CI</th>
              <th scope="col">Fecha de nacimiento</th>
              <th scope="col">Dirección</th>
              <th scope="col">Email</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php $contador = 0; ?>
          @foreach($secretarias as $secretaria)
            <tr>
              <th scope="row">{{$contador++}}</th>
              <td>{{$secretaria->nombre}}</td>
              <td>{{$secretaria->apellido}}</td>
              <td>{{$secretaria->ci}}</td>
              <td>{{$secretaria->fecha_nacimiento}}</td>
              <td>{{$secretaria->direccion}}</td>
              <td>{{$secretaria->user->email}}</td>
              <td style="text-align: center;">
                <div class="btn-group" role="group">
                  <a href="{{url('admin/secretarias/'.$secretaria->id)}}" type="button" class="btn btn-outline-info btn-sm"><i class="bi bi-eye-fill"></i></a>
                  <a href="{{url('admin/secretarias/'.$secretaria->id.'/edit')}}" type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                  <a href="{{url('admin/secretarias/'.$secretaria->id.'/confirm-delete')}}" type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash3-fill"></i></a>
                </div>
              </td>
            </tr>
          @endforeach()
          </tbody>
        </table>
        <script>
          $(function () {
            $("#example1").DataTable({
              "pageLength": 10,
              "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ secretarias",
                "infoFiltered": "(Filtrado de _MAX_ total secretarias",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ secretarias",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                  "first": "Primero",
                  "last": "Último",
                  "next": "Siguiente",
                  "previous": "Anterior"
                }
              },
              "responsive": true, "lengthChange": true, "autoWidth": false,
              "buttons": [{
                  extend: 'collection',
                  text: 'Reportes',
                  orientation: 'landscape',
                  buttons: [{
                    text: 'Copiar',
                    extend: 'copy'
                  }, {
                    extend: 'pdf'
                  }, {
                    extend: 'csv'
                  }, {
                    extend: 'excel'
                  }, {
                    text: 'Imprimir',
                    extend: 'print'
                  }]
              }, {
                extend: 'colvis',
                text: 'Visor de columnas',
                collectionLayout: 'fixed three-column'
              }]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //   "paging": true,
            //   "lengthChange": false,
            //   "searching": false,
            //   "ordering": true,
            //   "info": true,
            //   "autoWidth": false,
            //   "responsive": true,
            // });
          });
        </script>
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
@endsection