<div class="card">
    <div class="card-header">
        <div class="card-title text-uppercase">Descripción del tour</div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="">Nombre</label>
            {!! Form::text('name',$tour->name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="">Categoria</label>
            {!! Form::select('category_id',$categories,$tour->category_id,['class'=>'form-control','placeholder'=>'Selecciona una opción...']) !!}
        </div>
        <div class="form-group">
            <label for="">Descripción corta</label>
            {!! Form::textarea('small_description',$tour->small_description,['class'=>'form-control','rows'=>2,'placeholder'=>'']) !!}
        </div>

        <div class="form-group">
            <label for="">Descripción larga</label>
            {!! Form::textarea('big_description',$tour->big_description,['class'=>'form-control','rows'=>8,'placeholder'=>'']) !!}
        </div>

        <div class="form-group">
            <label for="">Servicio disponibles</label>
            {!! Form::textarea('available_services',$tour->available_services,['class'=>'form-control','rows'=>4,'placeholder'=>'']) !!}
        </div>

        <div class="form-group">
            <label for="">Servicios no disponibles</label>
            {!! Form::textarea('not_available_services',$tour->not_available_services,['class'=>'form-control','rows'=>4,'placeholder'=>'']) !!}
        </div>

        <div class="form-group">
            <label for="">Información adicional</label>
            {!! Form::textarea('adicional_information',$tour->adicional_information,['class'=>'form-control','rows'=>4,'placeholder'=>'']) !!}
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title text-uppercase">Información para clientes</div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class=" col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Fecha de inicio</label>
                    {!! Form::date('start_date',$tour->start_date,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class=" col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Fecha de finalización</label>
                    {!! Form::date('end_date',$tour->end_date,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Numero de días</label>
                    {!! Form::text('number_days_txt',$tour->number_days_txt,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class=" col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Descuento del tour</label>
                    {!! Form::number('discount_rate',$tour->discount_rate,['class'=>'form-control','min'=>0,'step'=>'any']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if($tour->id == null)
                    <div class="form-group">
                        <label class="form-label text-dark">Lugares a visitar</label>
                        {!! Form::select('places[]',$places,'',['class'=>'form-control select2','multiple'=>true,'data-placeholder'=>'Selecciona los destinos...']) !!}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Personas minimas</label>
                    {!! Form::number('min_peoples',$tour->min_peoples,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer text-left">
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Guardar</button>
    </div>
</div>
