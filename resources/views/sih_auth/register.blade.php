@extends('layouts.authentication')

@section('page_title', 'Register')

@section('content')
    <!-- Header -->
    <div class="px-30 py-10">
    <a class="link-effect font-w700" href="#">
        <i class="si si-fire"></i>
        <span class="font-size-xl text-primary-dark">star</span><span class="font-size-xl">Corp</span>
    </a>
    <h2 class="h5 font-w400 text-muted  mt-20 mb-10">Please sign up</h2>
    </div>
<!-- END Header -->

<!-- Sign Up Form -->
<!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
<!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
<form class="js-validation-signup px-30" method="post" action="{{url('/register')}}">
    @csrf
    <div class="form-group row">
        <div class="col-12">
            <div class="form-material floating">
                <input type="text" class="form-control" id="name" name="name" required/>
                <label for="name">Name</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <div class="form-material floating">
                <input type="email" class="form-control" id="email" name="email" required />
                <label for="email">Email</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <div class="form-material floating">
                <input type="password" class="form-control" id="password" name="password" required />
                <label for="password">Password</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <div class="form-material floating">
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required />
                <label for="password-confirm">Password Confirmation</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
            <i class="fa fa-plus mr-10"></i> Create Account
        </button>
        <div class="mt-30">
            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{url('/login')}}">
                <i class="fa fa-user text-muted mr-5"></i> Sign In
            </a>
            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{url('/password/reset')}}">
                <i class="fa fa-warning mr-5"></i> Forgot Password
            </a>
        </div>
    </div>
</form>
<!-- END Sign Up Form -->
@endsection