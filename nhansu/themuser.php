<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_themsp.css">
    <title>Thêm Người Dung</title>
</head>

<body>
<?php
    include '../nhansu/ketnoiuser.php';
    $dangky = "SELECT * FROM member";
    $sql = mysqli_query($db, $dangky);

    if(isset($_POST['submit'])){
        $username = $_POST['username'];

        $maus = $_POST['maus'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $bỉthday = $_POST['birthday'];
        $sex = $_POST['sex'];

        $sql = "INSERT INTO member (username,maus,password,email,fullname,birthday,sex) VALUES ('{$_POST['username']}','{$_POST['maus']}','{$_POST['password']}','{$_POST['email']}','{$_POST['fullname']}','{$_POST['birthday']}','{$_POST['sex']}')";
        $query = mysqli_query($db, $dangky);
            if ($db->query($sql) === TRUE) {
                $alert = "Thêm user thành công";
                $alert_type = "success";
                header('location: dsuser.php?page_layout=dsuser');
            }
    }
?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm User</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-item">
                    <label class="w-15" for="">Tên User</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mã user</label>
                    <input type="text" name="maus" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Mật Khẩu</label>
                    <input type="text" name="password" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Tên đầy đủ</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Ngày Sinh</label>
                    <input type="text" name="birthday" class="form-control" required>
                </div>

                <div class="form-item">
                    <label class="w-15" for="">Giới Tính</label>
                    <input type="text" name="sex" class="form-control" required>
                </div>
                <button name="submit" class="btn btn-success" type="submit">THÊM</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>