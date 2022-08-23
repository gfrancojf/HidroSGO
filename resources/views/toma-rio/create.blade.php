@extends('layouts.app')

@section('template_title')
Create Toma Rio
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Create Toma Rio</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tomarios.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-3">
                                {{ Form::label('nombre') }}
                                {{ Form::text('nombre', $tomaRio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-3">
                                <label>Estado</label>
                                <select class="js-example-basic-single custom-select" name="estado" id="estado" onchange="llenarMunicipios()" required>
                                    <option value="#" selected>Seleccione</option>
                                    @foreach($estados as $estado)
                                    <option value="{{$estado->id}}">{{$estado->estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label>Municipio</label>
                                <select class="js-example-basic-single custom-select" name="municipio" id="municipio" onchange="llenarParroquias()" required>
                                    <option value="null">Seleccione</option>
                                </select>
                            </div>

                            <div class="col-3">
                                <label>Parroquia</label>
                                <select class="js-example-basic-single custom-select" name="parroquia" id="parroquia" required>
                                    <option value="null">Seleccione</option>
                                </select>
                            </div>
                            <div class="col-3">
                                {{ Form::label('sector') }}
                                {{ Form::text('sector', $tomaRio->sector, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
                                {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-3">
                                {{ Form::label('coordenadas') }}
                                {{ Form::text('coordenadas', $tomaRio->coordenadas, ['class' => 'form-control' . ($errors->has('coordenadas') ? ' is-invalid' : ''), 'placeholder' => 'Coordenadas']) }}
                                {!! $errors->first('coordenadas', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <br>
                        <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                        @if($editReporte->id_sub_categ === $subcat->id_sub_categ) selected="true" @endif
                        
                    </form>
                </div>
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