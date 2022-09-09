<div class="class row">
<div class="class col-md-6">
    <div class="form-group">
        {{ Form::label('name', 'Nombre Fiscal') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'disabled' => 'disabled']) }}
    </div>
    <div class="form-group">
        {{ Form::label('rfc', 'RFC') }}
        {{ Form::text('rfc', null, ['class' => 'form-control', 'id' => 'rfc', 'disabled' => 'disabled']) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Teléfono') }}
        {{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone', 'disabled' => 'disabled']) }}
    </div>
    <div class="form-group">
        {{ Form::label('mount', 'Monto') }}
        {{ Form::text('mount', null, ['class' => 'form-control', 'id' => 'mount', 'disabled' => 'disabled']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Domicilio Fiscal') }}
        {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'disabled' => 'disabled']) }}
    </div>
    <div class="form-group">
        <label for="">Correo</label><br>
        <a href="mailto:{{ $invoice->email }}">{{ $invoice->email }}</a>
    </div>


    <div class="form-group">
        {{ Form::label('status', 'Estátus') }}
        {{ Form::select('status', ['Pendiente' => 'Pendiente', 'Realizada' => 'Realizada'], null, ['class' => 'form-control'] ) }}
    </div>
</div>

<div class="class col-md-6">
    <a href="{{ $invoice->ticket }}" target="_blank"><img src="{{ $invoice->ticket }}" alt="" style="width: 100%"></a>
</div>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
