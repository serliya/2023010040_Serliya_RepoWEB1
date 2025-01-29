<?php
session_start();
include "../koneksi.php"; // Include file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // Query untuk memeriksa username, password, dan role
    $sql = "SELECT * FROM users WHERE username = '$username' AND role = '$role'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Simpan data pengguna ke session
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect berdasarkan role
            if ($role == 'admin') {
                header("Location: ../admin_dashboard.php");
            } else {
                header("Location: home.html");
            }
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Username atau role tidak ditemukan.";
    }
}
?>
