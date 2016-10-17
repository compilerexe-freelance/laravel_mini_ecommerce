@extends('layouts.admin')

@section('content')

  @if (Session('status'))
    <script type="text/javascript">
      swal("ลบหมวดหมู่สำเร็จ", "", "success")
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

          <div class="columns" style="text-align: center;">
            <div class="column">
              <span class="title is-4" style="color: red;"><b>ลบหมวดหมู่สินค้า</b></span>
            </div>
          </div>

          <div class="columns" style="text-align: center;">
            <div class="column">
              <table class="table is-bordered is-striped is-narrow">
                <thead>
                  <tr>
                    <th>ลำดับที่</th>
                    <th>ชื่อหมวดหมู่สินค้า</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categorys as $category)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $category->category_name }}</td>
                      <td><a href="delete/{{ $category->id }}" class="button is-primary" style="width: 100%;">ลบ</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
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
