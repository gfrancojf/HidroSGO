@extends('layouts.app')

@section('template_title')
    {{ $valvula->name ?? 'Show Valvula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Valvula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('valvulas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Diametro:</strong>
                            {{ $valvula->diametro }}
                        </div>
                        <div class="form-group">
                            <strong>Presion Nominal:</strong>
                            {{ $valvula->presion_nominal }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Valvula:</strong>
                            {{ $valvula->id_tipo_valvula }}
                        </div>
                        <div class="form-group">
                            <strong>Accionamiento:</strong>
                            {{ $valvula->accionamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fc:</strong>
                            {{ $valvula->fc }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estacion Bombeo:</strong>
                            {{ $valvula->id_estacion_bombeo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Fabricante:</strong>
                            {{ $valvula->id_fabricante }}
                        </div>
                        <div class="form-group">
                            <strong>Operatividad:</strong>
                            {{ $valvula->operatividad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
