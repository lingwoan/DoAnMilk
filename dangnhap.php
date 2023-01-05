<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('ketnoi.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    $password = ($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = $db->query("SELECT username, password FROM member WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    if ($username == "nvkho") 
        header("Location: ./kho/index.html");
    else if ($username == "nvnhansu") 
        header("Location: ./nhansu/index.html");
    else if ($username == "nvketoan") 
        header("Location: ./ketoan/index.html");
    else if ($username == "admin") 
        header("Location: ./index.html");
    else
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='./trangchu.php'>Về trang chủ</a>";
    die();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="assets/css/dangky.css">
    </head>
    <style>
        .lon{
    margin-top: -22px;
    height: 100%;
    background-image: url("img/suahp.png");
}
    </style>
    <body>
    <div class="lon">
        <div class="tieude">
            <h1>Trang đăng Nhập thành viên</h1>
        </div>
        <div class="nho">
            <form action='dangnhap.php?do=login' method='POST'>
        <div class=".form-item">
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input class="w-15" type='text' name='txtUsername' />
                    </td>
                </tr>
        </div>
        <div class=".form-item">
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input class="w-15" type='password' name='txtPassword' />
                    </td>
        </tr>
        </div>
            </div>
            <div class="nut">
            <input  type='submit' name="dangnhap" value='Đăng nhập' />
            <input type="button"  name="dangky" value='Đăng Ký' onclick="location.replace('dangky.php')" />
            </div>
        </form>
    </div>
    </body>
</html>