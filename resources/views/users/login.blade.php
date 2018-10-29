@extends('users.layouts.skeleton')
@section('title','Login/Registration')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <form action="validate-login" method="POST">
            @csrf
            <h1>Login</h1>
            <input type="email"     class="form-control my-2" placeholder="Email Address" name="email_address"/>
            <input type="password"  class="form-control my-2" placeholder="Password" name="password"/>
            <div class="form-inline">
                <button type="submit"   class="btn btn-primary      form-control mr-3">Enter</button>
                <button type="reset"    class="btn btn-secondary    form-control mr-3">Clear</button>
            </div>
        </form>
    </div>
</div>
@endsection