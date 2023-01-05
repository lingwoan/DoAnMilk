<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_suahd.css">
    <title>Sửa Hoá Đơn</title>
</head>

<body>
<?php
    include '../hoadon/ketnoihd.php';
    $sql_up = "SELECT * FROM dshd where mahd='{$_GET['id']}'";
    $query_up = mysqli_query($db,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST["edited"])) {
        $sql = "UPDATE dshd SET `namehd`='{$_POST['namehd']}',`soluong`={$_POST['soluong']},`namekh`='{$_POST['namekh']}',`sdt`='{$_POST['sdt']}',`diachi`='{$_POST['diachi']}',`tong`='{$_POST['tong']}' WHERE `mahd`='{$_GET['id']}'";
        if ($db->query($sql) === TRUE) {
            $alert = "Sửa sản phẩm thành công";
            $alert_type = "success";
            header("Location: ./dshd.php");
        }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Hoá Đơn</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Tên Hoá Đơn</label>
                    <input type="text" name="namehd" class="form-control" required value="<?php echo $row_up['namehd'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mã Hoá Đơn</label>
                    <input type="text" name="mahd" class="form-control" required value="<?php echo $row_up['mahd'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" required value="<?php echo $row_up['soluong'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Tên Khách Hàng</label>
                    <input type="text" name="namekh" class="form-control" required value="<?php echo $row_up['namekh'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">SDT</label>
                    <input type="text" name="sdt" class="form-control" required value="<?php echo $row_up['sdt'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Địa Chỉ</label>
                    <input type="text" name="diachi" class="form-control" required value="<?php echo $row_up['diachi'] ?>" >
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Tổng Tiền</label>
                    <input type="text" name="tong" class="form-control" required value="<?php echo $row_up['tong'] ?>" >
                </div>

                <button name="edited" class="btn btn-success" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>