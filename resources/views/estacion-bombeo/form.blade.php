<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $estacionBombeo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_grupos') }}
            {{ Form::text('cantidad_grupos', $estacionBombeo->cantidad_grupos, ['class' => 'form-control' . ($errors->has('cantidad_grupos') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Grupos']) }}
            {!! $errors->first('cantidad_grupos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_estacion_bombeo') }}
            {{ Form::text('id_tipo_estacion_bombeo', $estacionBombeo->id_tipo_estacion_bombeo, ['class' => 'form-control' . ($errors->has('id_tipo_estacion_bombeo') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Estacion Bombeo']) }}
            {!! $errors->first('id_tipo_estacion_bombeo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_servicio') }}
            {{ Form::text('id_tipo_servicio', $estacionBombeo->id_tipo_servicio, ['class' => 'form-control' . ($errors->has('id_tipo_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Servicio']) }}
            {!! $errors->first('id_tipo_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sistema') }}
            {{ Form::text('id_sistema', $estacionBombeo->id_sistema, ['class' => 'form-control' . ($errors->has('id_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Id Sistema']) }}
            {!! $errors->first('id_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_acueducto') }}
            {{ Form::text('id_acueducto', $estacionBombeo->id_acueducto, ['class' => 'form-control' . ($errors->has('id_acueducto') ? ' is-invalid' : ''), 'placeholder' => 'Id Acueducto']) }}
            {!! $errors->first('id_acueducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::text('id_estado', $estacionBombeo->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_municipio') }}
            {{ Form::text('id_municipio', $estacionBombeo->id_municipio, ['class' => 'form-control' . ($errors->has('id_municipio') ? ' is-invalid' : ''), 'placeholder' => 'Id Municipio']) }}
            {!! $errors->first('id_municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_parroquia') }}
            {{ Form::text('id_parroquia', $estacionBombeo->id_parroquia, ['class' => 'form-control' . ($errors->has('id_parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Id Parroquia']) }}
            {!! $errors->first('id_parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_coordenadas') }}
            {{ Form::text('id_coordenadas', $estacionBombeo->id_coordenadas, ['class' => 'form-control' . ($errors->has('id_coordenadas') ? ' is-invalid' : ''), 'placeholder' => 'Id Coordenadas']) }}
            {!! $errors->first('id_coordenadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>