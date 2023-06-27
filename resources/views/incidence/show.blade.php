@extends('layouts.app')

@section('template_title')
    {{ $incidence->name ?? "{{ __('Mostrar') Incidence" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Incidence</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('incidences.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Discription:</strong>
                            {{ $incidence->Discription }}
                        </div>
                        <div class="form-group">
                            <strong>Productions Id:</strong>
                            {{ $incidence->productions_id }}
                        </div>
                        <div class="form-group">
                            <strong>Operators Id:</strong>
                            {{ $incidence->operators_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
