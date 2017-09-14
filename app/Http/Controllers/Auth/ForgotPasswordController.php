<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Model\ResetPassword;
use App\Mail\forgotpass;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function forgotPassword(Request $request) {
        try {
            $this->validate($request, [
                'email' => 'required|email'
            ],  [
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Email không đúng định dạng',
            ]);
            $email = $request->email;
            $token = str_random(60);
            $exist_email = ResetPassword::where('email', $email)->first();
            // dd($exist_email);

            if($exist_email) {
                $exist_email->token = $token;
                $exist_email->save();
            } else {
                $user = ResetPassword::create([
                    'email' => $email,
                    'token' => $token
                ]);
            }

            Mail::to('vuthilinh.nd095@gmail.com')->send(new forgotpass());
        } catch (Exception $e) {
            return $e;
        }
    }
}
