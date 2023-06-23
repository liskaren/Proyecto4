@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? "{{ __('Show') Order" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Number Line:</strong>
                            {{ $order->number_line }}
                        </div>
                        <div class="form-group">
                            <strong>Order Details:</strong>
                            {{ $order->Order details }}
                        </div>
                        <div class="form-group">
                            <strong>Specifications:</strong>
                            {{ $order->Specifications }}
                        </div>
                        <div class="form-group">
                            <strong>Products Id:</strong>
                            {{ $order->products_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
