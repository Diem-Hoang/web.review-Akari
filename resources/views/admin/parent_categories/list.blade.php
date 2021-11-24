@extends('admin.layouts.template')

@section('title', 'カテゴリリスト')

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
    <a href="{{ route('parent_category.create.form') }}" style="margin:1rem 0 0 1rem"><button class="btn btn-primary">追加</button></a>
    <div class="templatemo-content-widget no-padding">
        <div class="panel panel-default table-responsive table-padding">
            <table class="table table-striped table-bordered templatemo-user-table" id="data-table">
                <thead>
                    <tr>
                        <td align="center"><span class="white-text">#</span></td>
                        <td align="center"><span class="white-text">カテゴリ名</td>
                        <td align="center">編集</td>
                        <td align="center">削除</td>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1; @endphp
                    @foreach ($parent_categories as $parent_category)
                        <tr>
                            <td align="center">{{ $count }}</td>
                            <td align="center">{{ $parent_category['name'] }}</td>
                            <td align="center"><a href="{{ route('parent_category.edit.form',['id' => $parent_category['id']]) }}" class="templatemo-edit-btn">編集</a></td>
                            <td align="center"><a href="{{ route('parent_category.delete',['id' => $parent_category['id']]) }}" class="templatemo-edit-btn" onclick="return confirm('削除してもよろしいでしょうか?');">削除</a></td>
                        </tr>
                        @php $count++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
