<div class="form-group">
    <label for="">Nombre</label>
    {!! Form::text('name',$place->name,['class'=>'form-control','placeholder'=>'Ingresa el nombre del lugar...']) !!}
</div>

<div class="form-group">
    <label class="form-label text-dark">Estatus</label>
    {!! Form::select('status',[0=>'Activo',1=>'inactivo'],$place->status,['class'=>'form-control','placeholder'=>'Selecciona una opción...']) !!}
</div>

<div class="form-group">
    <label class="form-label text-dark">Descripción Pequeña</label>
    {!! Form::textarea('small_description',$place->small_description,['class'=>'form-control','rows'=>2,'placeholder'=>'Agrega una descripción pequeña']) !!}
</div>

<div class="form-group">
    <label class="form-label text-dark">Descripción Larga</label>
    {!! Form::textarea('big_description',$place->big_description,['class'=>'form-control','rows'=>8,'placeholder'=>'Agrega una descripción larga']) !!}
</div>
