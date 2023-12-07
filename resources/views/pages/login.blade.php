<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman</title>
    <link rel="icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-180x180.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('registration/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>
    <div class="registration-form">
        <form>
            <div class="text-center mb-5">
                <a href="/">
                    <img src="{{ asset('frontend/img/logo-qw-light.webp') }}" alt="logo-qw-light">
                </a>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="button" class="btn-register btn btn-block create-account">Login</button>
            </div>
            <p class="text-center">
                Forgot Your Password ??
                <span>
                    <a href="#">Reset</a>
                </span>
            </p>
            <div class="form-group">
                <button type="button" class="btn-login btn btn-block create-account">
                    <span class="text-dark">
                        Don't Have Account ?? Please 
                    </span>
                    <span>
                        <a class="text-white" href="{{ route('register') }}">Register</a>
                    </span> 
                </button>
            </div>
            <div class="form-group">
                <button type="button" class="btn-home btn btn-block create-account">                    
                    <a class="text-white" href="/">Beranda</a>
                </button>
            </div>
        </form>
        <div class="social-media">
            <h5>Login with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="{{ asset('registration/assets/js/script.js') }}"></script>
</body>
</html>
