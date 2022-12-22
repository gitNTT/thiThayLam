<?php include("view/top.php"); ?>
<br><br><br>
<style>
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #050505;
    background-color: #ffffff;
  }

  /* footer {
        background-color: #000000;
        color: #f5f5f5;
        padding: 32px;
        position: absolute;
        width: 1600px;
        margin: auto;
        bottom: 0;
    } */
</style>
<div class="container">
  <div class="row">
    <!-- Hàng nổi bật -->
    <h3>Giỏ hàng của bạn</h3>
    <?php
    if (demhangtronggio() == 0) :
      echo "<p>Không có sản phẩm nào trong giỏ hàng.</p>";
    else :
    ?>

      <form method="post">
        <input type="hidden" name="action" value="capnhatgiohang">
        <table class="table table-hover">
          <tr class="info">
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
          </tr>
          <?php foreach ($giohang as $mahang => $mh) : ?>
            <tr>
              <td><?php echo $mh["tenhang"]; ?></td>
              <td><?php echo number_format($mh["giaban"]) . " VNĐ"; ?></td>
              <td><input type="number" size="3" name="mh[<?php echo $mahang; ?>]" value="<?php echo $mh["soluong"]; ?>">

              </td>
              <td><?php echo number_format($mh["sotien"]) . " VNĐ"; ?></td>
            </tr>
          <?php endforeach; ?>
          <tr>
            <td colspan="3" align="right"><b>Tổng tiền</b></td>
            <td><b><?php echo number_format(tinhtiengiohang()); ?> VNĐ</b></td>
            

          </tr>
          <tr>
            <td colspan="2" align="left"><i>Để xóa một sản phẩm nhập số lượng = 0</i> |
              <a href="?action=xoagiohang">Xóa tất cả</a>
            </td>
            <td colspan="2" align="right">
              <input class="btn btn-info" type="submit" value="Cập nhật">
              <a class="btn btn-danger" href="index.php?action=datmua">Đặt mua</a>
            </td>
          </tr>
        </table>
      </form>
    <?php endif; ?>


  </div>
</div>
<?php include("view/bottom.php"); ?>