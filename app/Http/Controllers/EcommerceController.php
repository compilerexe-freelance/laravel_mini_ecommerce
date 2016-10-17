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


    // public function postProductAdd() {
    //     $filename = null;
    //     $validator = Validator::make($request->all(), [
    //         'title'   => 'required',
    //         'detail'  => 'required'
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     } else {
    //         $file = array('image' => Input::file('image'));
    //         if ($request->file('image') != '') {
    //             $destinationPath = 'uploads/project';
    //             $extension = Input::file('image')->getClientOriginalExtension();
    //             $filename = rand(111111111,999999999).'.'.$extension;
    //             Input::file('image')->move($destinationPath, $filename);
    //             DB::table('project_detail')->insert([
    //                 'title'       => $request->get('title'),
    //                 'detail'      => $request->get('detail'),
    //                 'image'       => $filename,
    //                 'username'    => Auth::user()->username,
    //                 'created_at'  => date('Y-m-d h:i:s'),
    //                 'updated_at'  => date('Y-m-d h:i:s')
    //             ]);
    //         } else {
    //             DB::table('project_detail')->insert([
    //                 'title'       => $request->get('title'),
    //                 'detail'      => $request->get('detail'),
    //                 'image'       => '-',
    //                 'username'    => Auth::user()->username,
    //                 'created_at'  => date('Y-m-d h:i:s'),
    //                 'updated_at'  => date('Y-m-d h:i:s')
    //             ]);
    //         }
    //     }
    //     return redirect('/admin/project/project')->with('status', 'บันทึกโครงการสำเร็จ');
    // }
}
