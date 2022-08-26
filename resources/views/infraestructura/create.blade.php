@extends('layouts.app')

@section('template_title')
    Create Infraestructura
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title" style="color: white;">Create Infraestructura</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('infraestructuras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('infraestructura.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
