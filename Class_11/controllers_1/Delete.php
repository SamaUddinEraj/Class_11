<?php
$del_id = $_REQUEST['id'];
include './env.php';
    $query2 = "DELETE FROM datas WHERE id = '$del_id'";
    $result2 = mysqli_query($connect, $query2);
    header("Location:../list.php");
?>