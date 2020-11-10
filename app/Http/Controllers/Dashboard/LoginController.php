<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgetPasswordRequest;
use App\Models\Admin;
use App\Mail\AdminRestPassword;
use DB;
use Carbon\Carbon;
use Mail;
//use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $remember_me = request('remember_me') == 1 ? true : false ;

        if(auth()->guard('admin')->attempt(
                [
                    'email'         =>      $request->input("email") ,
                    'password'      =>      $request->input("password")
                ] , $remember_me
        )) {
            //notify()->success(trans('admin.success_login'));
            return redirect()->route('admin.dashboard');
        }
        //notify()->error(trans('admin.logged_in_errors'));
        return redirect()->back()->with(['error' => trans('admin.logged_in_errors')]);
     }

     public function forgetPassword(){
         return view('dashboard.auth.forgetPassword');
     }

     public function postForgetPassword(){
        $admin = Admin::where('email', request('email'))->first();
        if (!empty($admin)){
            $token = app('auth.password.broker')->createToken($admin);
            $data = DB::table('password_resets')->insert([
                'email' =>  $admin->email,
                'token' =>  $token,
                'created_at'    =>  Carbon::now(),
            ]);
            Mail::to($admin->email)->send(new AdminRestPassword(['data' => $admin, 'token' => $token]));
            return redirect()->route('admin.forgetPassword')->with(['success' => trans('admin.success_send_password_reset_link_message')]);
        }
         return redirect()->route('admin.forgetPassword')->with(['error' => trans('admin.error_send_password_reset_link_message')]);

     }

     public function resetPassword($token){
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
         if (!empty($check_token)){
             return view('dashboard.auth.resetPassword', ['data' => $check_token]);
         } else{
             return redirect()->route('admin.forgetPassword');
         }
     }

     public function postResetPassword(ForgetPasswordRequest $request ,$token){
         $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
         if (!empty($check_token)){
             $admin = Admin::where('email', $check_token->email)->update([
                        'email'=>$check_token->email,
                        'password'=>bcrypt(request('password')),
                 ]);
             DB::table('password_resets')->where('email', request('email'))->delete();
             return redirect()->route('admin.login')->with(['success' => trans('admin.new_password_success_login_message')]);
         } else{
             return redirect()->route('admin.login')->with(['error' => trans('admin.new_password_error_login_message')]);
         }
     }

     public function logout()
    {
        $guard = $this->getGuard();
        $guard->logout();
        return redirect()->route('admin.login');
    }

    private function getGuard(){
        return auth('admin');
    }
}
