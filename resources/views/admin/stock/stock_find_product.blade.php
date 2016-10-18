@extends('layouts.admin')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <form action="{{ url('admin/stock/edit') }}" method="post">

          {{ csrf_field() }}

          <div class="columns" style="margin-top: 20px;">
            <div class="column"></div>
            <div class="column" style="text-align: center;">
              <span class="title is-4"><b>จัดการสต๊อกสินค้า</b></span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <label for="name" class="label">เลือกสินค้า</label>
            </div>
            <div class="column" style="text-align: center;">
              <span class="select">
                <select name="product_name" style="width: 320px;" required>
                  <option selected disabled value="">เลือกสินค้า</option>
                  @foreach ($products as $product)
                    <option value="{{ $product->product_name }}">{{ $product->product_name }}</option>
                  @endforeach
                </select>
              </span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column" style="text-align: right;">
              <a href="{{ url('admin/stock') }}" class="button is-primary is-medium" style="width: 150px;"><< ย้อนกลับ</a>
            </div>
            <div class="column" style="text-align: left;">
              <button type="submit" class="button is-primary is-medium" style="width: 150px;">ถัดไป >></button>
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
