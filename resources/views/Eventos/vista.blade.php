@extends('layouts.nav_admin')

@section('content')
  <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        Listado de Ofertas Publicados
                        </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>Nombres</th>
                                      <th>Fecha</th>
                                      <th>Descripcion</th>

                                      <th  width="15%">&nbsp;</th>


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
                  buttons: ['excel', 'pdf', 'print']
                ,
                language: {
                 "url": '{!! asset('/plugins/latino.json') !!}'
                  } ,
                'ajax':'{{ url('api/evento') }}',
                'columns':[
                  {data:'name'},
                  {data:'date'},
                  {data:'description'},
                          {data:'btn'},





                ]


              });
          });
          </script>
@endsection
