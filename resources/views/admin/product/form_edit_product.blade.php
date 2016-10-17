@extends('layouts.admin')

@section('content')

  @if (Session('status'))
    <script type="text/javascript">
      swal("เพิ่มสินค้าสำเร็จ", "", "success")
    </script>
  @endif

  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">
        <form action="{{ url('admin/product/edit/'.$id) }}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="columns" style="text-align: left;">
            <div class="column">
              <a href="{{ url('admin/product/add') }}" class="button is-light"><b><span class="icon"><i class="fa fa-plus"></i></span> เพิ่มสินค้า</b></a>
              <a href="{{ url('admin/product/edit') }}" class="button is-light"><b><span class="icon"><i class="fa fa-pencil"></i></span> แก้ไขสินค้า</b></a>
              <a href="{{ url('admin/product/delete') }}" class="button is-light"><b><span class="icon"><i class="fa fa-minus-circle"></i></span> ลบสินค้า</b></a>
              <hr>
            </div>
          </div>

          <div class="control is-horizontal" style="margin-bottom: 30px;">
            <div class="control-label">
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded" style="text-align: center;">
                <span class="title is-4"><b>แก้ไขสินค้า</b></span>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ชื่อสินค้า</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input" name="product_name" value="{{ $product->product_name }}" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">หมวดหมู่</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <span class="select">
                  <select name="category_name" required>
                    <option selected disabled value="">เลือกหมวดหมู่สินค้า</option>
                    @foreach ($categorys as $category)
                      @if ($category->category_name == $product->category_name)
                        <option value="{{ $category->category_name }}" selected>{{ $category->category_name }}</option>
                      @else
                        <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                      @endif
                    @endforeach
                  </select>
                </span>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">รายละเอียด</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" name="product_detail" class="input" value="{{ $product->product_detail }}" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ราคา</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" name="product_price" class="input" value="{{ $product->product_price }}" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ประกันสินค้า</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" name="product_warrant" class="input" value="{{ $product->product_warrant }}" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">จำนวน</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" name="product_count" class="input" value="{{ $product->product_count }}" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">รูป</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="file" name="image">
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded" style="text-align: right;">
                <button type="submit" class="button is-primary is-medium" style="width: 150px;">บันทึก</button>
              </p>
              <p class="control is-expanded" style="text-align: left;">
                <button type="reset" class="button is-primary is-medium" style="width: 150px;">ยกเลิก</button>
              </p>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#list_product').show();
    });
  </script>
@endsection
