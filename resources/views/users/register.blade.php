@extends('users.layouts.skeleton')
@section('title', 'Registration')
@section('content')
<div class="row d-flex justify-content-center">
         {{-- entry --}}
         <div class="col-md-5 p-3">
                <form method="post" action="new-user">
                    <h3 class="m-1">Register User</h3>
                    {{-- conditional prompting --}}
                    
                    @if(session('code'))
                        @if( session('code') == 1 )
                            <div class="alert alert-success m-1">
                                {{ session('msg') }}
                            </div>
                        @elseif( session('code') == 0 )
                            <div class="alert alert-danger m-1">
                                {{ session('msg') }}
                            </div>
                        @endif
                    @else
                            <div class="alert alert-primary m-1">
                                Please enter below, the appropriate user details.
                            </div>
                    @endif
                    {{-- conditional prompting --}}
                    @csrf
                    <input class="form-control m-1" type="text"         name="name"             placeholder="Enter Name"           required/>
                    <input class="form-control m-1" type="text"         name="location"         placeholder="Enter Location"       required/>
                    <input class="form-control m-1" type="text"         name="phone"            placeholder="Enter Phone Number"   required/>
                    <input class="form-control m-1" type="email"        name="email_address"    placeholder="Email Address"        required/>
                    <input class="form-control m-1" type="password"     name="password"         placeholder="Password"             required/>
                    <input class="form-control m-1 btn btn-success"     type="submit"           value="Enter"/>
                    <input class="form-control m-1 btn btn-secondary"   type="reset"            value="Clear"/> 
                </form> 
            </div>
            {{-- entry --}}
</div>
@endsection
