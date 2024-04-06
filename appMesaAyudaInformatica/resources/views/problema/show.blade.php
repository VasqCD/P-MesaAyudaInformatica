@extends('layouts.app')

@section('template_title')
    {{ $problema->name ?? __('Show') . " " . __('Problema') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Problema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('problemas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $problema->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado:</strong>
                            {{ $problema->estado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Creacion:</strong>
                            {{ $problema->fecha_creacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Actualizacion:</strong>
                            {{ $problema->fecha_actualizacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
