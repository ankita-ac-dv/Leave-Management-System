<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <nav class="navbar shadow navbar-expand-sm navbar-light bg-primary p-3">
      <a href="#" class="navbar-brand ms-3">Admin Panel</a>
        <ul class="navbar-nav ms-auto">
          <a href="AdminPanel.php"><button type="button" class="btn btn-info">Home</button></a>
        </ul>
      <hr>
    </nav>
    <?php
    include 'AdminSession.php';
      $sql = "SELECT * FROM users";
      $r = mysqli_query($conn,$sql);
    ?>
    <table class="container mt-3 shadow table table-light table-danger bg-primary table-bordered">
      <thead>
        <tr>
          <th scope="col">Employee Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Date Of Birth</th>
          <th scope="col">Password</th>
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
              <td><?php echo $row['Date of Birth'];?></td>
              <td><?php echo $row['Password'];?></td>
          </tr>
      <?php
          }
          ?>
      </tbody>

    </table>

  </body>
</html>
