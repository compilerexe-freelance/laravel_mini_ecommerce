@extends('layouts.member')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.category_member')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="columns">
          <div class="column" style="text-align: right;">
            <b>เลขที่ใบสั่งซื้อ <span>000001</span></b><br>
            <b>ชื่อ <span>Tester</span></b>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="//border: 1px solid red;">
            <table class="table is-bordered is-striped is-narrow">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อสินค้า</th>
                  <th>หมวดหมู่สินค้า</th>
                  <th>รายละเอียดสินค้า</th>
                  <th>ราคา</th>
                  <th>ประกัน</th>
                  <th>ลบ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>test 1</td>
                  <td>ลำโพง</td>
                  <td>...</td>
                  <td>1000 บาท</td>
                  <td>1 ปี</td>
                  <td><a href="#" class="button is-danger" style="width: 100%;">ลบสินค้า</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>test 2</td>
                  <td>ลำโพง</td>
                  <td>...</td>
                  <td>2000 บาท</td>
                  <td>2 ปี</td>
                  <td><a href="#" class="button is-danger" style="width: 100%;">ลบสินค้า</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <a href="{{ url('print') }}"><button type="button" class="button is-primary is-medium" style="width: 150px;">บันทึก</button></a>
          </div>
          <div class="column" style="text-align: left;">
            <button type="button" class="button is-primary is-medium" style="width: 150px;">ยกเลิก</button>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
