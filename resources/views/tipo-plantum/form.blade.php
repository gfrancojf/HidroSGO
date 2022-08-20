<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_planta') }}
            {{ Form::text('tipo_planta', $tipoPlantum->tipo_planta, ['class' => 'form-control' . ($errors->has('tipo_planta') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Planta']) }}
            {!! $errors->first('tipo_planta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>