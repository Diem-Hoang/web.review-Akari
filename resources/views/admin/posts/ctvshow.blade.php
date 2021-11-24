@extends('admin.layouts.template')

@section('title')
    {{ $post['name'] }}
@endsection

@section('content')
    <div class="templatemo-content-container">
        <p><img src="{{ asset('storage/images/posts/'.$post['image']) }}" width="300" alt="Quả" /></p>
        <p>投稿名: {{ $post['name'] }}</p>
        <p>内容: {!! $post['content'] !!}</p>
        <p>住所: {{ $post['location'] }}</p>
        <p>値段: {{ $post['price'] }}</p>
        <p>いいね: {{ $post['count_like'] }}</p>
        <p>ビュー: {{ $post['view'] }}</p>
        <p>お気に入り: {{ $post['count_favorite'] }}</p>
        <p>タイプ: {{ $post['type'] }}</p>
        <p>状態: {{ $post['status'] == 0 ? 'Waiting' : 'Approved' }}</p>
        <p>日: {{ date('d-m-Y H:i:s',strtotime($post['created_at'])) }}</p>
    </div>
@endsection
