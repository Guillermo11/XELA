@extends('layouts.nav_admin')
@section('content')
  <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        Listado de Usuario
                          <a type="button"  href="{!! url('Usuario/create') !!}" class="btn btn-sm btn-info">Ingresar Nuevo Usuario</a>

                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th width="5" heigth="5" >Dpi </th>
                                      <th width="5" heigth="5" >Nombres</th>
                                      <th width="5" heigth="5" >Apellidos</th>
                                      <th width="5" heigth="5" >Genero</th>
                                      <th width="5" heigth="5" >Estado Civil</th>
                                      <th width="5" heigth="5" >Telefono</th>
                                      <th width="5" heigth="5" >Direccion</th>
                                      <th width="5" heigth="5" >Lugar</th>
                                      <th width="5" heigth="5" >Educacion</th>
                                      <th width="5" heigth="5" >Titulo</th>
                                      <th width="5" heigth="5" >Fecha de Nacimiento</th>



                                  </tr>
                              </thead>
                              <tbody>




                              </tbody>
                          </table>

                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>


          <script>
          $(document).ready(function() {
              $('#dataTables-example').DataTable({
                'serverSide':true,
                'responsive': true,

                  dom: 'Bfrtip',
                  buttons: ['excel']
                ,
                language: {
                 "url": '{!! asset('/plugins/latino.json') !!}'
                  } ,
                'ajax':'{{ url('api/Usuario') }}',
                'columns':[
                  {data:'dpi'},
                  {data:'nombres'},
                  {data:'apellidos'},
                  {data:'genero'},
                  {data:'estado_civil'},
                  {data:'telefono'},
                  {data:'direccion'},
                  {data:'nunicipio'},
                  {data:'educacion'},
                  {data:'carrera_titulo'},
                  {data:'fecha_nacimiento'},

                ]



              });
          });
          </script>

@endsection
