<<<<<<< HEAD
@extends('layouts.app')

@section('template_title')
    Infraestructura
@endsection

@section('content')
    <div class="container-fluid">
=======
@extends ('adminlte::page')

@section('title' )
@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
                    <li class="breadcrumb-item active">Infraestructura</li>
                </ol>
            </div><!-- /.col -->
        </div>
    </div>
    <div class="container-fluid">
>>>>>>> franco
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
<<<<<<< HEAD
                                {{ __('Infraestructura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('infraestructuras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
=======
                                {{ __(' Lista de Infraestructura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('infraestructura.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __(' Agregar Registro') }}
>>>>>>> franco
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
<<<<<<< HEAD
                                        
										<th>Nombre</th>
										<th>Propietario</th>
										<th>Constructura</th>
										<th>Proposito</th>
										<th>Img</th>
										<th>Id Estado</th>
										<th>Id Municipio</th>
										<th>Id Parroquia</th>
										<th>Utm A</th>
										<th>Utm B</th>
										<th>Desc Ubicacion</th>
										<th>Poblacion Servida</th>
										<th>Id Infraestructura</th>
										<th>Id Tipo Infraestructura</th>
										<th>Id Sistema</th>
										<th>Id Acueducto</th>

                                        <th></th>
=======
										<th>nombre</th>
										<th>propietario </th>
										<th>constructura</th>
										<th>proposito</th>
										<th>id_estado</th>
										<th>id_municipio</th>
										<th>id_parroquia</th>
                                        <th>Opciones</th>
>>>>>>> franco
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infraestructuras as $infraestructura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
<<<<<<< HEAD
                                            
=======
>>>>>>> franco
											<td>{{ $infraestructura->nombre }}</td>
											<td>{{ $infraestructura->propietario }}</td>
											<td>{{ $infraestructura->constructura }}</td>
											<td>{{ $infraestructura->proposito }}</td>
<<<<<<< HEAD
											<td>{{ $infraestructura->img }}</td>
											<td>{{ $infraestructura->id_estado }}</td>
											<td>{{ $infraestructura->id_municipio }}</td>
											<td>{{ $infraestructura->id_parroquia }}</td>
											<td>{{ $infraestructura->utm_a }}</td>
											<td>{{ $infraestructura->utm_b }}</td>
											<td>{{ $infraestructura->desc_ubicacion }}</td>
											<td>{{ $infraestructura->poblacion_servida }}</td>
											<td>{{ $infraestructura->id_infraestructura }}</td>
											<td>{{ $infraestructura->id_tipo_infraestructura }}</td>
											<td>{{ $infraestructura->id_sistema }}</td>
											<td>{{ $infraestructura->id_acueducto }}</td>

                                            <td>
                                                <form action="{{ route('infraestructuras.destroy',$infraestructura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('infraestructuras.show',$infraestructura->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('infraestructuras.edit',$infraestructura->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
=======
											<td>{{ $infraestructura->id_estado }}</td>
											<td>{{ $infraestructura->id_municipio }}</td>
                                            <td>{{ $infraestructura->id_parroquia }}</td>

                                            <td>
                                                <form action="{{ route('infraestructura.destroy',$infraestructura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('infraestructura.show',$infraestructura->id) }}">ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('infraestructura.edit',$infraestructura->id) }}">Editar</a>
                                                    @csrf
>>>>>>> franco
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $infraestructuras->links() !!}
            </div>
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======

@stop

@section('css')
    <link ref="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
>>>>>>> franco
