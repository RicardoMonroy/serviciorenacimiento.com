@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Editar
                        </div>
                        <div class="card-body">
                            {!! Form::model($information, ['route' => ['informations.update', $information->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                                @include('informations.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
