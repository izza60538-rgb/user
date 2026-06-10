<?php

$id = $_GET['id'];

$users = file("users.txt");

unset($users[$id]);

file_put_contents(
    "users.txt",
    implode("", $users)
);

header("Location:index.php");
exit();