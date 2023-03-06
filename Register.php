<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Yourself</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <?php
        $showAlert = false;
        $showError = false;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            include'dbcon.php';
            $name = $_POST["fname"];
            $date = $_POST["date"];
            $number = $_POST["number"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            $exists=false;
            if($password == $cpassword && $exists==false){
                $sql = "INSERT INTO `users` (`Name`, `Email`, `Phone Number`, `Date of Birth`, `Password`) VALUES ('$name', '$username', '$number', '$date', '$password');";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert = true;
                }
            }
            else{
                $showError = "<script>alert('Password do not match');</script>";
            }
        }
    ?>
        <form action="Register.php" method="post">
                <h1>
                    Register Here!
                </h1>
                <?php
                    if($showAlert){
                        echo "<script>alert('Your accouct is Created Successfully');</script>";
                    }
                    if($showError){
                        echo ''.$showError.'';
                    }
                ?>
                <table>
                    <tr class="input-name">
                        <td>
                            <label>First Name</label>
                            <input type="text" name="fname">
                        </td>
                        <td>
                            <label>Last Name</label>
                            <input type="text" name="lname">
                        </td>
                    </tr>
                </table>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="username">
                    </div>
                    <div class="input-group">
                        <label>Phone Number</label>
                        <input type="number" name="number">
                    </div>
                    <div class="input-group">
                        <label>Date of Birth</label>
                        <input type="date" name="date">
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="input-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="register">Register Now</button>
                        <a href="AdminPanel.php">Go Back</a>
                       
                    </div>
        </form>
</body>
</html>