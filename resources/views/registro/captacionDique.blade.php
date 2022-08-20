@extends('layouts.dashboard')
@section('tittle','mantenimiento a')
@section('home')

<div class="content">
  <div class="content-wrapper">
    {{-- {{dd($captacion)}} --}}

    <h3 class="panel-title"><a href="" class="btn btn-success buton-lg"><i class="fa fa-plus"></i> AGREGAR NUEVO EMBALSE</a></h3>

    <h3 class="panel-title">EMBALSES REGISTRADOS EN EL SISTEMA</h3>


  <table class="table table-bordered">
    <thead>
      <tr>
        <th>FUENTE</th>
        <th>DISEÑO</th>
        <th>CAUDAL</th>
        <th>VARIABLE</th>
        <th>FECHA ULT.MOD</th>
        <th>HORA ULT.MOD</th>
        <th>FICHA</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($dique as $i => $cap)
        @if($cap .)
      <tr>
        <td>{{$cap->nombre}}</td>
        <td>{{$cap->caudal_diseno}}</td>
        <td>{{$cap->utm_b}}</td>
        <td>FLECHAS</td>
        <td>{{$cap->fecha}}</td>
        <td>{{$cap->hora}}</td>
        <td>FICHA</td>
      </tr>

      @endforeach --}}
    </tbody>
  </table>
</div>
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