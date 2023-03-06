<?php

    include('dbcon.php');
    $e = $_GET['del'];
    $sql = "DELETE FROM `users` WHERE name='$e'";
    $r = mysqli_query($conn,$sql);
    if ($r==true) {
        header('location:Delete.php');
    }

?>