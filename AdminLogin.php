<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Register.css">
    <title>Admin Login</title>
</head>
<body>
    <?php
        include("dbcon.php");
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $myusername = mysqli_real_escape_string($conn,$_POST['username']);
            $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
            $sql = "SELECT * FROM admin WHERE Email = '$myusername' and Password = '$mypassword'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
                $_SESSION['login_admin'] = $myusername;
                header("location: AdminPanel.php");
            }else {
                echo  'Invalid Email or Password.';
            }
        }
    ?>
    <form action="AdminLogin.php" method="POST">
        <h1>
            Admin Login!
        </h1>
        <div class="input-group">
            <label>Email</label>
            <input type="text" id="username" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</body>
</html>