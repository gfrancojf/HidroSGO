@extends('layouts.app')

@section('template_title')
    Detalles Tecnicos Estacion Bombeo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles Tecnicos Estacion Bombeo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles-tecnicos-estacion-bombeos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Succion Min</th>
										<th>Succion Max</th>
										<th>Descarga Min</th>
										<th>Descarga Max</th>
										<th>Amp Min</th>
										<th>Amp Max</th>
										<th>Voltaje Min</th>
										<th>Voltaje Max</th>
										<th>Id Estacion Bombeo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesTecnicosEstacionBombeos as $detallesTecnicosEstacionBombeo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallesTecnicosEstacionBombeo->succion_min }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->succion_max }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->descarga_min }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->descarga_max }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->amp_min }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->amp_max }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->voltaje_min }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->voltaje_max }}</td>
											<td>{{ $detallesTecnicosEstacionBombeo->id_estacion_bombeo }}</td>

                                            <td>
                                                <form action="{{ route('detalles-tecnicos-estacion-bombeos.destroy',$detallesTecnicosEstacionBombeo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles-tecnicos-estacion-bombeos.show',$detallesTecnicosEstacionBombeo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles-tecnicos-estacion-bombeos.edit',$detallesTecnicosEstacionBombeo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detallesTecnicosEstacionBombeos->links() !!}
            </div>
        </div>
    </div>
@endsection
