@extends ('adminlte::page')

@section('title', 'Dashboard')


@section('content')
   <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
            <li class="breadcrumb-item active">Edicion de Perfiles y Permisos</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
 <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
@if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
<strong>¡Revise los campos!</strong>
                            @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
@endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
<label for="">Nombre del Rol:</label>
                                {!! Form::text('name', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Permisos para este Rol:</label>
                                <br/>
                                @foreach($permission as $value)
<div class="form-check form-check-inline py-4">
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
</div>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>

                    </div>
                    {!! Form::close() !!}

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
