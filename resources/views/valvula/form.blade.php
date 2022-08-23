<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('diametro') }}
            {{ Form::text('diametro', $valvula->diametro, ['class' => 'form-control' . ($errors->has('diametro') ? ' is-invalid' : ''), 'placeholder' => 'Diametro']) }}
            {!! $errors->first('diametro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presion_nominal') }}
            {{ Form::text('presion_nominal', $valvula->presion_nominal, ['class' => 'form-control' . ($errors->has('presion_nominal') ? ' is-invalid' : ''), 'placeholder' => 'Presion Nominal']) }}
            {!! $errors->first('presion_nominal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_valvula') }}
            {{ Form::text('id_tipo_valvula', $valvula->id_tipo_valvula, ['class' => 'form-control' . ($errors->has('id_tipo_valvula') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Valvula']) }}
            {!! $errors->first('id_tipo_valvula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('accionamiento') }}
            {{ Form::text('accionamiento', $valvula->accionamiento, ['class' => 'form-control' . ($errors->has('accionamiento') ? ' is-invalid' : ''), 'placeholder' => 'Accionamiento']) }}
            {!! $errors->first('accionamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fc') }}
            {{ Form::text('fc', $valvula->fc, ['class' => 'form-control' . ($errors->has('fc') ? ' is-invalid' : ''), 'placeholder' => 'Fc']) }}
            {!! $errors->first('fc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estacion_bombeo') }}
            {{ Form::text('id_estacion_bombeo', $valvula->id_estacion_bombeo, ['class' => 'form-control' . ($errors->has('id_estacion_bombeo') ? ' is-invalid' : ''), 'placeholder' => 'Id Estacion Bombeo']) }}
            {!! $errors->first('id_estacion_bombeo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_fabricante') }}
            {{ Form::text('id_fabricante', $valvula->id_fabricante, ['class' => 'form-control' . ($errors->has('id_fabricante') ? ' is-invalid' : ''), 'placeholder' => 'Id Fabricante']) }}
            {!! $errors->first('id_fabricante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('operatividad') }}
            {{ Form::text('operatividad', $valvula->operatividad, ['class' => 'form-control' . ($errors->has('operatividad') ? ' is-invalid' : ''), 'placeholder' => 'Operatividad']) }}
            {!! $errors->first('operatividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>