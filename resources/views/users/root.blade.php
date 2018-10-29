@extends('users.layouts.skeleton')
@section('content')
    <div class="row my-2 d-flex justify-content-center">
        {{-- info --}}
        <div class="col-md-3 p-3">
            <h2>Welcome, {{Auth::user()->name}}</h2>
            <span class="badge badge-success">You're logged in</span>
        </div>
        {{-- info --}}

        {{-- users --}}
        <div class="col-md-4 p-3">
            <h2 class="m-1">Other Users</h2>
            <ul class="list-group">
                <li class="list-group-item active">Users [{{ count($users) }}]</li>
                @foreach($users as $index=>$user)
                    <li class="list-group-item">{{$index+1}}. {{$user->name}} <span class="badge badge-primary">{{$user->location}}</span></li>
                @endforeach
            </ul>
        </div>
        {{-- users --}}
    </div>
 
@endsection
