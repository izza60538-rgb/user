<?php

$id = $_GET['id'];

$users = file("users.txt");

$data = explode("|", trim($users[$id]));

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form action="update.php" method="POST">

<input
type="hidden"
name="id"
value="<?= $id ?>">

<input
type="text"
name="name"
value="<?= $data[0] ?>"
required>

<input
type="number"
name="age"
value="<?= $data[1] ?>"
required>

<input
type="email"
name="email"
value="<?= $data[2] ?>"
required>

<button type="submit">
Update User
</button>

</form>

</body>
</html>