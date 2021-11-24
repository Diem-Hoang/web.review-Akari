
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <style>
        .center {
            text-align: center;
        }
        .pagination li{
            list-style: none;
            font-size: 1.5rem;
            float: left;
            margin-left: 5px;
            margin-top: 0.5em;
        }
        .pagination li {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination li.active {
            background-color: rgb(255, 165, 0);
            color: white;
        }

        .pagination li:hover:not(.active) {
            background-color: #ddd;
        }

        .box {
            width: 30%;
            float: left;
            margin: 50px 20px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.15);
        }
        .box a{
            display: inline-block;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            margin-top: 15px;
        }
        .box a:hover {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }
        .box h3{
            margin-bottom: 10px;
        }
        .box {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }
        .box p{
            line-height: 28px;
            height: 60px;
            overflow: hidden;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<!-- header section starts  -->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="{{ route('web.home') }}" class="logo"><span>A</span>kari</a>
    <nav class="navbar">
        <a href="{{ route('web.home') }}">ホーム</a>
        <div class="dropdown">
            <a href="#">​飲食</a>
            <div class="dropdown-content">
                <a href="{{ route('web.categories_nav.food_drink.cooking') }}">料理</a>
                <a href="{{ route('web.categories_nav.food_drink.drink') }}">飲料</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">観光</a>
            <div class="dropdown-content">
                <a href="{{ route('web.categories_nav.tourism.ecotourism') }}">エコツーリズム</a>
                <a href="{{ route('web.categories_nav.tourism.resort') }}">リゾート</a>
                <a href="{{ route('web.categories_nav.tourism.museum') }}">美術館や史跡</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">娯楽</a>
            <div class="dropdown-content">
                <a href="{{ route('web.categories_nav.entertainment.park') }}">公園</a>
                <a href="{{ route('web.categories_nav.entertainment.supermarket') }}">スーパー</a>
                <a href="{{ route('web.categories_nav.entertainment.theater') }}">映画館</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">サービス</a>
            <div class="dropdown-content">
                <a href="{{ route('web.categories_nav.service.carrent') }}">クリーニング</a>
                <a href="{{ route('web.categories_nav.service.laundry') }}">レンタカー</a>
                <a href="{{ route('web.categories_nav.service.spa') }}">スパ</a>
            </div>
        </div>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        @if (Auth::check())
            <div class="dropdown">
                <button class="dropbtn"><i class="fas fa-user" id="login-btn"></i></button>
                <div class="dropdown-content">
                    @php  
                        $user = \App\Models\User::find(Auth::user()->id);
                    @endphp
                    @if ($user->role == 1)
                        <a href="{{ route('web.postgallery') }}" target="_blank">私の投稿</a>
                    @endif
                    <a href="{{ route('web.achiver') }}" target="_blank">アーカイバ</a>
                    <a href="{{ route('web.user.profile', Auth::user()->id) }}" target="_blank">個人情報</a>
                    <a href="{{ route('web.handle.logout') }}">サインアウト</a>
                </div>
            </div>
            @if ($user->role == 1)
            <a class="fas fa-plus" id="plus-btn" href="{{route('baiviet.create')}}"></a>
            @endif
        @else
            <a href="{{ route('web.form.login') }}" class="login">Login</a>
        @endif
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>
<!-- header section ends -->

@yield('content')

<!-- brand section  -->
<section class="brand-container">
    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/1.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/2.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/3.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/4.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/5.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/6.jpg') }}" alt=""></div>
        </div>
    </div>
</section>
<!-- footer section  -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>私達の情報</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>支店の場所</h3>
            <a href="#">Ha Noi</a>
            <a href="#">Hai Phong</a>
            <a href="#">Da Nang</a>
            <a href="#">Ho Chi Minh</a>
        </div>
        <div class="box">
            <h3>クイックリンク</h3>
            <a href="#">美術館や史跡</a>
            <a href="#">料理</a>
            <a href="#">公園</a>
            <a href="#">飲料</a>
            <a href="#">スパ</a>
            <a href="#">レンタカー</a>
            <a href="#">クリーニング</a>
        </div>
        <div class="box">
            <h3>フォロー</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>
    </div>
    <h1 class="credit"> created by <span> team Akari </span> | all rights reserved! </h1>
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="{{ asset('assets/web/script/script.js') }}"></script>
</body>
</html>