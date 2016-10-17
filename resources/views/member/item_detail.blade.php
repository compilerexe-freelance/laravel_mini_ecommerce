@extends('layouts.member')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.category_member')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="columns">
          <div class="column" style="text-align: center;">
            <span class="title is-4"><b>รายละเอียดสินค้า</b></span>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="//border: 1px solid red;">
            <img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;">
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <label><b>ชื่อสินค้า</b></label>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <span>...</span>
          </div>
          <div class="column" style="//border: 1px solid red;">
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <label><b>รายละเอียด</b></label>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <span>...</span>
          </div>
          <div class="column" style="//border: 1px solid red;">
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <label><b>ประกันสินค้า</b></label>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <span>...</span>
          </div>
          <div class="column" style="//border: 1px solid red;">
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <label><b>ราคา</b></label>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <span>0</span>
          </div>
          <div class="column" style="text-align: left;">
            <span>บาท</span>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <label><b>คงเหลือ</b></label>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <span>0</span>
          </div>
          <div class="column" style="text-align: left;">
            <span>ชิ้น</span>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">

          </div>
          <div class="column" style="//border: 1px solid red;">
            <a href="#"><img src="{{ url('images/icons/cart.png') }}" alt="" style="height: 70px;"></a>
            <button type="button" name="button"  class="button is-primary is-medium" style="margin-top: 10px; margin-left: 20px;">ยกเลิก</button>
          </div>
          <div class="column" style="text-align: left;">

          </div>
        </div>



      </div>
    </div>
  </div>
@endsection
