<?php
require_once(realpath(dirname(__FILE__) . '/../size/ketnoisize.php'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./../assets/css/style_dssp.css">
  <link rel="stylesheet" href="./../index.css">

  <title>Danh Sách Size </title>
</head>

<body>
  <div class="main">
    <div class="menu">
      <h2 id="logo">LOGO</h2>
      <div class="menu-item">
        <a href="./../index.html">Trang Chủ</a>
        <a href="./../sanpham/dssp.php">Sản Phẩm</a>
        <a href="./../hoadon/dshd.php">Hoá Đơn</a>
        <a href="./../user/dsus.php">Người Dùng</a>
        <a href="./../size/dssize.php">Size</a>
        <a href="./../logout.php">Logout</a>
      </div>
    </div>
    <div class="container-all">
      <div class="tuade no-margin">
        <h1>DANH SÁCH SIZE</h1>
      </div>
      <div class="container-fluid px-0">
        <div class="container text-center py-5">
          <div class="row">
            <div class="col">
              Mã size
            </div>
            <div class="col">
              Tên Size
            </div>
            <div class="col">
              Xoá
            </div>
            <div class="col">
              Sửa
            </div>
          </div>
          <?php
          include 'ketnoisize.php';
          $sanpham = "SELECT * FROM size";
          $sql = mysqli_query($db, $sanpham);
          while ($row = mysqli_fetch_array($sql)) {
          ?>
            <div class="row item">
              <div class="col"><?= $row["masize"] ?></div>
              <div class="col"><?= $row["tensize"] ?></div>
              <div class="col">
                <a href="./xoasize.php?page_layout=dssize&id=<?php echo $row['masize'] ?>">Xoá</a>
              </div>
              <div class="col">
                <a href="./suasize.php?page_layout=dssize&id=<?php echo $row['masize'] ?>">Sửa</a>
              </div>
            </div>
          <?php } ?>
        </div>
        <a class="btn btn-primary" href="./themsize.php">Thêm Mới</a>
      </div>
    </div>
  </div>
</body>

</html>