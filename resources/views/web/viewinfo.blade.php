{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        
    </head>
    <body style="background-color: rgb(255, 225, 185)">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.list') }}">Back</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('parent_category.list') }}">カテゴリの編集</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.list') }}">サブカテゴリ</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link" readonly>{{ $user['name']}}</span>
                </li>
            </ul>
        </nav>
--}}
@extends('web.user.usertemplate')
@section('title','profile')
@section('content')
        <section class="container" style="margin-top:5%">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 border-right" >
                        <div class="" >
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" src= "{{asset('assets/web/images/'.$user->image)}}"/>
                                <span class="font-weight-bold" style="font-size: 1.2em">{{ $user['name']}}</span>
                                <span class="text-black-50" style="font-size: 1.2em">{{ $user['email'] }}</span>
                                <span> 
                                    <div class="templatemo-content-container">
                                        <p>Role: {{ $user['role'] == 0 ? 'ユーザー' : '共同編集者' }}</p>
                                    </div> 
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <h4 class="font-weight-bold">個人情報</h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">名前</label>
                                <input type="text" class="form-control" style="font-weight:bold;" placeholder="Enter your name" value = "{{ $user['real_name']}} " readonly/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">電話番号</label>
                                <input type="text" class="form-control" style="font-weight:bold;" placeholder="enter phone number" value="{{ $user['phone_number'] }}" readonly />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">メールアドレス</label>
                                <input type="email" id="inputEmail" class="form-control" style="font-weight:bold;" placeholder="Enter your email" value="{{ $user['email'] }}" readonly/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <label class="labels">性別</label>
                            </div>
                            <div class="col-md-3"></div>   
                            <div class="col-md-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" {{ $user['gender'] == 1 ? 'checked' : '' }} disabled='disabled'/>
                                    <label class="form-check-label" for="inlineRadio1">男性</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" {{ $user['gender'] == 0 ? 'checked' : '' }} disabled='disabled'/>
                                    <label class="form-check-label" for="inlineRadio2">女性</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">誕生日: </label>
                                <input type="date" class="form-control"  value="{{ $user['birth'] }}" data-date-format="mm/dd/yy" id="dp2" readonly>
                            </div>
                        </div>
                        <div class="row mt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- </body>
</html> --}}
@endsection
