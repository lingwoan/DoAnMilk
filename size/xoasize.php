<?php
    include '../sanpham/ketnoisp.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM size where masize='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoisize/{$_POST['delete']}.png");
        $alert = "Xoá size thành công";
        $alert_type = "success";
        header('location: dssize.php?page_layout=dssize');
    }
?>