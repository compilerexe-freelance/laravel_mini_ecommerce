@extends('layouts.member')

@section('content')

  @if (Session('status'))
    <script type="text/javascript">
      swal("สมัครสมาชิกสำเร็จ", "", "success")
    </script>
  @endif

  @if (Session('error'))
    <script type="text/javascript">
      swal("กรุณาตรวจสอบรหัสผ่านอีกครั้ง", "", "error")
    </script>
  @endif

  <div class="tile is-ancestor">

    @include('layouts.category_member')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <form action="{{ url('register') }}" method="post">

          {{ csrf_field() }}

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
                <input type="text" class="input" name="member_name" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ที่อยู่</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input" name="member_address" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">เบอร์โทร</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="text" class="input" name="member_tel" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">อีเมล</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="email" class="input" name="member_email" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">รหัสผ่าน</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="password" class="input" name="password" pattern=".{4,}" placeholder="ขั้นต่ำ 4 ตัวอักษร" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
              <label for="name" class="label">ยืนยันรหัสผ่าน</label>
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded">
                <input type="password" class="input" name="password_confirmation" pattern=".{4,}" placeholder="ขั้นต่ำ 4 ตัวอักษร" required>
              </p>
            </div>
          </div>

          <div class="control is-horizontal">
            <div class="control-label">
            </div>
            <div class="control is-grouped">
              <p class="control is-expanded" style="text-align: center;">
                <button type="submit" class="button is-primary is-medium">ลงทะเบียน</butotn>
              </p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection
