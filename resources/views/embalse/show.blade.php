@extends('layouts.app')

@section('template_title')
    {{ $embalse->name ?? 'Show Embalse' }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
            <li class="breadcrumb-item active">Embalse</li>
            </ol>
        </div><!-- /.col -->
        </div>
    </div>

    <section class="content container-fluid">
        <div class="row">
        
            <div class="col-md-12">
                <div class="card">
                    <div id="example"></div>
                    {{-- {{dd($embalse)}} --}}
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">MOSTRAR {{ $embalse->nombre }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('embalses.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Reg:</strong>
                            {{ $embalse->reg }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $embalse->nombre }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Desc Ubicacion:</strong>
                            {{ $embalse->desc_ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Utm A:</strong>
                            {{ $embalse->utm_a }}
                        </div>
                        <div class="form-group">
                            <strong>Utm B:</strong>
                            {{ $embalse->utm_b }}
                        </div>
                        <div class="form-group">
                            <strong>Proposito:</strong>
                            {{ $embalse->proposito }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $embalse->propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Constructora:</strong>
                            {{ $embalse->constructora }}
                        </div>
                        <div class="form-group">
                            <strong>Cronologia:</strong>
                            {{ $embalse->cronologia }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
