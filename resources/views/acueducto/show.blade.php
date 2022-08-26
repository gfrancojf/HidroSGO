@extends('layouts.app')

@section('template_title')
    {{ $acueducto->name ?? 'Show Acueducto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3 class="card-title" style="color: white;">Show Acueducto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('acueductos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $acueducto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $acueducto->id_estado }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad Distribucion:</strong>
                            {{ $acueducto->capacidad_distribucion }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad Modificada:</strong>
                            {{ $acueducto->capacidad_modificada }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
