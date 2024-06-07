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
               <table class="table" border="1" style="width:100%">
                    @include('partials.nav')
                    @yield('content')
               </table>
            </nav>
            
    </body>    
</html>