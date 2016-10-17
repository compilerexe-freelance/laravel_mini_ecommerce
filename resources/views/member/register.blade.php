@extends('layouts.member')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.category_member')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="control is-horizontal">
          <div class="control-label">
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded" style="text-align: center;">
              <span class="title is-4"><b>สมัครสมาชิก</b></span>
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">ชื่อ</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input type="text" class="input">
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">ที่อยู่</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input type="text" class="input">
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">เบอร์โทร</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input type="text" class="input">
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">อีเมล</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input type="text" class="input">
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">รหัสผ่าน</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input type="text" class="input">
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
            <label for="name" class="label">ยืนยันรหัสผ่าน</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input type="text" class="input">
            </p>
          </div>
        </div>

        <div class="control is-horizontal">
          <div class="control-label">
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded" style="text-align: center;">
              <a href="#" class="button is-primary is-medium">ลงทะเบียน</a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
