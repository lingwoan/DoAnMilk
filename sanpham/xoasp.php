<?php
    include '../sanpham/ketnoisp.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM dssp where masp='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoisp/{$_POST['delete']}.png");
        $alert = "Xoá sản phẩm thành công";
        $alert_type = "success";
        header('location: dssp.php?page_layout=dssp');
    }
?>