<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_suasp.css">
    <title>Kho Sửa Sản Phẩm</title>
</head>

<body>
<?php
    include '../kho/ketnoispkho.php';
    $sql_up = "SELECT * FROM dssp where masp='{$_GET['id']}'";
    $query_up = mysqli_query($db,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST["edited"])) {
        $sql = "UPDATE dssp SET name='{$_POST['name']}',Soluong={$_POST['soluong']},gia={$_POST['gia']},nsx='{$_POST['nsx']}',hsd='{$_POST['hsd']}' WHERE masp='{$_GET['id']}'";
        if ($db->query($sql) === TRUE) {
            $alert = "Sửa sản phẩm thành công";
            $alert_type = "success";
            header("Location: ./dskho.php");
        }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $row_up['name'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Ảnh sản phẩm</label>
                    <img src="../img/<?=$row_up['image']?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mã sản phẩm</label>
                    <input type="text" name="masp" class="form-control" required value="<?php echo $row_up['masp'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" required value="<?php echo $row_up['Soluong'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Giá</label>
                    <input type="number" name="gia" class="form-control" required value="<?php echo $row_up['gia'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">NSX</label>
                    <input type="text" name="nsx" class="form-control" required value="<?php echo $row_up['nsx'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">HSD</label>
                    <input type="text" name="hsd" class="form-control" required value="<?php echo $row_up['hsd'] ?>" >
                </div>

                <button name="edited" class="btn btn-success" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>