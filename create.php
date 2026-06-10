<!DOCTYPE html>
<html>
<head>
<title>Add User</title>

<style>
body{
    background:#f4f4f4;
    font-family:Arial;
    padding:30px;
}

.container{
    width:500px;
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
    padding:10px 15px;
    background:green;
    color:white;
    border:none;
}
</style>

</head>
<body>

<div class="container">

<h2>Add User</h2>

<form action="store.php" method="POST">

<input
type="text"
name="name"
placeholder="Enter Name"
required>

<input
type="number"
name="age"
placeholder="Enter Age"
required>

<input
type="email"
name="email"
placeholder="Enter Email"
required>

<button type="submit">
Save User
</button>

</form>

</div>

</body>
</html>