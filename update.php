<?php
    include("connection.php");
    $id = $_GET["updated"];
    $sql = "select * from crud where id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name=$row["name"];
    $email = $row["email"];
    $mobile= $row["mobile"];
    $password=$row["password"];


    if(isset($_POST["submit"])){
        $name    = $_POST["name"];
        $email   = $_POST["email"];
        $mobile  = $_POST["mobile"];
        $password= $_POST["password"];

        $query = "update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";

        try {
            mysqli_query($conn, $query);
            header("location: display.php");
        } catch(mysqli_sql_exception){
            die(mysqli_error($conn));
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name?>">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter Your Email" autocomplete="off" value="<?php echo $email?>">
            </div>
            <div class="form-group">
                <label >mobile</label>
                <input type="tel" class="form-control"  placeholder="Enter Your Mobiel Number" name="mobile" autocomplete="off" value="<?php echo $mobile?>">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control"  placeholder="Enter Your Password" name="password" autocomplete="off" value="<?php echo $password?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

  </body>
</html>