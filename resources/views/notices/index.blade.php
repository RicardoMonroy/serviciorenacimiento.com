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
                    <div class="card-header">Prensa
                        <div class="card-header-actions">
                            <a class="card-header-action btn-setting" href="{{ route('notices.create') }}">
                                <i class="icon-plus"></i> Nueva nota de prensa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="notices" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Titulo</th>
                                    <th>Nota</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($notices as $notice)
                                <tr>
                                    <td>{{ $notice->created_at->toDateString() }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td>{{ $notice->content }}</td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <a href="{{ route('notices.show', $notice->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="icon-eye"></i></a>
                                        </div>
                                    </td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                            <a href="{{ route('notices.edit', $notice->id) }}"
                                                class="btn btn-sm btn-success">
                                                <i class="icon-pencil"></i></a>
                                        </div>
                                    </td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            {!! Form::open(['route' => ['notices.destroy', $notice->id],
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
                        {{-- {{ $notices->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
