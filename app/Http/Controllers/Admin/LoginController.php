<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
//use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false ;

        if(auth()->guard('admin')->attempt(
                [
                    'email'         =>      $request->input("email") ,
                    'password'      =>      $request->input("password")
                ]
        )) {
            //notify()->success(trans('admin.success_login'));
            return redirect()->route('admin.dashboard');
        }
        //notify()->error(trans('admin.logged_in_errors'));
        return redirect()->back()->with(['error' => trans('admin.logged_in_errors')]);
     }

     public function logout()
    {
        $gaurd = $this->getGaurd();
        $gaurd->logout();
        return redirect()->route('admin.login');
    }

    private function getGaurd(){
        return auth('admin');
    }
}
