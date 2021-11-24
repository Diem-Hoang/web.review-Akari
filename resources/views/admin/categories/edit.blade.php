@extends('admin.layouts.template')

@section('title', 'サブカテゴリの編集')

@section('content')
    <div class="templatemo-content-container">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="top:-31px;right:-26px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">サブカテゴリを編集する</h2>
            <form action="{{ route('category.edit',['id' => $category['id']]) }}" class="templatemo-login-form" method="post" enctype="multipart/form-data">

                @csrf

                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label class="control-label templatemo-block">カテゴリ</label>
                        <select class="form-control" name="parent_category">
                            @foreach ($parent_categories as $item)
                                <option value="{{ $item['id'] }}" {{ $category['parent_category_id'] == $item['id'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 form-group">                  
                        <label class="control-label" for="name">サブカテゴリ名<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ !is_null(old('name')) ? old('name') : $category['name'] }}">
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="templatemo-blue-button">アップデート</button>
                </div>
            </form>
        </div>
    </div>
@endsection
