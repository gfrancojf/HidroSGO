@extends('layouts.app')

@section('template_title')
    {{ $fabricante->name ?? 'Show Fabricante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Fabricante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fabricantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $fabricante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $fabricante->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Serial:</strong>
                            {{ $fabricante->serial }}
                        </div>
                        <div class="form-group">
                            <strong>Origen:</strong>
                            {{ $fabricante->origen }}
                        </div>
                        <div class="form-group">
                            <strong>Ficha:</strong>
                            {{ $fabricante->ficha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
