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
    public function coursegrid()
    {
        return view('user/pages/course-grid');
    }
     public function coursedetails(Request $request,$id)
    {
        // return dd($id);
       // $result['id'] = $id;
        $datas['product'] = DB::table('products')->where('id', '=', $id)->first();

        return view('user/pages/course-details', $datas);
    }
    public function jobcategory()
    {
        return view('user/pages/job-category');
    }
    public function checkout()
    {
        return view('user/pages/checkout');
    }
   
      public function faq()
    {
        return view('user/pages/faq');
    }
    public function termcondition()
    {
        return view('user/pages/term-condition');
    }
    public function privacypolicy()
    {
        return view('user/pages/privacy-policy');
    }
    public function userprofile()
    {
        return view('user/pages/instructor-edit-profile');
    }
    public function userorder()
    {
        return view('user/pages/instructor-order');
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
    

    public function check(Request $request)
    {

        //validate
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        //validate
        //checking login info
        $userinfo = user::where('email', '=', $request->email)->first();

        if (!$userinfo) {
            return redirect()->back()->with('fail', 'We do not recognise your email address');
        } else {
            //check password
            if (Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('/');
            } else {
                return redirect()->back()->with('fail', 'Invalid password');
            }
        }
    }
    //Login
    //logout
    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/')->with('success', 'Logout successful');;
        }
    }
    //logout
}