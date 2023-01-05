<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang đăng lý</title>
    </head>
    <style>
        .form-group{
    width:70%;
    margin:auto;
    color: #8B008B;
    font-size: 20px;
}
.form-item{
    padding:15px;
    display: flex; 
}
.w-15{
    margin-bottom: 20px;
    margin-top: 15px;
}
.tieude h1{
    text-align: center;
}
.lon{
    margin-top: -22px;
    height: 100%;
    background-image: url("img/suahp.png");
}
.nho{
    margin-left: 440px;
    background-color: #ffffff;
    opacity: 0.6;
    height: calc(100vh - 119.8px);
    width: calc(100vh - 128.8px);
    border: 2px solid #ffffff;
    border-radius: 12px;
    padding: 5px;
}
    </style>
    <body>
<div class="lon">
        <div class="tieude">
        <h1>Trang đăng ký thành viên</h1>
        </div>
        <div class="nho">
        <form action="xuly.php" method="POST" class="form-group">
            <div class=".form-item">
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input class="w-15" type="text" name="txtUsername" size="50" />
                    </td>
                </tr>
            </div>
            <div class=".form-item">
                <tr>
                    <td>
                        Mã Đăng Nhập : 
                    </td>
                    <td>
                        <input class="w-15" type="text" name="txtmaus" size="50" />
                    </td>
                </tr>
            </div>
            <div class=".form-item">
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input class="w-15" type="password" name="txtPassword" size="50" />
                    </td>
                </tr>
            </div>
            <div class=".form-item">
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input class="w-15" type="text" name="txtEmail" size="50" />
                    </td>
                </tr>
            </div>
            <div class=".form-item">
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input class="w-15" type="text" name="txtFullname" size="50" />
                    </td>
                </tr>
            </div>
            <div class=".form-item">
                <tr>
                    <td>
                        Ngày sinh :
                    </td>
                    <td>
                        <input class="w-15" type="text" name="txtBirthday" size="50" />
                    </td>
                </tr>
            </div>
            <div class=".form-item">
                <tr>
                    <td>
                        Giới tính :
                    </td>
                    <td>
                        <select name="txtSex">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </td>
                </tr>
            </div>
            </div>
            <input style="margin-left:650px" type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
            <input type="submit" value="Đăng nhập" name="login"/>

        </form>
</div>
    </body>
</html>