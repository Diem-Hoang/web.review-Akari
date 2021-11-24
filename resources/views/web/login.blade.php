<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/auth.css') }}" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="logreg-forms">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session::has('invalid'))
            <div class="alert alert-danger alert-dismissible">
                <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{Session::get('invalid')}}
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{Session::get('success')}}
            </div>
        @endif
        <form class="form-signin" action="{{ route('web.handle.login') }}" method="POST">

            @csrf

            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">ログイン</h1>
            <input type="email" id="inputEmail" class="form-control" placeholder="ユーザー名またはメールアドレス" name="email" value="{{ old('email') }}">
            <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" name="password">

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i>ログイン</button>
            <div class="social-login">
                <a href="{{ route('web.social.oauth', ['driver' => 'facebook']) }}"><button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>Facebookアカウントでログイン</span></button></a>
                <a href="{{ route('web.social.oauth', ['driver' => 'google']) }}"><button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i>Googleアカウントでログイン</span></button></a>
            </div>
            <hr>
            <a href="{{ route('web.form.register') }}"><button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>
            Akari.comを登録する</button></a>
            <a href="{{ route('web.home') }}"><button class="btn btn-secondary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>
            Home</button></a>
        </form>
    </div>
</body>

</html>
