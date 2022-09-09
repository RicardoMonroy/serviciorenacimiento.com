@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        @if (session('info'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('info') }}
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Servicios
                        <div class="card-header-actions">
                            <a class="card-header-action btn-setting" href="{{ route('services.create') }}">
                                <i class="icon-plus"></i> Nuevo Servicio</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="services" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    {{-- <th width="10px">ID</th> --}}
                                    <th width="150px">Foto</th>
                                    <th>Descripción</th>
                                    <th>Estátus</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    {{-- <td>{{ $service->id }}</td> --}}
                                    <td><img src="{{ $service->picture }}" alt="" class="img-responsive" width="100"></td>
                                    <td>{{ $service->label }}</td>
                                    <td>{{ $service->status }}</td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <a href="{{ route('services.show', $service->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="icon-eye"></i></a>
                                        </div>
                                    </td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                            <a href="{{ route('services.edit', $service->id) }}"
                                                class="btn btn-sm btn-success">
                                                <i class="icon-pencil"></i></a>
                                        </div>
                                    </td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            {!! Form::open(['route' => ['services.destroy', $service->id],
                                            'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                <i class="icon-close"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $services->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
