<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        
    </head>
    <body style="background-image: url('https://i.pinimg.com/originals/33/11/92/3311924db62ceef62a4a7ee87017280f.jpg');">
        <div class="" >
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 border-right" >
                        <div class="" >
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" src= "https://d28l47h1uhvbhl.cloudfront.net/assets/profile_image/832475ae-74bf-11eb-b46c-064f3e9f608e.jpeg?cb=20210222043905"/>
                                <span class="font-weight-bold">User Name</span>
                                <span class="text-black-50">email@gmail.com</span>
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
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">名前</label>
                                <input type="text" class="form-control" placeholder="Enter your name" value = "User Name"/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">電話番号</label>
                                <input type="text" class="form-control" placeholder="enter phone number" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">メールアドレス</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Enter your email" value="email@gmail.com"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <label class="labels">性別</label>
                            </div>
                            <div class="col-md-3"></div>   
                            <div class="col-md-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"/>
                                    <label class="form-check-label" for="inlineRadio1">男性</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"/>
                                    <label class="form-check-label" for="inlineRadio2">女性</label>
                                </div>
                            </div>
                        </div>
                            <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">国</label><input type="text" class="form-control" placeholder="country"/></div>
                        </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button"><a href=""><span class="font-weight-bold">保存</span></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/app.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
        <script src="{{ asset('assets/web/script/script.js') }}"></script>
    </body>
</html>