<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('succion_min') }}
            {{ Form::text('succion_min', $detallesTecnicosEstacionBombeo->succion_min, ['class' => 'form-control' . ($errors->has('succion_min') ? ' is-invalid' : ''), 'placeholder' => 'Succion Min']) }}
            {!! $errors->first('succion_min', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('succion_max') }}
            {{ Form::text('succion_max', $detallesTecnicosEstacionBombeo->succion_max, ['class' => 'form-control' . ($errors->has('succion_max') ? ' is-invalid' : ''), 'placeholder' => 'Succion Max']) }}
            {!! $errors->first('succion_max', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descarga_min') }}
            {{ Form::text('descarga_min', $detallesTecnicosEstacionBombeo->descarga_min, ['class' => 'form-control' . ($errors->has('descarga_min') ? ' is-invalid' : ''), 'placeholder' => 'Descarga Min']) }}
            {!! $errors->first('descarga_min', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descarga_max') }}
            {{ Form::text('descarga_max', $detallesTecnicosEstacionBombeo->descarga_max, ['class' => 'form-control' . ($errors->has('descarga_max') ? ' is-invalid' : ''), 'placeholder' => 'Descarga Max']) }}
            {!! $errors->first('descarga_max', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amp_min') }}
            {{ Form::text('amp_min', $detallesTecnicosEstacionBombeo->amp_min, ['class' => 'form-control' . ($errors->has('amp_min') ? ' is-invalid' : ''), 'placeholder' => 'Amp Min']) }}
            {!! $errors->first('amp_min', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amp_max') }}
            {{ Form::text('amp_max', $detallesTecnicosEstacionBombeo->amp_max, ['class' => 'form-control' . ($errors->has('amp_max') ? ' is-invalid' : ''), 'placeholder' => 'Amp Max']) }}
            {!! $errors->first('amp_max', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('voltaje_min') }}
            {{ Form::text('voltaje_min', $detallesTecnicosEstacionBombeo->voltaje_min, ['class' => 'form-control' . ($errors->has('voltaje_min') ? ' is-invalid' : ''), 'placeholder' => 'Voltaje Min']) }}
            {!! $errors->first('voltaje_min', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('voltaje_max') }}
            {{ Form::text('voltaje_max', $detallesTecnicosEstacionBombeo->voltaje_max, ['class' => 'form-control' . ($errors->has('voltaje_max') ? ' is-invalid' : ''), 'placeholder' => 'Voltaje Max']) }}
            {!! $errors->first('voltaje_max', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estacion_bombeo') }}
            {{ Form::text('id_estacion_bombeo', $detallesTecnicosEstacionBombeo->id_estacion_bombeo, ['class' => 'form-control' . ($errors->has('id_estacion_bombeo') ? ' is-invalid' : ''), 'placeholder' => 'Id Estacion Bombeo']) }}
            {!! $errors->first('id_estacion_bombeo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>