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
        <div class="alert alert-success"> Yuh </div>
            <script>
                Echo.channel('testChannel')
                .listen('userLogin', (e) => {
                    // console.log(e);
                    // console.log('end');
                    
                    var name = e.user.name;
                    //alert(name);
                    $("#spanName").text( name );
                    $('#exampleModal').modal('show')
                    
                });
            </script>
        @endif

        {{-- modal --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <span id="spanName"></span> Is Logged in.
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        {{-- modal --}}
       
    </body>
    
</html>