@extends('admin.layouts.template')

@section('title', '共同編集者の投稿リスト')

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
    <!-- <a href="{{ route('post.create') }}" style="margin:1rem 0 0 1rem"><button class="btn btn-primary">Add</button></a> -->
    <div class="templatemo-content-widget no-padding">
        <div class="panel panel-default table-responsive table-padding">
            <table class="table table-striped table-bordered templatemo-user-table" id="data-table">
                <thead>
                    <tr>
                        <td align="center"><span class="white-text">#</span></td>
                        <td align="center"><span class="white-text">タイプ</td>
                        <td align="center"><span class="white-text">投稿名</td>
                        <td align="center"><span class="white-text">状態</td>  
                        <td align="center">受け入れ</td>
                        <td align="center">編集</td>
                        <td align="center">削除</td>
                    </tr>
                </thead>
                <?php $ctvposts = App\Models\CtvPost::all()->toArray(); ?>
                <tbody>
                    @php $count = 1; @endphp
                    @foreach ($ctvposts as $post)
                    <tr>
                            <td align="center">{{ $count }}</td>
                            <td align="center">{{ $post['type'] }}</td>
                            <td align="center"><a href="{{ route('ctvpost.show',['id' => $post['id']]) }}" target="_blank">{{ $post['name'] }}</a></td>
                            <td align="center">{{ $post['status'] == 0 ? '待っている' : '承認済み' }}</td>
                            @if ($post['status'] == 0)
                                <td align="center"><a href="{{ route('baiviet.accept',['id' => $post['id']]) }}" class="templatemo-edit-btn" onclick="return confirm('承認してもよろしいでしょうか?');">受け入れ</a></td>
                            @else
                                <td align="center"><i class="fa fa-check-circle-o" aria-hidden="true"></i></td>
                            @endif
                            <td align="center"><a href="" class="templatemo-edit-btn" onclick="return confirm('編集できません！');">編集</a></td>
                            <td align="center"><a href="{{ route('baiviet.destroy',['id' => $post['id']]) }}" class="templatemo-edit-btn" onclick="return confirm('削除してもよろしいでしょうか?');">削除</a></td>
                        </tr>
                        @php $count++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
