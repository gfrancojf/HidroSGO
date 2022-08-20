@extends('layouts.app')

@section('template_title')
    {{ $tipoInfraestructura->name ?? 'Show Tipo Infraestructura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Infraestructura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-infraestructuras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Infraestructura:</strong>
                            {{ $tipoInfraestructura->tipo_infraestructura }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
