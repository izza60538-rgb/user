<?php
$users = file_exists("users.txt") ? file("users.txt") : [];
?>

<!DOCTYPE html>
<html>
<head>
<title>Users Management</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f4f4;
    padding:30px;
}

.container{
    width:80%;
    margin:auto;
    background:#fff;
    padding:20px;
    border-radius:10px;
}

.header{
    display:flex;
    justify-content:space-between;
    margin-bottom:20px;
}

.btn{
    padding:10px 15px;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.add-btn{
    background:green;
}

.edit-btn{
    background:orange;
}

.delete-btn{
    background:red;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
}

th{
    background:#007bff;
    color:white;
}
</style>
</head>
<body>

<div class="container">

<div class="header">
    <h2>Users</h2>
    <a href="create.php" class="btn add-btn">Add User</a>
</div>

<table>
<tr>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php foreach($users as $index => $user):
$data = explode("|", trim($user));
?>

<tr>
    <td><?= $data[0] ?></td>
    <td><?= $data[1] ?></td>
    <td><?= $data[2] ?></td>

    <td>
        <a href="edit.php?id=<?= $index ?>" class="btn edit-btn">
            Edit
        </a>

        <a href="delete.php?id=<?= $index ?>"
           class="btn delete-btn"
           onclick="return confirm('Delete User?')">
           Delete
        </a>
    </td>
</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>