@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ $notice->title }}
                            <div class="card-header-actions">
                                <a class="card-header-action btn-setting" href="{{ route('notices.edit', $notice->id) }}">
                                    <i class="icon-pencil"></i> Editar</a>
                                <a class="card-header-action btn-setting" href="{{ route('notices.create') }}">
                                    <i class="icon-plus"></i> Crear nuevo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="class col-md-12">
                                    <p>{{ $notice->content }}</p><br><br>
                                    <p>Creado el: {{ $notice->created_at->toDateString() }}</p>
                                    <p>Actualizado el: {{ $notice->updated_at->toDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
