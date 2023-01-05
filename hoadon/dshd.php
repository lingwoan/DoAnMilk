<?php
    require_once(realpath(dirname(__FILE__) . '/../hoadon/ketnoihd.php'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./../assets/css/style_dshd.css">
    <link rel="stylesheet" href="./../index.css">
    
    <title>Danh Sách Hoá Đơn</title>
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
          <h1>DANH SÁCH HOÁ ĐƠN</h1>
      </div>
      <div class="container-fluid px-0">
        <div class="container text-center py-5">
          <div class="row">
            <div class="col">
              Tên Hoá Đơn 
            </div>
            <div class="col">
              Mã Hoá Đơn
            </div>
            <div class="col">
              Số Lượng
            </div>
            <div class="col">
              Tên Khách Hàng
            </div>
            <div class="col">
              Số Điện Thoại
            </div>
            <div class="col">
              Địa Chỉ
            </div>
            <div class="col">
              Tổng
            </div>
            <div class="col">
              Xoá
            </div>
            <div class="col">
              Sửa
            </div>
          </div>
<?php 
    include 'ketnoihd.php';
    $sanpham = "SELECT * FROM dshd";
    $sql = mysqli_query($db, $sanpham);
    while($row = mysqli_fetch_array($sql)){
  ?>
    <div class="row item">
      <div class="col"><?=$row["namehd"]?></div>
      <div class="col"><?=$row["mahd"]?></div>
      <div class="col"><?=$row["soluong"]?></div>
      <div class="col"><?=$row["namekh"]?></div>
      <div class="col"><?=$row["sdt"]?></div>
      <div class="col"><?=$row["diachi"]?></div>
      <div class="col"><?=$row["tong"]?></div>
      <div class="col">
        <a href="./xoahd.php?page_layout=dshd&id=<?php echo $row['mahd']?>">Xoá</a>
      </div>
      <div class="col">
        <a href="./suahd.php?page_layout=dshd&id=<?php echo $row['mahd']?>">Sửa</a>
      </div>
    </div>
    <?php } ?>
    </div>
      <a class="btn btn-primary" href="./themhd.php">Thêm Mới</a>
    </div>
    </div>
  </div>
</body>
</html>