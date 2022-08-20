<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $fabricante->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $fabricante->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serial') }}
            {{ Form::text('serial', $fabricante->serial, ['class' => 'form-control' . ($errors->has('serial') ? ' is-invalid' : ''), 'placeholder' => 'Serial']) }}
            {!! $errors->first('serial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('origen') }}
            {{ Form::text('origen', $fabricante->origen, ['class' => 'form-control' . ($errors->has('origen') ? ' is-invalid' : ''), 'placeholder' => 'Origen']) }}
            {!! $errors->first('origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ficha') }}
            {{ Form::text('ficha', $fabricante->ficha, ['class' => 'form-control' . ($errors->has('ficha') ? ' is-invalid' : ''), 'placeholder' => 'Ficha']) }}
            {!! $errors->first('ficha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>