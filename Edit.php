<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Edit Employee</title>
</head>
<body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <?php
        include 'AdminSession.php';
    ?>
    <nav class="navbar shadow navbar-expand-sm navbar-light bg-primary p-3">
      <a href="#" class="navbar-brand ms-3">Admin Panel</a>
        <ul class="navbar-nav ms-auto">
          <a href="AdminPanel.php"><button type="button" class="btn btn-info">Home</button></a>
        </ul>
      <hr>
    </nav>
    

    <?php
      $sql = "SELECT * FROM users";
      $r = mysqli_query($conn,$sql);
    ?>
    <table class="container mt-3 shadow table table-light table-danger bg-primary table-bordered">
      <thead>
        <tr>
          <th scope="col">Employee Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row=mysqli_fetch_assoc($r))
          {
          ?>
          <tr>
              <td><?php echo $row['Name'];?></td>
              <td><?php echo $row['Email'];?></td>
              <td><?php echo $row['Phone Number'];?></td>
              <td><a href="UpdateProfile.php?upd=<?php echo $row['Email'];?>" ><button type="button" class="btn btn-success">Update</button></a></td>
          </tr>
      <?php
          }
          ?>
      </tbody>

    </table>
</body>
</html>