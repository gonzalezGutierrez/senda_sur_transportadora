<div class="form-group">
    <label class="form-label text-dark">Nombre</label>
    {!! Form::text('name',$category->name,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label class="form-label text-dark">Estatus</label>
    {!! Form::select('status',[0=>'Activo',1=>'inactivo'],$category->status,['class'=>'form-control','placeholder'=>'Selecciona una opción...']) !!}
</div>
<div class="form-group">
    <label class="form-label text-dark">Descripción</label>
    {!! Form::textarea('description',$category->description,['class'=>'form-control','rows'=>6,'placeholder'=>'Agrega una descripción']) !!}
</div>
