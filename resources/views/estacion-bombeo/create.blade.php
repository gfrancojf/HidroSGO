@extends('layouts.app')

@section('template_title')
    Create Estacion Bombeo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="background-color: #000066;">
                        <span class="card-title" style="color: white;">Create Estacion Bombeo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estacion_bombeo.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estacion-bombeo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
