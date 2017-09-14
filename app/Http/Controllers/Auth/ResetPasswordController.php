<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use App\Model\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        $this->middleware('auth');
    }
    public function resetPass(Request $request) {
        try {
            $this->validate($request, [
                'password' => 'required|min:6',
                'comfirm_pass' => 'required|min:6|same:password'
            ], [
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu ít nhất 6 ký tự',
                'comfirm_pass.required' => 'Bạn chưa nhập mật khẩu',
                'comfirm_pass.min' => 'Mật khẩu ít nhất 6 ký tự',
                'comfirm_pass.same' => 'Mật khẩu không khớp, nhập lại mật khẩu' 
            ]);
            $password = bcrypt($request->password);
            $user_id = Auth::user()->id;
            
            if($user = User::where('id', $user_id)->first()) {
                $user->password = $password;
                $user->save();
                return redirect()->route('home');
            }
            else {
                return redirect()->back()->with(['message' => 'khong thanh cong']); 
            }
        } catch (Exception $e) {
            return $e;
        }
    }
}
