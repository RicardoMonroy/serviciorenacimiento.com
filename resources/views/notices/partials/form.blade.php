<div class="form-group">
    {{ Form::label('title', 'Título de la nota:') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>
<div class="form-group">
    {{ Form::label('content', 'Nota de prensa') }}
    {{ Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
