<div class="class row">
    <div class="form-group col-md-6">
        {{ Form::label('bannername', 'Texto en el Banner') }}
        {{ Form::text('bannername', null, ['class' => 'form-control', 'id' => 'bannername']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('slogan', 'Slogan') }}
        {{ Form::text('slogan', null, ['class' => 'form-control', 'id' => 'slogan']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-6">
        {{ Form::label('politic', 'Política ecológica') }}
        {{ Form::textarea('politic', null, ['class' => 'form-control', 'id' => 'politic']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('description', 'Descripción de la empresa') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-12">
        {{ Form::label('map', 'URL del mapa') }}
        {{ Form::textarea('map', null, ['class' => 'form-control', 'id' => 'map', 'rows' => '5']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-6">
        {{ Form::label('address', 'Dirección') }}
        {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('city', 'Ciudad') }}
        {{ Form::text('city', null, ['class' => 'form-control', 'id' => 'city']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-6">
        {{ Form::label('mission', 'Misión') }}
        {{ Form::textarea('mission', null, ['class' => 'form-control', 'id' => 'mission']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('vision', 'Visión') }}
        {{ Form::textarea('vision', null, ['class' => 'form-control', 'id' => 'vision']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-3">
        {{ Form::label('value1title', 'Nombre del Valor') }}
        {{ Form::text('value1title', null, ['class' => 'form-control', 'id' => 'value1title']) }}
    </div>
    <div class="form-group col-md-9">
        {{ Form::label('value1text', 'Descripción del valor') }}
        {{ Form::textarea('value1text', null, ['class' => 'form-control', 'id' => 'value1text', 'rows' => '5']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-3">
        {{ Form::label('value2title', 'Nombre del Valor') }}
        {{ Form::text('value2title', null, ['class' => 'form-control', 'id' => 'value2title']) }}
    </div>
    <div class="form-group col-md-9">
        {{ Form::label('value2text', 'Descripción del valor') }}
        {{ Form::textarea('value2text', null, ['class' => 'form-control', 'id' => 'value2text', 'rows' => '5']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-3">
        {{ Form::label('value3title', 'Nombre del Valor') }}
        {{ Form::text('value3title', null, ['class' => 'form-control', 'id' => 'value3title']) }}
    </div>
    <div class="form-group col-md-9">
        {{ Form::label('value3text', 'Descripción del valor') }}
        {{ Form::textarea('value3text', null, ['class' => 'form-control', 'id' => 'value3text', 'rows' => '5']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-3">
        {{ Form::label('value4title', 'Nombre del Valor') }}
        {{ Form::text('value4title', null, ['class' => 'form-control', 'id' => 'value4title']) }}
    </div>
    <div class="form-group col-md-9">
        {{ Form::label('value4text', 'Descripción del valor') }}
        {{ Form::textarea('value4text', null, ['class' => 'form-control', 'id' => 'value4text', 'rows' => '5']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-3">
        {{ Form::label('value5title', 'Nombre del Valor') }}
        {{ Form::text('value5title', null, ['class' => 'form-control', 'id' => 'value5title']) }}
    </div>
    <div class="form-group col-md-9">
        {{ Form::label('value5text', 'Descripción del valor') }}
        {{ Form::textarea('value5text', null, ['class' => 'form-control', 'id' => 'value5text', 'rows' => '5']) }}
    </div>
</div>
<div class="class row">
    <div class="form-group col-md-12">
        {{ Form::label('privacidad', 'Aviso de Privacidad (Seleccionar un PDF): ') }}
        {{ Form::file('privacidad', null, ['class' => 'form-control', 'id' => 'privacidad']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
