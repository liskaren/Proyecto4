<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Type_line') }}
            {{ Form::text('Type_line', $linea->Type_line, ['class' => 'form-control' . ($errors->has('Type_line') ? ' is-invalid' : ''), 'placeholder' => 'Type Line']) }}
            {!! $errors->first('Type_line', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $linea->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_line') }}
            {{ Form::text('number_line', $linea->number_line, ['class' => 'form-control' . ($errors->has('number_line') ? ' is-invalid' : ''), 'placeholder' => 'Number Line']) }}
            {!! $errors->first('number_line', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>