<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $acueducto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::text('id_estado', $acueducto->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad_distribucion') }}
            {{ Form::text('capacidad_distribucion', $acueducto->capacidad_distribucion, ['class' => 'form-control' . ($errors->has('capacidad_distribucion') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad Distribucion']) }}
            {!! $errors->first('capacidad_distribucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad_modificada') }}
            {{ Form::text('capacidad_modificada', $acueducto->capacidad_modificada, ['class' => 'form-control' . ($errors->has('capacidad_modificada') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad Modificada']) }}
            {!! $errors->first('capacidad_modificada', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>