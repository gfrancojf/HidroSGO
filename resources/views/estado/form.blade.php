<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $estado->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iso_3166-2') }}
            {{ Form::text('iso_3166-2', $estado->iso_3166-2, ['class' => 'form-control' . ($errors->has('iso_3166-2') ? ' is-invalid' : ''), 'placeholder' => 'Iso 3166-2']) }}
            {!! $errors->first('iso_3166-2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>