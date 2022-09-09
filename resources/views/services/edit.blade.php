@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Editar
                            <div class="card-header-actions">
                                <a class="card-header-action btn-setting" href="{{ route('services.create') }}">
                                    <i class="icon-plus"></i> Crear nuevo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                                @include('services.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
