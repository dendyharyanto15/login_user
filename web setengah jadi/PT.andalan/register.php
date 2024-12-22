<?php 
include "service/database.php";
session_start();

$register_massage = "";

if(isset($_SESSION["is_login"])) {
    header("location: login.php");
}

if(isset($_POST["register"])) {
    $username = $_POST["username"];
    $password =$_POST["password"];

    try {
        $sql = "INSERT INTO pelanggan (username, password) VALUES
    ('$username', '$password')";

    if($db->query($sql)) {
        $register_massage = "Daftar Akun Berhasil";
    }else {
        $register_massage = "Daftar Akun Gagal, Coba Lagi";
    }
    }catch(mysqli_sql_exception) {
        $register_massage ="username sudah digunakan" ;

    }
    
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Daftar Akun</h1>
    <i><?= $register_massage ?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">daftar sekarang</button>
    </form>

</body>
</html>