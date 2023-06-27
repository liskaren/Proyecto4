@extends('layouts.app')

@section('template_title')
    {{ $plant->name ?? "{{ __('Show') Plant" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Plant</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plants.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $plant->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $plant->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Products Id:</strong>
                            {{ $plant->products_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
