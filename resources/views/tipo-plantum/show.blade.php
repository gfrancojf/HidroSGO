@extends('layouts.app')

@section('template_title')
    {{ $tipoPlantum->name ?? 'Show Tipo Plantum' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Plantum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-planta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Planta:</strong>
                            {{ $tipoPlantum->tipo_planta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
