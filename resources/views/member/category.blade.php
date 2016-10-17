@extends('layouts.member')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.category_member')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="columns">
          <div class="column" style="text-align: center;">
            <span class="title is-4"><b>ชื่อหมวดหมู่สินค้า</b></span>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="//border: 1px solid red;">
            <a href="{{ url('category/detail/1') }}"><img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;"></a><br>
            ราคา <span>0</span>  บาท<br>
            คงเหลือ <span>0</span> ชิ้น<br>
            <a href="{{ url('category/detail/1') }}"><img src="{{ url('images/icons/cart.png') }}" alt="" style="height: 50px;"></a>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <a href="{{ url('category/detail/2') }}"><img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;"></a><br>
            ราคา <span>0</span>  บาท<br>
            คงเหลือ <span>0</span> ชิ้น<br>
            <a href="{{ url('category/detail/1') }}"><img src="{{ url('images/icons/cart.png') }}" alt="" style="height: 50px;"></a>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="//border: 1px solid red;">
            <a href="{{ url('category/detail/3') }}"><img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;"></a><br>
            ราคา <span>0</span>  บาท<br>
            คงเหลือ <span>0</span> ชิ้น<br>
            <a href="{{ url('category/detail/1') }}"><img src="{{ url('images/icons/cart.png') }}" alt="" style="height: 50px;"></a>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <a href="{{ url('category/detail/4') }}"><img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;"></a><br>
            ราคา <span>0</span>  บาท<br>
            คงเหลือ <span>0</span> ชิ้น<br>
            <a href="{{ url('category/detail/1') }}"><img src="{{ url('images/icons/cart.png') }}" alt="" style="height: 50px;"></a>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
