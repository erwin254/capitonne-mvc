<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
</head>
<body>
    <div class="welcome">
        <h1>Bienvenido {{ Auth::user()->name; }}</h1>
        <a href="/logout">Cerrar sesión.</a>
    </div>
    <section>
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
    </section>
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