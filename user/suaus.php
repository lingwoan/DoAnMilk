<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_suasp.css">
    <title>Sửa User</title>
</head>

<body>
<?php
    include '../user/ketnoius.php';
    $sql_up = "SELECT * FROM member where maus='{$_GET['id']}'";
    $query_up = mysqli_query($db,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST["edited"])) {
        $sql = "UPDATE member SET username='{$_POST['username']}',maus='{$_POST['maus']}',password='{$_POST['password']}',email='{$_POST['email']}',fullname='{$_POST['fullname']}',birthday='{$_POST['birthday']}',sex='{$_POST['sex']}' WHERE maus='{$_GET['id']}'";
        if ($db->query($sql) === TRUE) {
            $alert = "Sửa User thành công";
            $alert_type = "success";
            header("Location: ./dsus.php");
        }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa User</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Tên User</label>
                    <input type="text" name="username" class="form-control" required value="<?php echo $row_up['username'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mã User</label>
                    <input type="text" name="maus" class="form-control" required value="<?php echo $row_up['maus'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mật Khẩu</label>
                    <input type="text" name="password" class="form-control" required value="<?php echo $row_up['password'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Email</label>
                    <input type="text" name="email" class="form-control" required value="<?php echo $row_up['email'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">fullname</label>
                    <input type="text" name="fullname" class="form-control" required value="<?php echo $row_up['fullname'] ?>">
                </div>

                <div class="form-item">
                    <label class="w-15" for="">birthday</label>
                    <input type="text" name="birthday" class="form-control" required value="<?php echo $row_up['birthday'] ?>" >
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Giới Tính</label>
                    <input type="text" name="sex" class="form-control" required value="<?php echo $row_up['sex'] ?>" >
                </div>

                <button name="edited" class="btn btn-success" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>