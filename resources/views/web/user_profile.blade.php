<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User profile</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> 
    </head>
    <body style="background-image: url('https://i.pinimg.com/originals/33/11/92/3311924db62ceef62a4a7ee87017280f.jpg');">
        <div class="" >
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 border-right" >
                        <div class="" >
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" src= "https://cberry.net/assets/website/img/img-user.png"/>
                                <span class="font-weight-bold">{{ $user->name }}</span>
                                <span class="text-black-50">{{ $user->email }}</span>
                                <span> </span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card">
                                <ul class="list-group list-group-flush" >
                                    <li class="list-group-item"><a class="dropdown-item" href="https://www.w3schools.com/"><b class="text-primary">個人情報</b></a></li>
                                    <li class="list-group-item"><a class="dropdown-item" href="https://www.w3schools.com/"><b class="text-primary">パスワードを変更する</b></a></li>
                                    <li class="list-group-item"><a class="dropdown-item" href="https://www.w3schools.com/"><b class="text-primary">プロフィール写真を更新する</b></a></li>
                                    <li class="list-group-item"><a class="dropdown-item" href="http://localhost:8080/akari-web-review/public/login"><b class="text-primary">ログアウト</b></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <h4 class="font-weight-bold">個人情報</h4>
                        </div>
                        <form action="{{ route('web.update.userprofile', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">名前</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" value = "{{ $user->name }}" name="name" required/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">メールアドレス</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Enter your email" value="{{ $user->email }}" name="email" required/>
                                </div>
                            </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"><span class="font-weight-bold">保存</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>