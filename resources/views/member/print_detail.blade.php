<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>e-commerce</title>
    <link rel="stylesheet" href="{{ url('css/bulma.css') }}" media="screen" title="no title">

    <style media="screen">
      @font-face {
        font-family: 'Kanit';
        font-style: normal;
        font-weight: 400;
        src: local('Kanit'), local('Kanit-Regular'), url("{{ url('fonts/Kanit.woff2') }}") format('woff2');
        unicode-range: U+0E01-0E5B, U+200B-200D, U+25CC;
      }
      body {
        font-family: 'Kanit', sans-serif;
        /*background-image: url("{{ url('images/background.jpeg') }}");*/
        /*background-size: contain;*/
      }
      .footer_bg {
        background-color: #000;
      }
      .list_menu li a{
        color: #fff;
      }
      .list_menu li a:hover {
        background-color: #808080;
        color: #fff;
      }
      button {
        font-family: 'Kanit';
      }
      .active_menu {
        background-color: #404040;
      }
      th, td {
        text-align: center !important;
      }
    </style>
  </head>
  <body>
    <div class="container">

      <div class="columns" style="margin-top: 10px; text-align: center;">

        <div class="column">
          <img src="{{ url('images/footer.jpg') }}" alt="" style="width: 100%; height: 250px;">
        </div>
      </div>

      <div class="columns" style="margin-top: 10px; text-align: right;">
        <div class="column">
          <b>เลขที่ใบสั่งซื้อ <span>000001</span></b><br>
          <b>วันที่สั่งสินค้า <span>2016/10/01</span></b>
        </div>
      </div>

      <div class="columns" style="margin-top: 10px; text-align: left;">
        <div class="column">
          <b>ชื่อ <span>Tester</span></b><br>
          <b>อีเมล <span>Tester@gmail.com</span></b><br>
          <b>เบอร์โทร <span>081-xxxxxxx</span></b>
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
              </tr>
              <tr>
                <td>2</td>
                <td>test 2</td>
                <td>ลำโพง</td>
                <td>...</td>
                <td>2000 บาท</td>
                <td>2 ปี</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="columns">
        <div class="column" style="text-align: left;">
          <span style="color: red;">หากท่านไม่มารับสินค้าภายใน 3 วัน ทางร้านขอยกเลิกการสั่งซื้อสินค้าครั้งนี้ ขอบคุณค่ะ</span>
        </div>
        <div class="column" style="text-align: right;">
          <b>รวมจำนวนชิ้น <span>2</span> ชิ้น</b><br>
          <b>จำนวนเงิน <span>3000</span> บาท</b>
        </div>
      </div>



    </div>
  </body>
</html>
