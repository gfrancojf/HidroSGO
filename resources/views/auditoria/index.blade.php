@extends ('adminlte::page')




@section('content')


    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
  
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
            <li class="breadcrumb-item active">listados de Eventos</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->



          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                             
                         
                            <table class="table table-striped mt-2">
                              <thead>                                     
                                  <th>ID</th>
                                     <th>Usuario</th>
                                  <th>Modulo</th>                         
                                 <th>Evento</th>
                              
                                 <th>Link</th>
                                
                                  
                                 <th>IP</th>
                                  <th>Fecha de creacion</th>
                                  <th>Fecha de Modificacion</th>                                                         
                              </thead>
                              <tbody>
                                @foreach ($audits as $audit)
                                  <tr>
                                    <td>{{ $audit->id }}</td>
                                  <td>{{ $audit->user->name }}</td>                                  
                                    <td>{{ $audit->user_type }}</td>
                    
                                    <td>{{ $audit->event }}</td>
                                
                                      <td>{{ $audit->url }}</td>
                                      <td>{{ $audit->ip_address }}</td>
                                 
                                      <td>{{ $audit->created_at }}</td>
                                      <td>{{ $audit->updated_at }}</td>
                                   
                                    <td>
                                     
                                    </td>

                                 
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                     {!! $audits->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>

   


  </div>
     </div>
   




@stop

@section('css')
<link ref="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
