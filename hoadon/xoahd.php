<?php
    include '../hoadon/ketnoihd.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM dshd where mahd='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoihd/{$_POST['delete']}.png");
        $alert = "Xoá sản phẩm thành công";
        $alert_type = "success";
        header('location: dshd.php?page_layout=dshd');
    }
?>