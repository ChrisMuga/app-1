<html>
    <head>
        <title>App-1</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>  
        {{-- csrf for broadcasting --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- csrf for broadcasting --}}
        <script src="js/jquery-3.3.1.min.js"></script>
    <head>
    <body>
        <div class="container">
            <div id="app">
                <navbar class="mb-1"></navbar>
                <jumbotron></jumbotron> 
            </div>
        </div>
        @yield('content')
        <script src="js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @if(Auth::check())
            <script>
                Echo.channel('testChannel')
                .listen('userLogin', (e) => {
                    console.log(e);
                    console.log('end');
                });
            </script>
        @endif
       
    </body>
    
</html>