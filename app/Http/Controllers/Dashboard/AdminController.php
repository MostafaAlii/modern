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

    public function create(){}

    public function store(AdminRequest $request){}

    public function edit(){}

    public function update(AdminRequest $request){}

    public function destroy(){}

    public function destroyAll(){}
}
