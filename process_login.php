<?php
// Ambil nilai dari form login
$email = $_POST['gmail'];
$password = $_POST['password'];

// Cek apakah email dan password sesuai dengan yang diinginkan
if ($email === "khairunorehan@gmail.com" && $password === "rehan2004") {
    // Jika sesuai, set session dan redirect ke halaman home
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: home.php");
    exit();
} else {
    // Jika tidak sesuai, kembali ke halaman login
    header("Location: login.php");
    exit();
}
?>
