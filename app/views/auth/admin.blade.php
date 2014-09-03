@extends('layout')
@section('head')
    {{ HTML::style('css/admin/bootstrap.min.css') }}
    {{ HTML::style('css/admin/home.css') }}
@endsection
@section("title")
    Sistema de Administración de Productos
@endsection
@section('login')
    <div class="alinear uh-name">{{ Auth::user()->name; }}</div>
    <div class="alinear uh-logout"><a href="{{URL::to('/logout')}}">Cerrar sesión</a></div>
@endsection
@section('body')
    <div class="col-md-12">
        <div class="row">
            <div id="subir_producto"><a href="/upload">Subir producto</a></div>  
        </div>
        <div class="row buscador center">
            <div class="input-group col-md-6">
                <input type="text" class="form-control" placeholder="Buscar repuestos, accesorios, vestuario ...  ">
                <span class="input-group-btn" >
                    <button class="btn btn-default btn-danger" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
            
        </div>      
        <div class="row products">
            @foreach ($productos as $producto)
            <article class="col-md-3 product">
                <div class="pr_name"><h2>{{$producto->name}}</h2></div>
                <figure class="pr_image">
                    <img src="image/300x300/{{$producto->image}}">
                </figure>
                <div class="pr_detalle">{{$producto->description}}</div>
                <div class="pr_valores">
                    <div class="pr_precio">
                        Precio <span>{{$producto->price}}</span>
                        <div class="pr_oferta">{{$producto->price_offer}}</div>
                    </div>
                </div>           
            </article>            
            @endforeach
        </div>
    </div>
@endsection