@extends('layouts.member')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.category_member')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="columns">
          <div class="column" style="text-align: center;">
            <span class="title is-4"><b>สินค้าแนะนำ</b></span>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="//border: 1px solid red;">
            <img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;">
          </div>
          <div class="column" style="//border: 1px solid red;">
            <img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;">
          </div>
          <div class="column" style="//border: 1px solid red;">
            <img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;">
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="//border: 1px solid red;">
            <img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;">
          </div>
          <div class="column" style="//border: 1px solid red;">
            <img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;">
          </div>
          <div class="column" style="//border: 1px solid red;">
            <img src="#" alt="" style="width: 200px; height: 150px; background-color: #abc;">
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
