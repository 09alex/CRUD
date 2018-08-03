<div class="form-group">
    <div class="row">
        <div class="form-group">
            <label  class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Nombre:</label>
            <div class="col-sm-7">
                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresar tu nombre completo', 'autocomplete'=>"off", 'id'=>'name'])!!}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <label  class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Dirección:</label>
            <div class="col-sm-7">
                {!!Form::text('address',null,['class'=>'form-control', 'placeholder'=>'Ingresar la dirección', 'autocomplete'=>"off"])!!}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <label class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Teléfono:</label>
            <div class="col-sm-7">
                {!!Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Ingresar teléfono', 'autocomplete'=>"off"])!!}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <label class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Correo electrónico:</label>
        <div class="col-sm-7">
            {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresar correo electrónico', 'autocomplete'=>"off", 'id'=>'email'])!!}
        </div>
    </div>
    <br>
    <div class="row">
        <button type="submit" class="btn green-meadow" id="send">Guardar</button>
        <a class="btn red" href="{{URL::route('customer.index')}}">Cancelar</a>
    </div>
</div>