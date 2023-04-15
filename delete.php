<?php

include("connection.php");
if(isset($_GET["deleted"])){
    $id = $_GET["deleted"];
    $query = "delete from crud where id='$id'";
    try {
        $resut = mysqli_query($conn, $query);
        header("location: display.php");
    }catch(mysqli_sql_exception){
        echo "error has occured";
    }
}