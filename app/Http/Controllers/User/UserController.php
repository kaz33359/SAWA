<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
Use App\Models\User\User;
use App\Models\Admin\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('user/pages/index');
    }
    public function login() {
        return view('user/auth/login');
    }
    public function register() {
        return view('user/auth/register');
    }
    public function contact() {
        return view('user/pages/contact');
    }
    public function product()
    {
        return view('user/pages/product');
    }
    //Register
    public function save(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric|digits:10|unique:users,mobile',
            'password' => 'required|min:5|max:20',
            // 'confirm' => 'required_with:password|same:password',
        ]);
        //insert data into database
        $user1 = new user();
        $user1->name = $request->name;
        $user1->email = $request->email;
        $user1->mobile = $request->mobile;
        $user1->password = Hash::make($request->password);
        // $user->confirm = Hash::make($request->confirm);
        $user1->status = "1";
        $save = $user1->save();
        // $request->session()->put('USER_LOGIN', true);

        // $request->session()->put('USER_ID', $user->id);
        if ($save) {
            return back()->with('success', 'Registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong...try again later');
        }
    }
    //Register

    // public function delete(Request $request, $id)
    // {
    //     $model = category::find($id);

    //     $model->delete();
    //     return redirect('admin/category')->with('success', 'Category deleted');

    //     // $request->session()->flash('message', 'Category deleted');


    //     // return redirect('admin/category');
    // }
    public function status(Request $request, $status, $id)
    {

        $model = user::find($id);
        $model->status = $status;
        $model->save();
        return redirect('admin/customers')->with('success', 'Customer status updated');
        //$request->session()->flash('message', 'Category status updated');
        // return redirect('admin/category');
    }
    public function delete(Request $request, $id)
    {
        $model = user::find($id);

        $model->delete();
        return redirect('admin/customers')->with('success', 'Customer deleted');

        // $request->session()->flash('message', 'Category deleted');


        // return redirect('admin/category');
    }
}