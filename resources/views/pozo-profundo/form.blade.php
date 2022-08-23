<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pozoProfundo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $pozoProfundo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipio') }}
            {{ Form::text('municipio', $pozoProfundo->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parroquia') }}
            {{ Form::text('parroquia', $pozoProfundo->parroquia, ['class' => 'form-control' . ($errors->has('parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
            {!! $errors->first('parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sector') }}
            {{ Form::text('sector', $pozoProfundo->sector, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
            {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('coordenadas') }}
            {{ Form::text('coordenadas', $pozoProfundo->coordenadas, ['class' => 'form-control' . ($errors->has('coordenadas') ? ' is-invalid' : ''), 'placeholder' => 'Coordenadas']) }}
            {!! $errors->first('coordenadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('acueducto') }}
            {{ Form::text('acueducto', $pozoProfundo->acueducto, ['class' => 'form-control' . ($errors->has('acueducto') ? ' is-invalid' : ''), 'placeholder' => 'Acueducto']) }}
            {!! $errors->first('acueducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proposito') }}
            {{ Form::text('proposito', $pozoProfundo->proposito, ['class' => 'form-control' . ($errors->has('proposito') ? ' is-invalid' : ''), 'placeholder' => 'Proposito']) }}
            {!! $errors->first('proposito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('propietario') }}
            {{ Form::text('propietario', $pozoProfundo->propietario, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
            {!! $errors->first('propietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('caudal_diseno') }}
            {{ Form::text('caudal_diseno', $pozoProfundo->caudal_diseno, ['class' => 'form-control' . ($errors->has('caudal_diseno') ? ' is-invalid' : ''), 'placeholder' => 'Caudal Diseno']) }}
            {!! $errors->first('caudal_diseno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>