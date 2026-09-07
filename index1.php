<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip1";

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection to this db failed due to " . mysqli_connect_error());
    }
    echo "Success connecting to db";

    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $gender = $_POST['gender'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $other  = $_POST['desc'];

    $sql = "INSERT INTO `trip` (`age`, `gender`, `email`, `phone`, `other`, `dt`, `name`) 
            VALUES ('$age', '$gender', '$email', '$phone', '$other', current_timestamp(), '$name')";

    echo $sql;

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
?>