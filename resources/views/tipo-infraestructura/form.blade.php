<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_infraestructura') }}
            {{ Form::text('tipo_infraestructura', $tipoInfraestructura->tipo_infraestructura, ['class' => 'form-control' . ($errors->has('tipo_infraestructura') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Infraestructura']) }}
            {!! $errors->first('tipo_infraestructura', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>