<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}">

    <title> Sistema de Administración</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <meta name="language" content="español" />
    <meta name="author" content="Erwin Henríquez"/>
    <meta name="copyright" content="cc" />
    <meta name="robots" content="ALL" />
    <meta name="revisit-after" content="1 days" />
    <meta name="reply-to" content="erwin254@gmail.com" />
    <meta name="document-class" content="Living Document" />
    <meta name="document-rights" content="Copyrighted Work" />
    <meta name="document-type" content="Public" />
    <meta name="document-rating" content="Motorcycle" />
    <meta name="document-distribution" content="Global" />
    {{ HTML::style('css/common/normalize.css') }}
    @yield('head')

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      {{ HTML::script('js/html5shiv.js'); }}
      {{ HTML::script('js/respond.min.js'); }}
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="alinear logo">
            <h1>MotoracingChile</h1>
        </div>

        <div id="user-header" class="alinear">
        @yield('login')
        </div>
    </nav>
    @yield('body')
    {{ HTML::script('js/jquery-1.10.2.min.js'); }}  
    @yield('script')
  </body>
</html>