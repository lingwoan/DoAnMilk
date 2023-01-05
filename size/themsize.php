<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_themsp.css">
    <title>Thêm Size</title>
</head>

<body>
<?php
    include '../size/ketnoisize.php';
    $sanpham = "SELECT * FROM dssize";
    $sql = mysqli_query($db, $sanpham);

    if(isset($_POST['submit'])){

        $masp = $_POST['masize'];
        $soluong = $_POST['tensize'];

        $sql = "INSERT INTO size (masize,tensize) VALUES ('{$_POST['masize']}','{$_POST['tensize']}')";
        $query = mysqli_query($db, $sanpham);
            if ($db->query($sql) === TRUE) {
                $alert = "Thêm size thành công";
                $alert_type = "success";
                header('location: dssize.php?page_layout=dssize');
            }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Size</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Mã sản phẩm</label>
                    <input type="text" name="masize" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Tên size</label>
                    <input type="text" name="tensize" class="form-control" required>
                </div>

                <button name="submit" class="btn btn-success" type="submit">THÊM</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>