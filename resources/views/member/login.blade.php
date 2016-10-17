@extends('layouts.member')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.category_member')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="columns">
          <div class="column" style="text-align: center;">
            <span class="title is-4"><b>เข้าสู่ระบบ</b></span>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <label><b>E-Mail</b></label>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <input type="text" name="email" class="input" value="">
          </div>
          <div class="column" style="//border: 1px solid red;">
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
            <label><b>Password</b></label>
          </div>
          <div class="column" style="//border: 1px solid red;">
            <input type="text" name="password" class="input" value="">
          </div>
          <div class="column" style="//border: 1px solid red;">
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
          </div>
          <div class="column" style="//border: 1px solid red;">
            <button type="button" name="button" class="button is-primary is-medium">เข้าสู่ระบบ</button>
          </div>
          <div class="column" style="//border: 1px solid red;">
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
