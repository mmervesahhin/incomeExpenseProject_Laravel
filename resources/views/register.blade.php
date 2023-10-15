<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <span class="login100-form-title p-b-51">
                    Register
                </span>
                <form action="{{ route('registered') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                        <span class="focus-input100"></span>
                    </div>
                    <span style='color:red;'>@error('name'){{ $message }}@enderror</span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="surname" placeholder="Surname" value="{{ old('surname') }}">
                        <span class="focus-input100"></span>
                    </div>
                    <span style='color:red;'>@error('surname'){{ $message }}@enderror</span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                        <span class="focus-input100"></span>
                    </div>
                    <span style='color:red;'>@error('username'){{ $message }}@enderror</span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                    </div>
                    <span style='color:red;'>@error('email'){{ $message }}@enderror</span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                        <span class="focus-input100"></span>
                    </div>
                    <span style='color:red;'>@error('phone'){{ $message }}@enderror</span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    <span style='color:red;'>@error('password'){{ $message }}@enderror</span>
                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">Register</button>
                    </div>
                </form>

                <div style="text-align: center;"> <br> <a href="{{ route('login') }}" style="font-size:125%;">You have an account? Log in</a> </div>

            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
