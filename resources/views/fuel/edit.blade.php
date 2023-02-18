@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Actualizar precio
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ route('fuel.update', $fuel->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                                <div class="class row">
                                    <div class="form-group col-md-12">
                                        <label for="magna">Precio Magna</label> 
                                        <input id="magna" name="magna" type="text" value="{{ isset($fuel->magna) ? $fuel->magna : '' }}" class="form-control">
                                    </div> 
                                    <div class="form-group col-md-12">
                                        <label for="premium">Precio Premium</label> 
                                        <input id="premium" name="premium" type="text" value="{{ isset($fuel->premium) ? $fuel->premium : '' }}" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
