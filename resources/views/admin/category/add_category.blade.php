@extends('layouts.admin')

@section('content')

  @if (Session('status'))
    <script type="text/javascript">
      swal("เพิ่มหมวดหมู่สำเร็จ", "", "success")
    </script>
  @endif

  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">
        <form action="{{ url('admin/category/add') }}" method="post">

          {{ csrf_field() }}

          <div class="columns" style="text-align: left;">
            <div class="column">
              <a href="{{ url('admin/category/add') }}" class="button is-light"><b><span class="icon"><i class="fa fa-plus"></i></span> เพิ่มหมวดหมู่สินค้า</b></a>
              <a href="{{ url('admin/category/edit') }}" class="button is-light"><b><span class="icon"><i class="fa fa-pencil"></i></span> แก้ไขหมวดหมู่สินค้า</b></a>
              <a href="{{ url('admin/category/delete') }}" class="button is-light"><b><span class="icon"><i class="fa fa-minus-circle"></i></span> ลบหมวดหมู่สินค้า</b></a>
              <hr>
            </div>
          </div>

          <div class="control is-horizontal" style="margin-bottom: 30px;">
            <div class="control-label">
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded" style="text-align: center;">
                <span class="title is-4"><b>เพิ่มหมวดหมู่สินค้า</b></span>
              </p>
            </div>
          </div>

          <div class="control is-horizontal" style="margin-bottom: 30px;">
            <div class="control-label">
              <label for="name" class="label">ชื่อหมวดหมู่สินค้า</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input" id="category_name" name="category_name" required>
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
                <button type="button" id="btn_cancle" class="button is-primary is-medium" style="width: 150px;">ยกเลิก</button>
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
      $('#btn_cancle').click(function() {
        $('#category_name').val(null);
      });
    });
  </script>
@endsection
