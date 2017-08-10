<div class="form-group">
    {!!Form::label('nombre', 'Nombre:',array('class'=>'col-sm-3 control-label no-padding-right', 'for'=>'form-field-1'))!!}
    <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-user"></i>
            </span>
            {!!Form::text('Nom_user',null,['id'=>'form-field-1','placeholder'=>'Ingresa tu nombre','class'=>'form-control'])!!}
        </div>
    </div>
</div>
<div class="form-group">
    {!!Form::label('apellido', 'Apellido:',array('class'=>'col-sm-3 control-label no-padding-right', 'for'=>'form-field-1'))!!}
    <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-user"></i>
            </span>
            {!!Form::text('App_user',null,['id'=>'form-field-1','placeholder'=>'Ingresa tu apellido','class'=>'form-control'])!!}
        </div>
    </div>
</div>
<div class="form-group">
    {!!Form::label('null','Username:',['class'=>'col-sm-3 control-label no-padding-right', 'for'=>'form-field-1-1'])!!}
    <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-user"></i>
            </span>
            {!!Form::text('username',null,['id'=>'form-field-1-1','placeholder'=>'Agrega un Username','class'=>'form-control'])!!}
        </div>
    </div>
</div>

<div class="form-group">
    {!!Form::label(null,'Teléfono:',['class'=>'col-sm-3 control-label no-padding-right','for'=>'form-field-2-1-1'])!!}
    <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-phone"></i>
            </span>
            {!!Form::text('Tel_user',null,['id'=>'form-field-2-1-1','placeholder'=>'Agrega tu teléfono de contacto','class'=>'form-control input-mask-phone'])!!}
        </div>
    </div>
</div>
<div class="form-group">
    {!!Form::label(null,'Email:',['class'=>'col-sm-3 control-label no-padding-right','for'=>'form-field-2-2-1'])!!}
    <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-envelope"></i>
            </span>
            {!!Form::text('email',null,['id'=>'form-field-2-2-1','placeholder'=>'Agrega tu correo','class'=>'form-control'])!!}
        </div>
        <input type="email" name="email" id="email" class="col-xs-12 col-sm-6 valid" aria-required="true" aria-describedby="email-error" aria-invalid="false">
    </div>
</div>
<div class="form-group">
    {!!Form::label(null,'Website:',['class'=>'col-sm-3 control-label no-padding-right','for'=>'form-field-2-2-2'])!!}
    <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-globe"></i>
            </span>
            {!!Form::text('Website',null,['id'=>'form-field-2-2-2','placeholder'=>'Agrega tu website','class'=>'form-control'])!!}
        </div>
    </div>
</div>
<div class="form-group">
    {!!Form::label(null,'Imagen:',['class'=>'col-sm-3 control-label no-padding-right','for'=>'form-field-3-1-1'])!!}
    <div class="col-sm-9">
        {!!Form::file('Foto_perfil',['id'=>'id-input-file-2'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('Contraseña', 'Contraseña:',array('class'=>'col-sm-3 control-label no-padding-right', 'for'=>'form-field-1'))!!}
    <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-key"></i>
            </span>
            {!!Form::text('App_user',null,['id'=>'form-field-1','placeholder'=>'Ingresa tu contraseña','class'=>'form-control'])!!}
        </div>
    </div>
</div>