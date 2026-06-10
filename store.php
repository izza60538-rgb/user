<?php

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$data = $name . "|" . $age . "|" . $email . PHP_EOL;

file_put_contents(
    "users.txt",
    $data,
    FILE_APPEND
);

header("Location:index.php");
exit();