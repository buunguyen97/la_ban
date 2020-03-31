<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerList extends Controller
{
    public function getDanhSach(){
    	$customer = Customer::all();
    	return view('admin.customer.danhsach',compact('customer'));
    }
    public function getThem(){
        $customer = Customer::all();
        return view('admin.customer.them',compact('customer'));
    }
    public function postThem(Request $request){
        $this->validate($request,
            ['name'=>'required|min:3|max:100'],
            [
                'name.required'=>'Bạn chưa nhập tên loại tin',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
            ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = $request->gioitinh;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone;
        $customer->note = $request->note;
        $customer->save();
        return redirect('admin/khachhang/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id){
        $customer = Customer::find($id);
        return view('admin.customer.sua',compact('customer'));
    }
    public function postSua(Request $request,$id){
        $customer = Customer::find($id);
        $this->validate($request,
            ['name'=>'required|min:3|max:100'],
            [
                'name.required'=>'Bạn chưa nhập tên loại tin',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
            ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = $request->gioitinh;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone;
        $customer->note = $request->note;
        $customer->save();
        return redirect('admin/khachhang/danhsach')->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('admin/khachhang/danhsach')->with('thongbao','Xóa thành công');
    }
}
