@extends("layouts.app")

@section("content")
    <div class="main-w3layouts wrapper">
        <h1>Creative SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{ route('registration') }}" method="POST">
                    @csrf
                    
                    <input class="text" type="text" name="name" placeholder="name">
                    @if ($errors->any("name"))
                    <span class="text-danger"> {{$errors->first("name")}} </span>
                    @endif
                    <input class="text email" type="email" name="email" placeholder="Email">
                    @if ($errors->any("email"))
                    <span class="text-danger"> {{$errors->first("email")}} </span>
                    @endif
                    <input class="text" type="password" name="password" placeholder="Password">
                    @if ($errors->any("password"))
                    <span class="text-danger"> {{$errors->first("password")}} </span>
                        
                    @endif
                    <input class="text w3lpass" type="password" name="password_confirmation" placeholder="Confirm Password">
                    @if ($errors->any("password_confirmation"))
                    <span class="text-danger"> {{$errors->first("password_confirmation")}} </span>
                    @endif
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" >
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                    </div>
                    <input type="submit" value="SIGN UP">
                </form>
                <p>Already have an account? <a href="{{ route('login') }}">Login Now!</a></p>
            </div>
        </div>
    </div>
@endsection
