<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Number line') }}
            {{ Form::text('Number line', $production->Number line, ['class' => 'form-control' . ($errors->has('Number line') ? ' is-invalid' : ''), 'placeholder' => 'Number Line']) }}
            {!! $errors->first('Number line', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Number of units') }}
            {{ Form::text('Number of units', $production->Number of units, ['class' => 'form-control' . ($errors->has('Number of units') ? ' is-invalid' : ''), 'placeholder' => 'Number Of Units']) }}
            {!! $errors->first('Number of units', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Specifications') }}
            {{ Form::text('Specifications', $production->Specifications, ['class' => 'form-control' . ($errors->has('Specifications') ? ' is-invalid' : ''), 'placeholder' => 'Specifications']) }}
            {!! $errors->first('Specifications', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('orders_id') }}
            {{ Form::text('orders_id', $production->orders_id, ['class' => 'form-control' . ($errors->has('orders_id') ? ' is-invalid' : ''), 'placeholder' => 'Orders Id']) }}
            {!! $errors->first('orders_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('products_id') }}
            {{ Form::text('products_id', $production->products_id, ['class' => 'form-control' . ($errors->has('products_id') ? ' is-invalid' : ''), 'placeholder' => 'Products Id']) }}
            {!! $errors->first('products_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>