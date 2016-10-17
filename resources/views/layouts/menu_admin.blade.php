<div class="tile is-3 is-vertical is-parent">

  <div class="tile is-child box" style="text-align: center;">
    <a href="{{ url('admin/main') }}" class="button is-info is-medium" style="width: 100%; margin-bottom: 10px;">หน้าแรก</a>
    <button id="btn_product" class="button is-info is-medium" style="width: 100%; margin-bottom: 10px;">สินค้า</button>
    <div id="list_product">
      <ul style="text-align: left;">
        <li><a href="{{ url('admin/product/add') }}" class="button is-link" style="text-decoration: none;">- จัดการสินค้า</a></li>
        <li><a href="{{ url('admin/category/add') }}" class="button is-link" style="text-decoration: none;">- จัดการหมวดหมู่สินค้า</a></li>
        <li><a href="{{ url('admin/stock') }}" class="button is-link" style="text-decoration: none;">- จัดการสต๊อกสินค้า</a></li>
      </ul>
    </div><br>
    <a href="{{ url('admin/info/member') }}" class="button is-info is-medium" style="width: 100%; margin-bottom: 10px;">ข้อมูลลูกค้า</a>
    <a href="{{ url('admin/info/order') }}" class="button is-info is-medium" style="width: 100%; margin-bottom: 10px;">รายงานการสั่งซื้อ</a>
  </div>

</div>

<script type="text/javascript">

  $(document).ready(function() {

    $('#list_product').hide();

    $('#btn_product').click(function() {
      $('#list_product').fadeIn();
    });

  });

</script>
