<?php

$id = $_POST['id'];

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$users = file("users.txt");

$users[$id] =
$name . "|" .
$age . "|" .
$email . PHP_EOL;

file_put_contents(
    "users.txt",
    implode("", $users)
);

header("Location:index.php");
exit();