<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function getDanhSach(){
        $bill = Bill::all();
        return view('admin.bill.danhsach',compact('bill'));
    }

    public  function getThem(){
        $customer = Customer::all();
        $bill = Bill::all();
        return view('admin.bill.them',compact('customer','bill'));
    }

    public function postThem(Request $request){
        $this->validate($request,
            ['payment'=>'required|min:3|max:100'],
            [
                'payment.required'=>'Bạn chưa nhập payment',
                'payment.min'=>'Ít nhất 3 kí tự',
                'payment.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
            ]);
        $bill = new Bill();
        $bill->id_customer = $request->id_customer;
        $bill->date_order = $request->date;
        $bill->total = $request->total;
        $bill->payment = $request->payment;
        $bill->note = $request->note;
        $bill->save();
        return redirect('admin/bill/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id){

    }
}
