<?php
require 'koneksi.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    if(mysqli_num_rows($result) == 1){
        header("Location:a.php");
    }
    
    else{
        echo "<script>
                alert('Masukkan Username Dan Password Yang benar');
              </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<p id="out"></p>
<h1>Halaman Login</h1>

<form action="" method="post">
    <div>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit" name="login" onclick="a()">Sign In</button>
    </div>
</form>
    
</body>
</html>