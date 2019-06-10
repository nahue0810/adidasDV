<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <base href="{{ asset("") }}">
    <!-- Title -->
    <title>DV - Hotel &amp; Resort</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    @include("panel.partials.css")
</head>

<body>
@include("panel.partials.header")


<main>

   @yield("contenido")

</main>

@include("panel.partials.footer")


@include("panel.partials.js")
</body>
</html>