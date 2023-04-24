<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;                                                       
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_categories(Request $request)
    {
        //validate

        $request->validate([

         'category_name' => 'required',
           'category_desc' => 'required',
        //    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

         ]);

        $resultcat = DB::table('categories')->get();

         if ($request->post('id') > 0) {
             $category = category::find($request->post('id'));
            // $msg = "Category updated";
         } else {
            $category = new category();
            // $msg = "Category inserted";
        }
        //validate
        //insert data into database
        // $category = new category();
        $category->category_name = $request->post('category_name');
        $category->category_desc = $request->post('category_desc');

        //dd($request->file('file'));
        $file = $request->file('category_image');
        $filename = time() . '.' . $file->extension();
        $file->move(public_path('category_image'), $filename);
        $category->category_image = $filename;
        // dd($filename);
        $category->status = "1";
        // $category->is_home = "1";
        $savecat = $category->save();
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
        $model = category::find($id);
        
        $model->delete();
        return redirect('admin/category')->with('success', 'Category deleted');

        // $request->session()->flash('message', 'Category deleted');

        
        // return redirect('admin/category');
    }
    public function status(Request $request, $status, $id)
    {

        $model = category::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message', 'Category status updated');
        return redirect('admin/category');
    }

    public function category_update(Request $request, $id)
    {
        $updateData = $request->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
           
        ]);
        Category::whereId($id)->update($updateData);
        return redirect('admin/category')->with('completed', 'category has been updated');
}
}