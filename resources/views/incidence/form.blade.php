<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Discription') }}
            {{ Form::text('Discription', $incidence->Discription, ['class' => 'form-control' . ($errors->has('Discription') ? ' is-invalid' : ''), 'placeholder' => 'Discription']) }}
            {!! $errors->first('Discription', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productions_id') }}
            {{ Form::text('productions_id', $incidence->productions_id, ['class' => 'form-control' . ($errors->has('productions_id') ? ' is-invalid' : ''), 'placeholder' => 'Productions Id']) }}
            {!! $errors->first('productions_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('operators_id') }}
            {{ Form::text('operators_id', $incidence->operators_id, ['class' => 'form-control' . ($errors->has('operators_id') ? ' is-invalid' : ''), 'placeholder' => 'Operators Id']) }}
            {!! $errors->first('operators_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>