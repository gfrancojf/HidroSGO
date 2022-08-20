@extends('layouts.app')

@section('template_title')
    Pozo Profundo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pozo Profundo') }}
                            </span>

                             <div class="float-right">
<a href="{{ route('pozoprofundos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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

										<th>Nombre</th>
										<th>Estado</th>
										<th>Municipio</th>
										<th>Parroquia</th>
										<th>Sector</th>
										<th>Coordenadas</th>
										<th>Acueducto</th>
										<th>Proposito</th>
										<th>Propietario</th>
										<th>Caudal Diseno</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pozoProfundos as $pozoProfundo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pozoProfundo->nombre }}</td>
											<td>{{ $pozoProfundo->estado }}</td>
											<td>{{ $pozoProfundo->municipio }}</td>
											<td>{{ $pozoProfundo->parroquia }}</td>
											<td>{{ $pozoProfundo->sector }}</td>
											<td>{{ $pozoProfundo->coordenadas }}</td>
											<td>{{ $pozoProfundo->acueducto }}</td>
											<td>{{ $pozoProfundo->proposito }}</td>
											<td>{{ $pozoProfundo->propietario }}</td>
											<td>{{ $pozoProfundo->caudal_diseno }}</td>

                                            <td>
<form action="{{ route('pozoprofundos.destroy',$pozoProfundo->id) }}" method="POST">
    <a class="btn btn-sm btn-primary " href="{{ route('pozosprofundos.show',$pozoProfundo->id) }}"><i
            class="fa fa-fw fa-eye"></i> Show</a>
    <a class="btn btn-sm btn-success" href="{{ route('pozosprofundos.edit',$pozoProfundo->id) }}"><i
            class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $pozoProfundos->links() !!}
            </div>
        </div>
    </div>
@endsection
