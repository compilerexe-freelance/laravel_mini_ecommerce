@extends('layouts.admin')

@section('content')

  @if (Session('status'))
    <script type="text/javascript">
      swal("แก้ไขสินค้าสำเร็จ", "", "success")
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
              <a href="{{ url('admin/product/add') }}" class="button is-light"><b><span class="icon"><i class="fa fa-plus"></i></span> เพิ่มสินค้า</b></a>
              <a href="{{ url('admin/product/edit') }}" class="button is-light"><b><span class="icon"><i class="fa fa-pencil"></i></span> แก้ไขสินค้า</b></a>
              <a href="{{ url('admin/product/delete') }}" class="button is-light"><b><span class="icon"><i class="fa fa-minus-circle"></i></span> ลบสินค้า</b></a>
              <hr>
            </div>
          </div>

          <div class="columns" style="text-align: center;">
            <div class="column">
              <span class="title is-4"><b>แก้ไขสินค้า</b></span>
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
                  @foreach ($products as $product)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $product->product_name }}</td>
                      <td><a href="edit/{{ $product->id }}" class="button is-primary" style="width: 100%;">แก้ไข</a></td>
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
