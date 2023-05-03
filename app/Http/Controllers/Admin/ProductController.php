<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function add_products(Request $request)
    {
        $request->validate([

            'product_desc1' => 'required',
            'product_desc2' => 'required',
            //    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
  
     $resultcat = DB::table('products')->get();

         if ($request->post('id') > 0) {
             $product = product::find($request->post('id'));
            // $msg = "Category updated";
         } else {
            $product = new product();
            // $msg = "Category inserted";
        }
        //validate
        //insert data into database
        // $category = new category();
         $product->product_name = $request->post('product_name');
         $product->product_desc1 = $request->post('product_desc1');
        $product->product_desc2 = $request->post('product_desc2');
        $product->product_category = $request->post('product_category');
        $product->product_keyword = $request->post('product_keyword');

 

        //dd($request->file('file'));
        $file = $request->file('product_image');
        $filename = time() . '.' . $file->extension();
        $file->move(public_path('product_image'), $filename);
        $product->product_image = $filename;
        // dd($filename);
        $product->status = "1";
        // $category->is_home = "1";
        $savecat = $product->save();
        // dd($category);
        if ($savecat) {

            return redirect()->back()->with('success', 'New category added successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong...try again later');
        }
        //insert data into database  
}
    public function delete(Request $request, $id)
    {
        $model = product::find($id);
        $model->delete();
        $request->session()->flash('message', 'Product deleted');
        return redirect('admin/products');
    }
    public function status(Request $request, $status, $id)
    {

        $model = product::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message', 'Product status updated');
        return redirect('admin/products');
    }
     public function product_update(Request $request, $id)
    {
        // $updateData = $request->validate([
        //     'product_name' => 'required',
        //     'product_category' => 'required',
        //     //'product_image' => 'required',
        //     'product_desc1' => 'required',
        //     'product_desc2' => 'required',
        //     'product_keywords' => 'required',
        // ]);
        //   Product::whereId($id)->update($updateData);
        //     return redirect('admin/products')->with('completed', 'product has been updated');

        //   $request->validate([]);
        //insert data into database
        
        $file = $request->file('product_image');
        $filename = time() . '.' . $file->extension();
        $file->move(public_path('product_image'), $filename);
        $save = DB::table('products')->where('id', $id)->update(array('product_name' => $request->product_name,'product_image' => $filename , 'product_category'=> $request->product_category, 'product_desc1'=> $request->product_desc1, 'product_desc2' => $request->product_desc2, 'product_keyword' => $request->product_keyword));
        // return dd($request);
        if ($save) {
            return redirect('admin/products')->with('success', 'Updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong...try again later');
        }
     }
    // public function product_update(Request $request, $id)
    // {
    //     $updateData = $request->validate([
    //          'product_name' => 'required',
    //         'product_category' => 'required',
    //         'product_desc1' => 'required',
    //         'product_desc2' => 'required',
    //         'product_keywords' => 'required',

    //     ]);
    //     Product::whereId($id)->update($updateData);
    //     return redirect('admin/products')->with('completed', 'category has been updated');
    // }
}