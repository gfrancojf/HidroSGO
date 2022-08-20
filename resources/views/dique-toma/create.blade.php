@extends('layouts.app')

@section('template_title')
Create Dique Toma
@endsection

@section('content')
<section class="content container-fluid">
    <div class="col-md-12">

        @includeif('partials.errors')

        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">Create Dique Toma</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('diquetoma.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="js-example-basic-single custom-select" name="estado" id="estado" onchange="llenarMunicipios()" required>
                                    <option value="#" selected>Seleccione</option>
                                    @foreach($estados as $estado)
                                    <option value="{{$estado->id}}">{{$estado->estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Municipio</label>
                                <select class="js-example-basic-single custom-select" name="municipio" id="municipio" onchange="llenarParroquias()" required>
                                    <option value="null">Seleccione</option>
                                </select>
                            </div>
                            {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label>Parroquia</label>
                                <select class="js-example-basic-single custom-select" name="parroquia" id="parroquia" required>
                                    <option value="null">Seleccione</option>
                                </select>
                            </div>
                            {!! $errors->first('parroquia', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('ref_sector') }}
                            {{ Form::text('ref_sector', $diqueToma->ref_sector, ['class' => 'form-control' . ($errors->has('ref_sector') ? ' is-invalid' : ''), 'placeholder' => 'Ref Sector']) }}
                            {!! $errors->first('ref_sector', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('utm_a') }}
                            {{ Form::text('utm_a', $diqueToma->utm_a, ['class' => 'form-control' . ($errors->has('utm_a') ? ' is-invalid' : ''), 'placeholder' => 'Utm A']) }}
                            {!! $errors->first('utm_a', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('utm_b') }}
                            {{ Form::text('utm_b', $diqueToma->utm_b, ['class' => 'form-control' . ($errors->has('utm_b') ? ' is-invalid' : ''), 'placeholder' => 'Utm B']) }}
                            {!! $errors->first('utm_b', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('acueducto') }}
                            {{ Form::text('acueducto', $diqueToma->acueducto, ['class' => 'form-control' . ($errors->has('acueducto') ? ' is-invalid' : ''), 'placeholder' => 'Acueducto']) }}
                            {!! $errors->first('acueducto', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('toma_rio') }}
                            {{ Form::text('toma_rio', $diqueToma->toma_rio, ['class' => 'form-control' . ($errors->has('toma_rio') ? ' is-invalid' : ''), 'placeholder' => 'Toma Rio']) }}
                            {!! $errors->first('toma_rio', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('caudal_diseño') }}
                            {{ Form::text('caudal_diseño', $diqueToma->caudal_diseño, ['class' => 'form-control' . ($errors->has('caudal_diseño') ? ' is-invalid' : ''), 'placeholder' => 'Caudal Diseño']) }}
                            {!! $errors->first('caudal_diseño', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('caudal_recibe') }}
                            {{ Form::text('caudal_recibe', $diqueToma->caudal_recibe, ['class' => 'form-control' . ($errors->has('caudal_recibe') ? ' is-invalid' : ''), 'placeholder' => 'Caudal Recibe']) }}
                            {!! $errors->first('caudal_recibe', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('estatus') }}
                            {{ Form::text('estatus', $diqueToma->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
                            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <br>
                    <div class="box-footer mt20">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
<script type="text/javascript">

    function llenarMunicipios(){
        var estado = $('#estado').val()
            //console.log(estado)
            $.ajax({
                url : '/llenarMunicipios',
                type : 'post',
                data :  {
                    id_estado : estado,
                    "_token": "{{ csrf_token() }}"
                },
                success:function(municipios){
                    var municipios = $.parseJSON(municipios)
                    $('#municipio').empty()
                    $("#municipio").append("<option value='null'>Seleccione</option>")
                    for (var i = 0; i < municipios.length; i++){
                        $("#municipio").append("<option value='"+municipios[i].id+"' required>"+municipios[i].municipio+"</option>")
                    }
                }
            })
        }

        function llenarParroquias(){
            let id_muni = $('#municipio').val()
            let estado = $('#estado').val()

            $.ajax({
                url : '/llenarParroquias',
                type : 'post',
                data : {
                    id_municipio : id_muni,
                    id_estado : estado,
                    "_token": "{{ csrf_token() }}"
                },success:function(parroquias){
                    console.log(parroquias)
                    var parroquias = $.parseJSON(parroquias)
                    $('#parroquia').empty()
                    for (var i = 0; i < parroquias.length; i++){
                        $("#parroquia").append("<option value='"+parroquias[i].id+"' required>"+parroquias[i].parroquia+"</option>")
                    }
                }
            })

        }
    </script>