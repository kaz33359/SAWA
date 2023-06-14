<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\OrderMain;
use App\Models\User\User;
use App\Models\Admin\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Razorpay\Api\Api;
use App\Models\Payment;
use Session;

class UserController extends Controller
{
    public function index()
    {
        return view('user/pages/index');
    }
    public function login()
    {
        return view('user/auth/login');
    }
    public function register()
    {
        return view('user/auth/register');
    }
    public function contact()
    {
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
    public function coursedetails(Request $request, $id)
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
    // public function checkout()
    // {
    //     return view('user/pages/checkout');
    // }

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
            return redirect('login')->with('success', 'Registered successfully');
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

        // dd("hai");
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        //checking login info
        $userinfo = user::where('email', '=', $request->email)->first();

        // dd($userinfo->id);
        if (!$userinfo) {
            return redirect()->back()->with('fail', 'We do not recognise your Account');
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

    public function checkout($id, $grpid)
    {
        session()->put('uid', $id);
        return view('user/pages/checkout', ['id' => $id, 'grpid' => $grpid]);
    }
    public function success()
    {
        return view('user/pages/success');
    }
    public function payment(Request $request)
    {
        // $gid = session()->get('grpid');

        $paymentType = $request->payment;
        Session::put('payment', $paymentType);

        $grpid = $request->post('grpidd');
        session()->put('grpidd', $grpid);

        $userid = $request->post('userid');
        $name = $request->post('name');
        $email = $request->post('email');
        $mobile = $request->post('mobile');
        $address = $request->post('address');
        $state = $request->post('state');
        $city = $request->post('city');
        $zip = $request->post('zip');
        $amount = $request->post('tprice');

        $userdata = User::where('id', $userid)
            ->update(['address' => $address, 'state' => $state, 'city' => $city, 'zip' => $zip]);

        $orderplace = new OrderDetail();

        if ($paymentType == 'online') {

            $api = new Api('rzp_test_KQCYPB8p0M7RLq', '5ZH2zTk4L1wDcelsOFgdpb9o');
            $order = $api->order->create(array('receipt' => '123', 'amount' => $amount * 100, 'currency' => 'INR'));
            $orderId = $order['id'];

            $orderplace->fkUser_id = $userid;
            $orderplace->userName = $name;
            $orderplace->email = $email;
            $orderplace->mobile = $mobile;
            $orderplace->address = $address;
            $orderplace->state = $state;
            $orderplace->city = $city;
            $orderplace->zip = $zip;
            $orderplace->grpid = $grpid;
            $orderplace->totalAmount = $amount;
            $orderplace->orderStatus = "pending";
            $orderplace->paymentType = "online";
            $orderplace->payment_id = $orderId;
            $orderplace->paymentStatus = "pending";
            $orderplace->save();

            $user_pay = new Payment();
            $user_pay->user_id = $request->post('userid');
            $user_pay->name = $name;
            $user_pay->amount = $amount;
            $user_pay->payment_id = $orderId;
            $user_pay->save();

            Session::put('order_id', $orderId);
            Session::put('amount', $amount);

            return redirect()->back()->with('success', 'continue Payment <i class="fa fa-hand-o-down"></i>');

        } elseif ($paymentType == 'cod') {

            $orderplace->fkUser_id = $userid;
            $orderplace->userName = $name;
            $orderplace->email = $email;
            $orderplace->mobile = $mobile;
            $orderplace->address = $address;
            $orderplace->state = $state;
            $orderplace->city = $city;
            $orderplace->zip = $zip;
            $orderplace->grpid = $grpid;
            $orderplace->totalAmount = $amount;
            $orderplace->orderStatus = "pending";
            $orderplace->paymentType = "COD";
            $rand = mt_rand(1000000, 9999999);
            $orderplace->payment_id = $rand;
            Session::put('codpid', $rand);
            $orderplace->paymentStatus = "pending";
            $orderplace->save();

            $user_pay = new Payment();
            $user_pay->user_id = $request->post('userid');
            $user_pay->name = $name;
            $user_pay->amount = $amount;
            $user_pay->payment_id = Session::get('codpid');
            $user_pay->save();

            Session::put('amount', $amount);


            $user = Payment::where('payment_id', $rand)
                ->latest()
                ->first();
            $user->payment_done = false;
            $user->razorpay_id = 'cod';
            $user->save();


            if ($user->save()) {

                $payment_table = DB::table('payments')
                    ->where('user_id', '=', $userid)
                    ->latest()
                    ->first();

                $orderData = DB::table('order_details')
                    ->latest()
                    ->first();

                $cartData = DB::table('carts')
                    ->where('user_id', '=', $userid)
                    ->where('grpid', '=', session()->get('grpidd'))
                    ->get();

                if ($orderData) {
                    $ordertableId = $orderData->id;
                    $orderAmount = $orderData->totalAmount;
                }

                foreach ($cartData as $value) {
                    $order_main = new OrderMain();
                    $order_main->user_id = $userid;
                    $order_main->fkOrderDetails_id = $ordertableId;
                    $order_main->fkProduct_id = $value->product_id;
                    $order_main->quantity = $value->quantity;
                    $order_main->product_price = $value->product_price;
                    $order_main->fkPaymentTable_id = $payment_table->id;
                    $order_main->save();
                }

                $latestOrder = DB::table('order_details')
                    ->where('fkUser_id', '=', $userid)
                    ->latest()
                    ->first(); // Retrieve the latest row

                if ($latestOrder) {
                    $check = DB::table('order_details')
                        ->where('id', '=', $latestOrder->id)
                        ->update([
                            'paymentStatus' => 'Success',
                            'orderStatus' => 'Placed'
                        ]);
                }

                if ($check) {
                    DB::table('carts')
                        ->where('user_id', '=', $userid)
                        ->delete();
                }

                return redirect('/placed');

            }

        }
    }
    public function pay(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $rand = Session::get('codpid');
        $payment = Session::get('payment');

        if ($payment == 'online') {
            $user = Payment::where('payment_id', $data['razorpay_order_id'])
                ->first();
            $user->payment_done = true;
            $user->razorpay_id = $data['razorpay_payment_id'];
            $user->save();
        } elseif ($payment == 'cod') {
            $user = Payment::where('payment_id', $rand)
                ->latest()
                ->first();
            $user->payment_done = false;
            $user->razorpay_id = 'cod';
            $user->save();
        }


        $userid = session()->get('uid');
        $grid = session()->get('grpidd');

        if ($user->save()) {

            $payment_table = DB::table('payments')
                ->where('user_id', '=', $userid)
                ->latest()
                ->first();

            $orderData = DB::table('order_details')
                ->latest()
                ->first();

            // dd($orderData);

            $cartData = DB::table('carts')
                ->where('user_id', '=', $userid)
                ->where('grpid', '=', session()->get('grpidd'))
                ->get();

            if ($orderData) {
                $ordertableId = $orderData->id;
                $orderAmount = $orderData->totalAmount;
            }

            foreach ($cartData as $value) {
                $order_main = new OrderMain();
                $order_main->user_id = $userid;
                $order_main->fkOrderDetails_id = $ordertableId;
                $order_main->fkProduct_id = $value->product_id;
                $order_main->quantity = $value->quantity;
                $order_main->product_price = $value->product_price;
                $order_main->fkPaymentTable_id = $payment_table->id;
                $order_main->save();
            }

            $latestOrder = DB::table('order_details')
                ->where('fkUser_id', '=', $userid)
                ->latest()
                ->first(); // Retrieve the latest row

            if ($latestOrder) {
                $check = DB::table('order_details')
                    ->where('id', '=', $latestOrder->id)
                    ->update([
                        'paymentStatus' => 'Success',
                        'orderStatus' => 'Placed'
                    ]);
            }

            if ($check) {
                DB::table('carts')
                    ->where('user_id', '=', $userid)
                    ->delete();
            }

        }



        // $orderdetails = DB::table('order_details')
        //     ->leftJoin('carts', 'carts.user_id', '=', 'order_details.fkUser_id')
        //     ->where('order_details.fkUser_id', '=', $userid)
        //     ->where('order_details.grpid', '=', $grid)
        //     ->get();
        // dd($orderdetails);
        return redirect('/success');

    }
    public function placed(Request $request)
    {
        return view('user/pages/placed');
        // dd($data);
    }
    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/')->with('success', 'Logout successful');
            ;
        }
    }
}