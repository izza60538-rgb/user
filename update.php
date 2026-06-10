$sql = "UPDATE users
        SET name='$name',
            age='$age',
            email='$email'
        WHERE id=$id";

mysqli_query($conn, $sql);