<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_themsp.css">
    <title>Thêm Sản Phẩm</title>
</head>

<body>
<?php
    include '../sanpham/ketnoisp.php';
    $sanpham = "SELECT * FROM dssp";
    $sql = mysqli_query($db, $sanpham);

    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $masp = $_POST['masp'];
        $soluong = $_POST['soluong'];
        $gia = $_POST['gia'];
        $nsx = $_POST['nsx'];
        $hsd = $_POST['hsd'];

        $sql = "INSERT INTO dssp (name,image,masp,soluong,gia,nsx,hsd) VALUES ('{$_POST['name']}','{$image}','{$_POST['masp']}','{$_POST['soluong']}','{$_POST['gia']}','{$_POST['nsx']}','{$_POST['hsd']}')";
        $query = mysqli_query($db, $sanpham);
        move_uploaded_file($image_tmp,"../img/{$image}");
            if ($db->query($sql) === TRUE) {
                $alert = "Thêm sản phẩm thành công";
                $alert_type = "success";
                header('location: dssp.php?page_layout=dssp');
            }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mã sản phẩm</label>
                    <input type="text" name="masp" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Giá</label>
                    <input type="number" name="gia" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">NSX</label>
                    <input type="text" name="nsx" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">HSD</label>
                    <input type="text" name="hsd" class="form-control" required>
                </div>
                <button name="submit" class="btn btn-success" type="submit">THÊM</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>