@extends('layouts.app')

@section('template_title')
    {{ $infraestructura->name ?? 'Show Infraestructura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Infraestructura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('infraestructuras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $infraestructura->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $infraestructura->propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Constructura:</strong>
                            {{ $infraestructura->constructura }}
                        </div>
                        <div class="form-group">
                            <strong>Proposito:</strong>
                            {{ $infraestructura->proposito }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $infraestructura->img }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $infraestructura->id_estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Municipio:</strong>
                            {{ $infraestructura->id_municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Parroquia:</strong>
                            {{ $infraestructura->id_parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Utm A:</strong>
                            {{ $infraestructura->utm_a }}
                        </div>
                        <div class="form-group">
                            <strong>Utm B:</strong>
                            {{ $infraestructura->utm_b }}
                        </div>
                        <div class="form-group">
                            <strong>Desc Ubicacion:</strong>
                            {{ $infraestructura->desc_ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Poblacion Servida:</strong>
                            {{ $infraestructura->poblacion_servida }}
                        </div>
                        <div class="form-group">
                            <strong>Id Infraestructura:</strong>
                            {{ $infraestructura->id_infraestructura }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Infraestructura:</strong>
                            {{ $infraestructura->id_tipo_infraestructura }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sistema:</strong>
                            {{ $infraestructura->id_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Id Acueducto:</strong>
                            {{ $infraestructura->id_acueducto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
