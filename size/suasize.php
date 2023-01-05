<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_suasp.css">
    <title>Sửa Size</title>
</head>

<body>
<?php
    include '../size/ketnoisize.php';
    $sql_up = "SELECT * FROM size where masize='{$_GET['id']}'";
    $query_up = mysqli_query($db,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST["edited"])) {
        $sql = "UPDATE size SET tensize='{$_POST['tensize']}' WHERE masize='{$_GET['id']}'";
        if ($db->query($sql) === TRUE) {
            $alert = "Sửa size thành công";
            $alert_type = "success";
            header("Location: ./dssize.php");
        }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Size</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Mã sản phẩm</label>
                    <input type="text" name="masize" class="form-control" required value="<?php echo $row_up['masize'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Tên sản phẩm</label>
                    <input type="text" name="tensize" class="form-control" required value="<?php echo $row_up['tensize'] ?>">
                </div>

                <button name="edited" class="btn btn-success" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>