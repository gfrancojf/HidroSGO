@extends('layouts.app')

@section('template_title')
Create Embalse
@endsection

@section('content')
<section class="content container-fluid">
    <div class="col-md-12">

        @includeif('partials.errors')

        <div class="card card-default">
            <div class="card-header col-12" style="background-color: #000066;">
                <h3 class="card-title" style="color: white;">Crear Embalse</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('embalses.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('embalse.form')

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
        function llenarSector(){
            let id_parr = $('#parroquia').val()
            $.ajax({
                url : '/llenarSectores',
                type : 'post',
                data : {
                    id_parroquia : id_parr,
                    "_token": "{{ csrf_token() }}"
                },success:function(sectores){
                    console.log(sectores)
                    var sectores = $.parseJSON(sectores)
                    $('#sector').empty()
                    for (var i = 0; i < sectores.length; i++){
                        $("#sector").append("<option value='"+sectores[i].id+"'>"+sectores[i].sector+"</option>")
                    }
                }
            })

        }
    </script>