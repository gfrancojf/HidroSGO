<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_servicio_estacion_bombeo') }}
            {{ Form::text('tipo_servicio_estacion_bombeo', $tipoServicioEstacionBombeo->tipo_servicio_estacion_bombeo, ['class' => 'form-control' . ($errors->has('tipo_servicio_estacion_bombeo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Servicio Estacion Bombeo']) }}
            {!! $errors->first('tipo_servicio_estacion_bombeo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>