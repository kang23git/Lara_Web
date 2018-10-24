<!doctype html>
<html lang="en">
<div class="container">
    <header>
        @include('includes.head')
    </header>
    <body>
    @include("includes.menu")
    <main role="main">
        @yield('content')
    </main>
    @include('includes.jsfooter')
    <footer>
        @include('includes.footer')
    </footer>
    </body>
</div>
</html>