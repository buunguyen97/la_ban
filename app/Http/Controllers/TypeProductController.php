<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function getDanhSach(){
        $type_product = ProductType::all();
        return view('admin.type_product.danhsach',compact('type_product'));
    }


    public function getThem(){
        return view('admin.type_product.them');
    }
    public  function postThem(Request $request){
        $this->validate($request,
            ['name'=>'required|min:3|max:100'],
            [
                'name.required'=>'Bạn chưa nhập payment',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
            ]);
        $type_product = new ProductType();
        $type_product->name = $request->name;
        $type_product->description = $request->description;
        $type_product->image = $request->image;

        $type_product->save();
        return redirect('admin/type_product/them')->with('thongbao','Thêm thành công');
    }
    public function getSua(Request $request,$id){
        $type_product = ProductType::find($id);
        return view('admin.type_product.sua',compact('type_product'));
    }
    public function postSua(Request $request,$id){
        $this->validate($request,
            ['name'=>'required|min:3|max:100'],
            [
                'name.required'=>'Bạn chưa nhập payment',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
            ]);
        $type_product = ProductType::find($id);
        $type_product->name = $request->name;
        $type_product->description = $request->description;
        $type_product->image = $request->image;

        $type_product->save();
        return redirect('admin/type_product/them')->with('thongbao','Sửa thành công');

    }
    public function getXoa($id){
        $type_product = ProductType::find($id);
        $type_product->delete();
        return redirect('admin/type_product/danhsach')->with('thongbao','Xóa thành công');
    }
}
