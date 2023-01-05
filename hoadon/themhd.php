<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_themhd.css">
    <title>Thêm Hoá Đơn</title>
</head>

<body>
<?php
    include '../hoadon/ketnoihd.php';
    $sanpham = "SELECT * FROM dshd";
    $sql = mysqli_query($db, $sanpham);

    if(isset($_POST['submit'])){
        $name = $_POST['namehd'];

        $masp = $_POST['mahd'];
        $soluong = $_POST['soluong'];
        $gia = $_POST['namekh'];
        $nsx = $_POST['sdt'];
        $hsd = $_POST['diachi'];
        $tong = $_POST['tong'];

        
        $sql = "INSERT INTO dshd (namehd,mahd,soluong,namekh,sdt,diachi,tong) VALUES ('{$_POST['namehd']}','{$_POST['mahd']}',{$_POST['soluong']},'{$_POST['namekh']}',{$_POST['sdt']},'{$_POST['diachi']}',{$_POST['tong']})";
        $query = mysqli_query($db, $sanpham);
            if ($db->query($sql) === TRUE) {
                $alert = "Thêm sản phẩm thành công";
                $alert_type = "success";
                header('location: dshd.php?page_layout=dshd');
            }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Hoá Đơn</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Tên Hoá Đơn</label>
                    <input type="text" name="namehd" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mã Hoá Đơn</label>
                    <input type="text" name="mahd" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Tên Khách Hàng</label>
                    <input type="text" name="namekh" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Sđt</label>
                    <input type="text" name="sdt" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Địa Chỉ</label>
                    <input type="text" name="diachi" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Tổng Tiền</label>
                    <input type="number" name="tong" class="form-control" required>
                </div>

                <button name="submit" class="btn btn-success" type="submit">THÊM</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>