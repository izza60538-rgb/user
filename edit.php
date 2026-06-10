<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>

    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
            padding:30px;
        }

        .container{
            width:400px;
            margin:auto;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        button{
            background:orange;
            color:white;
            border:none;
            padding:10px;
            width:100%;
            cursor:pointer;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Edit User</h2>

    <form action="update.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= $user['id']; ?>">

        <input
            type="text"
            name="name"
            value="<?= $user['name']; ?>"
            required>

        <input
            type="number"
            name="age"
            value="<?= $user['age']; ?>"
            required>

        <input
            type="email"
            name="email"
            value="<?= $user['email']; ?>"
            required>

        <button type="submit">
            Update User
        </button>

    </form>

</div>

</body>
</html>