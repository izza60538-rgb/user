<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
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
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        .header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:20px;
        }

        h2{
            color:#333;
        }

        .btn{
            padding:10px 15px;
            border:none;
            border-radius:5px;
            cursor:pointer;
            color:white;
            text-decoration:none;
            display:inline-block;
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

        table, th, td{
            border:1px solid #ccc;
        }

        th, td{
            padding:12px;
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
        <h2>Users Management</h2>

        <a href="create.php" class="btn add-btn">
            Add User
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['age']; ?></td>
                <td><?= $row['email']; ?></td>

                <td>

                    <a
                        href="edit.php?id=<?= $row['id']; ?>"
                        class="btn edit-btn">
                        Edit
                    </a>

                    <a
                        href="delete.php?id=<?= $row['id']; ?>"
                        class="btn delete-btn"
                        onclick="return confirm('Are you sure to delete this user?')">
                        Delete
                    </a>

                </td>
            </tr>

        <?php } ?>

        </tbody>
    </table>

</div>

</body>
</html>