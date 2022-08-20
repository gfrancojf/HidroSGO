@extends('layouts.app')

@section('template_title')
    Plantas
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
            <li class="breadcrumb-item active">listados de Plantas</li>
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
                                {{ __('Plantas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('plantas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva Planta') }}
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
                                        <th>Tipo</th>
                                        <th>Caudal/Diseño</th>
                                        <th>Sistema Asociado</th>
                                        <th>Gerencia</th>
										<th>Direccion</th>
                                        <th>UTM Norte</th>
                                        <th>UTM Este</th>
										<th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($embalses as $embalse) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <form action="{{-- {{ route('embalses.destroy',$embalse->id) }} --}}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{-- {{ route('embalses.show',$embalse->id) }} --}}">Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{-- {{ route('embalses.edit',$embalse->id) }} --}}">Editar</a>
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $embalses->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
