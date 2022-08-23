@extends('layouts.app')

@section('template_title')
    {{ $detallesTecnicosEstacionBombeo->name ?? 'Show Detalles Tecnicos Estacion Bombeo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalles Tecnicos Estacion Bombeo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles-tecnicos-estacion-bombeos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Succion Min:</strong>
                            {{ $detallesTecnicosEstacionBombeo->succion_min }}
                        </div>
                        <div class="form-group">
                            <strong>Succion Max:</strong>
                            {{ $detallesTecnicosEstacionBombeo->succion_max }}
                        </div>
                        <div class="form-group">
                            <strong>Descarga Min:</strong>
                            {{ $detallesTecnicosEstacionBombeo->descarga_min }}
                        </div>
                        <div class="form-group">
                            <strong>Descarga Max:</strong>
                            {{ $detallesTecnicosEstacionBombeo->descarga_max }}
                        </div>
                        <div class="form-group">
                            <strong>Amp Min:</strong>
                            {{ $detallesTecnicosEstacionBombeo->amp_min }}
                        </div>
                        <div class="form-group">
                            <strong>Amp Max:</strong>
                            {{ $detallesTecnicosEstacionBombeo->amp_max }}
                        </div>
                        <div class="form-group">
                            <strong>Voltaje Min:</strong>
                            {{ $detallesTecnicosEstacionBombeo->voltaje_min }}
                        </div>
                        <div class="form-group">
                            <strong>Voltaje Max:</strong>
                            {{ $detallesTecnicosEstacionBombeo->voltaje_max }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estacion Bombeo:</strong>
                            {{ $detallesTecnicosEstacionBombeo->id_estacion_bombeo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
