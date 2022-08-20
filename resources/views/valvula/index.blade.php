@extends('layouts.app')

@section('template_title')
    Valvula
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Valvula') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('valvulas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Diametro</th>
										<th>Presion Nominal</th>
										<th>Id Tipo Valvula</th>
										<th>Accionamiento</th>
										<th>Fc</th>
										<th>Id Estacion Bombeo</th>
										<th>Id Fabricante</th>
										<th>Operatividad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($valvulas as $valvula)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $valvula->diametro }}</td>
											<td>{{ $valvula->presion_nominal }}</td>
											<td>{{ $valvula->id_tipo_valvula }}</td>
											<td>{{ $valvula->accionamiento }}</td>
											<td>{{ $valvula->fc }}</td>
											<td>{{ $valvula->id_estacion_bombeo }}</td>
											<td>{{ $valvula->id_fabricante }}</td>
											<td>{{ $valvula->operatividad }}</td>

                                            <td>
                                                <form action="{{ route('valvulas.destroy',$valvula->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('valvulas.show',$valvula->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('valvulas.edit',$valvula->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $valvulas->links() !!}
            </div>
        </div>
    </div>
@endsection
