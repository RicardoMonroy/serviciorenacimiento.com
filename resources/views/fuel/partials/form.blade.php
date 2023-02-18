<div class="class row">
    <!-- <div class="form-group col-md-12">
        {{ Form::label('price', 'Precio') }}
        {{ Form::text('price', null, ['class' => 'form-control', 'id' => 'price']) }}
    </div> -->


    <div class="form-group col-md-12">
        <label for="price">Magna</label> 
        <input id="price" name="price" type="text" class="form-control">
    </div>


    <div class="form-group col-md-12">
        <label for="bannername">Premium</label> 
        <input id="bannername" name="bannername" type="text" value="SERVICIO RENACIMIENTO SA de CV" class="form-control">
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
