<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href="{{ asset('assets/admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('assets/admin/css/templatemo-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
        <div class="templatemo-sidebar">
            <header class="templatemo-site-header">
                <div class="square"></div>
                <h1>{{ Auth::guard('admin')->user()->name }}</h1>
            </header>
            <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
            </div>
            <nav class="templatemo-left-nav">
                <ul>
                    <li><a href="{{ route('web.home') }}" ><i class="fa fa-home fa-fw"></i>ホーム</a></li>
                    <li><a href="{{ route('parent_category.list') }}"><i class="fa fa-list" aria-hidden="true"></i>カテゴリ</a></li>
                    <li><a href="{{ route('category.list') }}"><i class="fa fa-list" aria-hidden="true"></i>サブカテゴリ</a></li>
                    <li><a href="{{ route('user.list') }}"><i class="fa fa-users fa-fw"></i>ユーザー</a></li>
                    <li><a href="{{ route('post.list') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i>管理者の投稿</a></li>
                    <li><a href="{{ route('ctvpost.list') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i>共同編集者の投稿</a></li>
                    <li><a href="{{ route('admin.handle.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>サインアウト</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Main content -->
        <div class="templatemo-content col-1 light-gray-bg">
            @yield('content')
        </div>
    </div>
    <!-- datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    <!--  jQuery Migrate Plugin -->
    <script type="text/javascript" src="{{ asset('assets/admin/js/templatemo-script.js') }}"></script>
    @yield('scripts')
    <!-- Templatemo Script -->

</body>

</html>
