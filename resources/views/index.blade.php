<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/master.css')}}">
        @livewireStyles
        <title>Chat</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="pt-5">
                @livewire('chat')
            </div>
        </div>
        @livewireScripts
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>