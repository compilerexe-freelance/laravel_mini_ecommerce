@extends('layouts.admin')

@section('content')
  <div class="tile is-ancestor">

    @include('layouts.menu_admin')

    <div class="tile is-parent">
      <div class="tile is-child box">

        <div class="columns" style="text-align: center;">
          <div class="column">
            <span class="title is-4"><b>ข้อมูลลูกค้า</b></span>
          </div>
        </div>

        <div class="columns" style="text-align: center;">
          <div class="column" style="//border: 1px solid red;">
            <table class="table is-bordered is-striped is-narrow">
              <thead>
                <tr>
                  <th>ชื่อ</th>
                  <th>ที่อยู่</th>
                  <th>เบอร์โทร</th>
                  <th>อีเมล</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
                <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

  </div>
@endsection
