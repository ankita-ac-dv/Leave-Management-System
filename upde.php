<?php

        if(isset($_POST['ok']))
        {
            include 'dbcon.php';
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $date = $_POST['date'];

            
            $sql = "UPDATE users SET phone ='$phone' WHERE Name ='$fname'";
            $r = mysqli_query($conn,$sql);
            if($r==true)
            {
                header('location:Edit.php');
               }

        }

    ?>