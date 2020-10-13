<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    //
    public function __construct()
    {
        @session();
    }
    public function Login()
    {
        return view("Be.Auth.login");
    }
    public function Login_Post(Request $request)
    {
        $username = $request->username;
        $pass = $request->password;

        if ($username == "" || $pass == "") {
            return redirect("/login")->with('notice', 'Tài khoản không được bỏ trống');
        } else if (Auth::attempt(['name' =>$username, 'password' =>    $pass])) {
            return redirect('/Backend/home');
        } else {
            return redirect('/login')->with('notice', 'Tài khoản đăng nhập không thành công');
        }
    }
  public function List()
    {
        $User=User::get();
        // echo "<pre>";
        // var_dump($User);
        // echo "</pre>";
        // exit;
        return  view('Be.Staff.list',compact('User'));
    }
}
