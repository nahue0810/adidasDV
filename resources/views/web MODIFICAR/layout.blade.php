<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DV - Hotel &amp; Resort</title>

    <!-- La etiqueta base define la ruta base del proyecto
        public_path() -> devuelve la ruta absoluta del directorio publico (public)
      -->
    <base href="{{ asset("public") }}">
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    @include("web.partials.css")


    @yield("css")

</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="cssload-container">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
    </div>
</div>

@php
    $navbar = [
        "Home" => "web.index",
        "Habitaciones" => "web.habitaciones",
        "Contacto" => "web.contacto"
    ];
@endphp

@include("web.partials.header",["secciones" => $navbar])
<!-- ##### Header Area End ##### -->


{{-- CONTENIDO --}}

@yield("contenido")



@include("web.partials.footer")

@include("web.partials.js")

@yield("js")

</body>

</html>