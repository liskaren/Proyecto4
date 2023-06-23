@extends('layouts.app')

@section('template_title')
    {{ $record->name ?? "{{ __('Show') Record" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Record</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('records.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $record->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $record->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Operators Id:</strong>
                            {{ $record->operators_id }}
                        </div>
                        <div class="form-group">
                            <strong>Productions Id:</strong>
                            {{ $record->productions_id }}
                        </div>
                        <div class="form-group">
                            <strong>Incidences Id:</strong>
                            {{ $record->incidences_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
