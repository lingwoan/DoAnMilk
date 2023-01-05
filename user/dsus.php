<?php
require_once(realpath(dirname(__FILE__) . '/../user/ketnoius.php'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./../assets/css/style_dsus.css">
  <link rel="stylesheet" href="./../index.css">

  <title>Danh Sách Người Dùng </title>
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
        <h1>DANH SÁCH USER</h1>
      </div>
      <div class="container-fluid px-0">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              Tên User
            </div>
            <div class="col">
              Mã User
            </div>
            <div class="col">
              Mật Khẩu
            </div>
            <div class="col">
              email
            </div>
            <div class="col">
              Tên Đầy Đủ
            </div>
            <div class="col">
              Ngày Sinh
            </div>
            <div class="col">
              Giới Tính
            </div>
            <div class="col">
              Xoá
            </div>
            <div class="col">
              Sửa
            </div>
          </div>
          <?php
          include 'ketnoius.php';
          $dangky = "SELECT * FROM member";
          $result = mysqli_query($db,$dangky);
          while($row = mysqli_fetch_array($result)) {
          ?>
            <div class="row item">
              <div class="col"><?= $row["username"] ?></div>
              <div class="col"><?= $row["maus"] ?></div>
              <div class="col"><?= $row["password"] ?></div>
              <div class="col"><?= $row["email"] ?></div>
              <div class="col"><?= $row["fullname"] ?></div>
              <div class="col"><?= $row["birthday"] ?></div>
              <div class="col"><?= $row["sex"] ?></div>
              <div class="col">
                <a href="./xoaus.php?page_layout=dsus&id=<?php echo $row['maus'] ?>">Xoá</a>
              </div>
              <div class="col">
                <a href="./suaus.php?page_layout=dsus&id=<?php echo $row['maus'] ?>">Sửa</a>
              </div>
            </div>
          <?php } ?>
        </div>
        <a class="btn btn-primary" href="./themus.php">Thêm Mới</a>
      </div>
    </div>
  </div>
</body>

</html>