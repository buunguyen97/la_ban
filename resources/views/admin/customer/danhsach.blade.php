@extends('admin.layout.index')
@section('content')

	 <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
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
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Projects Data Table</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="name" data-editable="true">Tên</th>
                                                    <th data-field="email" data-editable="true">Email</th>
                                                    <th data-field="phone" data-editable="true">SĐT</th>
                                                    <th data-field="company" data-editable="true">Địa chỉ</th>
                                                    <th data-field="complete">Note</th>
                                                    <th  data-field="sua">Xóa/Sửa</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach ($customer as $ct)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$ct->id}}</td>
                                                    <td>{{$ct->name}}</td>
                                                    <td>{{$ct->email}}</td>
                                                    <td>{{$ct->phone_number}}</td>
                                                    <td>{{$ct->address}}</td>
                                                    <td >{{$ct->note}}</td>
                                                    <td>
                                                        <button class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoa/{{$ct->id}}"> Delete</a></button>
                                                          <button class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khachhang/sua/{{$ct->id}}">Edit</a></button>
                                                    </td>

                                                </tr>
                                      			@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
