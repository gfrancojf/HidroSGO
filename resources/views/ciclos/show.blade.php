@extends('layouts.app')

@section('template_title')
{{ 'Mostrar Ciclo' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">VER {{-- {{ $diqueToma->nombre }} --}}</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{-- {{ route('diquetoma.index') }} --}}"> VOLVER</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>MUNICIPIO</strong>

                    </div>
                    <div class="form-group">
                        <strong>PARROQUIA</strong>

                    </div>
                    <div class="form-group">
                        <strong>COMUNIDAD</strong>

                    </div>
                    <div class="form-group">
                        <strong>PROBLACION</strong>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection