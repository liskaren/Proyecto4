@extends('layouts.app')

@section('template_title')
    {{ $department->name ?? "{{ __('Show') Department" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Department</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $department->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Orders Id:</strong>
                            {{ $department->orders_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
