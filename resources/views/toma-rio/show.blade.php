@extends('layouts.app')

@section('template_title')
    {{ $tomaRio->name ?? 'Show Toma Rio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Toma Rio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tomarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tomaRio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tomaRio->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $tomaRio->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $tomaRio->parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $tomaRio->sector }}
                        </div>
                        <div class="form-group">
                            <strong>Coordenadas:</strong>
                            {{ $tomaRio->coordenadas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
