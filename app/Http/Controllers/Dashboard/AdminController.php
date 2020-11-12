<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    public function index(){
        $admins = Admin::all();
        return view('dashboard.admins.index', compact('admins'));
    }

    public function create(){
        return view('dashboard.admins.create');
    }

    public function store(AdminRequest $request){
        // name , email , username , status
        try {
            // Check Status Is Active or Not
            if (!$request->has('status'))
                $request->request->add(['status'    =>  0]);
            else
                $request->request->add(['status'    =>  1]);
            // Create Statement
            Admin::create([
                'name'          =>  $request->name,
                'username'      =>  $request->username,
                'email'         =>  $request->email,
                'status'        =>  $request->status,
                'password'      =>  bcrypt($request->password),
            ]);
            // Redirect Messages
            return redirect()->route('admin.admins')->with(['success' => trans('admin.success_admin_create')]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.admins')->with(['error' => trans('admin.error_admin_create')]);
        }
    }

    public function edit(){}

    public function update(AdminRequest $request){}

    public function destroy(){}

    public function destroyAll(){}
}
