<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql = "UPDATE users
        SET name='$name',
            age='$age',
            email='$email'
        WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: index.php");
    exit();
}
else{
    echo "Error: " . mysqli_error($conn);
}
?>