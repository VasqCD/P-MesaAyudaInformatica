@extends('layouts.app')

@section('template_title')
    {{ $secuencium->name ?? __('Show') . " " . __('Secuencium') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Secuencium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('secuencia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Problema Id:</strong>
                            {{ $secuencium->problema_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Evento:</strong>
                            {{ $secuencium->evento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $secuencium->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $secuencium->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
