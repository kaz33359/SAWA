<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\Admin\Category;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/pages/index');
    }
    //login and 
    public function login(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('admin/index');
        } else {
            return view('admin.auth.login');
        }
       // return view('admin.login');
        return view('admin/auth/login');
    }
// login
    public function enquiry(Request $request)
    {

        $dataenq['enq'] = DB::table('contacts')->get();
        //dd($dataenq);
        return view('admin.pages.enquiry', $dataenq);
      
    }
    public function enquiry_view()
    {
        return view('admin/pages/enquiry_view');
    }
    public function category(Request $request)                                                                                        
    {
        $data['cat'] = DB::table('categories')->get();
        //dd($data);
        return view('admin.pages.categories', $data);
    }
    public function categories_view(Request $request,$id)
    {

        $data['category'] = DB::table('categories')->where('id','=', $id)->first();
        // return dd($data['cat']);
        return view('admin/pages/categories_view',$data);
    }
    public function customers()
    {
        $datacus['cus'] = DB::table('users')->get();
        //dd($datacus);
        return view('admin.pages.customers', $datacus);
    }
    
    public function customers_view()
    {
        return view('admin/pages/customers_view');
    }
    public function products(Request $request)
     {
        $datas['pro'] = DB::table('products')->get();
        //dd($data);
        return view('admin.pages.products', $datas);
    }
    public function products_view(Request $request, $id)
    {
        $datas['product'] = DB::table('products')->where('id', '=', $id)->first();
       
        return view('admin/pages/products_view', $datas);
    }
    public function orders()
    {
        return view('admin/pages/orders');
    }
    public function orders_view()
    {
        return view('admin/pages/orders_view');
    }

    public function checkadmin(Request $request)
    {

        // //validate
        // $request->validate([

        //     'email' => 'required',
        //     'password' => 'required|max:12',
        // ]);
        //validate
        $result = DB::table('admins')->where(['email' => $request->email])->first();
        $db_pw = $request->password;
        // return dd($result);
        $d = $result->password;
        // $db_pw = Crypt::decrypt($db_pwd);
        // $db_pwd = Crypt::decrypt($result[0]->password);
        $db_pwd = Crypt::decrypt($d);

        // return dd($db_pw,$db_pwd);
        // return dd($db_pwd);
        if (isset($result->id)) {

            if ($db_pwd == $db_pw) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                $request->session()->put('LoggedAdmin', $result->id);
                return redirect('admin/index');
            } else {
                return redirect()->back()->with('fail', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('fail', 'We do not recognise your email address');
        }
    }
    //logout
    public function logout()
    {
        if (session()->has('LoggedAdmin')) {
            session()->pull('LoggedAdmin');
            session()->pull('ADMIN_ID');
            session()->pull('ADMIN_LOGIN');
            return redirect('admin/login')->with('success', 'Logout successful');
        }
    }
    public function hashp()
    {
        $paw = Crypt::encrypt('123456');
        $pa = Crypt::decrypt($paw);
        DB::table('admins')
            ->where(['email' => "admin@gmail.com"])
            ->update([
                'password' => $paw
            ]);

        dd($paw, $pa);
    }
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