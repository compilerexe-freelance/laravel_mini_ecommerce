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

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">ชื่อ</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <span>...</span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">หมวดหมู่</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <span>...</span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">รายละเอียด</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <span>...</span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">ราคา</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <span>...</span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">ประกันสินค้า</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <span>...</span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">จำนวน</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <span>...</span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">คงเหลือ จำนวน</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input type="text" class="input">
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded" style="text-align: right;">
              <a href="{{ url('admin/stock/product') }}" class="button is-primary is-medium" style="width: 150px;"><< ย้อนกลับ</a>
            </p>
            <p class="control is-expanded" style="text-align: left;">
              <a href="{{ url('admin/stock/product/edit') }}" class="button is-primary is-medium" style="width: 150px;">บันทึก</a>
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
