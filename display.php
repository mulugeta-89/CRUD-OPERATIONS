<?php
    include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud-operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
            <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

  <?php
    $query = "select * from `crud`";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $id     = $row["id"];
            $name   = $row["name"];
            $email  = $row["email"];
            $mobile = $row["mobile"];
            echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>
                        <button class="btn btn-primary"><a href="update.php?updated='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a  href="delete.php?deleted='.$id.'" class="text-light">Delete</a></button>
                    </td>
                    </tr>';
        }
    }
  ?>
        
</table>
    </div>
    

    
</body>
</html>