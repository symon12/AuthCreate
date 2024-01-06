

<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <ul class="list-unstyled d-flex">
                @auth
                    <li class="p-2"><a href="{{ route('post.create') }}" class="text-light font-weight-bold">Home</a></li>
                    <li class="p-2"><a href="" class="text-light font-weight-bold">Dashboard</a></li>
                @endauth
            </ul>
        </div>
        <div class="col-3">
            <ul class="list-unstyled d-flex justify-content-end align-items-center">
                @auth
                    <li class="p-2"><a href="#" class="text-light font-weight-bold">{{ auth()->user()->name }}</a></li>
                    <li class="p-2"><a href="{{ route('forget') }}" class="text-light font-weight-bold">Update</a></li>
                    <li class="p-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link text-light font-weight-bold">Logout</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="p-2"><a href="{{ route('login') }}" class="text-light font-weight-bold">Login</a></li>
                    <li class="p-2"><a href="{{ route('registration') }}" class="text-light font-weight-bold">Registration</a></li>
                @endguest
            </ul>
        </div>
    </div>
</div>
