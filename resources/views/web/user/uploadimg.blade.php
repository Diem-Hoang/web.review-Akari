@extends('web.user.usertemplate')
@section('title','profile')
@section('content')
        <form class="container " action="{{ route('web.user.uploadimg', ['id' => $user->id]) }}" method="POST" style="margin-top:5%" enctype="multipart/form-data">
            @csrf
            <div class="container rounded bg-white mt-5 mb-5 w-50 p-5" style="margin-top:5%"class="border border-primary">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-10 border-center">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <h4 class="font-weight-bold" style="font-size: 2em">プロフィール写真</h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2"></div>
                            <div class="col-md-3"><img class="rounded-circle mt-5" src= "{{asset('assets/web/images/'.$user->image)}}"/></div>
                        </div>
                        <div class="row mt-3"></div>
                        <div class="row mt-3">
                            <div class="col-md-5">
                                <label class="labels" style="font-size: 1.5em"><b>画像をアップロードする:</b></label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="" style="font-size: 1.2em" style="font-weight:bold;" value = "" name="image" />
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"><span class="font-weight-bold">保存</span></button> {{-- {{ route('web.user.edit.form',['id' => $user['id']]) }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection