@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-actions">
                                <a class="card-header-action btn-setting" href="{{ route('invoices.edit', $invoice->id) }}">
                                    <i class="icon-pencil"></i> Procesar</a>
                                {{-- <a class="card-header-action btn-setting" href="{{ route('invoices.create') }}">
                                    <i class="icon-plus"></i> Crear nuevo</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="class col-md-6">
                                    <p><strong>Recibido el: </strong> {{ $invoice->created_at->toDateString() }}</p><br>
                                    <p><strong>Nombre: </strong>     {{ $invoice->name }}</p><br>
                                    <p><strong>Teléfono: </strong>     {{ $invoice->phone }}</p><br>
                                    <p><strong>Domicilio: </strong>     {{ $invoice->address }}</p><br>
                                    <p><strong>Email: </strong>     {{ $invoice->email }}</p><br>
                                    <p><strong>Estátus: </strong>     {{ $invoice->status }}</p>
                                </div>
                                <div class="class col-md-6">
                                    <p><strong>Emitido el: </strong> {{ $invoice->date }}</p><br>
                                    <p><strong>RFC: </strong>     {{ $invoice->rfc }}</p><br>
                                    <p><strong>Monto: $</strong>     {{ $invoice->mount }}</p><br>
                                    <p><strong>Folio: </strong>{{ $invoice->ticket }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
