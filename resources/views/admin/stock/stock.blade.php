@extends('layouts.admin')

@section('content')

  @if (Session('status'))
    <script type="text/javascript">
      swal("แก้ไขสต๊อกสินค้าสำเร็จ", "", "success")
    </script>
  @endif

  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <form action="{{ url('admin/stock/product') }}" method="post">

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
              <label for="name" class="label">เลือกหมวดหมู่สินค้า</label>
            </div>
            <div class="column" style="text-align: center;">
              <span class="select">
                <select name="category_name" style="width: 320px;" required>
                  <option selected disabled value="">เลือกหมวดหมู่สินค้า</option>
                  @foreach ($categorys as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                  @endforeach
                </select>
              </span>
            </div>
            <div class="column"></div>
          </div>

          <div class="columns">
            <div class="column"></div>
            <div class="column" style="text-align: center;">
              <button type="submit" class="button is-primary is-medium" style="width: 150px;">ถัดไป >></button>
            </div>
            <div class="column"></div>
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
