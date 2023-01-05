<?php
require_once(realpath(dirname(__FILE__) . '/../sanpham/ketnoisp.php'));
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

  <title>Danh Sách Sản Phẩm </title>
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
        <h1>DANH SÁCH SẢN PHẨM</h1>
      </div>
      <div class="container-fluid px-0">
        <div class="container text-center py-5">
          <div class="row">
            <div class="col">
              Tên Sản Phẩm
            </div>
            <div class="col">
              Ảnh sản phẩm
            </div>
            <div class="col">
              Mã sản phẩm
            </div>
            <div class="col">
              Số lượng
            </div>
            <div class="col">
              Giá
            </div>
            <div class="col">
              Ngày sản xuất
            </div>
            <div class="col">
              hạn sử dụng
            </div>
            <div class="col">
              Xoá
            </div>
            <div class="col">
              Sửa
            </div>
          </div>
          <?php
          include 'ketnoisp.php';
          $sanpham = "SELECT * FROM dssp";
          $sql = mysqli_query($db, $sanpham);
          while ($row = mysqli_fetch_array($sql)) {
          ?>
            <div class="row item">
              <div class="col"><?= $row["name"] ?></div>
              <div class="col">
                <img style="width:100px" class="col-img" src="../img/<?= $row['image']; ?>">
              </div>
              <div class="col"><?= $row["masp"] ?></div>
              <div class="col"><?= $row["Soluong"] ?></div>
              <div class="col"><?= $row["gia"] ?></div>
              <div class="col"><?= $row["nsx"] ?></div>
              <div class="col"><?= $row["hsd"] ?></div>
              <div class="col">
                <a href="./xoasp.php?page_layout=dssp&id=<?php echo $row['masp'] ?>">Xoá</a>
              </div>
              <div class="col">
                <a href="./suasp.php?page_layout=dssp&id=<?php echo $row['masp'] ?>">Sửa</a>
              </div>
            </div>
          <?php } ?>
        </div>
        <a class="btn btn-primary" href="./themsp.php">Thêm Mới</a>
      </div>
    </div>
  </div>
</body>

</html>