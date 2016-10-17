@extends('layouts.admin')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">
        <form action="{{ url('product/add') }}" method="post" enctype="multipart/form-data">

          <div class="columns" style="text-align: left;">
            <div class="column">
              <a href="#" class="button is-light"><b><span class="icon"><i class="fa fa-plus"></i></span> เพิ่มสินค้า</b></a>
              <a href="#" class="button is-light"><b><span class="icon"><i class="fa fa-pencil"></i></span> แก้ไขสินค้า</b></a>
              <a href="#" class="button is-light"><b><span class="icon"><i class="fa fa-minus-circle"></i></span> ลบสินค้า</b></a>
              <hr>
            </div>
          </div>

          <div class="control is-horizontal" style="margin-bottom: 30px;">
            <div class="control-label">
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded" style="text-align: center;">
                <span class="title is-4"><b>เพิ่มสินค้า</b></span>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ชื่อสินค้า</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input" name="product_name">
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">หมวดหมู่</label>
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
              <label for="name" class="label">รายละเอียด</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input">
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ราคา</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input">
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ประกันสินค้า</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input">
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">จำนวน</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input">
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">รูป</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="file">
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded" style="text-align: right;">
                <a href="#" class="button is-primary is-medium" style="width: 150px;">บันทึก</a>
              </p>
              <p class="control is-expanded" style="text-align: left;">
                <a href="#" class="button is-primary is-medium" style="width: 150px;">ยกเลิก</a>
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
