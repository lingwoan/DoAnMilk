<?php
    include '../user/ketnoius.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM member where maus='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoius/{$_POST['delete']}.png");
        $alert = "Xoá user thành công";
        $alert_type = "success";
        header('location: dsus.php?page_layout=dsus');
    }
?>