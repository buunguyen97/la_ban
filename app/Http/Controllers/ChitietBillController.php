<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use Illuminate\Http\Request;

class ChitietBillController extends Controller
{
    public function getDanhSach(){
        $detailbill = BillDetail::all();
        return view('admin.chitietbill.danhsach',compact('detailbill'));
    }
    public function getSua($id){
        $detailbill = BillDetail::find($id);
        return view('admin.chitietbill.sua',compact('detailbill'));
    }
    public function postSua(Request $request,$id){
        $detailbill = BillDetail::find($id);
        $this->validate($request,
            ['bill'=>'required'],
            [
                'bill.required'=>'Bạn chưa nhập id bill'
            ]);
        $detailbill->id_bill = $request->bill;
        $detailbill->id_product = $request->product;
        $detailbill->quantity = $request->soluong;
        $detailbill->unit_price = $request->total;

        $detailbill->save();
        return redirect('admin/chitietbill/danhsach')->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $detailbill = BillDetail::find($id);
        $detailbill->delete();
        return redirect('admin/chitietbill/danhsach')->with('thongbao','xóa thành công');
    }
}
