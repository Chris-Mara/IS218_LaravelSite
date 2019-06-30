<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>
    <div class="container">
    <div id="main">

        @yield('content')

        <footer>
            @include('includes.footer')
        </footer>
    </div>


</div>
</body>
</html>