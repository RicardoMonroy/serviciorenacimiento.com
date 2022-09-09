@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-actions">
                                <a class="card-header-action btn-setting" href="{{ route('services.edit', $service->id) }}">
                                    <i class="icon-pencil"></i> Editar</a>
                                <a class="card-header-action btn-setting" href="{{ route('services.create') }}">
                                    <i class="icon-plus"></i> Crear nuevo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="class col-md-6">
                                    <p><strong>Descripción: </strong>     {{ $service->label }}</p><br><br>
                                    <p><strong>Estátus: </strong>     {{ $service->status }}</p>
                                </div>
                                <div class="class col-md-6">
                                    <img src="{{ $service->picture }}" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
