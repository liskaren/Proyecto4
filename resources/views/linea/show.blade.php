@extends('layouts.app')

@section('template_title')
    {{ $linea->name ?? "{{ __('Show') Linea" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Linea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lineas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Line:</strong>
                            {{ $linea->Type_line }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $linea->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Number Line:</strong>
                            {{ $linea->number_line }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
