@extends('admin.layout.index')

@section('content')

    <div class="admin-dashone-data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach

                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}<br>
                        </div>
                    @endif
                    <div class="sparkline12-list shadow-reset mg-t-30">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Thêm loại sản phẩm
                                </h1>
                                <div class="sparkline12-outline-icon">
                                    <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    {{--                        <span><i class="fa fa-wrench"></i></span>--}}
                                    {{--                        <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>--}}
                                </div>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form action="" method="post">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Tên </label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="text" name="name" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">email</label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="email" class="form-control" name="email"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Password</label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="password" class="form-control"
                                                                   name="password"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Nhập lại
                                                                Password</label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="password" class="form-control"
                                                                   name="repassword"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Address </label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="text" name="address" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Điện
                                                                thoại </label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="number" maxlength="12" name="phone"
                                                                   class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Remember</label>
                                                        </div>
                                                        <div class="bt-df-checkbox pull-left">
                                                            <select name="member">
                                                                <option value="1">Admin</option>
                                                                <option value="0">Member</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-3">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button class="btn btn-white" type="reset">
                                                                        Cancel
                                                                    </button>
                                                                    <button
                                                                        class="btn btn-sm btn-primary login-submit-cs"
                                                                        type="submit">Save Change
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
