<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Yourself</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <?php
                include('AdminSession.php');
                $a = $_GET['upd'];
                $sql = "SELECT * FROM users WHERE name='$a'";
                $r=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($r);
    ?>
        <form action="upde.php" method="post">
                <h1>
                    Update Here!
                </h1>
                <table>
                    <tr class="input-name">
                        <td>
                            <label>First Name</label>
                            <input type="text" name="fname">
                        </td>
                        <td>
                            <label>Last Name</label>
                            <input type="text">
                        </td>
                    </tr>
                </table>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="username">
                    </div>
                    <div class="input-group">
                        <label>Phone Number</label>
                        <input type="number" name="phone">
                    </div>
                    <div class="input-group">
                        <label>Date of Birth</label>
                        <input type="date" name="date">
                    </div>
                    <div class="input-group mt-4">
                        <button type="submit" name="ok">Update</button>
                        <a href="AdminPanel.php">Go Back</a>
                    </div>
        </form>
</body>
</html>