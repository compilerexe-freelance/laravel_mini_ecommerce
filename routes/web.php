<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => '/'], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('home', function() {
        return view('member.home')->with('active_menu', 'home');
    });
    Route::get('register', function() {
        return view('member.register')->with('active_menu', 'register');
    });
    Route::get('login', function() {
        return view('member.login')->with('active_menu', 'login');
    });
    Route::get('contact', function() {
        return view('member.contact')->with('active_menu', 'contact');
    });
    Route::get('category/{id}', function($id) {
        return view('member.category')->with('active_menu', 'home')->with('id', $id);
    });
    Route::get('category/detail/{id}', function($id) {
        return view('member.item_detail')->with('active_menu', 'home')->with('id', $id);
    });
    Route::get('confirm', function() {
        return view('member.confirm_order')->with('active_menu', 'home');
    });
    Route::get('print', function() {
        return view('member.print_order')->with('active_menu', 'home');
    });
    Route::get('print/detail', function() {
        return view('member.print_detail');
    });
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('main', function() {
        return view('admin.main');
    });

    /* Product */
      // GET Product
      Route::get('product/add', function() {
          $categorys = App\Category::all();
          return view('admin.product.add_product')
          ->with('categorys', $categorys);
      });
      Route::get('product/edit', [
          'as'    =>  'product/edit',
          'uses'  =>  function() {
              $products  = App\Product::all();
              return view('admin.product.edit_product')
              ->with('products', $products);
          }
      ]);
      Route::get('product/edit/{id}', function($id) {
          $product    = App\Product::find($id);
          $categorys  = App\Category::all();
          return view('admin.product.form_edit_product')
          ->with('id', $id)
          ->with('product', $product)
          ->with('categorys', $categorys);
      });
      Route::get('product/delete', [
          'as'    =>  'product/delete',
          'uses'  =>  function() {
              $products  = App\Product::all();
              return view('admin.product.delete_product')
              ->with('products', $products);
          }
      ]);
      Route::get('product/delete/{id}', function($id) {
          $product = App\Product::find($id);
          File::delete(public_path('uploads/products/').$product->product_picture);
          $product->delete();
          return redirect()->route('product/delete')->with('status', 'success');
      });

      // POST Product
      Route::post('product/add', 'EcommerceController@postProductAdd');
      Route::post('product/edit/{id}', 'EcommerceController@postProductEdit');
    /* End Product */

    /* Category */
      // GET Catagory
      Route::get('category/add', [
          'as'    =>  'category/add',
          'uses'  =>  function() {
            return view('admin.category.add_category');
          }
      ]);
      Route::get('category/edit', [
          'as'    =>  'category/edit',
          'uses'  =>  function() {
              $categorys  = App\Category::all();
              return view('admin.category.edit_category')
              ->with('categorys', $categorys);
          }
      ]);
      Route::get('category/edit/{id}', function($id) {
          $category = App\Category::find($id);
          return view('admin.category.form_edit_category')
          ->with('id', $id)
          ->with('category', $category);
      });
      Route::get('category/delete', [
          'as'    =>  'category/delete',
          'uses'  =>  function() {
              $categorys  = App\Category::all();
              return view('admin.category.delete_category')
              ->with('categorys', $categorys);
          }
      ]);
      Route::get('category/delete/{id}', function($id) {
          $category = App\Category::find($id);
          $category->delete();
          return redirect()->route('category/delete')->with('status', 'success');
      });

      // POST Category
      Route::post('category/add', 'EcommerceController@postCategoryAdd');
      Route::post('category/edit/{id}', 'EcommerceController@postCategoryEdit');
    /* End Category */

    /* Stock */
    // GET Stock
    Route::get('stock', [
        'as'    =>  'stock',
        'uses'  =>  function() {
          $categorys  = App\Category::all();
          return view('admin.stock.stock')
          ->with('categorys', $categorys);
        }
    ]);
    // Route::get('stock/product/edit', function() {
    //     return view('admin.stock.stock_edit');
    // });

    //POST Stock
    Route::post('stock/product', 'EcommerceController@postStockProduct');
    Route::post('stock/edit', 'EcommerceController@postStockEdit');
    Route::post('stock/product/edit', 'EcommerceController@postStockProductEdit');
    /* End Stock */

    Route::get('info/member', function() {
        return view('admin.list_member');
    });
    Route::get('info/order', function() {
        return view('admin.list_order');
    });
    Route::get('info/admin', function() {
        return view('admin.info_admin');
    });

});
