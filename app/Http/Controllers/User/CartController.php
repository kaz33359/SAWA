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
        $product = DB::table('products')->where('id','=',$id)->first();

            $cart= new Cart();
            $cart->user_id=$uid;
            $cart->product_price=$product->product_price;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->user_type=$user_type;
            $cart->save();
           return redirect()->back();

        }

 public function cart()
    {
        // dd(session('LoggedUser'));
        $id= session('LoggedUser');
        $datar['car'] = DB::table('carts')->where('id', '=', $id)->get();
        dd($datar['car']);
        // if ($request->session()->has('LoggedUser')) {
            return view('user/pages/cart', $datar);

            // } else {

            
            // return view('/login');

            // }
    
            }
    }

