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
                                <h1>Thêm sản phẩm</h1>
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
                                                            <input type="text" name="name" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-8 col-xs-6">
                                                            <label class="login2 pull-right pull-right-pro">Loại
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-4 col-xs-6">
                                                            <div class="bt-df-checkbox pull-left">
                                                                <select name="product_type">
                                                                    <option >Chọn Loại</option>
                                                                    @foreach($product_type as $pdt)
                                                                        <option value="{{$pdt->id}}">{{$pdt->name}}</option>


                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Giá</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="number" name="price" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Giá KM</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input name="promotionprice"  type="number"   class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Image</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="file" class="form-control" name="upload" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Đơn vị</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-4 col-xs-6">
                                                            <div class="bt-df-checkbox pull-left">
                                                                <select name="donvi">
                                                                        <option value="Cái">Cái</option>
                                                                        <option value="Hộp">Hộp</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Mới</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-4 col-xs-6">
                                                            <div class="bt-df-checkbox pull-left">
                                                                <select name="moi">
                                                                    <option value="1">Mới</option>
                                                                    <option value="0">Cũ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Note</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" name="note"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button class="btn btn-white" type="reset">Cancel
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
