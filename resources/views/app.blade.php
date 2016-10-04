<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 5 + Angular 2 Example</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <base href="/"/>
        
        <meta name="google-site-verification" content="FQX893WD_Fsueo16KqRJ9kEtM70U-cdWfqef7h45T6o" />
    </head>
    <body>

        @yield('layout')

        @if (Config::get('app.debug'))
            <script type="text/javascript">
                document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
            </script>
        @endif
    </body>
</html>
