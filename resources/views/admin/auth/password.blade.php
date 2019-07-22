@extends('admin.layouts.glance')
@section('title')
    <title>Thay đổi password</title>
@endsection
@section('link')
    <link href="{{asset('admin_assets/css/password.css')}}" rel='stylesheet' type='text/css' />
@endsection
@section('tag')
    <script src="{{ asset('admin_assets/js/password.js') }}"></script>
@endsection
@section('content')
    <div class="forms tables">
        <div class="row">
            <div class="d-inline">
                <h2 class="title1">Thay đổi password</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 btn-btn d-inline">
                <a><button type="button" class="btn btn-success btn-2 btn-back"href="/">Back</button></a>
                <button type="button" class="btn btn-success btn-2" href="/">Save</button>
            </div>
        </div>
        <div class="form-grids row widget-shadow">
            <div>
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Mật khẩu hiện tại</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control error" id="password_current"  maxlength="20"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Mật khẩu mới</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="email" class="form-control" id="email" maxlength="20"/>
                            <span class="error display_view" id="new_password"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info error">Nhập lại mật khẩu</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="tel" class="form-control" id="rep" length="20"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


