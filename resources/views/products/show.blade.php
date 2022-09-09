@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ $product->name }}
                            <div class="card-header-actions">
                                <a class="card-header-action btn-setting" href="{{ route('products.edit', $product->id) }}">
                                    <i class="icon-pencil"></i> Editar</a>
                                <a class="card-header-action btn-setting" href="{{ route('products.create') }}">
                                    <i class="icon-plus"></i> Crear nuevo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="class col-md-6">
                                    <p><strong>Descripción: </strong>     {{ $product->description }}</p><br><br>
                                    <p><strong>Estátus: </strong>     {{ $product->status }}</p>
                                </div>
                                <div class="class col-md-6">
                                    <img src="{{ $product->picture }}" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
