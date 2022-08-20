<div class="row">
    <div class="col-3">
        {{ Form::label('Nombre de la Planta') }}
        {{ Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('reg', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3">
        {{ Form::label('Tipo de Planta') }}
        {{ Form::text('tipo', null, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'tipo']) }}
        {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3">
        {{ Form::label('Caudal Diseño') }}
        {{ Form::text('caudal_diseño', null, ['class' => 'form-control' . ($errors->has('caudal_diseño') ? ' is-invalid' : ''), 'placeholder' => 'Caudal Diseño']) }}
        {!! $errors->first('caudal diseño', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3">
        {{ Form::label('Gerencia Responsable') }}
        {{ Form::text('gerencia_responsable', null, ['class' => 'form-control' . ($errors->has('gerencia_responsable') ? ' is-invalid' : ''), 'placeholder' => 'Gerencia Responsable']) }}
        {!! $errors->first('caudal diseño', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3">
        <div class="form-group">
            <label>Estado</label>
            <select class="js-example-basic-single custom-select" name="estado" id="estado" onchange="llenarMunicipios()" required>
                <option value="#" selected>Seleccione</option>
                @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->estado}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <label>Municipio</label>
            <select class="js-example-basic-single custom-select" name="municipio" id="municipio" onchange="llenarParroquias()" required>
                <option value="null">Seleccione</option>
            </select>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            <label>Parroquia</label>
            <select class="js-example-basic-single custom-select" name="parroquia" id="parroquia" required>
                <option value="null">Seleccione</option>
            </select>
        </div>
    </div>
    <div class="col-3">
        {{ Form::label('Sector') }}
        {{ Form::text('sector', null, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
        {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3">
        {{ Form::label('utm_a') }}
        {{ Form::text('utm_a', null, ['class' => 'form-control' . ($errors->has('utm_a') ? ' is-invalid' : ''), 'placeholder' => 'Utm A']) }}
        {!! $errors->first('utm_a', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3">
        {{ Form::label('utm_b') }}
        {{ Form::text('utm_b', null, ['class' => 'form-control' . ($errors->has('utm_b') ? ' is-invalid' : ''), 'placeholder' => 'Utm B']) }}
        {!! $errors->first('utm_b', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>