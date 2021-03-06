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
          <x-layouts.header />
          <div class="row main">
            <div class="d-none d-sm-block col-sm-3 user-list">
                @livewire('user-list')
            </div>
            <div class="col-sm-12 col-md-9 content">
                {{$slot}}
            </div>
          </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        @livewireScripts
    </body>
</html>
