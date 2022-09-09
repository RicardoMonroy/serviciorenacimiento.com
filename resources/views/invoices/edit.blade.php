@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Editar
                            <div class="card-header-actions">
                                Recibido el: {{ $invoice->created_at->toDateString() }}
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::model($invoice, ['route' => ['invoices.update', $invoice->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                                @include('invoices.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
