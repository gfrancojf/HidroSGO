@extends('layouts.app')

@section('template_title')
    Acueducto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Acueducto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('acueductos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Id Estado</th>
										<th>Capacidad Distribucion</th>
										<th>Capacidad Modificada</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($acueductos as $acueducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $acueducto->nombre }}</td>
											<td>{{ $acueducto->id_estado }}</td>
											<td>{{ $acueducto->capacidad_distribucion }}</td>
											<td>{{ $acueducto->capacidad_modificada }}</td>

                                            <td>
                                                <form action="{{ route('acueductos.destroy',$acueducto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('acueductos.show',$acueducto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('acueductos.edit',$acueducto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $acueductos->links() !!}
            </div>
        </div>
    </div>
@endsection
