<!DOCTYPE html>
<html>
    <head>
        <style>
            .activo a{
                color:royalblue;
                text-decoration: underline;
            }
        </style>
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>Home!!</h1>
            <nav>
               <table class="table">
                    @include('partials.nav')
                    @yield('content')
               </table>
            </nav>
    </body>    
</html>