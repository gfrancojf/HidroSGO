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
                    <li class="breadcrumb-item active">Valvulas</li>
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
                                {{ __(' Lista de Valvulas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('valvulas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
										<th>Diametro</th>
										<th>Presion nominal</th>
										<th>Tipo valvula</th>
										<th>Accionamiento</th>
										<th>fc</th>
										<th>Estacion bombeo</th>
										<th>operatividad</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($valvulas as $valcula)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $valcula->diametro }}</td>
											<td>{{ $valcula->presion_nominal }}</td>
											<td>{{ $valcula->id_tipo_valvula }}</td>
											<td>{{ $valcula->accionamiento }}</td>
											<td>{{ $valcula->fc }}</td>
											<td>{{ $valcula->id_estacion_bombeo }}</td>
                                            <td>{{ $valcula->operatividad }}</td>

                                            <td>
                                                <form action="{{ route('valvulas.destroy',$valvulas->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('valvulas.show',$valvula->id) }}">ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('valvulas.edit',$valvula->id) }}">Editar</a>
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
                {!! $valvulas->links() !!}
            </div>
        </div>
    </div>

@stop

@section('css')
    <link ref="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
