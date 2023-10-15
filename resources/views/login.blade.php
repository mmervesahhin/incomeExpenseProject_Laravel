 <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <meta name="robots" content="noindex, follow">
    </head>
    <body>

    <div class="limiter">
    <div class="container-login100">
    <div class="wrap-login100 p-t-50 p-b-90">
    <form action="{{ route('check') }}" method="post">
    @csrf
    <span class="login100-form-title p-b-51">
    Login
    </span>

    <div class="wrap-input100 validate-input m-b-16">
    <input class="input100" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
    </div>
    <span style='color:red;'>@error('username'){{ $message }}@enderror</span>
    <div class="wrap-input100 validate-input m-b-16">
    <input class="input100" type="password" name="password" placeholder="Password">
    <span class="focus-input100"></span>
    </div>
    <span style='color:red;'>@error('password'){{ $message }}@enderror</span>
    <div class="flex-sb-m w-full p-t-3 p-b-24">
    </div>

    @if(Session::get('fail'))
    <div style='color:red;'>
        {{ Session::get('fail') }}
    </div>
    @endif

    <div class="container-login100-form-btn m-t-17">
    <button class="login100-form-btn">
    Login
    </button>
    </div>
    </form>

    <div style="text-align: center;"> <br> <a href="{{ route('register') }}" style="font-size:125%;">You don't have an account? Register</a> </div>

    </div>
    </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>

    </body>
    </html>


