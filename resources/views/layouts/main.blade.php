<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comics CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">

        <!-- Styles -->
        {{-- bootstrap  --}}
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css' integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==' crossorigin='anonymous'/>
        
    </head>
    <body>
        @include('partials.header')
        
        <main class="container">
            @yield('content')
        </main>
        
        @include('partials.footer')
        
        
        
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.js' integrity='sha512-nw7zwODD4UD9u/C/CO+03s7jXvOZDomBNFX3oOq7Xv0stAyxsxhJzVlxsRTgH3AxK3sK2ijMQou2aSIaorp19g==' crossorigin='anonymous'></script>
    </body>
</html>
