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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __(' Lista de Infraestructura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('infraestructura.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __(' Agregar Registro') }}
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
										<th>nombre</th>
										<th>propietario </th>
										<th>constructura</th>
										<th>proposito</th>
										<th>id_estado</th>
										<th>id_municipio</th>
										<th>id_parroquia</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infraestructuras as $infraestructura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $infraestructura->nombre }}</td>
											<td>{{ $infraestructura->propietario }}</td>
											<td>{{ $infraestructura->constructura }}</td>
											<td>{{ $infraestructura->proposito }}</td>
											<td>{{ $infraestructura->id_estado }}</td>
											<td>{{ $infraestructura->id_municipio }}</td>
                                            <td>{{ $infraestructura->id_parroquia }}</td>

                                            <td>
                                                <form action="{{ route('infraestructura.destroy',$infraestructura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('infraestructura.show',$infraestructura->id) }}">ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('infraestructura.edit',$infraestructura->id) }}">Editar</a>
                                                    @csrf
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

@stop

@section('css')
    <link ref="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
