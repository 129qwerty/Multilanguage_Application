<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.partials.head')
    </head>
    <body>
        

        @include('layout.partials.navbar')
    
        @include('layout.partials.content')

        @include('layout.partials.footer')
        
        @include('layout.partials.footer-scripts')
        
        
    </body>
</html>
