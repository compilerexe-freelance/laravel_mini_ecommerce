@extends('layouts.admin')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="columns" style="text-align: center;">
          <div class="column">
            <span class="title is-4"><b>เปลี่ยนรหัสผ่าน</b></span>
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
            <b><span style="color: red;">*** กรุณาตรวจสอบก่อนบันทึกข้อมูล ***</span></b>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="text-align: right;">
          </div>
          <div class="column" style="//border: 1px solid red;">
            <button type="button" name="button" class="button is-primary is-medium" style="width: 150px;">บันทึก</button>
          </div>
          <div class="column" style="//border: 1px solid red;">
          </div>
        </div>

      </div>
    </div>

  </div>
@endsection
