@extends('admin.layout.index')

@section('content')
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
                    <h1>Sửa khách hàng</h1>
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
                                                <label class="login2 pull-right pull-right-pro">Tên</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" name="name" class="form-control"  value="{{$customer->name}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-8 col-xs-6">
                                                <label class="login2 pull-right pull-right-pro">Giới tính
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-md-6 col-sm-4 col-xs-6">
                                                <div class="bt-df-checkbox pull-left">
                                                    <label>
                                                        <input class="pull-left radio-checked" name="gioitinh" value="Nam" checked="" type="radio"> Nam</label>
                                                    <label>
                                                        <input class="pull-left radio-checked" name="gioitinh" value="Nữ" type="radio"> Nữ</label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="email"name="email" class="form-control" value="{{$customer->email}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label class="login2 pull-right pull-right-pro">Địa chỉ</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" name="address" class="form-control"  value="{{$customer->address}}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label class="login2 pull-right pull-right-pro">SĐT</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input  name="phone"  type="text" class="form-control" value="{{$customer->phone_number}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label class="login2 pull-right pull-right-pro">Ghi chú</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="note" placeholder="Placeholder" value="{{$customer->note}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="login-btn-inner">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-9">
                                                    <div class="login-horizental cancel-wp pull-left">
                                                        <button class="btn btn-white" type="reset">Cancel</button>
                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
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
@endsection
