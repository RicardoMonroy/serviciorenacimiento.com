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
                    <div class="card-header">Facturas
                        <div class="card-header-actions">
                            {{-- <a class="card-header-action btn-setting" href="{{ route('invoices.create') }}">
                                <i class="icon-plus"></i> Nueva Factura</a>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <table id="invoices" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Folio</th>
                                    <th>Recibido</th>
                                    <th>Emitido</th>
                                    <th>RFC</th>
                                    <th>email</th>
                                    <th>Estátus</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    {{-- <th>&nbsp;</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{ $invoice->ticket }}</td>
                                    <td>{{ $invoice->created_at->toDateString() }}</td>
                                    <td>{{ $invoice->date }}</td>
                                    <td>{{ $invoice->rfc }}</td>
                                    <td> <a href="mailto:{{ $invoice->email }}">{{ $invoice->email }}</a></td>
                                    <td>{{ $invoice->status }}</td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <a href="{{ route('invoices.show', $invoice->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="icon-eye"></i></a>
                                        </div>
                                    </td>
                                    <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group" alt="Editar">
                                            <a href="{{ route('invoices.edit', $invoice->id) }}"
                                                class="btn btn-sm btn-success">
                                                <i class="icon-pencil"></i></a>
                                        </div>
                                    </td>
                                    {{-- <td width="10px">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            {!! Form::open(['route' => ['invoices.destroy', $invoice->id],
                                            'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                <i class="icon-close"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $invoices->render() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
