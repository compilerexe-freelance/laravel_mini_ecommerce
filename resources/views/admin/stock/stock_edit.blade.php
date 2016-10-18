@extends('layouts.admin')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <form action="{{ url('admin/stock/product/edit') }}" method="post">

          {{ csrf_field() }}

          <div class="columns">
            <div class="column" style="text-align: center;">
              <span class="title is-4"><b>จัดการสต๊อกสินค้า</b></span>
            </div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">ชื่อ</label>
            </div>
            <div class="column" style="text-align: left;">
              <span>{{ $product->product_name }}</span>
              <input type="hidden" name="product_name" value="{{ $product->product_name }}">
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">หมวดหมู่</label>
            </div>
            <div class="column" style="text-align: left;">
              <span>{{ $product->category_name }}</span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">รายละเอียด</label>
            </div>
            <div class="column" style="text-align: left;">
              <span>{{ $product->product_detail }}</span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">ราคา</label>
            </div>
            <div class="column" style="text-align: left;">
              <span>{{ $product->product_price }}</span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">ประกันสินค้า</label>
            </div>
            <div class="column" style="text-align: left;">
              <span>{{ $product->product_warrant }}</span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">จำนวน</label>
            </div>
            <div class="column" style="text-align: left;">
              <span>{{ $product->product_count }}</span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">คงเหลือ จำนวน</label>
            </div>
            <div class="column" style="text-align: left;">
              <input type="text" name="product_count" class="input">
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <a href="{{ url('admin/stock') }}" class="button is-primary is-medium" style="width: 150px;">ยกเลิก</a>
            </div>
            <div class="column" style="text-align: left;">
              <button type="submit" class="button is-primary is-medium" style="width: 150px;">บันทึก</button>
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
