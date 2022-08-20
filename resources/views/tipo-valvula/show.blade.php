@extends('layouts.app')

@section('template_title')
    {{ $tipoValvula->name ?? 'Show Tipo Valvula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Valvula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-valvulas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Valvula:</strong>
                            {{ $tipoValvula->tipo_valvula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
