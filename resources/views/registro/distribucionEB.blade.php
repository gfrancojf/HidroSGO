@extends('layouts.dashboard')
@section('tittle','Nueva Estación de Bombeo')
@section('home')

<div class="container">
       <div class="card-body bg-white">
              <div class="row">
                     <div class="col-12">
                            <div class="card card-primary">
                                   <div class="card-header">
                                          <h4>DATOS DE INFRAESTRUCTURA DE LA EB</h4>
                                   </div>
                            </div>
                            <form method="post" action="">
                                   <div class="row">
                                          <div class="form-group col-lg-6">
                                                 <label>NOMBRE DE LA ESTACION</label>
                                                 <input type="text" class="form-control" name="a" required>
                                          </div>
                                          <div class="form-group col-lg-6">
                                                 <label>TIPO DE ESTACION</label>
                                                 <select class="form-control">
                                                        <option>Seleccione una Opción</option>
                                                        @foreach($tipoeb as $eb)
                                                        <option value="{{$eb->id}}">{{$eb->nombre}}</option>
                                                        @endforeach
                                                 </select>
                                          </div>
                                          <div class="form-group col-lg-4">
                                                 <label>SISTEMA ASOCIADO</label>
                                                 <select class="form-control" name="f" id="asociado">
                                                        <option value="">SELECCIONE</option>
                                                        <option value="1">TUY I</option>
                                                        <option value="2">TUY II</option>
                                                        <option value="3">TUY III</option>
                                                        <option value="4">TAGUAZA</option>
                                                        <option value="5">PANAMERICANO</option>
                                                        <option value="13">VARGAS</option>
                                                 </select>
                                          </div>
                                          <div class="form-group col-lg-4">
                                                 <label>SISTEMA ASOCIADO</label>
                                                 <select class="form-control" name="f" id="asociado">
                                                        <option value="">SELECCIONE</option>
                                                        <option value="1">TUY I</option>
                                                        <option value="2">TUY II</option>
                                                        <option value="3">TUY III</option>
                                                        <option value="4">TAGUAZA</option>
                                                        <option value="5">PANAMERICANO</option>
                                                        <option value="13">VARGAS</option>
                                                 </select>
                                          </div>
                                          <div class="form-group  col-lg-4">
                                                 <label>NUMERO DE GRUPOS ( EB )</label>
                                                 <select class="form-control" name="g" id="grupos" required onChange="Grupos()">
                                                        <option value="">SELECCIONAR</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                 </select>
                                          </div>
                                   </div>
                                   <div class="card card-primary">
                                          <div class="card-header">
                                                 <h4>UBICACION GEOGRAFICA</h4>
                                          </div>
                                   </div>
                                   <div class="row">
                                          <div class="form-group col-lg-6">
                                                 <label>ESTADO</label>
                                                 <select class="form-control" onchange="cargarMunicipio()" id="estado">
                                                        <option>Seleccione una Opción</option>
                                                        @foreach($estado as $est)
                                                        <option value="{{$est->id}}">{{$est->estado}}</option>
                                                        @endforeach
                                                 </select>
                                          </div>
                                          <div class="col-6">
                                                 <label>MUNICIPIO</label>
                                                 <select class="form-control" onchange="cargarParroquia()" id="municipio" required>
                                                        <option value="">SELECCIONAR</option>
                                                 </select>
                                          </div>
                                          <div class="col-6">
                                                 <label>PARROQUIA</label>
                                                 <select class="form-control" id="parroquia" required>
                                                        <option value="">SELECCIONAR</option>
                                                 </select>
                                          </div>
                                          <div class="form-group col-lg-6">
                                                 <label>SECTOR</label>
                                                 <input type="text" class="form-control" name="a" required>
                                          </div>
                                          <div class="form-group col-lg-6">
                                                 <label>UTM NORTE (m)</label>
                                                 <input type="text" class="form-control" name="a" required>
                                          </div>
                                          <div class="form-group col-lg-6">
                                                 <label>UTM ESTE (m)</label>
                                                 <input type="text" class="form-control" name="a" required>
                                          </div>
                                          <div class="form-group col-lg-10">
                                                <button type="button" class="btn btn-danger" align="center">VOLVER</button>
                                         </div>
                                         <div class="form-group col-lg-2">
                                           <button type="button" class="btn btn-primary" align="center">REGISTRAR EB</button>
                                    </div>
                             </div>
                      </form>
               </div>
        </div>
 </div>
</div>

<script type="text/javascript">

       function cargarMunicipio(){
              var id_estado = $('#estado').val();
              $.ajax({
                    url:"/municipios",
                    type:"POST",
                    dataType:"json",
                    data:{"_token": "{{ csrf_token() }}",
                    id_estado:id_estado,
             },success:function(municipios){
              $('#municipio').empty()
              $("#municipio").append("<option value='null'>SELECCIONAR</option>")
              for (var i = 0; i < municipios.length; i++){
                     $("#municipio").append("<option value='"+municipios[i].id+"'>"+municipios[i].municipio+"</option>")
              }
       },
})
       };

       function cargarParroquia(){
              var id_municipio = $('#municipio').val();
              $.ajax({
                    url:"/parroquias",
                    type:"POST",
                    dataType:"json",
                    data:{"_token": "{{ csrf_token() }}",
                    id_municipio:id_municipio,
             },success:function(parroquias){
              console.log(parroquias)
              $('#parroquia').empty()
              $("#parroquia").append("<option value='null'>SELECCIONAR</option>")
              for (var i = 0; i < parroquias.length; i++){
                     $("#parroquia").append("<option value='"+parroquias[i].id_parroquia+"'>"+parroquias[i].parroquia+"</option>")
              }
       }
})
       }
</script>

@endsection