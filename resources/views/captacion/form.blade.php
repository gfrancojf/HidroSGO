<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_tipo_fuente') }}
            {{ Form::text('id_tipo_fuente', $captacion->id_tipo_fuente, ['class' => 'form-control' . ($errors->has('id_tipo_fuente') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Fuente']) }}
            {!! $errors->first('id_tipo_fuente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_fuente') }}
            {{ Form::text('id_fuente', $captacion->id_fuente, ['class' => 'form-control' . ($errors->has('id_fuente') ? ' is-invalid' : ''), 'placeholder' => 'Id Fuente']) }}
            {!! $errors->first('id_fuente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_acueducto') }}
            {{ Form::text('id_acueducto', $captacion->id_acueducto, ['class' => 'form-control' . ($errors->has('id_acueducto') ? ' is-invalid' : ''), 'placeholder' => 'Id Acueducto']) }}
            {!! $errors->first('id_acueducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuota') }}
            {{ Form::text('cuota', $captacion->cuota, ['class' => 'form-control' . ($errors->has('cuota') ? ' is-invalid' : ''), 'placeholder' => 'Cuota']) }}
            {!! $errors->first('cuota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('extraccion') }}
            {{ Form::text('extraccion', $captacion->extraccion, ['class' => 'form-control' . ($errors->has('extraccion') ? ' is-invalid' : ''), 'placeholder' => 'Extraccion']) }}
            {!! $errors->first('extraccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::text('observacion', $captacion->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>