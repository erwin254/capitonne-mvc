<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
    <header>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif
        {{ Form::open(array('url' => '/login')) }}
            {{ Form::label('usuario', 'Nombre de usuario') }}
            {{ Form::text('username', Input::old('username')); }}
            {{ Form::label('contraseña', 'Contraseña') }}
            {{ Form::password('password'); }}
            {{ Form::label('lblRememberme', 'Recordar contraseña') }}
            {{ Form::checkbox('rememberme', true) }}
            {{ Form::submit('Enviar') }}
        {{ Form::close() }}
    </header>
    <section id="products">
        @foreach ($productos as $producto)
            <article>
                <figure>
                    <img src="image/300x300/{{$producto->image}}">
                    <figcaption>{{$producto->description}}</figcaption>
                </figure>
                <div>{{$producto->name}}</div>
                <div>Precio {{$producto->price}}</div>
                <div>precio OFERTA {{$producto->price_offer}}</div>            
            </article>            
        @endforeach
    </section>
    </body>
</html>