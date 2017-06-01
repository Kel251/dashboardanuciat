<div class="form-group">
    {!!Form::label('anuncio', 'Anuncio:',array('class'=>'col-sm-3 control-label no-padding-right', 'for'=>'form-field-1'))!!}
    <div class="col-sm-9">
        {!!Form::text('Anuncio',null,['id'=>'form-field-1','placeholder'=>'Ingresa un titulo','class'=>'form-control'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('null','Descripción:',['class'=>'col-sm-3 control-label no-padding-right', 'for'=>'form-field-1-1'])!!}
    <div class="col-sm-9">
        {!!Form::text('Descripcion',null,['id'=>'form-field-1-1','placeholder'=>'Agrega un descripción','class'=>'form-control'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label(null,'Teléfono:',['class'=>'col-sm-3 control-label no-padding-right','for'=>'form-field-2-1-1'])!!}
    <div class="col-sm-9">
        {!!Form::text('telefono',null,['id'=>'form-field-2-1-1','placeholder'=>'Agrega tu teléfono de contacto','class'=>'form-control'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label(null,'Email:',['class'=>'col-sm-3 control-label no-padding-right','for'=>'form-field-2-2-1'])!!}
    <div class="col-sm-9">
        {!!Form::text('email',null,['id'=>'form-field-2-2-1','placeholder'=>'Agrega tu correo','class'=>'form-control'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label(null,'Precio:',['class'=>'col-sm-3 control-label no-padding-right','for'=>'form-field-2-2-2'])!!}
    <div class="col-sm-9">
        {!!Form::text('precio',null,['id'=>'form-field-2-2-2','placeholder'=>'Agrega el costo','class'=>'form-control'])!!}
    </div>
</div>