<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('nombre') }}
                {{ Form::text('nombre', $tomaRio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4">
                {{ Form::label('estado') }}
                {{ Form::text('estado', $tomaRio->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4">
                {{ Form::label('municipio') }}
                {{ Form::text('municipio', $tomaRio->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
                {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4">
                {{ Form::label('parroquia') }}
                {{ Form::text('parroquia', $tomaRio->parroquia, ['class' => 'form-control' . ($errors->has('parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
                {!! $errors->first('parroquia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4">
                {{ Form::label('sector') }}
                {{ Form::text('sector', $tomaRio->sector, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
                {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-4">
                {{ Form::label('coordenadas') }}
                {{ Form::text('coordenadas', $tomaRio->coordenadas, ['class' => 'form-control' . ($errors->has('coordenadas') ? ' is-invalid' : ''), 'placeholder' => 'Coordenadas']) }}
                {!! $errors->first('coordenadas', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>