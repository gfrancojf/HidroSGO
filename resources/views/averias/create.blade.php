@extends('layouts.app')

@section('template_title')
Reportar Avería
@endsection

@section('content')
<section class="content container-fluid">
	<div class="col-md-12">

		@includeif('partials.errors')

		<div class="card card-default">
			<div class="card-header">
				<span class="card-title">Reportar Avería</span>
			</div>
			<div class="card-body">
				<form method="POST" action="{{-- {{ route('diquetoma.store') }} --}}" role="form" enctype="multipart/form-data">
					@csrf
					<div class="col-12">
						<label>REPORTE DE AVERÍA Nº</label>
						<input class="form-control" type="text" name="codigo" value="00000000000000">
					</div>
					<div class="row">
						<div class="col-4">
							{{ Form::label('Fecha de Registro') }}
							{{ Form::date('fecha', null, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'fecha']) }}
							{!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Tipo de Reporte</label>
								<select class="js-example-basic-single custom-select" name="tipo" id="tipo" required>
									<option value="#" selected>Seleccione</option>
								</select>
							</div>
							{!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Responsable</label>
								<select class="js-example-basic-single custom-select" name="responsable" id="responsable" required>
									<option value="#" selected>Seleccione</option>
								</select>
							</div>
							{!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
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
						<div class="col-8">
							{{ Form::label('Nombre de Cliente') }}
							{{ Form::text('cliente', null, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'cliente']) }}
							{!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
						</div>
						<div class="col-4">
							{{ Form::label('Telefono') }}
							{{ Form::text('telefono', null, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'telefono']) }}
							{!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
						</div>
						<div class="col-6">
							{{ Form::label('Dirección Avería') }}
							{{ Form::text('direccion', null, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'direccion']) }}
							{!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
						</div>
						<div class="col-6">
							{{ Form::label('Descripción Avería') }}
							{{ Form::text('descripcion', null, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
							{!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
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
    </script>