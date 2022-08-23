@extends('layouts.app')

@section('template_title')
    {{ $ubicacionGeografica->name ?? 'Show Ubicacion Geografica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ubicacion Geografica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ubicacion-geograficas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Coordenadas:</strong>
                            {{ $ubicacionGeografica->coordenadas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
