<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('number_line') }}
            {{ Form::text('number_line', $order->number_line, ['class' => 'form-control' . ($errors->has('number_line') ? ' is-invalid' : ''), 'placeholder' => 'Number Line']) }}
            {!! $errors->first('number_line', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Order details') }}
            {{ Form::text('Order details', $order->Order details, ['class' => 'form-control' . ($errors->has('Order details') ? ' is-invalid' : ''), 'placeholder' => 'Order Details']) }}
            {!! $errors->first('Order details', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Specifications') }}
            {{ Form::text('Specifications', $order->Specifications, ['class' => 'form-control' . ($errors->has('Specifications') ? ' is-invalid' : ''), 'placeholder' => 'Specifications']) }}
            {!! $errors->first('Specifications', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('products_id') }}
            {{ Form::text('products_id', $order->products_id, ['class' => 'form-control' . ($errors->has('products_id') ? ' is-invalid' : ''), 'placeholder' => 'Products Id']) }}
            {!! $errors->first('products_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>