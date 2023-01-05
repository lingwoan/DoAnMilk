<?php
    include '../nhansu/ketnoiuser.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM member where maus='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoius/{$_POST['delete']}.png");
        $alert = "Xoá user thành công";
        $alert_type = "success";
        header('location: dsuser.php?page_layout=dsuser');
    }
?>