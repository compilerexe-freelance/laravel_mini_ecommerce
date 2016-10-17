<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Member;
use App\Order;
use App\Product;

use Illuminate\Http\Request;
use DB;
use Input;
use File;
use App\Http\Requests;

class EcommerceController extends Controller
{
    public function postCategoryAdd(Request $request) {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back()->with('status', 'success');
    }

    public function postCategoryEdit(Request $request) {
        $category = new Category;
        $category = $category::find($request->id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->route('category/edit')->with('status', 'success');
    }


    public function postProductAdd(Request $request) {
        $filename = null;
        $file = array('image' => Input::file('image'));
        if ($request->file('image') != null) {
            $destinationPath = 'uploads/products/';
            $extension = Input::file('image')->getClientOriginalExtension();
            $filename = rand(111111111,999999999).'.'.$extension;
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            Input::file('image')->move($destinationPath, $filename);
            $product = new Product;
            $product->product_name      =   $request->product_name;
            $product->category_name     =   $request->category_name;
            $product->product_detail    =   $request->product_detail;
            $product->product_price     =   $request->product_price;
            $product->product_warrant   =   $request->product_warrant;
            $product->product_count     =   $request->product_count;
            $product->product_picture   =   $filename;
            $product->save();
            return redirect()->back()->with('status', 'success');
        }
    }

    public function postProductEdit(Request $request) {
        $product = new Product;
        $product = $product::find($request->id);
        $filename = null;
        $file = array('image' => Input::file('image'));
        if ($request->file('image') != null) {
            $destinationPath = 'uploads/products/';
            $extension = Input::file('image')->getClientOriginalExtension();
            $filename = rand(111111111,999999999).'.'.$extension;
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            File::delete(public_path('uploads/products/').$product->product_picture);
            Input::file('image')->move($destinationPath, $filename);
            $product->product_name      =   $request->product_name;
            $product->category_name     =   $request->category_name;
            $product->product_detail    =   $request->product_detail;
            $product->product_price     =   $request->product_price;
            $product->product_warrant   =   $request->product_warrant;
            $product->product_count     =   $request->product_count;
            $product->product_picture   =   $filename;
        } else {
            $product->product_name      =   $request->product_name;
            $product->category_name     =   $request->category_name;
            $product->product_detail    =   $request->product_detail;
            $product->product_price     =   $request->product_price;
            $product->product_warrant   =   $request->product_warrant;
            $product->product_count     =   $request->product_count;
        }
        $product->save();
        return redirect()->route('product/edit')->with('status', 'success');
    }

}
