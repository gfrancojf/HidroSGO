@extends('layouts.app')

@section('template_title')
    {{ 'Ver Planta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- {{dd($embalse)}} --}}
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">MOSTRAR PLANTA</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{-- {{ route('embalses.index') }} --}}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre</strong>

                        </div>
                        <div class="form-group">
                            <strong>Tipo</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Caudal Diseño</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Gerencia Responsable</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Estado</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Municipio</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Parroquia</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Sector</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>UTM A</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>UTM B</strong>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection