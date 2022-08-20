@extends('layouts.app')

@section('template_title')
    Update Pozo Profundo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Pozo Profundo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pozo-profundos.update', $pozoProfundo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pozo-profundo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
