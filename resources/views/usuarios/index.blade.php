@extends ('adminlte::page')




@section('content')


    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
  
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
            <li class="breadcrumb-item active">Listado de USuarios</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->



          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                          <a class="btn btn-success" href="{{ route('usuarios.create') }}">Nuevo</a>        
                         
                            <table class="table table-striped mt-2">
                              <thead>                                     
                                  <th>ID</th>
                                  <th>Nombre</th>
                                    <th>Correo Electronico</th>
                                    <th>Rol</th>
                                  <th>Acciones</th>                                                                   
                              </thead>
                              <tbody>
                                @foreach ($usuarios as $usuario)
                                  <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                      @if(!empty($usuario->getRoleNames()))
                                        @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                          <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                        @endforeach
                                      @endif
                                    </td>

                                    <td>                                  
                                              <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                                      {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
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
