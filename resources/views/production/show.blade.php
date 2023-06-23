@extends('layouts.app')

@section('template_title')
    {{ $production->name ?? "{{ __('Show') Production" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Production</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Number Line:</strong>
                            {{ $production->Number line }}
                        </div>
                        <div class="form-group">
                            <strong>Number Of Units:</strong>
                            {{ $production->Number of units }}
                        </div>
                        <div class="form-group">
                            <strong>Specifications:</strong>
                            {{ $production->Specifications }}
                        </div>
                        <div class="form-group">
                            <strong>Orders Id:</strong>
                            {{ $production->orders_id }}
                        </div>
                        <div class="form-group">
                            <strong>Products Id:</strong>
                            {{ $production->products_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
