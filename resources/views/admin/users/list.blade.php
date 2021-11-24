@extends('admin.layouts.template')

@section('title', 'ユーザーリスト')

@section('content')
<div class="templatemo-content-container">
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
    <div class="templatemo-content-widget no-padding">
        <div class="panel panel-default table-responsive table-padding">
            <table class="table table-striped table-bordered templatemo-user-table" id="data-table">
                <thead>
                    <tr>
                        <td align="center"><span class="white-text">#</span></td>
                        <td align="center"><span class="white-text">メールアドレス</td>
                        <td align="center"><span class="white-text">ニックネーム</td>
                        <td align="center"><span class="white-text">名前</td>
                        <td align="center"><span class="white-text">ロール</td>
                        <td align="center"><span class="white-text">誕生日</td>
                        <td align="center"><span class="white-text">性別</td>
                        <td align="center">編集</td>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1; @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td align="center">{{ $count }}</td>
                            <td align="center"><a href="{{ route('user.show',['id' => $user['id']]) }}" target="_blank">{{ $user['email'] }}</a></td>
                            <td align="center">{{ $user['name'] }}</td>
                            <td align="center">{{ $user['real_name'] }}</td>
                            <td align="center">{{ $user['role'] == 0 ? 'ユーザー' : '共同編集者' }}</td>
                            <td align="center">{{ $user['birth'] }}</td>
                            <td align="center">{{ $user['gender'] == 1 ? '男性' : '女性' }}</td>
                            <td align="center"><a href="{{ route('user.edit.form',['id' => $user['id']]) }}" class="templatemo-edit-btn">編集</a></td>
                        </tr>
                        @php $count++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
