@extends('layouts.app')

@section('template_title')
    {{ $pozoProfundo->name ?? 'Show Pozo Profundo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pozo Profundo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pozo-profundos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pozoProfundo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pozoProfundo->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $pozoProfundo->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $pozoProfundo->parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $pozoProfundo->sector }}
                        </div>
                        <div class="form-group">
                            <strong>Coordenadas:</strong>
                            {{ $pozoProfundo->coordenadas }}
                        </div>
                        <div class="form-group">
                            <strong>Acueducto:</strong>
                            {{ $pozoProfundo->acueducto }}
                        </div>
                        <div class="form-group">
                            <strong>Proposito:</strong>
                            {{ $pozoProfundo->proposito }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $pozoProfundo->propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Caudal Diseno:</strong>
                            {{ $pozoProfundo->caudal_diseno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
