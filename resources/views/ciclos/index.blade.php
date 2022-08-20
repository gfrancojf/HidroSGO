@extends('layouts.app')

@section('template_title')
Ciclos de Distribucion
@endsection

@section('content')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
                <li class="breadcrumb-item active">Listado de Ciclos de Distribución</li>
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
                            {{ __('Ciclos de Distribución') }}
                        </span>

                        <div class="float-right">
                            <a href="{{-- {{ route('diquetoma.create') }} --}}" class="btn btn-primary btn-sm float-right" data-placement="left">
                              {{ __('Crear Nuevo Ciclo') }}
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
                                <th>Nº</th>
                                <th>CICLO</th>
                                <th>GERENCIA</th>
                                <th>MUNICIPIO</th>
                                <th>PARROQUIA</th>
                                <th>SECTORES</th>
                                <th>AGREGAR SECTORES</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <form action="{{-- {{ route('diquetoma.destroy',$diqueToma->id) }} --}}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{-- {{ route('diquetoma.show',$diqueToma->id) }} --}}">ver</a>
                                        <a class="btn btn-sm btn-success" href="{{-- {{ route('diquetoma.edit',$diqueToma->id) }} --}}">Editar</a>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- {!! $diqueTomas->links() !!} --}}
    </div>
</div>
</div>
@endsection
