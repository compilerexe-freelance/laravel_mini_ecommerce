<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>e-commerce</title>
    <link rel="stylesheet" href="{{ url('css/bulma.css') }}" media="screen" title="no title">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}" media="screen" title="no title">
    <link rel="stylesheet" href="{{ url('css/sweetalert.css') }}" media="screen" title="no title">
    <script src="{{ url('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('js/sweetalert.min.js') }}"></script>
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
        background-image: url("{{ url('images/background.jpeg') }}");
        background-size: contain;
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
      <div class="header">
        <img src="{{ url('images/banner.jpg') }}" alt="">
      </div>

      <div class="columns" style="margin-top: 10px; text-align: right;">
        <div class="column">

        </div>
        <div class="column">
          <a href="{{ url('admin/info/admin') }}" class="button is-primary is-medium"><img src="{{ url('images/icons/user.png') }}" alt="" style="height: 30px; margin-right: 10px;">บัญชีผู้ใช้</a>
        </div>
      </div>
      @yield('content')
    </div>
    <footer class="footer footer_bg">
      <div class="container">
        <img src="{{ url('images/footer.jpg') }}" alt="" style="width: 100%; height: 250px;">
      </div>
    </footer>
  </body>
</html>
