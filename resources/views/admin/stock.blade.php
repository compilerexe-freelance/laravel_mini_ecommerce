@extends('layouts.admin')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="control is-horizontal" style="margin-top: 20px; margin-bottom: 30px;">
          <div class="control-label">
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded" style="text-align: center;">
              <span class="title is-4"><b>จัดการสต๊อกสินค้า</b></span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal" style="margin-bottom: 30px;">
          <div class="control-label">
            <label for="name" class="label">เลือกหมวดหมู่สินค้า</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <select name="" id="" class="input">
                <option value="">เลือกหมวดหมู่สินค้า</option>
              </select>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded" style="text-align: center;">
              <a href="{{ url('admin/stock/product') }}" class="button is-primary is-medium" style="width: 150px;">ถัดไป >></a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#list_product').show();
    });
  </script>
@endsection
