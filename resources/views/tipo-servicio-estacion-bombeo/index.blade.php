@extends('layouts.app')

@section('template_title')
    Tipo Servicio Estacion Bombeo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Servicio Estacion Bombeo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-servicio-estacion-bombeos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tipo Servicio Estacion Bombeo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoServicioEstacionBombeos as $tipoServicioEstacionBombeo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoServicioEstacionBombeo->tipo_servicio_estacion_bombeo }}</td>

                                            <td>
                                                <form action="{{ route('tipo-servicio-estacion-bombeos.destroy',$tipoServicioEstacionBombeo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-servicio-estacion-bombeos.show',$tipoServicioEstacionBombeo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-servicio-estacion-bombeos.edit',$tipoServicioEstacionBombeo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tipoServicioEstacionBombeos->links() !!}
            </div>
        </div>
    </div>
@endsection
