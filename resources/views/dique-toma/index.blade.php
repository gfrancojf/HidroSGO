@extends('layouts.app')

@section('template_title')
Dique Toma
@endsection

@section('content')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
                <li class="breadcrumb-item active">listados  de Dique Tomas</li>
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
                            {{ __('Dique Toma') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('diquetoma.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                                {{-- <th>Acueducto</th> --}}
                                <th>Toma Rio</th>
                                <th>Caudal Diseño</th>
                                <th>Caudal Recibe</th>
                                <th>Estatus</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($diqueTomas as $diqueToma)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $diqueToma->nombre }}</td>
                                <td>{{ $diqueToma->estado->estado }}</td>
                                <td>{{ $diqueToma->acueducto->nombre }}</td>
                                <td>{{ $diqueToma->toma_rio }}</td>
                                <td>{{ $diqueToma->caudal_diseño }}</td>
                                <td>{{ $diqueToma->caudal_recibe }}</td>
                                <td>{{ $diqueToma->estatus }}</td>
                                <td>
                                    <form action="{{ route('diquetoma.destroy',$diqueToma->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('diquetoma.show',$diqueToma->id) }}">ver</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('diquetoma.edit',$diqueToma->id) }}">Editar</a>
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
        {!! $diqueTomas->links() !!}
    </div>
</div>
</div>
@endsection
