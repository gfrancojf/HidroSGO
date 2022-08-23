@extends('layouts.app')

@section('template_title')
    {{ $captacion->name ?? 'Show Captacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Captacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('captacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo Fuente:</strong>
                            {{ $captacion->id_tipo_fuente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Fuente:</strong>
                            {{ $captacion->id_fuente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Acueducto:</strong>
                            {{ $captacion->id_acueducto }}
                        </div>
                        <div class="form-group">
                            <strong>Cuota:</strong>
                            {{ $captacion->cuota }}
                        </div>
                        <div class="form-group">
                            <strong>Extraccion:</strong>
                            {{ $captacion->extraccion }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $captacion->observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
