@extends('admin.layouts.template')

@section('title', 'ユーザーの編集')

@section('content')
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">ユーザーを編集する</h2>
            <form action="{{ route('user.edit',['id' => $user['id']]) }}" class="templatemo-login-form" method="post" enctype="multipart/form-data">

                @csrf

                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label class="control-label templatemo-block">ロール</label>
                        <select class="form-control" name="role">
                            <option value="0" {{ $user['role'] == 0 ? 'selected' : '' }}>ユーザー</option>
                            <option value="1" {{ $user['role'] == 1 ? 'selected' : '' }}>共同編集者</option>
                        </select>
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="templatemo-blue-button">アップデート</button>
                </div>
            </form>
        </div>
    </div>
@endsection
