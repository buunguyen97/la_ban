<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getDanhSach(){
        $product = Product::all();
        $product_type = ProductType::all();
        return view('admin.products.danhsach',compact('product','product_type'));
    }

    public function getThem(){
        $product_type = ProductType::all();
        return view('admin.products.them',compact('product_type'));
    }

    public function postThem(Request $request){
        $this->validate($request,
            ['name'=>'required|min:3|max:100'],
            [
                'name.required'=>'Bạn chưa nhập payment',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
            ]);
        $product = new Product();
        $product->name = $request->name;
        $product->id_type = $request->product_type;
        $product->description = $request->note;
        $product->unit_price = $request->price;
        $product->promotion_price = $request->promotionprice;
        $product->image = $request->upload;
        $product->unit = $request->donvi;
        $product->new = $request->moi;
        $product->save();
        return redirect('admin/product/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $product_type = ProductType::all();
        $product = Product::find($id);
        return view('admin.products.sua',compact('product','product_type'));
    }

    public function postSua(Request $request,$id){
        $product = Product::find($id);
        $this->validate($request,
            ['name'=>'required|min:3|max:100'],
            [
                'name.required'=>'Bạn chưa nhập payment',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
            ]);
        $product->name = $request->name;
        $product->id_type = $request->product_type;
        $product->description = $request->note;
        $product->unit_price = $request->price;
        $product->promotion_price = $request->promotionprice;
        $product->image = $request->upload;
        $product->unit = $request->donvi;
        $product->new = $request->moi;
        $product->save();
        return redirect('admin/product/them')->with('thongbao','Sửa thành công');

    }
    public function getXoa($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product/danhsach')->with('thongbao','Xóa thành công');
    }
}
