@extends("layouts.app")
@section("content")

<!-- resources/views/update_password.blade.php -->

<!-- update_password.blade.php -->
<div class="container row">
<div class="col-lg-16">


<form method="POST" action="{{ route('password.update') }}" class="mt-4">
    @csrf

    <div class="mb-3">
        <label for="old_password" class="form-label">Old Password</label>
        <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password">
        @if ($errors->any("old_password"))
        <span class="text-danger"> {{$errors->first("old_password")}} </span>
            
        @endif
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
        @if ($errors->any("password"))
        <span class="text-danger"> {{$errors->first("password")}} </span>
            
        @endif
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm New Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm New Password">
        @if ($errors->any("password_confirmation"))
        <span class="text-danger"> {{$errors->first("password_confirmation")}} </span>
            
        @endif
    </div>

    @if(session('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif

    <button type="submit" class="btn btn-primary">Update Password</button>
</form>
</div>
</div>


@endsection