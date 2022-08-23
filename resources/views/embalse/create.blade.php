@extends('layouts.app')

@section('template_title')
Create Embalse
@endsection

@section('content')
<section class="content container-fluid">
    <div class="col-md-12">

        @includeif('partials.errors')

        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">Crear Embalse</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('embalses.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-3">
                            {{ Form::label('reg') }}
                            {{ Form::text('reg', $embalse->reg, ['class' => 'form-control' . ($errors->has('reg') ? ' is-invalid' : ''), 'placeholder' => 'Reg']) }}
                            {!! $errors->first('reg', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('nombre') }}
                            {{ Form::text('nombre', $embalse->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
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
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Municipio</label>
                                <select class="js-example-basic-single custom-select" name="municipio" id="municipio" onchange="llenarParroquias()" required>
                                    <option value="null">Seleccione</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label>Parroquia</label>
                                <select class="js-example-basic-single custom-select" name="parroquia" id="parroquia" required>
                                    <option value="null">Seleccione</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            {{ Form::label('desc_ubicacion') }}
                            {{ Form::text('desc_ubicacion', $embalse->desc_ubicacion, ['class' => 'form-control' . ($errors->has('desc_ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Desc Ubicacion']) }}
                            {!! $errors->first('desc_ubicacion', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('utm_a') }}
                            {{ Form::text('utm_a', $embalse->utm_a, ['class' => 'form-control' . ($errors->has('utm_a') ? ' is-invalid' : ''), 'placeholder' => 'Utm A']) }}
                            {!! $errors->first('utm_a', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('utm_b') }}
                            {{ Form::text('utm_b', $embalse->utm_b, ['class' => 'form-control' . ($errors->has('utm_b') ? ' is-invalid' : ''), 'placeholder' => 'Utm B']) }}
                            {!! $errors->first('utm_b', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('proposito') }}
                            {{ Form::text('proposito', $embalse->proposito, ['class' => 'form-control' . ($errors->has('proposito') ? ' is-invalid' : ''), 'placeholder' => 'Proposito']) }}
                            {!! $errors->first('proposito', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('propietario') }}
                            {{ Form::text('propietario', $embalse->propietario, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
                            {!! $errors->first('propietario', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('constructora') }}
                            {{ Form::text('constructora', $embalse->constructora, ['class' => 'form-control' . ($errors->has('constructora') ? ' is-invalid' : ''), 'placeholder' => 'Constructora']) }}
                            {!! $errors->first('constructora', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            {{ Form::label('cronologia') }}
                            {{ Form::text('cronologia', $embalse->cronologia, ['class' => 'form-control' . ($errors->has('cronologia') ? ' is-invalid' : ''), 'placeholder' => 'Cronologia']) }}
                            {!! $errors->first('cronologia', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
            </div>
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
                        $("#municipio").append("<option value='"+municipios[i].id+"'>"+municipios[i].municipio+"</option>")
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
                        $("#parroquia").append("<option value='"+parroquias[i].id+"'>"+parroquias[i].parroquia+"</option>")
                    }
                }
            })

        }
    </script>