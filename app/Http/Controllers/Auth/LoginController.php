<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\Input;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
    protected function save(array $data) {
        return User::create([
            'rememberToken' => $data['rememberToken'],
        ]);
        
    }
    public function login(Request $request) {


        $this->validate($request, [
          'name' => 'required',
          'password' => 'required|min:6',
        ], [
          'name.required' => 'Bạn chưa nhập tên',
          'name.unique' => 'Tên người dùng đã có người đăng ký',
          'password.required' => 'Bạn chưa nhập mật khẩu',
          'password.min' => 'Mật khẩu ít nhất 6 ký tự',
        ]);

        $name = $request->name;
        $password = $request->password;
        $remember = $request->remember;
        $rememberMe = false;
        if(isset($remember)) {
          $rememberMe = true;
        }
        // dd('jgj');
        if (Auth::attempt(['name' => $name, 'password' => $password], $rememberMe)) {
          return redirect()->route('home');
        }
        else {
          return redirect()->back()->with(['message' => 'Tai khoan dang nhap khong dung']);
        }
      
    }
    public function logout()  {
      Auth::logout();
      return redirect()->route('home');
    }
}
