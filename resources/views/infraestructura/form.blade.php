<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $infraestructura->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('propietario') }}
            {{ Form::text('propietario', $infraestructura->propietario, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
            {!! $errors->first('propietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('constructura') }}
            {{ Form::text('constructura', $infraestructura->constructura, ['class' => 'form-control' . ($errors->has('constructura') ? ' is-invalid' : ''), 'placeholder' => 'Constructura']) }}
            {!! $errors->first('constructura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proposito') }}
            {{ Form::text('proposito', $infraestructura->proposito, ['class' => 'form-control' . ($errors->has('proposito') ? ' is-invalid' : ''), 'placeholder' => 'Proposito']) }}
            {!! $errors->first('proposito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img') }}
            {{ Form::text('img', $infraestructura->img, ['class' => 'form-control' . ($errors->has('img') ? ' is-invalid' : ''), 'placeholder' => 'Img']) }}
            {!! $errors->first('img', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::text('id_estado', $infraestructura->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_municipio') }}
            {{ Form::text('id_municipio', $infraestructura->id_municipio, ['class' => 'form-control' . ($errors->has('id_municipio') ? ' is-invalid' : ''), 'placeholder' => 'Id Municipio']) }}
            {!! $errors->first('id_municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_parroquia') }}
            {{ Form::text('id_parroquia', $infraestructura->id_parroquia, ['class' => 'form-control' . ($errors->has('id_parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Id Parroquia']) }}
            {!! $errors->first('id_parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('utm_a') }}
            {{ Form::text('utm_a', $infraestructura->utm_a, ['class' => 'form-control' . ($errors->has('utm_a') ? ' is-invalid' : ''), 'placeholder' => 'Utm A']) }}
            {!! $errors->first('utm_a', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('utm_b') }}
            {{ Form::text('utm_b', $infraestructura->utm_b, ['class' => 'form-control' . ($errors->has('utm_b') ? ' is-invalid' : ''), 'placeholder' => 'Utm B']) }}
            {!! $errors->first('utm_b', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desc_ubicacion') }}
            {{ Form::text('desc_ubicacion', $infraestructura->desc_ubicacion, ['class' => 'form-control' . ($errors->has('desc_ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Desc Ubicacion']) }}
            {!! $errors->first('desc_ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('poblacion_servida') }}
            {{ Form::text('poblacion_servida', $infraestructura->poblacion_servida, ['class' => 'form-control' . ($errors->has('poblacion_servida') ? ' is-invalid' : ''), 'placeholder' => 'Poblacion Servida']) }}
            {!! $errors->first('poblacion_servida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_infraestructura') }}
            {{ Form::text('id_infraestructura', $infraestructura->id_infraestructura, ['class' => 'form-control' . ($errors->has('id_infraestructura') ? ' is-invalid' : ''), 'placeholder' => 'Id Infraestructura']) }}
            {!! $errors->first('id_infraestructura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_infraestructura') }}
            {{ Form::text('id_tipo_infraestructura', $infraestructura->id_tipo_infraestructura, ['class' => 'form-control' . ($errors->has('id_tipo_infraestructura') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Infraestructura']) }}
            {!! $errors->first('id_tipo_infraestructura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sistema') }}
            {{ Form::text('id_sistema', $infraestructura->id_sistema, ['class' => 'form-control' . ($errors->has('id_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Id Sistema']) }}
            {!! $errors->first('id_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_acueducto') }}
            {{ Form::text('id_acueducto', $infraestructura->id_acueducto, ['class' => 'form-control' . ($errors->has('id_acueducto') ? ' is-invalid' : ''), 'placeholder' => 'Id Acueducto']) }}
            {!! $errors->first('id_acueducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>