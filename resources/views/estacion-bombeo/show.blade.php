@extends('layouts.app')

@section('template_title')
    {{ $estacionBombeo->name ?? 'Show Estacion Bombeo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estacion Bombeo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estacion-bombeos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estacionBombeo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Grupos:</strong>
                            {{ $estacionBombeo->cantidad_grupos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Estacion Bombeo:</strong>
                            {{ $estacionBombeo->id_tipo_estacion_bombeo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Servicio:</strong>
                            {{ $estacionBombeo->id_tipo_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sistema:</strong>
                            {{ $estacionBombeo->id_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Id Acueducto:</strong>
                            {{ $estacionBombeo->id_acueducto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $estacionBombeo->id_estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Municipio:</strong>
                            {{ $estacionBombeo->id_municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Parroquia:</strong>
                            {{ $estacionBombeo->id_parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Coordenadas:</strong>
                            {{ $estacionBombeo->id_coordenadas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
