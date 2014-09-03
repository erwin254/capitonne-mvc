@extends('layout')
@section('head')
    {{ HTML::style('css/admin/bootstrap.min.css') }}
    {{ HTML::style('css/admin/home.css') }}
@endsection
@section("title")
    Sistema de Administración de Productos
@endsection
@section("login")
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif
        {{ Form::open(array('url' => '/login')) }}
            {{ Form::text('username'); }}
            {{ Form::password('password'); }}
            {{ Form::submit('Enviar'); }}
        {{ Form::close() }}
@endsection
@section('body')
    <div class="col-md-12">    
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