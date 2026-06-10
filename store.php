<?php

include 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO users(name, age, email)
        VALUES('$name','$age','$email')";

mysqli_query($conn, $sql);

header("Location: index.php");
exit();