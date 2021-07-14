<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Store Mapper</title>
    </head>
    <body class="antialiased">

        <div style="width: 100%; height: 800px;">
            {!! Mapper::render() !!}
        </div>

    </body>
</html>
