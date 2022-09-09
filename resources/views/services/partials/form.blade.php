<div class="form-group">
    {{ Form::label('picture', 'Fotografía') }}
    {{ Form::file('picture', null, ['class' => 'form-control', 'id' => 'picture', 'id' => 'picture']) }}
</div>
<div class="form-group">
    {{ Form::label('label', 'Descripción') }}
    {{ Form::textarea('label', null, ['class' => 'form-control', 'id' => 'label']) }}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estátus') }}
    {{ Form::select('status', ['Visible' => 'Visible', 'Oculto' => 'Oculto'], null, ['class' => 'form-control'] ) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
