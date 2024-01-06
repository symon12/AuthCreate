<style>
  .center1{
    margin-right: 255px
  }
</style>


@extends("layouts.app")

@section("content")
@if (session("status"))
  <div class="alert alert-danger">
    {{ session("status") }}
  </div>
@endif

<div class="login-page">
    <div class="form">
      <form class="login-form" action="{{ route("login") }}" method="POST">
        @csrf
        <input name="email" type="email" placeholder="email" required/>
        @if ($errors->any("old_password"))
        <span class="text-danger"> {{$errors->first("old_password")}} </span>
            
        @endif
        <input name="password" type="password" placeholder="password" required/>
        @if ($errors->any("old_password"))
        <span class="text-danger"> {{$errors->first("old_password")}} </span>
            
        @endif
        <div class="center1">
        <input name="remember" class="d-flex justify-content-first" type="checkbox">
    
      </div>
          
        <button>login</button>
        <div class="row">
          <p class="message fw-bold col"><a href="{{ asset("forget") }}">forget account</a></p>
          <p class="message col"> <a href="{{ route("registration") }}">Create an account</a></p>
        </div>
      </form>
    </div>
  </div>
@endsection
