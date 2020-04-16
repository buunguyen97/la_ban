<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDanhSach(){
        $user = User::all();
        return view('admin.user.danhsach',compact('user'));
    }
    public  function getThem(){
        return view('admin.user.them');
    }
    public function postThem(Request $request){
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100',
                'password' => 'required|min:3|max:100',
                'repassword' => 'required_with:password|same:password|required|min:3|max:100',
                ],
            [
                'name.required'=>'Bạn chưa nhập name',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
                'repassword.required_with:password' => 'nhập lại mât khẩu không đúng',
                'repassword.same:password' => 'nhập lại mât khẩu không đúng'
            ]);
        $user = new User();
        $user->full_name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->remember_token = $request->member;
        $user->save();

        return redirect('admin/user/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $user = User::find($id);
        return view('admin.user.sua',compact('user'));
    }
    public function postSua(Request $request,$id){
        $user =User::find($id);
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100',
                'password' => 'required|min:3|max:100',
                'repassword' => 'required_with:password|same:password|required|min:3|max:100',
            ],
            [
                'name.required'=>'Bạn chưa nhập name',
                'name.min'=>'Ít nhất 3 kí tự',
                'name.max'=>'Độ dài quá dài,ít hơn 100 kí tự',
                'repassword.required_with:password' => 'nhập lại mât khẩu không đúng',
                'repassword.same:password' => 'nhập lại mât khẩu không đúng'
            ]);

        $user->full_name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->remember_token = $request->member;
        $user->save();
        return redirect('admin/user/danhsach')->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $user =User::find($id);
        $user ->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công');
    }
    public function getdangnhapAdmin(){
        return view('admin.login');
    }
    public function postdangnhapAdmin(Request $request){

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('admin/trangchu');

        }
        else{
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }
}
