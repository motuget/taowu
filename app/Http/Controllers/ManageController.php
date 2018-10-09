<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ManageController extends Controller
{
    public function index()
    {
        if(session('num')){
            return view('manage');
        }else{
            return redirect('login');
        }
    }

    public function store(Request $request)
    {
        $num = $request->input('num');
        $pwd = $request->input('pwd');
        $users = DB::table('users')->where(['num'=>$num,'pwd'=>$pwd])->first();
        if($users){
            session(['num'=>$num]);
            return redirect('manage');
        }else{
            return '账号或密码错误';
        }
    }

    public function login()
    {
        return view('login');
    }
}
