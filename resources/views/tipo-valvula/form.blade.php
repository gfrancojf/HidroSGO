<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_valvula') }}
            {{ Form::text('tipo_valvula', $tipoValvula->tipo_valvula, ['class' => 'form-control' . ($errors->has('tipo_valvula') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Valvula']) }}
            {!! $errors->first('tipo_valvula', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>