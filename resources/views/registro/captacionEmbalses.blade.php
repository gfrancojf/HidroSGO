@extends('layouts.dashboard')
@section('tittle','mantenimiento a')
@section('home')

<div class="content">
  <div class="content-wrapper">

      <h3 class="panel-title"><a href="" class="btn btn-success buton-lg"><i class="fa fa-plus"></i> AGREGAR NUEVO EMBALSE</a></h3>

      <h3 class="panel-title">EMBALSES REGISTRADOS EN EL SISTEMA</h3>

    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>NOMBRE</th>
          <th>LOCACION</th>
          <th>TIPO</th>
          <th>PROPOSITO</th>
          <th>UTM</th>
          <th>PROPIETARIO</th>
          <th>CONSTRUCTORA</th>
          <th>CRONOLOGÍA</th>
        </tr>
      </thead>
      <tbody>
        @foreach($embalses as $emb)
        <tr>
          <td>{{$emb->nombre}}</td>
          <td>{{$emb->estado}}, {{$emb->municipio}}, {{$emb->parroquia}}, {{$emb->desc_ubicacion}}</td>
          <td>{{$emb->tipo}}</td>
          <td>{{$emb->proposito}}</td>
          <td>Norte {{$emb->utm_a}} - Este {{$emb->utm_a}}</td>
          <td>{{$emb->propietario}}</td>
          <td>{{$emb->constructora}}</td>
          <td>{{$emb->cronologia}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
{{--   <div id="resultados">
    <div class="panel panel-default">
      <div class="panel-heading" id="titulo_add">

        <h3 class="panel-title"><a href="" class="btn btn-success buton-lg"><i class="fa fa-plus"></i> AGREGAR NUEVO EMBALSE</a></h3>

      <h3 class="panel-title">EMBALSES REGISTRADOS EN EL SISTEMA</h3>

</div>
<div class="panel-body" id="control_fuente">
  <table class="table table-condensed" id="tabla_control">
    <thead>
      <tr>
        <th>FUENTE</th>
        <th>DISEÑO</th>
        <th>CUOTA</th>
        <th>EXTRACCIÓN</th>
        <th>VARIABLE</th>
        <th>FECHA ULT.MOD</th>
        <th>HORA ULT.MOD</th>
        <th>VER FICHA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>

        <td>

        </td>
        <td>
        </td>

        <td class="text-center">

          <i class="fa fa-arrow-up" style="color:#007F06;"></i> 

          <i class="fa fa-arrow-down" style="color:#C80003;"></i>

        </td>

        <td><? echo $ros["fecha"] ?></td>
        <td><? echo $ros["hora"] ?></td>

        <td>SIN REGISTRO</td>
        <td>SIN REGISTRO</td>
        <td>SIN REGISTRO</td>
        <td>SIN REGISTRO</td>
        <td>SIN REGISTRO</td>

        <td><a href="javascript:void(0)" onClick="VisualFuente(2,<? echo $row["id"] ?>)" class="btn btn-success"><i class="fa fa-eye"></i></a></td>
      </tr>

    </tbody>


  </table>



</div>
</div> --}}

</div>
</div>





</div>
<script type="text/javascript">
  function VisualFuente(ipem,ipem2){
    var url = "visual_fuentes.php?id="+ipem2+"&control="+ipem;
    $.ajax({                        
      type: "GET",                 
      url: url,                      
      success: function(data)             
      {
        $('#resultados').html(data);
        console.log(ipem);
      }
    });

  }
</script>
@endsection