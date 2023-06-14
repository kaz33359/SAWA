<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User\Cart;
use App\Models\User\User;
use App\Models\User\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addcart(Request $request, $id)
    {

        if ($request->session()->has('LoggedUser')) {
            $uid = $request->session()->get('LoggedUser');
            $user_type = 'Reg';
        } else {
            $uid = getUserTempId();
            $user_type = 'Not-Reg';
        }
        $product = DB::table('products')->where('id', '=', $id)->first();

        $cart = new Cart();
        $cart->user_id = $uid;
        $cart->product_price = $product->product_price;
        $cart->product_id = $product->id;
        $cart->quantity = $request->quantity;
        $cart->user_type = $user_type;
        $cart->save();
        return redirect()->back();

    }
    public function addtocart(Request $request, $id)
    {

        $uid = $request->session()->get('LoggedUser');
        // dd($uid);
        $user_type = 'Reg';
        $grpid = session()->get('grpid');
        // dd($grpid);
        

        if (!$grpid || session()->get('uid') !== $uid) {
            // If the group ID doesn't exist in the session or the user is different, set it to 1
            $grpid = 1;
            session()->put('grpid', $grpid);
            session()->put('uid', $uid);
        }

        $product = DB::table('products')->where('id', '=', $id)->first();
        // dd($product);
        $exists = DB::table('carts')
            ->where('product_id', '=', $product->id)
            ->where('user_id', '=', $uid)
            ->first();
        // dd($exists);
        if ($exists) {

            $updateCart = Cart::where('id', '=', $exists->id)->increment('quantity', 1);
            // dd($updateCart);

        } else {
            // Check if the grpid exists in the session
            // if (session()->has('grpid')) {
            //     $grpid = session()->get('grpid');
            //     dd($grpid);
            // } else {
            //     // Generate a new grpid and store it in the session
            //     $grpid = 1; // Set initial group ID
            //     session()->put('grpid', $grpid);
            //     dd($grpid);
            // }
            // dd($grpid);
            $cart = new Cart();
            $cart->user_id = $uid;
            $cart->product_price = $product->product_price;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->user_type = $user_type;
            $cart->grpid = $grpid;
            $cart->save();

        }

        return redirect()->back()->with('success', 'added to cart');

    }

    public function cart()
    {

        // dd(session('LoggedUser'));
        if (session('LoggedUser')) {
            $id = session('LoggedUser');
            // dd($id);
        } 
        // elseif (getUserTempId()) {
        //     $id = getUserTempId();
        //     // dd($id);
        // }

        $data['car'] = DB::table('carts')->where('user_id', '=', $id)->get();
        $data['id'] = $id;
        return view('user/pages/cart', $data);

    }

    public function removeCart(Request $request, $pid)
    {
        // dd($pid);
        // $id = session('LoggedUser');
        if (session('LoggedUser')) {
            $id = session('LoggedUser');
            // dd($id);
        } elseif (getUserTempId()) {
            $id = getUserTempId();
            // dd($id);
        }

        $check = DB::table('carts')
            ->where('user_id', '=', $id)
            ->where('product_id', '=', $pid)
            ->first();
        if ($check->quantity > 1) {
            $updateCart = Cart::where('user_id', '=', $id)
                ->where('product_id', '=', $pid)
                ->decrement('quantity', 1);
        } else {
            $rmv = DB::table('carts')
                ->where('user_id', '=', $id)
                ->where('product_id', '=', $pid)
                ->delete();
        }
        return redirect()->back()->with('success', 'removed from cart');
    }
}