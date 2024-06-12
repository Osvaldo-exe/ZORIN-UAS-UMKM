@extends('layouts/login')

@section('konten')
        <form action="{{route('add.user')}}" method="post">
            @csrf
            <div class="signIn">
                <h1 class="wordSign">Register</h1>
                <input type="text" autocomplete="off" placeholder="Username" name="name" require>
                <input type="email" autocomplete="off" placeholder="Email" name="email" require>
                <input type="password"  placeholder="Password" name="password" require>
                <button>Register</button>
                <p>------------ or ------------</p>
                <a href="/" class='register'>Sign in</a>
            </div>
        </form>

@endsection