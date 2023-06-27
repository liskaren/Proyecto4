@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Operator
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Operator</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('operators.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('operator.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
