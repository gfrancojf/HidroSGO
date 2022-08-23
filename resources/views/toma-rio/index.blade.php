@extends('layouts.app')

@section('template_title')
    Toma Rio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Toma Rio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tomarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tomaRios as $tomaRio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tomaRio->nombre }}</td>
											<td>{{ $tomaRio->estado }}</td>
											<td>{{ $tomaRio->municipio }}</td>
											<td>{{ $tomaRio->parroquia }}</td>
											<td>{{ $tomaRio->sector }}</td>
											<td>{{ $tomaRio->coordenadas }}</td>

                                            <td>
                                                <form action="{{ route('toma-rios.destroy',$tomaRio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('toma-rios.show',$tomaRio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('toma-rios.edit',$tomaRio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tomaRios->links() !!}
            </div>
        </div>
    </div>
@endsection
