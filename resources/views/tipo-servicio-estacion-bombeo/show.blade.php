@extends('layouts.app')

@section('template_title')
    {{ $tipoServicioEstacionBombeo->name ?? 'Show Tipo Servicio Estacion Bombeo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Servicio Estacion Bombeo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-servicio-estacion-bombeos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Servicio Estacion Bombeo:</strong>
                            {{ $tipoServicioEstacionBombeo->tipo_servicio_estacion_bombeo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
