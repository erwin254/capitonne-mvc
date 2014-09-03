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
        <div class="row volver">
            <div id="subir_producto"><a href="/login">volver</a></div>  
        </div>   
        <div class="row center">
            <div class="formulario">
                
            
          {{ Form::open(array('url' => '/product/save', 'method' => 'post', 'enctype'=>'multipart/form-data')) }}
            {{ Form::label('name', 'Nombre '); }}
            {{ Form::text('name'); }}
            {{ Form::label('description', 'Descripción '); }}
            {{ Form::text('description'); }}
            {{ Form::label('price', 'Valor '); }}
            {{ Form::text('price'); }}
            {{ Form::label('price_offer', 'valor Oferta'); }}
            {{ Form::text('price_offer'); }}
            {{ Form::label('link', 'Link Facebook'); }}
            {{ Form::text('link'); }}
            {{ Form::label('image', 'adjuntar imagen'); }}
            {{ Form::file('image'); }}
            {{ Form::submit('Enviar') }}
        {{ Form::close() }}
            </div>       
        </div>
    </div>
@endsection