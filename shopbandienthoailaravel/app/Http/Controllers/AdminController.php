<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    
    public function index(){
        return view('admin');
    }
    public function show_dashboard(){
        
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){//kiểm tra và trả về message
        $admin_email = $request->admin_email;
        $admin_password=md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->id);
            return view('admin.dashboard');//đúng thì chuyển hướng sang dashboard đồng thời đẩy dữ liệu name và id để hiển thị trang dashboard
        }else{
            Session::put('message',"sai thông tin đăng nhập hoặc mật khẩu");
            return Redirect::to('/admin');//sai thì chuyển hướng lại admin đồng thời put message cho trang admin thông báo
        }

    }
    public function logout(){
        
        Session::put('admin_name',null);//xóa các session name
        Session::put('admin_id',null);
        return redirect('/admin');
    }
}
