<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testbook</title>
    </head>
    <body>
    <x-header/>
        {{ $slot }}
    <x-footer/>
    </body>
</html>