@extends('layouts.app')

@section('template_title')
    Captacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Captacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('captacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Tipo Fuente</th>
										<th>Id Fuente</th>
										<th>Id Acueducto</th>
										<th>Cuota</th>
										<th>Extraccion</th>
										<th>Observacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($captacions as $captacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $captacion->id_tipo_fuente }}</td>
											<td>{{ $captacion->id_fuente }}</td>
											<td>{{ $captacion->id_acueducto }}</td>
											<td>{{ $captacion->cuota }}</td>
											<td>{{ $captacion->extraccion }}</td>
											<td>{{ $captacion->observacion }}</td>

                                            <td>
                                                <form action="{{ route('captacions.destroy',$captacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('captacions.show',$captacion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('captacions.edit',$captacion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $captacions->links() !!}
            </div>
        </div>
    </div>
@endsection
