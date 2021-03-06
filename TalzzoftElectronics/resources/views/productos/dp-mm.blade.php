@extends('layout')

@section('title')
resistencia 1k
@stop

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card align-center">
        <div class="header ">
                <img src="{{asset('Template/images/productos/dp-mm.png')}}" width="252" height="252">
        </div>
        <div class="body">
            <div class="media-heading">
                <h3>Cables jumpers macho-macho</h3>
            </div>

            <div class="media-body">
                <p>$ 1</p>
                <p class="text-danger">Agotado</p>
                <div class="row clearfix">
                    <div class="form-group">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-2">
                            <label class="form-label">Cantidad: </label>
                            <div class="input-group spinner" data-trigger="spinner">
                                <div class="form-line focused ">
                                    {!!Form::text('cantidad',0,['class'=>'form-control text-center','data-rule'=>'quantity','id'=>'cantidad','disabled'])!!}
                                </div>
                                <span class="input-group-addon">
                                    <a href="javascript:;" disabled class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                    <a href="javascript:;" disabled class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                </span>
                            </div>
                            <div class="col-md-12">
                                <button type="button" disabled class="btn btn-primary waves-effect">Comprar</button>
                            </div>
                            <div class="">
                                <button type="button" disabled class="btn btn-default waves-effect">Agregar al carrito</button>
                            </div>
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
