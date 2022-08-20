@extends('layouts.app')

@section('template_title')
Crear Organización Popular
@endsection

@section('content')
<section class="content container-fluid">
    <div class="col-md-12">

        @includeif('partials.errors')

        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">Crear Organización Popular</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{-- {{ route('diquetoma.store') }} --}}" role="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-3">
                            {{ Form::label('Nombre de la Organización Popular') }}
                            {{ Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ref Sector']) }}
                            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Tipo de Organización</label>
                                <select class="js-example-basic-single custom-select" name="tipo" id="tipo" required>
                                    <option value="#" selected>Seleccione</option>
                                    {{-- @foreach($estados as $estado)
                                    <option value="{{$estado->id}}">{{$estado->estado}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
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
                            {{ Form::text('ref_sector', null, ['class' => 'form-control' . ($errors->has('ref_sector') ? ' is-invalid' : ''), 'placeholder' => 'Ref Sector']) }}
                            {!! $errors->first('ref_sector', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <table class="table" align="center" id="tablaIntegrantes">
                                    <tr>
                                        <th>Tipo de Miembro</th>
                                        <th>Apellido</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                    </tr>
                                    <tr class="clonarlo">
                                        <td>                                        
                                            <select>
                                                <option value="#">Seleccione</option>
                                            </select>
                                        </td>
                                        <td><input class="form-control" type="text" id="descripcion" name="descripcion[]"></td>
                                        <td><input class="form-control" type="text" id="ordenNum" name="ordenNum[]" onkeypress="return valideKey(event)"></td>
                                        <td><input class="form-control" type="text" id="descripcion" name="descripcion[]"></td>
                                        <td>
                                            <button class="btn btn-primary" type="button" onclick="agregar_fila()">
                                                <i class="fas fa-fw fa-plus-circle" style="align-center"></i>
                                            </button>

                                            <button class="btn btn-danger" type="button" onclick="eliminar_fila($(this))">
                                                <i class="fas fa-fw fa-times-circle"></i>
                                            </button>                                
                                        </td>
                                    </tr>
                                </table>
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
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });

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

        function agregar_fila(){
            var id_tabla = 'tablaIntegrantes';
            var fila = $('#'+id_tabla+' .clonarlo').eq(0).clone(true, true)
            fila.find('input').val('')
            $('#'+id_tabla).append(fila)
        }

        function eliminar_fila(fila){

            var n_filas = fila.parent().closest('.table').find('.clonarlo').length
            var filaEliminar = fila.parent().closest('.clonarlo')
            //console.log(filaEliminar)

            if(n_filas > 1){
                filaEliminar.remove()
            }else{
                filaEliminar.find('input').val('')
            }

           
        }
    </script>