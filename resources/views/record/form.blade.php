<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $record->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $record->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('operators_id') }}
            {{ Form::text('operators_id', $record->operators_id, ['class' => 'form-control' . ($errors->has('operators_id') ? ' is-invalid' : ''), 'placeholder' => 'Operators Id']) }}
            {!! $errors->first('operators_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productions_id') }}
            {{ Form::text('productions_id', $record->productions_id, ['class' => 'form-control' . ($errors->has('productions_id') ? ' is-invalid' : ''), 'placeholder' => 'Productions Id']) }}
            {!! $errors->first('productions_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('incidences_id') }}
            {{ Form::text('incidences_id', $record->incidences_id, ['class' => 'form-control' . ($errors->has('incidences_id') ? ' is-invalid' : ''), 'placeholder' => 'Incidences Id']) }}
            {!! $errors->first('incidences_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>