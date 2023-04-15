<?php
    $db_server = "localhost:3307";
    $db_name="crud_operation";
    $db_user = "root";
    $db_pass = "";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch(mysqli_sql_exception){
        echo "couldn't connected to the database";
    }