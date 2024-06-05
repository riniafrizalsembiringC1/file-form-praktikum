<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == "admin" && $password == "password") {
        echo "Login berhasil! Selamat datang, " . htmlspecialchars($username) . ".";
    } else {
        echo "Username atau password salah.";
    }
}
?>
