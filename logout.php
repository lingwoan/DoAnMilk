<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
}
?>
<?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
           echo 'Click vào đây để <a href="logout.php">Logout</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập';
           echo '<br><a href="./dangnhap.php">Đăng nhập</a>';
       }
?>