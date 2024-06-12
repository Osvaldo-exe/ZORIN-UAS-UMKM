@extends ('layouts/login')

@section('konten')
    <form action="{{ route('login.admin') }}" method="post">
        @csrf
        <div class="signIn">
            <h1 class="wordSign">Sign in</h1>
            <input type="email" autocomplete="off" placeholder="Email" name="email" value='{{Session::get('email')}}' require>
            <input type="password" placeholder="Password" name="password" require>
            <button type='submit'>Sign in</button>
        </div>
    </form> 
    @if (session('error'))
        <script>alert('Email atau password salah')</script> 
    @endif

    @if (session('success'))
        <script>alert('Anda berhasil terdaftar')</script> 
    @endif
@endsection

