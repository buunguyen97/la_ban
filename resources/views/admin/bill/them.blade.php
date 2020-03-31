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
                                <h1>Thêm khách hàng</h1>
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
                                                            <label class="login2 pull-right pull-right-pro">Payment</label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="text" name="payment" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-8 col-xs-6">
                                                            <label class="login2 pull-right pull-right-pro">Người mua
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-4 col-xs-6">
                                                            <div class="bt-df-checkbox pull-left">
                                                                <select name="id_customer">
                                                                    <option >Chọn người mua</option>
                                                                   @foreach($bill as $b)
                                                                       <option value="{{$b->id_customer}}">{{$b->customer->name}}</option>


                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Date order</label>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input type="date" name="date" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Tổng tiền </label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="number" name="total" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Ghi
                                                                chú</label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="text" class="form-control" name="note"
                                                                   />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-3">
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
